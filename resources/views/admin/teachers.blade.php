@extends('admin.layout.main')
@push('title')
    <title>Instructors</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Instructors</h1>
                <a href="{{ route('add.teachers') }}" class="btn btn-success ml-auto"><i class="material-icons">add</i> New
                    Instructor</a>
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th style="width: 37px;">Level</th>
                                        <th style="width: 120px;">Last Activity</th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>
                                                <span>{{ $teacher->id }}</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="js-lists-values-employee-name">{{ $teacher->first_name }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $teacher->last_name }}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">
                                                    <a href="mailto:{{ $teacher->email }}" style="color:#000;">{{ $teacher->email }}</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-employee-name">{{ $teacher->contact }}</span>
                                            </td>
                                            <td><span class="badge badge-primary">{{ $teacher->level }}</span></td>
                                            <td><small class="text-muted">{{ $teacher->updated_at }}</small></td>
                                            <td>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false"
                                                        data-toggle="dropdown">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="{{ route('edit.teacher', ['id' => $teacher->id]) }}">Edit
                                                            Instructor</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" data-toggle="modal"
                                                            data-target="#delete-modal{{ $teacher->id }}"
                                                            href="">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
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

    @foreach ($teachers as $row)
        <!-- Add New Event MODAL -->
        <div class="modal fade" id="delete-modal{{ $row->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Are You Sure You Want to delete <br />
                            {{ $row->first_name }}{{ $row->last_name }}?</h4>
                    </div>
                    <div class="modal-body pt-3 pr-4 pl-4">
                    </div>
                    <div class="text-right pb-4 pr-4">
                        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
                        <a href="{{ route('delete.teacher', ['id' => $row->id]) }}" class="btn btn-danger">Yes</a>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->
    @endforeach
    <script>
        // Get the input element and table body
        var input = document.getElementById("searchInput");
        var tableBody = document.getElementById("staff02");

        // Add an event listener to the search input
        input.addEventListener("input", function() {
            var searchQuery = input.value.toLowerCase();

            // Get all rows in the table
            var rows = tableBody.getElementsByTagName("tr");

            // Loop through the rows and hide those that don't match the search query
            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var cells = row.getElementsByTagName("td");
                var found = false;

                for (var j = 0; j < cells.length; j++) {
                    var cell = cells[j];
                    if (cell) {
                        var text = cell.innerText.toLowerCase();
                        if (text.indexOf(searchQuery) > -1) {
                            found = true;
                            break;
                        }
                    }
                }

                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        });
    </script>
@endsection
