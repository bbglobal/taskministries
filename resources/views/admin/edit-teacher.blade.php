@extends('admin.layout.main')
@push('title')
    <title>Edit Instructors</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Edit Instructor</h1>
            </div>
        </div>

        <div class="container-fluid page__container">
            @if ($message = Session::get('success'))
                <div class="alert alert-soft-success d-flex" role="alert">
                    <i class="material-icons mr-3">check_circle</i>
                    <div class="text-body">
                        {{ $message }}
                    </div>
                </div>
            @endif
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-12 card-form__body card-body">
                        <form method="post" action="{{ $url }}" class="row">
                            @csrf
                            <div class="form-group col-6">
                                <label for="fname">First Name:</label>
                                <input type="text" name="first_name" class="form-control" id="fname"
                                    placeholder="Frist Name" value="{{ $teacher->first_name }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="lname">Last Name:</label>
                                <input type="text" name="last_name" class="form-control" id="lname"
                                    placeholder="Last Name" value="{{ $teacher->last_name }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter email address .." value="{{ $teacher->email }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="contact">Contact:</label>
                                <input type="text" name="contact" class="form-control" id="contact"
                                    placeholder="Contact Number .." value="{{ $teacher->contact }}">
                                    <span class="text-danger">
                                        @error('contact')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                <span class="text-danger">
                            </div>
                            <div class="form-group col-6">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Enter password .." value="{{ $teacher->password }}">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="class">Role:</label>
                                <input type="text" name="level" class="form-control" id="course"
                                    placeholder="Add a Role .." value="{{ $teacher->level }}">
                            </div>
                            <button type="submit" class="btn btn-success"><i class="material-icons">edit</i>Update
                                Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->

    <x-admin-sidebar />
    </div>
    <!-- // END drawer-layout -->
@endsection
