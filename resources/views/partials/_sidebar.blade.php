<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="#"><img alt="" src={{asset("images/logo.png")}} width="122" height="27"></a>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="{{route('home')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashborad</span>
                    </a>
                </li>
                @if(auth()->user()->user_type == 'Admin')
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-user"></i></span>
                            <span class="ttr-label">Users</span>
                        </a>
                    <li>
                        <a href="{{route('user.view')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-plus"></i></span>
                            <span class="ttr-label">Students</span></a>
                    </li>
                    <li>
                        <a href="{{route('user.view')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-plus"></i></span>
                            <span class="ttr-label">Teachers</span></a>
                    </li>
                    </li>
                @endif
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Courses</span>
                        @if(auth()->user()->user_type == 'Admin' || auth()->user()->user_type == 'Teacher')
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        @endif
                    </a>
                <li>
                    <a href="{{route('course.index')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-plus"></i></span>
                        <span class="ttr-label">View Courses</span></a>
                </li>
                @if(auth()->user()->user_type == 'Admin' || auth()->user()->user_type == 'Teacher')
                    <li>
                        <a href="{{route('course.create')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-plus"></i></span>
                            <span class="ttr-label">Create New Course</span></a>
                    </li>
                    @endif
                    </li>
                    @if(auth()->user()->user_type == 'Admin')
                        <li>
                            <a href="#" class="ttr-material-button">
                                <span class="ttr-icon"><i class="ti-layout-list-thumb"></i></span>
                                <span class="ttr-label">Departments</span>
                                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                            </a>
                        <li>
                            <a href="{{route('batch.index')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="ti-plus"></i></span>
                                <span class="ttr-label">View All Departments</span></a>
                        </li>
                        <li>
                            <a href="{{route('batch.create')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="ti-plus"></i></span>
                                <span class="ttr-label">Create New Department</span></a>
                        </li>
                        </li>
                    @endif

                    @if(auth()->user()->user_type == 'Admin')

                        <li>
                            <a href="{{route('batch.index')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="ti-layout-list-thumb"></i></span>
                                <span class="ttr-label">View All Batches</span>
                                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                            </a>
                        <li>
                            <a href="{{route('batch.create')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="ti-plus"></i></span>
                                <span class="ttr-label">Create New Batch</span></a>
                        </li>
                        </li>
                    @endif
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-user"></i></span>
                            <span class="ttr-label">Profile</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                    <li>
                        <a href="{{route('batch.create')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-plus"></i></span>
                            <span class="ttr-label">View Profile</span></a>
                    </li>
                    <li>
                        <a href="{{route('batch.create')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-plus"></i></span>
                            <span class="ttr-label">Update Profile</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="ttr-icon"><i class="fa-sign-out"></i></span>
                            <span class="ttr-label">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    </li>

                    <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>