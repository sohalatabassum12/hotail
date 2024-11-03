<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="{{url('/')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">sohaleislami@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+8801305863077</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href="https://www.facebook.com/profile.php?id=100060187704625"><i class="fab fa-facebook-f"></i></a>

                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{url('/')}}" class="nav-item nav-link {{ isset($menu) && $menu == "home" ? "active" : "" }} ">Home</a>
                                <a href="{{route('about')}}" class="nav-item nav-link {{isset($menu) && $menu=="about" ? "active" : ""}}">About</a>

                                <a href="{{url('/contact')}}" class="nav-item nav-link {{ isset($menu) && $menu == "contact" ? "active" : "" }}">Contact</a>
                                @if (Auth::user())
                                <a href="{{url('/my-appointment')}}" class="nav-item nav-link {{ isset($menu) && $menu == "contact" ? "active" : "" }}">Appointment</a>
                                @endif


                                @if (Auth::user())
                                    <a href="{{route('logout')}}" class="nav-item nav-link ">Logout</a>
                                @else
                                    <a href="{{url('/login')}}" class="nav-item nav-link">Login</a>
                                @endif

                            </div>
                            <a href="" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block"><i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
