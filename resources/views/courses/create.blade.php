@extends('layouts.app')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid bg-gray">
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Add listing</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Basic info</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="title" class="col-form-label">Course Title</label>
                                        <div>
                                            <input class="form-control" id="title" name="title" type="text" value="">
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
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="course_code" class="col-form-label">Course Code</label>
                                        <div>
                                            <input name="course_code" id="course_code" class="form-control" type="text"
                                                   value="">
                                        </div>
                                    </div>
                                    @if(auth()->user()->isAdmin)
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
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group col-12">
                                        <label for="description" class="col-form-label">Course Description</label>
                                        <div>
                                            <textarea name="description" id="description"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

@endsection