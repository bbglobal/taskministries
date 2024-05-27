@extends('admin.layout.main')
@push('title')
    <title>Signup</title>
@endpush
<style>
    #navbar {
        display: none;
    }
</style>
@section('admin-section')
    <div class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-4 navbar-light">
                <div class="navbar-brand text-center mb-2 mr-0 flex-column" style="min-width: 0">
                    <!-- LOGO -->
                    <div class="logo">
                        <img src="{{ url('assets/images/logos/logo_2.png') }}" alt="Logo" width="150px">
                    </div>

                    <span class="mt-2">Create an account</span>
                </div>
            </div>
            <div class="card card-body">
                <a href="#" class="btn btn-light btn-block">
                    <span class="mr-2">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                            viewBox="0 0 48 48" class="abcRioButtonSvg">
                            <g>
                                <path fill="#EA4335"
                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                </path>
                                <path fill="#4285F4"
                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                </path>
                                <path fill="#FBBC05"
                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                </path>
                                <path fill="#34A853"
                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                </path>
                                <path fill="none" d="M0 0h48v48H0z"></path>
                            </g>
                        </svg>
                    </span>
                    Continue with Google
                </a>

                <div class="page-separator">
                    <div class="page-separator__text">or</div>
                </div>

                <form method="post" action="{{ route('student.regitser') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <label class="text-label" for="name_2">Name:</label>
                        <div class="input-group input-group-merge">
                            <input id="name_2" type="text" name="name" class="form-control form-control-prepended"
                                placeholder="Your Name" value="{{ old('name') }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="far fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="email_2">Email Address:</label>
                        <div class="input-group input-group-merge">
                            <input id="email_2" type="email" name="email" class="form-control form-control-prepended"
                                placeholder="name@student.com" value="{{ old('email') }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="far fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="contact">Contact Number:</label>
                        <div class="input-group input-group-merge">
                            <input id="contact" type="text" name="contact" class="form-control form-control-prepended"
                                placeholder="(555) 555-1234" value="{{ old('contact') }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('contact')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="password_2">Password:</label>
                        <div class="input-group input-group-merge">
                            <input id="password_2" type="password" name="password"
                                class="form-control form-control-prepended" placeholder="Enter your password">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary mb-2" type="submit">Create Account</button><br>
                        <span>Have an account?</span> <a class="text-body text-underline"
                            href="{{ route('admin.login') }}">
                            Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
