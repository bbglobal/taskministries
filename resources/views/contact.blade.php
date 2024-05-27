@extends('layouts.main')

@push('title')
    <title>Contact</title>
@endpush

@section('main-section')
    <section id="about">
        <div class="container py-5">
            <div class="col-12 text-center head">
                <h1>CONTACT US</h1>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Thank You</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row py-5">
                <div class="col-12 col-md-12 col-lg-6 text-center" style="margin: auto;">
                    <img src="{{ url('assets/images/logos/contact-img.png') }}" alt="image" width="100%">
                </div>
                <form method="post" action="{{ route('admin.add') }}" class="col-12 col-md-12 col-lg-6">
                    @csrf
                    <h3>GET IN TOUCH</h3>
                    <div class="mb-3 mt-3 col-12">
                        <input type="name" class="form-control" id="name" placeholder="Name" name="name"
                            value="{{ old('name') }}">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 mt-3 col-12">
                        <input type="email" class="form-control" id="email" placeholder="Eamil" name="email"
                            value="{{ old('email') }}">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 mt-3 col-12">
                        <input type="number" class="form-control" id="number" placeholder="Number" name="contact"
                            value="{{ old('contact') }}">
                        <div class="text-danger">
                            @error('contact')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn-task">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
