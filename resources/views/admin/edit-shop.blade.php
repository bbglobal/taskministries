@extends('admin.layout.main')
@push('title')
    <title>Edit Shop</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Edit Shop</h1>
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
                                <label for="img">Image:</label>
                                <input type="file" name="image" class="form-control" id="img"
                                    value="{{ $shop->image }}">
                                <span class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                    value="{{ $shop->title }}">
                                <span class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-6">
                                <label for="price">Price:</label>
                                <input id="price" name="price" type="number" class="form-control" placeholder="Price"
                                    value="{{ $shop->price }}">
                                <span class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-12">
                                <label for="material">Material:</label>
                                <input type="file" name="material" class="form-control" id="material"
                                    value="{{ $shop->materials }}">
                                <span class="text-danger">
                                    @error('material')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-12">
                                <label for="description">Short Description:</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="5"
                                    placeholder="Short Description">{{ $shop->description }}</textarea>
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
