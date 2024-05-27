@extends('admin.layout.main')
@push('title')
    <title>Edit Account</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Edit Account</h1>
            </div>
        </div>

        @if ($message = Session::get('error'))
            <div class="alert alert-soft-danger d-flex" role="alert">
                <i class="material-icons mr-3">check_circle</i>
                <div class="text-body">
                    {{ $message }}
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('update.account', ['id' => $user->id]) }}">
            @csrf
            <div class="container-fluid page__container">
                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Basic Information</strong></p>
                            <p class="text-muted mb-0">Edit your account details and settings.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input id="fname" name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="contact">Contact</label>
                                        <input id="contact" name="contact" type="text"
                                            class="form-control @error('contact') is-invalid @enderror"
                                            placeholder="Contact" value="{{ $user->contact }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-form">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Update Your Password</strong></p>
                            <p class="text-muted mb-0">Change your password.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="npass">New Password</label>
                                        <input id="npass" name="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="New Password">
                                        @error('password')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="cpass">Confirm Password</label>
                                        <input id="cpass" name="confirm_password" type="password"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            placeholder="Confirm password">
                                        @error('confirm_password')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right mb-5">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>


    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->
    @if (Auth::user()->role == 'student')
        <x-student-sidebar />
    @elseif (Auth::user()->role == 'teacher')
        <x-teacher-sidebar />
    @else
        <x-admin-sidebar />
    @endif
    </div>
    <!-- // END drawer-layout -->
@endsection
