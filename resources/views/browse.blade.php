@extends('layouts.main')

@push('title')
    <title>FLTC</title>
@endpush

@section('main-section')
    <section id="browse">
        <div class="browse-container container">
            <div class="col-12 text-center head">
                <h1>Our Classes</h1>
            </div>
            <ul class="sidebar">
                <strong>Category</strong>
                <br><br>
                @foreach ($category as $row)
                    <li>
                        <a href="#{{ $row->category }}">{{ $row->category }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="row py-5">

                <form method="POST" action="{{ route('browse') }}" class="mb-5" id="filterForm">
                    @csrf
                    <div class="input-group">
                        <select name="category" id="category" class="form-select">
                            <option value="">--Filter by category--</option>
                            @foreach ($category as $row)
                                <option value="{{ $row->category }}">{{ $row->category }}</option>
                            @endforeach
                        </select>
                        <select name="date" id="datetime" class="form-select">
                            <option value="">--Filter by category--</option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                        </select>
                        <button class="btn-task" type="submit">
                            &nbsp;
                            <i class="fa fa-filter"></i>
                            &nbsp;
                        </button>
                    </div>
                </form>

                @foreach ($courses as $row)
                    <div class="col-12 col-md-12 col-lg-2 py-5">
                        <a href="{{ route('browseEach', ['id' => $row->id]) }}">
                            <img src="{{ url('assets/images/' . $row->course_image) }}" alt="image" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-10 py-5" id="{{ $row->category }}">
                        <div class="d-flex align-items-center justify-content-between">
                            <p>
                                <a href="{{ route('browseEach', ['id' => $row->id]) }}">{{ $row->title }}</a>
                            </p>
                            <p>
                                <strong>&dollar;{{ $row->fee }}</strong>
                            </p>
                        </div>
                        <div>
                            <small>with <i class="fa fa-user"></i> {{ $row->level }} {{ $row->first_name }}
                                {{ $row->last_name }}</small>
                        </div>
                        <div class="py-2">
                            <small>
                                <i class="fa fa-calendar" style="color: #ff0000;"></i>
                                From: {{ $row->start_date }} - {{ \Carbon\Carbon::parse($row->starts_at)->format('H:i') }}
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp; To: {{ $row->end_date }} -
                                {{ \Carbon\Carbon::parse($row->ends_at)->format('H:i') }}
                            </small>
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
