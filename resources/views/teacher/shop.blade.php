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
                                    <a href="#" class="btn btn-primary ml-auto"><i
                                            class="material-icons">add_shopping_cart</i></a>
                                </div>
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

    <x-teacher-sidebar />
    </div>
@endsection
