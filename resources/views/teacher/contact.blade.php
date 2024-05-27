@extends('admin.layout.main')
@push('title')
    <title>Contact Student</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Contact Student</h1>
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
                        <form method="post" action="{{ route('contact.student', ['id' => $students->id]) }}" class="row"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-6">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" class="form-control" id="subject"
                                    placeholder="Subject" value="{{ old('subject') }}">
                                <span class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="attachements">Attachments:</label>
                                <input type="file" name="attachment" class="form-control" id="attachements"
                                    value="{{ old('attachment') }}">
                                <span class="text-danger">
                                    @error('attachment')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-12">
                                <label for="body">Body:</label>
                                <textarea class="form-control" name="body" id="body" placeholder="Body" rows="10"></textarea>
                                <span class="text-danger">
                                    @error('body')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button type="submit" class="btn btn-success">Contact
                                Student</button>
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

    <x-teacher-sidebar />
    </div>
    <!-- // END drawer-layout -->
@endsection
