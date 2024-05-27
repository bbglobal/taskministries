@extends('layouts.main')
@push('title')
    <title>About</title>
@endpush
@section('main-section')
    <section id="about">
        <div class="container">
            <div class="col-12 text-center head">
                <h1 class="Felixti">
                    <strong>WELCOME TO T.A.S.K. MINISTRIES <br />
                        INTERNATIONAL, INC.! </strong>
                </h1>
            </div>
            <div class="row py-5">
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p class="inkFree">
                        <strong>
                            <q>
                                As one who has been called by the
                                pre-destination of a Godly inheritance to fulfill
                                the purpose of giving Glory to the One who called
                                us, it is by this privilege and honor that I walk
                                out the ox-plowing anointing of the Apostle.
                                A call of destiny
                            </q>
                        </strong>
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 text-center py-5">
                    <img src="{{ url('assets/images/frontend/about-01.jpg') }}" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6 text-center py-5 faded" style="margin: auto;">
                    <figure>
                        <img src="{{ url('assets/images/frontend/sword-logo.png') }}" alt="image" style="margin: auto;"
                            width="100%">
                    </figure>
                    <figure>
                        <img src="{{ url('assets/images/frontend/Home-22.jpeg') }}" alt="image" style="margin: auto;"
                            width="100%">
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p><a href="mailto:info@taskministries.org">(www.taskministries.org [or] www.TASKMI.org)</a> offers a
                        site of ministry plethora for leaders,
                        students, Believers by . utilizing its tools to teach, train and equip <abbr
                            title="Five Fold Leadership Training Center">(FLTC)</abbr>.</p>
                    <p>Newly TASKMI Apostolic Hubs are being established in five state locations! If you are interested
                        in becoming a part of, or overseeing an Apostolic Hub, simply click on a location nearest you
                        and complete the form provided.</p>
                    <p>Designs of Excellence offers Holy Spirit-inspired professionally created designs for your
                        ministry, a home going, conference, wedding, business, along with ordination, affirmation or
                        confirmation announcements, program brochures and ministry certificates.</p>
                    <p>Anointed and gifted as an Apostle and Teacher, <a
                            href="{{ asset('assets/images/material/Apostle-Paula-Wellings-Bio.pdf') }}"
                            target="_blank">*Apostle Paula</a> welcomes the opportunity for
                        event speaking invitations and/or to bring a teaching to leadership. A contact form is provided.
                        Apostle’s newly published book, Aborted Destinies, will be available soon! Be sure to order
                        your copy or send a coaching session invitation for a book-signing event!</p>
                    <p>Kingdom Inspirations, LLC, an e-commerce greeting card ministry invites you to shop for alloccasion
                        fivefold ascension greeting cards. Choose from single boxes of 12 or your choice of a
                        “Ready-Box.”</p>
                    <p><abbr title="Taking Authority over Satan's Kingdom">T.A.S.K.</abbr> Ministries International is here
                        for you!</p>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
