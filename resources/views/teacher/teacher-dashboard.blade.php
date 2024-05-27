@extends('admin.layout.main')
@push('title')
    <title>Instructors Dashboard</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">
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
