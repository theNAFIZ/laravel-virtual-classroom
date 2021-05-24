@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">

        <div class="page-banner ovbl-dark" style="background-image:url({{asset("assets/images/banner/banner3.jpg")}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Batches</h1>
                </div>
            </div>
        </div>

        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                @foreach($batches as $batch)
                                    <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                        <div class="cours-bx">
                                            <div class="info-bx text-center">
                                                <h5><a href="{{route('batch.edit', $batch)}}">{{$batch->title}}
                                                        - {{$batch->dept}}</a></h5>
                                                <span>Total Students: {{$batch->students->count()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection