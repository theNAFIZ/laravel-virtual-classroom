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
        return view('courses.index');
    }

    public function create()
    {
        abort_if(!auth()->user()->isAdmin || !auth()->user()->isTeacher, 403, "You don't have permission to do the operation.");

        $batches = Batch::all();
        $teachers = User::where('user_type', '=', 'Teacher');
        return view('courses.create', compact('batches', 'teachers'));
    }

    public function store()
    {
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

    public function show()
    {
        return;
    }

    public function edit()
    {
        return;
    }

    public function update()
    {
        return;
    }

    public function destroy()
    {
        return;
    }
}
