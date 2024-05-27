@extends('layouts.main')

@section('main-section')
    <div class="banner-wrapper py-5 my-5">

        <div class="banner">
            <div class="container">
                <figure>
                    <img src="{{url('assets/images/logos/contact-img.png')}}" alt="image" width="100%">
                </figure>
            </div>

            {{-- <div class="banner-text banner-image2">
                <h1>FLTC SCHOOL</h1>
                <p class="text-center">Welcome to the FLTC online class catalog where you can register with your credit card
                    any time, day or night. There are classes for everyone, so scroll down and find something new to learn!
                </p>
                <div class="text-center py-3">
                    <button class="btn-task">
                        <a href="{{ route('fltc') }}">
                            Read More
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image3">
                <h1>SPIRITUAL WARFARE MASTER CLASS</h1>
                <div class="d-flex align-items-center justify-content-around">
                    <p style="font-family: TaksMinistries Mons Semi,san-serif;"><span>with</span> <i class="fa fa-user"></i>
                        lectures-02 Paula Wellings</p>
                    <p style="font-family: TaksMinistries Mons Semi,san-serif;">&dollar;50</p>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
                <div class="text-center py-3">
                    <button class="btn-task">
                        <a href="{{ route('fltc') }}">
                            Read More
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image4">
                <div class="row mx-3">
                    <div class="col-12 col-md-12 col-lg-6">
                        <h1 style=" text-align:left;">lectures-02 HUB</h1>
                        <div class="d-flex align-items-center justify-content-between">
                            <p style="font-family: TaksMinistries Mons Semi,san-serif;"><span>with</span> <i
                                    class="fa fa-user"></i>
                                lectures-02 Paula Wellings</p>
                            <p style="font-family: TaksMinistries Mons Semi,san-serif;">&dollar;50</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                        <div class="py-3">
                            <button class="btn-task">
                                <a href="{{ route('apostolichub') }}">
                                    Read More
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6"></div>
                </div>
            </div>

            <div class="banner-text banner-image5">
                <div class="row mx-3">
                    <div class="col-12 col-md-12 col-lg-6">
                        <h1 style=" text-align:left;">lectures-02</h1>
                        <div class="d-flex align-items-center justify-content-between">
                            <p style="font-family: TaksMinistries Mons Semi,san-serif;"><span>with</span> <i
                                    class="fa fa-user"></i>
                                lectures-02 Paula Wellings</p>
                            <p style="font-family: TaksMinistries Mons Semi,san-serif;">&dollar;50</p>
                        </div>
                        <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                        <div class="py-3">
                            <button class="btn-task">
                                <a href="{{ route('apostolichub') }}">
                                    Read More
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6"></div>
                </div>
            </div>

            <div class="banner-text banner-image6">
                <h1>LECTURES & SPEAKERS</h1>
                <div class="d-flex align-items-center flex-wrap justify-content-around">
                    <div class="card no-display" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-02.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-03.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>

                    <div class="card no-display" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-02.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <button class="btn-task">
                        <a href="{{ route('lecturesspeakers') }}">
                            Meet Apostle Paula Wellings
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image7">
                <div class="d-flex align-items-center flex-wrap justify-content-around">
                    <div class="card no-display" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-02.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-03.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>

                    <div class="card no-display" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/frontend/lectures-02.png') }}"
                            alt="Card image cap" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <button class="btn-task">
                        <a href="{{ route('lecturesspeakers') }}">
                            Hire Me Now
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image8">
                <h1>Same Design Box + Ready Box =
                    The Perfect Combination</h1>
                <div class="py-3 text-center">
                    <button class="btn-task">
                        <a href="{{ route('kingdominspiration') }}">
                            Shop Now
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image9">
                <h1>Inspirations from Heaven Sent
                    Straignt to Your Door</h1>
                <div class="py-3 text-center">
                    <button class="btn-task">
                        <a href="{{ route('kingdominspiration') }}">
                            Shop Now
                        </a>
                    </button>
                </div>
            </div>

            <div class="banner-text banner-image10">
                <h1>Events OR Conference Professional Desings</h1>
                <div class="py-3 text-center">
                    <button class="btn-task">
                        <a href="{{ route('conference') }}">
                            Shop Now
                        </a>
                    </button>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
