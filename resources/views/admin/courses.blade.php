@extends('admin.layout.main')
@push('title')
    <title>Courses</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Courses</h1>
                <a href="{{ route('add.course') }}" class="btn btn-success ml-auto"><i class="material-icons">add</i> New
                    Course</a>
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

                    <div class="form-inline ml-auto">
                        <div class="form-group">
                            <label for="published01" class="form-label mr-1">Filter</label>
                            <select id="published01" class="form-control custom-select" style="width: 200px;">
                                <option selected>All</option>
                                <option value="1">Draft</option>
                                <option value="3">Published</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>



            <div class="row">

                @foreach ($courses as $course)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex flex-column flex-sm-row">
                                    <a href="javascript:void(0)" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                        <img src="{{ url('assets/images/' . $course->course_image) }}" alt="Card image cap"
                                            class="avatar-course-img">
                                    </a>
                                    <div class="flex" style="min-width: 200px;">
                                        <div class="d-flex">
                                            <div>
                                                <h4 class="card-title mb-1">
                                                    {{ $course->title }}
                                                </h4>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" class="dropdown-toggle text-muted" data-caret="false"
                                                    data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="{{ route('edit.course', ['id' => $course->id]) }}">Edit
                                                        Course</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('publish.course', ['id' => $course->id]) }}">Publish</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('draft.course', ['id' => $course->id]) }}">Draft</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" data-toggle="modal"
                                                        data-target="#delete-modal{{ $course->id }}"
                                                        href="">Delete</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-end">
                                            <div class="d-flex flex flex-column mr-3">
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <span class="mr-2">&dollar;{{ $course->fee }}</span>
                                                    <small class="text-muted ml-auto">{{ $course->start_date }}</small>
                                                </div>
                                                <div class="d-flex align-items-center py-2">
                                                    <p class="text-muted ml-auto">{{ $course->first_name }}</p>
                                                    @if ($course->status == '0')
                                                        <span class="badge badge-warning mr-2">Draft</span>
                                                    @else
                                                        <span class="badge badge-success mr-2">Published</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

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

    @foreach ($courses as $row)
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
                        <a href="{{ route('delete.course', ['id' => $row->id]) }}" class="btn btn-danger">Yes</a>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->
    @endforeach
    <script>
        // Get the input element and course cards container
        var input = document.getElementById("searchInput");
        var courseContainer = document.querySelector(".row");

        // Add an event listener to the search input
        input.addEventListener("input", function() {
            var searchQuery = input.value.toLowerCase();

            // Get all course cards
            var courseCards = courseContainer.querySelectorAll(".card");

            // Loop through the course cards and hide those that don't match the search query
            courseCards.forEach(function(courseCard) {
                var courseTitle = courseCard.querySelector(".card-title").textContent.toLowerCase();
                if (courseTitle.includes(searchQuery)) {
                    courseCard.style.display = "block";
                } else {
                    courseCard.style.display = "none";
                }
            });
        });
    </script>
@endsection
