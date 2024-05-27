@extends('layouts.main')

@push('title')
    <title>Designs of Excellence</title>
@endpush

@section('main-section')
    <section id="conference">
        <div class="col-12 text-center head">
            <h1>Designs of Excellence</h1>
        </div>


        <div class="container">
            <div class="excelence">
                <figure>
                    <img src="{{ url('assets/images/frontend/excelence.jpg') }}" alt="image" width="100%">
                </figure>
            </div>
            <div class="row py-5">
                <div class="col-12 col-md-6 col-lg-8" style="margin: auto;">
                    <h2>IN THE BEGINNING</h2>
                    <p>I remember the first time I was inspired to create something from nothing
                        but a prophetic vision. Through trial and error and many hours later, when
                        the design was finished and met the satisfaction of the visionary, it
                        ultimately became the ministry logo of my first church plant.</p>
                    <p>Continued requests from repeat customers, as well as by word-of-mouth
                        have led to many personal Holy Spirit-inspired designs, as well as by ministries
                        and organizations birthed a platform called Designs of Excellence.</p>
                    <p>A collection of design types can be found simply clicking below. To speak with me about a
                        design need, please send an email through the Contact Us page.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-2" style="margin: auto;">
                    <figure>
                        <img src="{{ url('assets/images/frontend/conference.png') }}" alt="image" width="100%">
                    </figure>
                </div>
                <div class="col-12 py-5">
                    <h2>Designs</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h5>
                        <u>Professionally Created Designs</u>
                        <i class="fa fa-chevron-down"></i>
                    </h5>
                    <ul>
                        <li>
                            <p>Bookmarks</p>
                        </li>
                        <li>
                            <p>Name Badges</p>
                        </li>
                        <li>
                            <p>Flyers</p>
                        </li>
                        <li>
                            <p>Logos</p>
                        </li>
                        <li>
                            <p>Power Points (Intro Loop/P&amp;W)</p>
                        </li>
                        <li>
                            <p>Workbooks</p>
                        </li>
                        <li>
                            <p>Backdorps &amp; Banners</p>
                        </li>
                        <li>
                            <p>Wedding Bulletins, Menus</p>
                        </li>
                        <li>
                            <p>Authored Book Covers / Book Cover Design</p>
                        </li>
                        <li>
                            <p>Ministry/Corporate/Brochures</p>
                        </li>
                        <li>
                            <p>Ministry School Programs</p>
                        </li>
                        <li>
                            <p>Business Cards</p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h5>
                        <u>Affirmation/Confirmation/Ordination</u>
                        <i class="fa fa-chevron-down"></i>
                    </h5>
                    <ul>
                        <li>
                            <p>Announcements/Program Brochures Certificates</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
