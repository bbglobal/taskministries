@extends('layouts.main')

@push('title')
    <title>Speaker-Teacher</title>
@endpush

@section('main-section')
    <section id="about">
        <div class="container">
            <div class="col-12 text-center head">
                <h1>Speaker-Teacher</h1>
            </div>
            <div class="row py-5">
                <div class="col-12 col-md-12 col-lg-4 py-5 text-center" style="margin: auto;">
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-7.jpg') }}" alt="image" width="100%">
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <p>Whether speaking and prohesying to women in Argentina, assisting
                        saints to find and assimilate their spiritual gifts, hosting conferences,
                        officiating homegoings, platforming renowned authors, seasoned
                        leaders, young up-coming evangelists, pastors, and teachers, activating
                        prophetic gifting, licensing ministers, officiating the ordaination,
                        affirmation and confirmation of fivefold offices, installing leaders,
                        equipping saints, laying hands for the impartation of ministry
                        anointing, mentoring young leaders for the perfecting of their call,
                        establishing apostolic hubs, authoring books and manuals...or raising
                        up spiritual sons and daughters or pulpit preaching...</p>
                    <p>... Apostle Paula has a mantle to</p>
                    <h4>Take Authority over Satan’s Kingdom!</h4>
                </div>

                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h3>T.A.S.K. ON THE MOVE</h3>
                    <p>“Hallelujah” is the word boldly heralded from Apostle Paula’s voice
                        each time she comesto the front line of ministry. The work of T.A.S.K.
                        Ministries International encompasses a blueprint of order,
                        organization and excellence that embraces a strategy for the strongest
                        impact against the abortion of a believer’s destiny. </p>
                    <p>The result of the impact can be evidenced with the issuing of over 100
                        Certificates of Completion to-date to hungry and thirsty FLTC students
                        since 2018, from teaching, training, and equipping, acknowledging of
                        intercessors, psalmists, ministers, affirming of apostles, confirming of
                        prophets, and ordaining of evangelists, pastors and teachers under
                        the ministry.
                    </p>
                    <p>All Glory and Praise goes to the King of Kings and Lord of Lords for the
                        manifestation of His favor, mercy and grace upon T.A.S.K. Ministries
                        International, Inc. as it continues to faithfully fulfill the apostolic
                        mantle and ministry vision.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5 text-center faded" style="margin: auto;">
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-2.jpg') }}" alt="image">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-3.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-4.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-5.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-6.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-8.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Speaker-9.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Pastor-Sherry-Ceremony.jpg') }}" alt="image"
                            width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Prayer-Ministry.jpg') }}" alt="image" width="100%">
                    </figure>
                    {{-- <figure>
                        <img src="{{ url('assets/images/frontend/argentina-01.jpg') }}" alt="image" width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/argentina-02.jpg') }}" alt="image" width="100%">
                    </figure> --}}
                </div>
                <div class="col-12 pt-5 text-center">
                    <h2>BOOKING WITH THE APOSTLE</h2>
                </div>
                <div class="wrapper">
                    <div class="body">
                        <div class="top">
                            <img src="{{ url('assets/images/frontend/indiana.png') }}" alt="image" width="150px">
                        </div>
                        <h4>Book a Discovery Call with Apostle Paula <br />
                            <a href="#">INDIANA</a>
                        </h4>
                    </div>
                    <div class="body">
                        <div class="top">
                            <img src="{{ url('assets/images/frontend/us.png') }}" alt="image" width="150px">
                        </div>
                        <h4>Book a Discovery Call with Apostle Paula <br />
                            <a href="#">UNITED STATES</a>
                        </h4>
                    </div>
                    <div class="body">
                        <div class="top">
                            <img src="{{ url('assets/images/frontend/globe.png') }}" alt="image" width="150px">
                        </div>
                        <h4>Book a Discovery Call with Apostle Paula <br />
                            <a href="#">GLOBAL</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
