@extends('layouts.app')

@section('content')

    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark"
             style="background-image:url({{asset(" assets/images/banner/banner2.jpg")}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Courses Details</h1>
                </div>
            </div>
        </div>

        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row d-flex flex-row-reverse">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            <div class="course-detail-bx">
                                <div class="teacher-bx">
                                    <div class="teacher-info">
                                        <div class="teacher-thumb">
                                            <img src="{{asset("assets/images/testimonials/pic1.jpg")}}" alt=""/>
                                        </div>
                                        <div class="teacher-name">
                                            <h5>{{$course->instructor->name}}</h5>
                                            <span>Dept. of {{$course->batch->dept}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cours-more-info">
                                    <div class="price categories">
                                        <span>Batch</span>
                                        <h5 class="text-primary">{{$course->batch->title}}</h5>
                                    </div>
                                </div>
                                <div class="course-info-list scroll-page">
                                    <ul class="navbar">
                                        <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                        <li><a class="nav-link" href="#curriculum"><i
                                                        class="ti-bookmark-alt"></i>Lectures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="courses-post">
                                <div class="ttr-post-media media-effect">
                                    <a href="#"><img src={{asset("assets/images/blog/default/thum1.jpg")}} alt=""></a>
                                </div>
                                <div class="ttr-post-info">
                                    <div class="ttr-post-title ">
                                        <h2 class="post-title">{{$course->title}}</h2>
                                    </div>
                                    <div class="ttr-post-text">
                                        <p>{{$course->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courese-overview" id="overview">
                                <h4>Overview</h4>
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="course-features">
                                            <li><i class="ti-book"></i> <span class="label">Lectures</span> <span
                                                        class="value">{{$course->lessons->count()}}</span></li>
                                            <li><i class="ti-time"></i> <span class="label">Duration</span> <span
                                                        class="value">60 hours</span></li>
                                            <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                                        class="value">{{$course->batch->students}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <h5 class="m-b5">Course Description</h5>
                                        <p>{{$course->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b30" id="curriculum">
                                <h4>Curriculum</h4>
                                <ul class="curriculum-list">
                                    @foreach($course->lessons as $lesson)
                                        <a href="{{route('lesson.show', [$course, $lesson])}}">
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>Lesson 1.</span> {{$lesson->name}}
                                                </div>
                                                <span>
                                                {{$lesson->duration ? : 0}}
                                            </span>
                                            </li>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->

    </div>

@endsection