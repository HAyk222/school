@extends('layouts.app')
@section('content')

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">Our Faculty</h1>
                                    <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-staff">
        <div class="container">
            <div class="row">
                <?php foreach($data as $key=>$k) { ?>
                    <div class="col-md-3 animate-box text-center">
                        <div class="staff">
                            <div class="staff-img" style="background-image: url(images/staff-2.jpg);">
                                <img src="http://<?php
                                echo $_SERVER['HTTP_HOST']; ?>/upload/<?php print $k->nkar; ?>" alt="<?php print $k->name; ?>">
                                {{--<ul class="fh5co-social">--}}
                                    {{--<li><a href="#"><i class="icon-facebook2"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="icon-twitter2"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="icon-dribbble2"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="icon-github"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                            <span><?php print $k->pashton; ?></span>
                            <h3><a href="#"><?php print $k->name; ?></a></h3>
                            <h3><a href="#"><?php print $k->surname; ?></a></h3>
                            {{--<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>--}}
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="date-counter text-center">
                    <h2>Get 400 of Online Courses for Free</h2>
                    <h3>By Mike Smith</h3>
                    <div class="simply-countdown simply-countdown-one"></div>
                    <p><strong>Limited Offer, Hurry Up!</strong></p>
                    <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
                </div>
            </div>
        </div>
    </div>

@stop