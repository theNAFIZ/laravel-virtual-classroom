@extends('layouts.app')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid bg-gray">
            <div class="row">
                <!-- Course Edit Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Edit Course</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" method="POST" action="{{route('course.update', $course)}}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Basic info</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name" class="col-form-label">Course Title</label>
                                        <div>
                                            <input class="form-control" id="name" name="name" type="text"
                                                   value="{{$course->name}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="batch_id" class="col-form-label">Select Batch</label>
                                        <div>
                                            <select class="form-control" type="text" id="batch_id" name="batch_id">
                                                <option disabled selected>Select</option>
                                                @foreach($batches as $batch)
                                                    <option value={{$batch->id}}>{{$batch->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('batch_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="course_code" class="col-form-label">Course Code</label>
                                        <div>
                                            <input name="course_code" id="course_code" class="form-control" type="text"
                                                   value="{{$course->course_code}}">
                                            @error('course_code')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    @if(auth()->user()->isAdmin())
                                        <div class="form-group col-6">
                                            <label for="teacher" class="col-form-label">Teacher</label>
                                            <div>
                                                <select class="form-control" type="text" id="teacher" name="teacher">
                                                    <option disabled selected>Select Teahcer</option>
                                                    @foreach($teachers as $teacher)
                                                        <option value={{$teacher->id}}>{{$teacher->name}}
                                                            , {{$teacher->dept}}</option>
                                                    @endforeach
                                                </select>
                                                @error('teacher')
                                                <span class="invalid-feedback"
                                                      role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group col-12">
                                        <label for="description" class="col-form-label">Course Description</label>
                                        <div>
                                            <textarea name="description" id="description"
                                                      class="form-control">{{$course->description}}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn">Update</button>
                                    </div>
                                </div>
                            </form>
                            <form class="edit-profile m-b30" method="POST" action="{{route('course.delete', $course)}}">
                                @csrf
                                @method('delete')
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Course Edit Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

@endsection