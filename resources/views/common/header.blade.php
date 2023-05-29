<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow fixed-top p-0">
        <div class="container">
            <!-- Topbar Search -->
            <a class="navbar-brand" href="{{route('list')}}">
                <img src="{{asset('/images/logo_2023.png')}}" style="max-height:85px; max-width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Topbar Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if(Auth::check() && Auth::user()->status=="admin")
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('jobs.index') }}">All Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jobs.create') }}">Create Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create_company') }}">Create Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company') }}">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jobseekers') }}">Jobseekers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view-jobseeker-status') }}">Selected Jobseeker</a>
                        </li>
                    @endif
                    @if(Auth::check() && Auth::user()->status=="company")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('companywise_jobs') }}">My Jobs</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('jobseekers') }}">Jobseekers</a>
                        </li> -->
                    @endif
                    @if(Auth::check() && Auth::user()->status=="user")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alljobs') }}">All Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('my-jobs') }}">My Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">My Profile</a>
                        </li>

                    @endif

                    @if(!Auth::check())

                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('list') }}">All Jobs</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('jobseeker.create') }}">Register Here</a>
                    </li>
                    
                    @endif
                    <li class="nav-item">
                    <a class="nav-link border border-info rounded" href="/">Visit Website</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    @guest
                        <li class="nav-item">
                            
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                
                            </li>
                        @endif
                    @else
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle" style="max-height: 25px; max-width: 25px;"
                                src="{{asset('admin/img/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>