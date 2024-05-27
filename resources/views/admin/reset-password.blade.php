@extends('admin.layout.main')
@push('title')
    <title>Login</title>
@endpush
<style>
    #navbar {
        display: none;
    }
</style>

@section('admin-section')
    <div class="layout-login-centered-boxed">

        <div class="layout-login-centered-boxed__form">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light">
                <div class="navbar-brand flex-column text-center mb-2 mr-0" style="min-width: 0">
                    <!-- LOGO -->
                    <div class="logo">
                        <img src="{{ url('assets/images/logos/logo_2.png') }}" alt="Logo" width="150px">
                    </div>

                    <span class="ml-2">Reset Password</span>
                </div>
            </div>

            <div class="card card-body">


                @if (Session('status'))
                    <div class="alert alert-soft-success d-flex" role="alert">
                        <i class="material-icons mr-3">check_circle</i>
                        <div class="text-body">
                            {{ Session('status') }}
                        </div>
                    </div>
                @elseif (Session('email'))
                    <div class="alert alert-soft-danger d-flex" role="alert">
                        <i class="material-icons mr-3">cross_circle</i>
                        <div class="text-body">
                            {{ Session('email') }}
                        </div>
                    </div>
                @endif

                <form method="post" action="{{ route('password.update') }}" novalidate>
                    @csrf
                    <br /><br />
                    <input type="hidden" name="token" value="{{ $token }}">
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
                    <div class="form-group">
                        <label class="text-label" for="password_2">Password:</label>
                        <div class="input-group input-group-merge">
                            <input id="password_2" type="password" name="password_confirmation"
                                class="form-control form-control-prepended" placeholder="Confirm password">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fa fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Send</button>
                    </div>
                    <div class="form-group text-center"> <a class="text-body text-underline"
                            href="{{ route('admin.login') }}">Log
                            in!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
