@extends('layouts.main')

@push('title')
    <title>Ministry</title>
@endpush

@section('main-section')
    <section id="about">

        <div class="col-12 text-center" id="author">
            <small style="font-size: 32px;" class="text-center">Author</small>
            <span style="width:120px; margin:auto; height:3px; background:#000; display:block;"></span>
            <h1 class="text-center">Apostle Paula Wellings</h1>
        </div>

        <div class="bg-dark p-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 book-cover-wrapper">
                    <figure class="book-cover">
                        <img src="{{ url('assets/images/frontend/frontCover.png') }}" alt="Book Cover">
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin:auto;">
                    <h3 class="title text-white">Aborted Destinies</h3>
                    <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="author-wrapper row">
                <div class="pic col-12 col-md-12 col-lg-6"></div>
                <div class="intro col-12 col-md-12 col-lg-6">
                    <small style="font-size: 32px;" class="text-center">My Story</small>
                    <span style="width:120px; height:3px; background:#ffffff;"></span>
                    <br />
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit sequi placeat labore. Aliquid autem
                    qui
                    doloribus libero sunt quas reprehenderit laudantium reiciendis voluptatem. Fuga sint, architecto aperiam
                    atque voluptate dolorum molestias voluptatem quos expedita tempore aut doloremque qui. Nostrum aliquam,
                    quibusdam consectetur dignissimos expedita sed nulla exercitationem quam numquam est quasi eveniet vel
                    blanditiis, in ipsum. Numquam exercitationem qui non molestiae est sint, corrupti minus perspiciatis
                    commodi
                    aut rerum voluptate eveniet placeat sit dignissimos similique reprehenderit ullam fuga. Consectetur
                    voluptatem pariatur praesentium quod magnam magni saepe, delectus tempora, ducimus assumenda ut ea.
                    Quidem
                    veritatis sint accusantium dolore, ullam nisi consequatur.
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row py-5">
                <small style="font-size: 32px;" class="text-center">My Book</small>
                <span style="width:120px; margin:auto; height:3px; background:#000;"></span>

                <div class="books-wrapper">
                    <div id="book" class="books mt-5">
                        <div class="front-cover">
                            {{-- <img src="{{ url('assets/images/frontend/frontCover.png') }}" alt="Front Cover"> --}}
                        </div>
                        <div class="table-of-contents">
                            <h3 style="font-family: TaksMinistries Inkfree;">Table of Contents</h3>
                            <ol>
                                <li><strong>Chapter 1: </strong> <span style="font-family: TaksMinistries Inkfree;">Separate
                                        and Slay</span> </li>
                                <li><strong>Chapter 2: </strong> <span style="font-family: TaksMinistries Inkfree;">Three
                                        Prophet Warnings Later</span> </li>
                                <li><strong>Chapter 3: </strong> <span style="font-family: TaksMinistries Inkfree;">Satan’s
                                        Plan for Abortion</span> </li>
                                <li><strong>Chapter 4: </strong> <span style="font-family: TaksMinistries Inkfree;">Destiny
                                        Abduction</span> </li>
                                <li><strong>Chapter 5: </strong> <span style="font-family: TaksMinistries Inkfree;">The Cost
                                        of Running</span> </li>
                                <li><strong>Chapter 6: </strong> <span style="font-family: TaksMinistries Inkfree;">The Fear
                                        of Inadequacy (aka Land The Plane)</span></li>
                                <li><strong>Chapter 7: </strong> <span style="font-family: TaksMinistries Inkfree;">Abortion
                                        By Avoidance</span> </li>
                                <li><strong>Chapter 8: </strong> <span style="font-family: TaksMinistries Inkfree;">The
                                        Voice of the Aborter</span> </li>
                                <li><strong>Chapter 9: </strong> <span style="font-family: TaksMinistries Inkfree;">Who’s
                                        Leading</span> </li>
                                <li><strong>Chapter 10:</strong> <span style="font-family: TaksMinistries Inkfree;">No
                                        Compromise</span> </li>
                                <li><strong>Chapter 11:</strong> <span style="font-family: TaksMinistries Inkfree;">Strayed
                                        from Virtue</span> </li>
                                <li><strong>Chapter 12:</strong> <span style="font-family: TaksMinistries Inkfree;">Abortion
                                        by Association</span> </li>
                                <li><strong>Chapter 13:</strong> <span
                                        style="font-family: TaksMinistries Inkfree;">Sabotaged by Your Own Choices</span>
                                </li>
                                <li><strong>Chapter 14:</strong> <span
                                        style="font-family: TaksMinistries Inkfree;">Overstepping Authority</span> </li>
                                <li><strong>Chapter 15:</strong> <span style="font-family: TaksMinistries Inkfree;">The
                                        Impact of Destiny</span> </li>
                                <li><strong>Chapter 16:</strong> <span style="font-family: TaksMinistries Inkfree;">Where
                                        the Rubber Meets the Road</span></li>
                            </ol>
                        </div>
                        <div class="intro-page">
                            <h3 style="font-family: TaksMinistries Inkfree;">Introduction</h3>
                            <p>
                                [The Millenium Falcon is speeding away from Tatooine, being chased by Imperial cruisers]
                                <br>

                                <strong>Han Solo:</strong> Stay sharp! There are two more coming in. They're going to try to
                                cut us off. <br>

                                <strong>Luke Skywalker:</strong> Why don't you outrun them? I thought you said this thing
                                was
                                fast! <br>

                                <strong>Han Solo:</strong> Watch your mouth, kid, or you'll find yourself floating home!
                                We'll be safe once
                                we make the jump to hyperspace. Besides, I know a few maneuvers. We'll lose them. This is
                                where the fun begins. <br>

                                <strong>Ben Kenobi:</strong> How long before you make the jump to lightspeed? <br>

                                <strong>Han Solo:</strong> It'll take a few moments to get the coordinates from the Navi
                                computer. <br>

                                <strong>Luke Skywalker:</strong> [frantic] Are you kidding? At the rate they're gaining—
                                <br>

                                <strong>Han Solo:</strong> Traveling through hyperspace ain't like dusting crops, boy! <br>
                                Without precise
                                calculations we could fly right through a star or bounce too close to a supernova and that'd
                                end your trip real quick, wouldn't it? <br>

                                <strong>Luke Skywalker:</strong> [points to an alarm on the control panel] What's that
                                flashing? <br>

                                <strong>Han Solo:</strong> We're losing our deflector shield! Go strap yourself in, I'm
                                going
                                to make the
                                jump to light speed. <br>

                                Sound familiar? You’ve just preached under a powerful anointing – brought deep revelation
                                inspired by the power of Holy Spirit working through you – released supernatural
                                manifestations of signs, wonders and miracles by the laying on of hands – prophetic words
                                spoken have restored broken lives and brought deliverance from the power of their demons!
                                <br>


                                Stay sharp because hot on your trail come retaliating, sabotaging troops (Imperial Cruisers)
                                in an attempt to cut you up and steal what the Lord has done! Will you try to outrun them?
                                No! Now is the time to “watch your mouth” because what you say and how you respond will
                                determine whether you encounter solid mass and maneuver too closely causing an explosion
                                that will send shrouds of sharp shrapnel in your sphere of influence! Will you jump to light
                                speed? With precise calculations, if you “PUNCH IT”, you will be sent into the realm of His
                                Spirit where your deflector shields of the armor of God, prayer, the dunamis and kratos
                                power of God, and an army of heavenly angels await to fight on your behalf! <br>

                                So, GO! Strap yourself in – strengthen your resolve – fulfill your destiny – make the jump
                                to light speed!!
                            </p>
                        </div>
                        <div class="back-cover">Back Cover</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script>
        $('#book').turn({
            gradients: true,
            acceleration: true
        });
    </script>
@endsection
