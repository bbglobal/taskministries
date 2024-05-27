@extends('admin.layout.main')
@push('title')
    <title>Admin Dashboard</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Dashboard</h1>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-lg">
                    <div class="row card-group-row">
                        <div class="col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card card-body card-body-x-lg"
                                style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h2 class="card-header__title text-muted mb-2">Students</h2>
                                        <h2 class="text-amount">{{ $studentCount }}</h2>
                                    </div>
                                    <figure>
                                        <img src="{{ url('assets/images/graduated.png') }}" alt="studenst" width="100px">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card card-body card-body-x-lg"
                                style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h2 class="card-header__title text-muted mb-2">Courses</h2>
                                        <h2 class="text-amount">{{ $courseCount }}</h2>
                                    </div>
                                    <figure>
                                        <img src="{{ url('assets/images/online-course.png') }}" alt="studenst"
                                            width="100px">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 card-group-row__col">
                            <div class="card card-group-row__card card-body card-body-x-lg"
                                style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h2 class="card-header__title text-muted mb-2">Instructors</h2>
                                        <h2 class="text-amount">{{ $teacherCount }}</h2>
                                    </div>
                                    <figure>
                                        <img src="{{ url('assets/images/female.png') }}" alt="studenst" width="100px">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center my-3">Stripe Payments</h2>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-md-12 col-lg-2 bg-white stripe-col">
                    <h3 class="card-header__title text-muted">All</h3>
                    <h3 class="text-amount">{{ $payments }}</h3>
                </div>

                <div class="col-12 col-md-12 col-lg-2 bg-white stripe-col">
                    <h3 class="card-header__title text-muted">Succeeded</h3>
                    <h3 class="text-amount">{{ $successPayments }}</h3>
                </div>

                <div class="col-12 col-md-12 col-lg-2 bg-white stripe-col">
                    <h3 class="card-header__title text-muted">Refunded</h3>
                    <h3 class="text-amount">{{ $refundedPayments }}</h3>
                </div>

                <div class="col-12 col-md-12 col-lg-2 bg-white stripe-col">
                    <h3 class="card-header__title text-muted">Uncaptured</h3>
                    <h3 class="text-amount">{{ $uncapturedPayments }}</h3>
                </div>

                <div class="col-12 col-md-12 col-lg-2 bg-white stripe-col">
                    <h3 class="card-header__title text-muted">Failed</h3>
                    <h3 class="text-amount">{{ $failedPayments }}</h3>
                </div>
            </div>

        </div>
        <div class="container-fluid page__container">

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-12 card-form__body">
                        <div class="table-responsive border-bottom" data-toggle="lists"
                            data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" id="searchInput" class="form-control search" placeholder="Search">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Customer</th>
                                        <th style="width: 37px;">Status</th>
                                        <th>Date</th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach ($stripe as $row)
                                        <tr>
                                            <td>
                                                <span>{{ $row->id }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">&dollar;{{ $row->amount }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $row->description }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $row->customer }}</span>
                                            </td>
                                            @if ($row->status == 'succeeded')
                                                <td><span class="badge badge-success">{{ $row->status }}</span></td>
                                            @elseif ($row->status == 'refunded')
                                                <td><span class="badge badge-primary">{{ $row->status }}</span></td>
                                            @elseif ($row->status == 'failed')
                                                <td><span class="badge badge-danger">{{ $row->status }}</span></td>
                                            @elseif ($row->status == 'uncaptured')
                                                <td><span class="badge badge-warning">{{ $row->status }}</span></td>
                                            @endif
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $row->created_at }}</span>
                                            </td>
                                            <td><small class="text-muted"></small></td>
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

    <x-admin-sidebar />
    </div>
    <!-- // END drawer-layout -->

    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team
                                            Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>
                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call
                                            Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team
                                            Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg"
                                            alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call
                                            Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar"
                                        class="avatar-img rounded-circle">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
