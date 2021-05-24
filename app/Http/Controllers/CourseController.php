<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function index()
    {
        abort_if(!auth()->user(), 403, "You don't have permission to view this page.");
        if (auth()->user()->user_type == 'Admin')
            $courses = Course::all();
        else {
            $user = User::find(auth()->user()->id);
            $courses = $user->courses;
        }
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(!auth()->user()->user_type == 'Admin' || !auth()->user()->user_type == 'Teacher', 403, "You don't have permission to perform the operation.");

        $batches = Batch::all();
        $teachers = User::where('user_type', '=', 'Teacher');
        return view('courses.create', compact('batches', 'teachers'));
    }

    public function store()
    {
        abort_if(!auth()->user()->user_type == 'Admin' || !auth()->user()->user_type == 'Teacher', 403, "You don't have permission to perform the operation.");

        $data = request()->validate([
            'name' => ['required', 'string', 'max:60'],
            'description' => ['required', 'string', 'max:5000'],
            'batch_id' => ['required', 'numeric'],
            'course_code' => ['required', 'string', 'max:10', Rule::unique('courses', 'course_code')],
            'teacher' => ['numeric']
        ]);

        Course::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'batch_id' => $data['batch_id'],
            'course_code' => $data['course_code'],
            'teacher' => $data['teacher'] ?: auth()->user()->id
        ]);

        return redirect(route('batch.index'));
    }

    public function show(Course $course)
    {
        abort_if(!auth()->user()->user_type == 'Admin' || !auth()->user()->user_type == 'Teacher' || !$course->batch_id == auth()->user()->batch, 403, "You don't have permission to perform the operation.");

        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {

        abort_if(!auth()->user()->isAdmin() && !auth()->user()->is($course->teacher), 403, "You don't have permission to perform the operation.");
        $batches = Batch::all();
        $teachers = User::where('user_type', '=', 'Teacher');
        return view('courses.edit', ['course' => $course, 'batches' => $batches, 'teachers' => $teachers]);
    }

    public function update(Course $course)
    {
        abort_if(!auth()->user()->user_type == 'Admin' || !auth()->user()->is($course->teacher), 403, "You don't have permission to perform the operation.");

        $data = request()->validate([
            'name' => ['required', 'string', 'max:60'],
            'description' => ['required', 'string', 'max:5000'],
            'batch_id' => ['required', 'numeric'],
            'course_code' => ['required', 'string', 'max:10', Rule::unique('courses', 'course_code')],
            'teacher' => ['numeric']
        ]);

        $course->update($data);

        return redirect(route('course.index'));
    }

    public function destroy(Course $course)
    {
        abort_if(!auth()->user()->user_type == 'Admin' || !auth()->user()->is($course->teacher), 403, "You don't have permission to perform the operation.");

        $course->delete();

        return redirect(route('course.index'));
    }
}
