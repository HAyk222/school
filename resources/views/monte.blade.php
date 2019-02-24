@extends('layouts.app')
@section('content')

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-6 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section" style="font-size: xx-large"><a
                                                href="https://en.wikipedia.org/wiki/Monte_Melkonian" target="_blank"
                                                style="color:white">Monte
                                            Melkonyan</a></h1>
                                    <h2>
                                        Don't drink my toast, but continue my work.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-about">
        <div class="container">
            <div class="col-md-6 animate-box">
                <h1>MONTE “AVO” MELKONIAN, COMMANDER OF ARTSAKH WAR FOR INDEPENDENCE</h1>
                <h2>“If we lose Artsakh, we turn the final page of Armenian history…”</h2>
                <p>Monte Melkonian was an Armenian-American volunteer and commander in the Artsakh (Nagorno-Karabakh)
                    War for Independence, where he died in battle. He is remembered as personifying the indomitable
                    spirit with which Armenians achieved victory against the odds and liberated part of the historic
                    Armenian homeland, Artsakh. </p>
                <p>Born and raised in the Central Valley of California, he hardly spoke Armenian and was not very
                    connected to his identity in his youth. After college, where his sentiments about Armenians were
                    aroused, he turned down admission to a doctoral program at Oxford University to go to the Middle
                    East.</p>
                <p>During his time in Iran and Lebanon, Melkonian, a staunch socialist, fought both for social justice
                    and in defense of Diaspora Armenian communities. He would eventually settle in Armenia, still under
                    Soviet rule but about to become independent. As he got news of Armenian pogroms in Azerbaijan and
                    the increasing hostilities toward Armenian populations in Artsakh, Melkonian left for the front,
                    convinced that if Armenians lost that land, the rest of Armenia would soon be consumed by attacking
                    Azerbaijanis and Turks. </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/img_bg_2.jpg" alt="Monte Melkonyan">
            </div>
        </div>
    </div>

    <div>
        <h1 style="text-align: center; font-size: 50px">Documentary films about AVO</h1>
        {{--<video width="40%" height="500" controls style="margin-right:10%; margin-left: 5%">--}}
            {{--<source src="https://youtu.be/i7jT6V9gYno" type="video/mp4">--}}
        {{--</video>--}}
        {{--<video width="40%" height="450" controls>--}}
            {{--<source src="https://youtu.be/M21UkfMcBms" type="video/mp4">--}}
        {{--</video>--}}

        <iframe width="560" height="315" margin-right="30%" src="https://www.youtube.com/embed/i7jT6V9gYno" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/M21UkfMcBms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </iframe>
    </div>

    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="row">--}}
                {{--<div class="col-md-3 col-sm-6 text-center animate-box">--}}
                {{--<span class="icon"><i class="icon-world"></i></span>--}}
                {{--<span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000"--}}
                {{--data-refresh-interval="50"></span>--}}
                {{--<span class="fh5co-counter-label">Foreign Followers</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 text-center animate-box">--}}
                {{--<span class="icon"><i class="icon-study"></i></span>--}}
                {{--<span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000"--}}
                {{--data-refresh-interval="50"></span>--}}
                {{--<span class="fh5co-counter-label">Students Enrolled</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 text-center animate-box">--}}
                {{--<span class="icon"><i class="icon-bulb"></i></span>--}}
                {{--<span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000"--}}
                {{--data-refresh-interval="50"></span>--}}
                {{--<span class="fh5co-counter-label">Classes Complete</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 text-center animate-box">--}}
                {{--<span class="icon"><i class="icon-head"></i></span>--}}
                {{--<span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000"--}}
                {{--data-refresh-interval="50"></span>--}}
                {{--<span class="fh5co-counter-label">Certified Teachers</span>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    </div>

    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12  text-center fh5co-heading">
                    <h1>Stories about AVO <br>(Monte Melkonian)</h1>
                    <h2 class="col-md-4  text-center">
                        "One of Monte's soldiers comes in during the march.
                        - Commander, there is an enemy tank on the battlefield, what should we do?
                        Monte replies:
                        - No, go and catch the tank.
                        And the soldiers go down the tank. When Monte came out, he said,
                        "You're a donkey, who gave you the right to fire?" (His most dirtiest word was "Eshun One"). Get
                        out of the tank.
                        When the soldiers came out of the tank, Monte asked them who they were.

                        "Who are you?"
                        - I am the commander.
                        "You are not a commander, you're a donkey.
                        "Who are you?"
                        - I'm a shooter.
                        "You are not a shooter, you're a donkey.
                        "Who are you?"
                        The third soldier, the mechanic-driver of the tank, says:
                        "Monte jane, I'm a donkey.
                        "No, you're not a donkey, you're a donkey."

                        PS Happy birthday, the cleanest, the most devout Armenian type, National Hero Monte Melkonian.
                        Your glory is in our hearts, Through the vision of the creation of the All-Humble Armenian
                        nation."</h2>
                    <h2 class="col-md-4  text-center">
                        Gagik, a fighter from Proshyan, talked about a meeting with <br><br>

                        "In 1992, we were going to Shahumyan with my commander Karot and they were also going. I ask who
                        my commanders are, Jirayr Sefilyan replied, Monte, Monte ... I saluted and talked.

                        Most of all I appreciate his military spirit. He was just a military spirit, so inspired by the
                        boy guys that ... (trembling-Razminoff). His Behavior, Psychology ... Those who say "humble
                        heroes" are humble characters. "
                    </h2>
                    <h2 class="col-md-4  text-center">
                        Gagik, a fighter from Proshyan, talked about a meeting with <br><br>

                        "In 1992, we were going to Shahumyan with my commander Karot and they were also going. I ask who
                        my commanders are, Jirayr Sefilyan replied, Monte, Monte ... I saluted and talked.

                        Most of all I appreciate his military spirit. He was just a military spirit, so inspired by the
                        boy guys that ... (trembling-Razminoff). His Behavior, Psychology ... Those who say "humble
                        heroes" are humble characters. "
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="overlay" style="background-image: linear-gradient(red, blue,orange);"></div>

            <div class="row">
                <p style="color: white;font-weight: bold">The generation must be educated through ideas, not violent. </p>
                <br>
                <h2 style="color: white;font-weight: bold">Monte Melkonian</h2>
            </div>
        </div>
    </div>

    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Gallery</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-5.jpg); height: 520px"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-2.jpg); height: 520px"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-3.jpg); height: 520px"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(images/project-4.jpg); height: 520px"></a>
            </div>
        </div>
    </div>


@stop