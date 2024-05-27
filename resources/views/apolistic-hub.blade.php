@extends('layouts.main')

@push('title')
    <title>APOSTOLIC HUB</title>
@endpush

@section('main-section')
    <section id="hub">
        <div class="px-5 mx-5 text-center head">
            <h3>An apostolic hub exists
                <q>to equip God’s people for works of service,
                    so that the body of Christ may be built up until we all reach unity in the faith
                    and in the knowledge of the Son of God and become mature,
                    attaining to the whole measure of the fullness of Christ.</q>
                <blockquote class="mt-3">Ephesians 4</blockquote>
            </h3>
        </div>
        <div class="faded">
            <div class="skyline-slide">
                <figure>
                    <img src="{{ url('assets/images/frontend/skyline-01.jpg') }}" alt="image" width="100%">
                    <center>
                        <h5>
                            Chicago, IL
                        </h5>
                    </center>
                </figure>
            </div>
            <div class="skyline-slide">
                <figure>
                    <img src="{{ url('assets/images/frontend/skyline-02.jpg') }}" alt="image" width="100%">
                    <center>
                        <h5>
                            Indianapolis, IN
                        </h5>
                    </center>
                </figure>
            </div>
            <div class="skyline-slide">
                <figure>
                    <img src="{{ url('assets/images/frontend/skyline-03.jpg') }}" alt="image" width="100%">
                    <center>
                        <h5>
                            Northern KY/Cincinnati, OH
                        </h5>
                    </center>
                </figure>
            </div>
            <div class="skyline-slide">
                <figure>
                    <img src="{{ url('assets/images/frontend/skyline-04.jpg') }}" alt="image" width="100%">
                    <center>
                        <h5>
                            Baltimore, MD
                        </h5>
                    </center>
                </figure>
            </div>
            <div class="skyline-slide">
                <figure>
                    <img src="{{ url('assets/images/frontend/skyline-05.jpg') }}" alt="image" width="100%">
                    <center>
                        <h5>
                            Florida (West Palm Beach)
                        </h5>
                    </center>
                </figure>
            </div>
        </div>

        <div class="container">
            <h3>Click to Enroll at the Apostolic Hub nearest you.</h3>
            <div class="d-flex flex-wrap align-items-center justify-content-around pt-5 ha-logo-wrapper">
                <figure>
                    <a href="javascript:(void)">
                        <img src="{{ url('assets/images/frontend/AH-Indiana-Logo.png') }}" alt="Indiana" width="100%">
                    </a>
                </figure>
                <figure>
                    <a href="javascript:(void)">
                        <img src="{{ url('assets/images/frontend/AH-Florida-Logo.png') }}" alt="Florida" width="100%">
                    </a>
                </figure>
                <figure>
                    <a href="javascript:(void)">
                        <img src="{{ url('assets/images/frontend/AH-Illinois-Logo.png') }}" alt="Illinois" width="100%">
                    </a>
                </figure>
                <figure>
                    <a href="javascript:(void)">
                        <img src="{{ url('assets/images/frontend/AH-Kentucky-Logo.png') }}" alt="Kentucky" width="100%">
                    </a>
                </figure>
                <figure>
                    <a href="javascript:(void)">
                        <img src="{{ url('assets/images/frontend/AH-Maryland-Logo.png') }}" alt="Maryland" width="100%">
                    </a>
                </figure>
            </div>
        </div>

        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Thank You</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row py-5">
                <div class="col-12 pb-5 text-center">
                    <form method="post" action="{{ route('admin.hub') }}" id="enroll-form" enctype="multipart/form-data">
                        @csrf
                        <h3>Enroll Now at the Apostolic Hub in Indian</h3>
                        <h4>As</h4>
                        <input type="radio" name="role" id="student" value="student" checked>
                        <label for="student">
                            <h5>Student</h5>
                        </label>
                        <input type="radio" name="role" id="instructor" value="instructor">
                        <label for="instructor">
                            <h5>Instructor</h5>
                        </label>
                        <div class="mb-3 mt-3 col-12">
                            <input type="name" class="form-control" id="name" placeholder="Name" name="name"
                                value="{{ old('name') }}">
                            <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <input type="number" class="form-control" id="number" placeholder="Contact" name="contact"
                                value="{{ old('contact') }}">
                            <div class="text-danger">
                                @error('contact')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <select class="form-control" id="select" name="level">
                                <option value="">--Select--</option>
                                <option value="Apostle">Apostle</option>
                                <option value="Prophet">Prophet</option>
                                <option value="Evangelist">Evangelist</option>
                                <option value="Pastor">Pastor</option>
                                <option value="Teacher">Teacher</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <input type="file" class="form-control" id="file" name="resume"
                                title="Upload Your Bio">
                        </div>
                        <div class="mb-3 mt-3">
                            <textarea name="message" id="message" placeholder="Message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button class="btn-task">
                            Send
                        </button>
                    </form>
                </div>
                <div class="col-12 pt-5 text-center">
                    <h2>APOSTOLIC HUB CATEGORIES</h2>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-around py-5">
                    <table>
                        <tr>
                            <th>INTRODUCTION TO FIVEFOLD MINISTRY</th>
                        </tr>
                        <tr>
                            <td>APOSTLE</td>
                        </tr>
                        <tr>
                            <td>PROPHET</td>
                        </tr>
                        <tr>
                            <td>EVANGELIST</td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-around py-5">

                    <table>
                        <tr>
                            <th>INTRODUCTION TO FIVEFOLD MINISTRY</th>
                        </tr>
                        <tr>
                            <td>APOSTLE</td>
                        </tr>
                        <tr>
                            <td>PROPHET</td>
                        </tr>
                        <tr>
                            <td>EVANGELIST</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>INTRODUCTION TO FIVEFOLD MINISTRY</th>
                        </tr>
                        <tr>
                            <td>APOSTLE</td>
                        </tr>
                        <tr>
                            <td>PROPHET</td>
                        </tr>
                        <tr>
                            <td>EVANGELIST</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
