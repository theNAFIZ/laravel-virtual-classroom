@extends('layouts.auth')

@section('content')
    <div class="col-md-8 text-center text-white">
        <h2>Online Courses To Learn</h2>
        <h5>Own Your Feature Learning New Skills Online</h5>
    </div>
    <div class="mw800 m-auto">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                        <h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
                    </div>
                    <span class="cours-search-text">Over {{100}} students</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                        <h3><i class="ti-book"></i><span class="counter">3</span>K</h3>
                    </div>
                    <span class="cours-search-text">{{3000}} Courses.</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="cours-search-bx m-b30">
                    <div class="icon-box">
                        <h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
                    </div>
                    <span class="cours-search-text">Learn Anything Online.</span>
                </div>
            </div>
        </div>
    </div>
@endsection


