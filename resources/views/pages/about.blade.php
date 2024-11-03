@extends('master')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <h1 class="mb-4">Enjoy <span class="text-primary"> your holidays</span></h1>


                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{asset('frontend/img/about-1.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background:150px solid; border-color: transparent #13357B transparent #13357B;">
                        <h5 class="section-about-title pe-3"></h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">Our Hotel</span></h1>
                        @foreach ($about as $about)
                        <p class="mb-4" style="color: #333; font-size: 16px;"> {{ $about->message }}</p>
                        @endforeach

                        <div class="row gy-2 gx-4 mb-4">

                            <!-- Other content -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- About End -->


@endsection
