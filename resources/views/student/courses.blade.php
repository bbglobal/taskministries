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
                <h1 class="mb-0">My Courses</h1>
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
                @foreach ($courses as $row)
                    <div class="card pt-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('assets/images/' . $row->course_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <small>
                                with
                                <i class="fa fa-user"></i>
                                {{ $row->level }} {{ $row->first_name }} {{ $row->last_name }}
                            </small>
                            <p class="card-text">{{ $row->sub_title }}</p>
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

    <x-student-sidebar />
    </div>
    <!-- // END drawer-layout -->

    <script>
        // Get the input element and course cards container
        var input = document.getElementById("searchInput");
        var courseContainer = document.querySelector(".d-flex");

        // Add an event listener to the search input
        input.addEventListener("input", function() {
            var searchQuery = input.value.toLowerCase();
 
            // Get all course cards
            var courseCards = courseContainer.querySelectorAll(".card");

            // Loop through the course cards and hide those that don't match the search query
            courseCards.forEach(function(courseCard) {
                var courseTitle = courseCard.querySelector(".card-title").textContent.toLowerCase();
                var courseDescription = courseCard.querySelector(".card-text").textContent.toLowerCase();
                if (courseTitle.includes(searchQuery) || courseDescription.includes(searchQuery)) {
                    courseCard.style.display = "block";
                } else {
                    courseCard.style.display = "none";
                }
            });
        });
    </script>
@endsection
