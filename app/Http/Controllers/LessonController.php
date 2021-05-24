<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create(Course $course)
    {
        abort_if(!$course->teacher()->is(auth()->user()), 403, "You don't have permission to perform the operation.");

        return view('lessons.create');
    }

    public function store(Course $course)
    {
        abort_if(!$course->teacher()->is(auth()->user()), 403, "You don't have permission to perform the operation.");

        $data = request()->validate([
            'title' => ['required', 'string', 'max:100'],
            'url' => ['required', 'string', 'max:200'],
            'duration' => ['string'],
            'type' => []
        ]);

        Lesson::create([
            'course_id' => $course->id,
            'type' => $data['type'],
            'title' => $data['title'],
            'duration' => $data['duration'],
            'url' => $data['url']
        ]);

        return redirect(route('course.show', $course));
    }

    public function show(Course $course, Lesson $lesson)
    {
        //abort_if(!auth()->user()->isAdmin || !auth()->user()->isTeacher || !$course->batch_id->is(auth()->user()->batch), 403, "You don't have permission to watch the lesson.");
        return view('lessons.show', compact('lesson'));
    }

    public function edit(Course $course, Lesson $lesson)
    {
        abort_if(!$course->teacher()->is(auth()->user()), 403, "You don't have permission to perform the operation.");

        return view('lessons.edit', compact('lesson'));
    }

    public function update(Course $course, Lesson $lesson)
    {
        abort_if(!$course->teacher()->is(auth()->user()), 403, "You don't have permission to perform the operation.");

        $data = request()->validate([
            'title' => ['required', 'string', 'max:100'],
            'url' => ['required', 'string', 'max:200'],
            'duration' => ['string'],
            'type' => []
        ]);

        $lesson->update($data);

        return redirect(route('course.show', $course));
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        abort_if(!$course->teacher()->is(auth()->user()), 403, "You don't have permission to perform the operation.");
        $lesson->delete();
        return redirect(route('course.show', $course));
    }
}
