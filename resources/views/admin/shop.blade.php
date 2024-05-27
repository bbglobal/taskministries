@extends('admin.layout.main')
@push('title')
    <title>Shop</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">My Courses</h1>
                <a href="{{ route('add.shop') }}" class="btn btn-success ml-auto"><i class="material-icons">add</i> New
                    Material</a>
            </div>
        </div>

        <div class="container-fluid page__container">

            <form action="#" class="mb-3 border-bottom pb-3">
                <div class="d-flex">
                    <div class="search-form mr-3 search-form--light">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search courses"
                            id="searchSample02">
                        <button class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>
                </div>
            </form>
            <div class="d-flex align-items-center justify-content-around flex-wrap">
                @foreach ($shop as $row)
                    <div class="col-md-3">
                        <div class="card card__course">
                            <div
                                class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                <span
                                    class="card-header__title  justify-content-center align-self-center d-flex flex-column">
                                    <span><img src="{{ url('assets/images/' . $row->image) }}" class="mb-1"
                                            style="width:100%;" alt="image"></span>
                                </span>
                            </div>
                            <div class="p-3">
                                <div class="mb-2">
                                    <h4 class="course__title">{{ $row->title }}</h4>
                                    <div class="mr-2">
                                        {{ $row->description }}
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <strong class="h4 m-0">&dollar;{{ $row->price }}</strong>
                                </div>
                                <a href="{{ route('edit.shop', ['id' => $row->id]) }}" class="btn btn-primary ml-auto"><i
                                        class="material-icons">edit</i></a>
                                <a href="#" data-toggle="modal" class="btn btn-danger ml-auto"
                                    data-target="#delete-modal{{ $row->id }}"><i class="material-icons">delete</i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>

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
    @foreach ($shop as $row)
        <!-- Add New Event MODAL -->
        <div class="modal fade" id="delete-modal{{ $row->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Are You Sure You Want to delete <br /> {{ $row->title }}?</h4>
                    </div>
                    <div class="modal-body pt-3 pr-4 pl-4">
                    </div>
                    <div class="text-right pb-4 pr-4">
                        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
                        <a href="{{ route('delete.shop', ['id' => $row->id]) }}" class="btn btn-danger">Yes</a>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->
    @endforeach
@endsection
