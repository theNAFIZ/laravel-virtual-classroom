@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url({{asset("assets/images/banner/banner3.jpg")}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Courses</h1>
                </div>
            </div>
        </div>

        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                @forelse($courses as $course)
                                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                        <div class="cours-bx">
                                            <div class="action-box">
                                                <img src="{{asset("assets/images/courses/pic1.jpg")}}" alt="">
                                                <a href={{route('course.show', $course)}} class="btn">Details</a>
                                            </div>
                                            <div class="info-bx text-center">
                                                <h5><a href={{route('course.show', $course)}}>{{$course->course_code}}
                                                        - {{$course->name}}</a></h5>
                                                <span>{{$course->instructor->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h2>No courses available</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection