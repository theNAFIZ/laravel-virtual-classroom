@extends('layouts.app')

@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid bg-gray">
            <div class="row">

                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Update Lesson</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30"
                                  action="{{route('lesson.update',[$lesson->course, $lesson] )}}"
                                  method="PUT">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="title" class="col-form-label">Lesson Title</label>
                                        <div>
                                            <input class="form-control" id="title" name="title" type="text"
                                                   value="{{$lesson->title}}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="url" class="col-form-label">Link</label>
                                        <div>
                                            <input name="url" id="url" class="form-control" type="text"
                                                   value="{{$lesson->url}}">
                                            @error('url')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="duration" class="col-form-label">Duration</label>
                                        <div>
                                            <input name="duration" id="duration" class="form-control" type="text"
                                                   value="{{$lesson->duration}}">
                                            @error('duration')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="type" class="col-form-label">File Type</label>
                                        <div>
                                            <select class="form-control" type="text" id="type" name="type">
                                                <option @if($lesson->type == "Video") selected @endif value="Video">
                                                    Video
                                                </option>
                                                <option @if($lesson->type == "Pdf") selected @endif value="Pdf">PDF
                                                </option>
                                                <option @if($lesson->type == "Other") selected @endif value="Other">
                                                    Other
                                                </option>
                                            </select>
                                            @error('type')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
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

            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

@endsection