@extends('layouts.app')


@section('content')




    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('../images/School11-01(1).JPG')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
                                    <p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('../images/School11-01(2).JPG')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>The Great Aim of Education is not Knowledge, But Action</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('../images/School11-01(3).JPG')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>We Help You to Learn New Things</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Subjects</h2>
                    <p>Subjects include a range of exercises, tests, and theoretical material from various subjects and
                        themes.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                            <span class="icon">
                            <i class="icon-shop"></i>
                            </span>
                        <div class="desc">
                            <h3><a href="#">Armenian Language and Literature</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                        <i class="icon-heart4"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Russian Language and Literature</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                       <span class="icon">
                          <i class="icon-pencil"></i>
                       </span>
                        <div class="desc">
                            <h3><a href="#">Mathematics and geometry</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                        <i class="icon-book"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Armenian and world history</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                            <span class="icon">
                            <i class="icon-music2"></i>
                            </span>
                        <div class="desc">
                            <h3><a href="#">Art and Music</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                           <i class="icon-home-outline"></i>
                         </span>
                        <div class="desc">
                            <h3><a href="#">Chemistry and physics</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                           <i class="icon-power"></i>
                         </span>
                        <div class="desc">
                            <h3><a href="#">Physical culture</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
                         <span class="icon">
                           <i class="icon-world"></i>
                         </span>
                        <div class="desc">
                            <h3><a href="#">Informatics</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay" style="background-image: linear-gradient(red, blue,orange);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-business-card"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="27" data-speed="5000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Subjects</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-study"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="200" data-speed="5000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Students Enrolled</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-user"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="2139" data-speed="5000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Pupils</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-head"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="151" data-speed="5000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Certified Teachers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div id="fh5co-course">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">--}}
                    {{--<h2>Our Course</h2>--}}
                    {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.--}}
                        {{--Odit ab aliquam dolor eius.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 animate-box">--}}
                    {{--<div class="course">--}}
                        {{--<a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">--}}
                        {{--</a>--}}
                        {{--<div class="desc">--}}
                            {{--<h3><a href="#">Web Master</a></h3>--}}
                            {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem--}}
                                {{--provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab--}}
                                {{--aliquam dolor eius.</p>--}}
                            {{--<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 animate-box">--}}
                    {{--<div class="course">--}}
                        {{--<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">--}}
                        {{--</a>--}}
                        {{--<div class="desc">--}}
                            {{--<h3><a href="#">Business &amp; Accounting</a></h3>--}}
                            {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem--}}
                                {{--provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab--}}
                                {{--aliquam dolor eius.</p>--}}
                            {{--<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 animate-box">--}}
                    {{--<div class="course">--}}
                        {{--<a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">--}}
                        {{--</a>--}}
                        {{--<div class="desc">--}}
                            {{--<h3><a href="#">Science &amp; Technology</a></h3>--}}
                            {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem--}}
                                {{--provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab--}}
                                {{--aliquam dolor eius.</p>--}}
                            {{--<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 animate-box">--}}
                    {{--<div class="course">--}}
                        {{--<a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">--}}
                        {{--</a>--}}
                        {{--<div class="desc">--}}
                            {{--<h3><a href="#">Health &amp; Psychology</a></h3>--}}
                            {{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem--}}
                                {{--provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab--}}
                                {{--aliquam dolor eius.</p>--}}
                            {{--<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <br>
    <br> <h2 style="text-align: center; font-family:Roboto Slab , serif;
    font-weight: 400; margin: 0 0 20px 0;">Timeline</h2>
    <br>
    {{--Timeline--}}

    <div style="background-color: forestgreen;
    box-sizing: border-box;
    width: 800px;
    height:600px;
    border: 25px solid coral;
    box-shadow: inset 10px 10px 10px 10px darkgreen;
    padding: 25px;
    margin: auto;"
    >
        {{--<canvas id="myCanvas1" width="25" height="25" style="border:0;">--}}
        {{--</canvas>--}}
        {{--<script>--}}

        {{--var a = document.getElementById("myCanvas1");--}}
        {{--var ctx = a.getContext("2d");--}}
        {{--ctx.beginPath();--}}
        {{--ctx.moveTo(0, 0);--}}
        {{--ctx.lineTo(25, 25);--}}
        {{--ctx.stroke();--}}
        {{--</script>--}}
        {{--<canvas id="myCanvas2" width="25" height="25" style="border:0;">--}}
        {{--</canvas>--}}
        {{--<script>--}}
        {{--var b = document.getElementById("myCanvas2");--}}
        {{--var ctx = b.getContext("2d");--}}
        {{--ctx.beginPath();--}}
        {{--ctx.moveTo(800, 0);--}}
        {{--ctx.lineTo(775, 25);--}}
        {{--ctx.stroke();--}}
        {{--</script>--}}
        {{--<canvas id="myCanvas3" width="25" height="25" style="border:0;">--}}
        {{--</canvas>--}}
        {{--<script>--}}
        {{--var c = document.getElementById("myCanvas3");--}}
        {{--var ctx = c.getContext("2d");--}}
        {{--ctx.beginPath();--}}
        {{--ctx.moveTo(800, 600);--}}
        {{--ctx.lineTo(775, 575);--}}
        {{--ctx.stroke();--}}
        {{--</script>--}}
        {{--<canvas id="myCanvas4" width="25" height="25" style="border:0;">--}}
        {{--</canvas>--}}

        {{--<script>--}}
        {{--var d = document.getElementById("myCanvas4");--}}
        {{--var ctx = d.getContext("2d");--}}
        {{--ctx.beginPath();--}}
        {{--ctx.moveTo(0, 600);--}}
        {{--ctx.lineTo(25, 575);--}}
        {{--ctx.stroke();--}}
        {{--</script>--}}

        <br>

        <table style="font-family: SoStar ;color:white; font-size: 30px ; font-weight:bold; text-align: center; margin: auto; padding-top:30px  ">
            <thead>
            <tr>
                <td>Class</td>
                <td>Hour</td>
                <td>Brake</td>
            </tr>

            </thead>
            <tbody>
            <tr>
                <td>1-ին</td>
                <td>8։30 - 9։15</td>
                <td>5</td>
            </tr>
            <tr>
                <td>2-րդ</td>
                <td>9։20 - 10։05</td>
                <td>5</td>
            </tr>
            <tr>
                <td>3-րդ</td>
                <td>10։15 - 11։00</td>
                <td>10</td>
            </tr>
            <tr>
                <td>4-րդ</td>
                <td>11։05 - 11։50</td>
                <td>5</td>
            </tr>
            <tr>
                <td>5-րդ</td>
                <td>12։00 - 12։45</td>
                <td>10</td>
            </tr>
            <tr>
                <td>6-րդ</td>
                <td>12։50 - 13։35</td>
                <td>5</td>
            </tr>

            <tr>
                <td>7-րդ</td>
                <td>13։40 - 14։25</td>
                <td>5</td>
            </tr>
            </tbody>
        </table>
    </div>
    {{--Timeline--}}

    <br><br><br>
    <div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2><span>Testimonials</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(images/person1.jpg);"></div>
                                    <span>Mary Walker<br><small>Students</small></span>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(images/person2.jpg);"></div>
                                    <span>Mike Smith<br><small>Students</small></span>
                                    <blockquote>
                                        <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(images/person3.jpg);"></div>
                                    <span>Rita Jones<br><small>Teacher</small></span>
                                    <blockquote>
                                        <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Blog &amp; Events</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row row-padded-mb">
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">New Device Develope by Microsoft</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Facebook Gallery</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-padded">
                <a href="https://www.facebook.com/610279226004786/photos/a.610294269336615/752828805083160/?type=3&theater"
                   class="gallery"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="https://www.facebook.com/610279226004786/photos/a.610294269336615/751884255177615/?type=3&theater"
                   class="gallery"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="https://www.facebook.com/610279226004786/photos/a.610294269336615/751883941844313/?type=3&theater"
                   class="gallery"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="https://www.facebook.com/610279226004786/photos/a.610294269336615/747901468909227/?type=3&theater"
                   class="gallery"></a>
            </div>
        </div>
    </div>


    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
@stop

