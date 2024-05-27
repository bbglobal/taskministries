@extends('admin.layout.main')
@push('title')
    <title>Students</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Students</h1>
                {{-- <a href="{{ route('add.students') }}" class="btn btn-success ml-auto"><i class="material-icons">add</i> New
                    Student</a> --}}
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-12 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists"
                            data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Search">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Course Teacher</th>
                                        <th>Contact</th>
                                        <th>Registered On</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach ($students as $row)
                                        <tr>
                                            <td>
                                                <span>{{ $row->id }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $row->name }}</span>
                                            </td>
                                            <td>
                                                @if ($row->title === null)
                                                    <span class="badge badge-warning">
                                                        Not Enrolled
                                                    </span>
                                                @else
                                                    <span class="badge badge-primary">
                                                        {{ $row->title }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $row->first_name }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('teacher.contact', ['id' => $row->id]) }}"
                                                    class="btn btn-success ml-auto">Contact</a>
                                            </td>
                                            <td><small class="text-muted">{{ $row->created_at }}</small></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
@endsection
