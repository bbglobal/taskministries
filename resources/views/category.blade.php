@extends('layouts.main')

@push('title')
    <title>Category</title>
@endpush

@section('main-section')
    <section id="browse-each">
        <div class="col-12 text-center cat-head browse-each">
            @foreach ($courses as $row)
                <figure>
                    <img src="{{ url('assets/images/' . $row->course_image) }}" alt="image" width="100%" height="450px">
                </figure>
        </div>
        <div class="browse-container container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-2 py-5">
                    <button class="btn-task">
                        <a href="{{route('admin.signup')}}">
                            Register
                        </a>
                    </button>
                </div>
                <div class="col-12 col-md-12 col-lg-10 py-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <p>
                            {{ $row->title }}
                        </p>
                        <p>
                            <strong>&dollar;{{ $row->fee }}</strong>
                        </p>
                    </div>
                    <div class="py-2">
                        <small>with <i class="fa fa-user"></i> {{ $row->level }} {{ $row->first_name }}
                            {{ $row->last_name }}</small>
                    </div>
                    <p>
                        <strong>
                            {{ $row->sub_title }}
                        </strong>
                    </p>
                    <p>
                        {{ $row->description }}
                    </p>
                    <p>
                        <a href="{{ $row->link }}">Material</a>
                    </p>
                    <div>
                        <div class="calendar-graphic">
                            <div class="month">Aug</div>
                            <div class="date">7</div>
                        </div>
                        <div class="calendar-date">
                            <div class="">{{ $row->start_date }} - {{ $row->end_date }}</div>
                            <div class="">7</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
