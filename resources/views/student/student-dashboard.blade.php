@extends('admin.layout.main')
@push('title')
    <title>Student Dashboard</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="container-fluid page__container">

            <div class="alert alert-soft-warning d-flex align-items-center card-margin" role="alert">
                <i class="material-icons mr-3">error_outline</i>
                <div class="text-body">You have <strong>5 days left</strong> on your subscription</div>
                <a href="" class="btn btn-warning ml-auto">Upgrade</a>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->

    <x-student-sidebar />
    </div>
    <!-- // END drawer-layout -->
@endsection
