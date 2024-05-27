@extends('layouts.main')

@push('title')
    <title>FLTC</title>
@endpush

@section('main-section')
    <section id="browse-each">
        <div class="col-12 text-center cat-head browse-each">
            @foreach ($courses as $row)
                <figure>
                    <img src="{{ url('assets/images/' . $row->course_image) }}" alt="image" width="100%" height="450px">
                </figure>
        </div>
        <div class="browse-container container">
            <div class="row">
                @if (Auth::guest())
                    <div class="col-12 col-md-12 col-lg-2 py-5">
                        <button class="btn-task">
                            <a href="{{ route('admin.signup') }}">
                                Register
                            </a>
                        </button>
                    </div>
                @else
                    @php
                        $amount = $row->fee * 100;
                    @endphp

                    @if ($message = Session::get('error'))
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "You are already Enrolled in the course",
                            });
                        </script>
                    @elseif ($message = Session::get('success'))
                        <script>
                            Swal.fire({
                                icon: "success",
                                title: "Thank You",
                                text: "Your Enrollment has been completed",
                            });
                        </script>
                    @endif
                    <div class="col-12 col-md-12 col-lg-2 py-5">
                        <form action="{{ route('admin.checkout', ['id' => $row->id]) }}" method="POST">
                            @csrf
                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_51OAiS1KWAZDXjzFOBBryW86i3TInz0Divj8QOMSLsl4HcFuLq67cw7fLKEMsnECPzGuFrOuLIvC6iwspElTCDlYx00jjSskgUZ"
                                data-image="{{ url('assets/images/logos/logo_2.png') }}" data-label="Purchase"
                                data-description="{{ $row->title }}" data-amount="{{ $amount }}"></script>
                        </form>
                    </div>
                @endif

                <div class="col-12 col-md-12 col-lg-10 py-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <p>
                            {{ $row->title }}
                        </p>
                        <p>
                            <strong>&dollar;{{ $row->fee }}</strong>
                        </p>
                    </div>
                    <div class="py-2">
                        <small>with <i class="fa fa-user"></i> {{ $row->level }} {{ $row->first_name }}
                            {{ $row->last_name }}</small>
                    </div>
                    <p>
                        <strong>
                            {{ $row->sub_title }}
                        </strong>
                    </p>
                    <p>
                        {{ $row->description }}
                    </p>
                    <p>
                        <a href="{{ $row->link }}">Material</a>
                    </p>
                    <div>
                        <div class="calendar-graphic">
                            <div class="month">Aug</div>
                            <div class="date">7</div>
                        </div>
                        <div class="calendar-date">
                            <div class="">
                                <small>
                                    <i class="fa fa-calendar" style="color: #ff0000;"></i>
                                    From: {{ $row->start_date }} -
                                    {{ \Carbon\Carbon::parse($row->starts_at)->format('h:i A') }}
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp; To: {{ $row->end_date }} -
                                    {{ \Carbon\Carbon::parse($row->ends_at)->format('h:i A') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
