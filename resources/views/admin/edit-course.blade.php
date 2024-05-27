@extends('admin.layout.main')
@push('title')
    <title>Edit Course</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Edit Course</h1>
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
                        <form method="post" action="{{ $url }}" class="row" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-12">
                                <label for="img">Course Image:</label>
                                <input type="file" name="course_image" class="form-control" id="img">
                            </div>
                            <div class="form-group col-6">
                                <label for="title">Course Title:</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Course Title" value="{{ $course->title }}">
                                <span class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="teacher">Courese Teacher:</label>
                                <select id="teacher" name="teacher" data-toggle="select" class="form-control">
                                    <option>--select--</option>
                                    <option selected> {{ $course->teacher }}</option>
                                </select>
                                <span class="text-danger">
                                    @error('teacher')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="from">From:</label>
                                <input id="from" type="date" name="start_date" class="form-control"
                                    placeholder="Flatpickr example" data-toggle="flatpickr"
                                    value="{{ $course->start_date }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="to">To: (Optional)</label>
                                <input id="to" type="date" name="end_date" class="form-control"
                                    placeholder="Flatpickr example" data-toggle="flatpickr" value="{{ $course->end_date }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="sub_title">Sub Title:</label>
                                <input type="text" name="sub_title" class="form-control" id="sub_title"
                                    placeholder="Sub Title" value="{{ $course->sub_title }}">
                                <span class="text-danger">
                                    @error('sub_title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="fee">Course Fee:</label>
                                <input id="fee" name="fee" type="number" class="form-control"
                                    placeholder="Course Fee" value="{{ $course->fee }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="link">Class Intro Link:</label>
                                <input type="text" name="link" class="form-control" id="link"
                                    placeholder="Add a link..." value="{{ $course->link }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="category">Category:</label>
                                <input type="text" name="category" class="form-control" id="category"
                                    placeholder="Add a Category..." value="{{ $course->category }}">
                            </div>
                            <div class="form-group col-12">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"
                                    placeholder="Short Description">{{ $course->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="material-icons">edit</i>Update
                                Course</button>
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
