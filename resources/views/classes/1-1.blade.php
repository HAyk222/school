@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/styleschedule.css">

    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_4.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">1-1</h1>
                                    <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-staff">
        <div class="container ">
            <div class="row" style="color: black ">
                <div class="col-md-3 text-center">
                    <div class="staff">
                        <div class="staff-img" style="background-image: url({{asset('images/teacher.JPG')}});">
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                                <li><a href="#"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                        <span>Our Teacher</span>
                        <h3><a href="#">Mike Smith</a></h3>
                        <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut
                            imperdiet nisi.</p>
                    </div>
                </div>
                <div class="col-md-9 text-center"style="text-align: justify">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <th colspan="3" scope="col">Աշակերտներ (1-1)

                            </th>

                        </tr>
                        <tr id="stud_4940359" class="items odd ">

                            <td style="width:10px; ">1. </td>
                            <td width="520">
                                Ալավերդյան Կարինա Ռոման
                            </td>

                        </tr>
                        <tr >

                            <td style="width:10px; ">2. </td>
                            <td width="520">
                                Աղաջանյան Նարինե Արշակ
                            </td>

                        </tr>
                        <tr id="stud_4940363" class="items odd ">

                            <td style="width:10px; ">3.</td>
                            <td width="520">
                                Բաբուջյան Գևորգ Ստեփան
                            </td>

                        </tr>
                        <tr id="stud_4940365" class="items odd ">

                            <td style="width:10px; ">4.</td>
                            <td width="520">
                                Գրիգորյան Ինեսա Արամ
                            </td>

                        </tr>
                        <tr id="stud_4940367" class="items odd ">

                            <td style="width:10px; ">5.</td>
                            <td width="520">
                                Գրիգորյան Մանուշակ Սուրեն
                            </td>

                        </tr>
                        <tr id="stud_4940369" class="items odd ">

                            <td style="width:10px; ">6.</td>
                            <td width="520">
                                Դարբինյան Սոնա Արշակ
                            </td>

                        </tr>
                        <tr id="stud_4940372" class="items  ">

                            <td style="width:10px; ">7.</td>
                            <td width="520">
                                Թամոյան Սևակ Ֆելիքս
                            </td>

                        </tr>
                        <tr id="stud_4940374" class="items  ">

                            <td style="width:10px; ">8.</td>
                            <td width="520">
                                Իսախանյան Հրանտ Հրայր
                            </td>

                        </tr>
                        <tr id="stud_4940376" class="items  ">

                            <td style="width:10px; ">9.</td>
                            <td width="520">
                                Կիրակոսյան Սուրեն Գարեգին
                            </td>

                        </tr>
                        <tr id="stud_4940378" class="items  ">

                            <td style="width:10px; ">10. </td>
                            <td width="520">
                                Հարությունյան Անգելինա Էդգար
                            </td>

                        </tr>
                        <tr id="stud_4940380" class="items  ">

                            <td style="width:10px; ">11. </td>
                            <td width="520">
                                Հարությունյան Գագիկ Արման
                            </td>

                        </tr>
                        <tr id="stud_4940382" class="items  ">

                            <td style="width:10px; ">12.</td>
                            <td width="520">
                                Դավթյան Վազգեն Ավետիքի
                            </td>

                        </tr>
                        <tr id="stud_4940386" class="items  ">

                            <td style="width:10px; ">13.</td>
                            <td width="520">
                                Եղիազարյան Ադրիանա Վահագնի
                            </td>

                        </tr>
                        <tr id="stud_4940388" class="items  ">

                            <td style="width:10px; ">1.</td>
                            <td width="520">
                                Երիցյան Քաջիկ Արմանի
                            </td>

                        </tr>
                        <tr id="stud_4940390" class="items  ">

                            <td style="width:10px; ">15.</td>
                            <td width="520">
                                Զիլֆուղարյան Մանե Գագիկի
                            </td>

                        </tr>
                        <tr id="stud_4940392" class="items  ">

                            <td style="width:10px; ">16.</td>
                            <td width="520">
                                Թադևոսյան Սուրեն Գարիկի
                            </td>

                        </tr>
                        <tr id="stud_4940394" class="items  ">

                            <td style="width:10px; ">17.</td>
                            <td width="520">
                                Թուրվանդյան Մարիաննա Էդուարդի
                            </td>

                        </tr>
                        <tr id="stud_4940399" class="items odd ">

                            <td style="width:10px; ">18.</td>
                            <td width="520">
                                Նարեկ Խաչատրյան Էդգարի
                            </td>

                        </tr>
                        <tr id="stud_4940401" class="items odd ">

                            <td style="width:10px; ">19. </td>
                            <td width="520">
                                Վիկտորիա Խոդնևա Վլադիմիր
                            </td>

                        </tr>
                        <tr id="stud_4940405" class="items odd ">

                            <td style="width:10px; ">20. </td>
                            <td width="520">
                                Խուլյան Գոռ Մեսրոպ
                            </td>

                        </tr>
                        <tr id="stud_4940408" class="items  ">

                            <td style="width:10px; ">21. </td>
                            <td width="520">
                                Կարապետյան Գայանե Արթուր
                            </td>

                        </tr>
                        <tr id="stud_4940412" class="items  ">

                            <td style="width:10px; ">22. </td>
                            <td width="520">
                                Կարապետյան Վահագն Վարդանի
                            </td>

                        </tr>
                        <tr id="stud_4940414" class="items  ">

                            <td style="width:10px; ">23. </td>
                            <td width="520">
                                Հարությունյան Կարինա Արամե
                            </td>

                        </tr>
                        <tr id="stud_4940417" class="items odd ">

                            <td style="width:10px; ">24. </td>
                            <td width="520">
                                Հովհաննիսյան Սյուզաննա Արտակ
                            </td>

                        </tr>
                        <tr id="stud_4940450" class="items  ">

                            <td style="width:10px; ">25. </td>
                            <td width="520">
                                Ղևենյան Գրիգոր Արամե
                            </td>

                        </tr>
                        <tr id="stud_4940454" class="items  ">

                            <td style="width:10px; ">26.</td>
                            <td width="520">
                                Մանասյան Դայանա Վաչագան
                            </td>

                        </tr>
                        <tr id="stud_4940458" class="items  ">

                            <td style="width:10px; ">27.</td>
                            <td width="520">
                                Մեսրոպյան Էրիկ Սարգիս
                            </td>

                        </tr>
                        <tr id="stud_4940462" class="items  ">

                            <td style="width:10px; ">28.</td>
                            <td width="520">
                                Մինասյան Ռիտա Արտեմ
                            </td>

                        </tr>
                        <tr id="stud_4940465" class="items odd ">

                            <td style="width:10px; ">29.</td>
                            <td width="520">
                                Մկրտչյան Էլենա Վահան
                            </td>

                        </tr>
                        <tr id="stud_4940469" class="items odd ">

                            <td style="width:10px; ">30.</td>
                            <td width="520">
                                Նավասարդյան Աննա Էդգար
                            </td>

                        </tr>
                        <tr id="stud_4940656" class="items  ">

                            <td style="width:10px; ">31.</td>
                            <td width="520">
                                Ներսիսյան Ալեքս Արթուր
                            </td>
                            <td class="action">


                        </tr>
                        <tr id="stud_4940658" class="items  ">

                            <td style="width:10px; ">32.</td>
                            <td width="520">
                                Սարգիսյան Վոլոդյա Պապ
                            </td>

                        </tr>
                        <tr id="stud_4940660" class="items  ">

                            <td style="width:10px; ">33.</td>
                            <td width="520">
                                Վանյան Լիլի Վահագն
                            </td>

                        </tr>
                        <tr id="stud_4940664" class="items  ">

                            <td style="width:10px; ">34.</td>
                            <td width="520">
                                Քոսակյան Մարիետա Արտակ
                            </td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--Schedule--}}

    <div class="cd-schedule loading">
        <div class="timeline">
            <ul style="font: larger bold ">
                <li><span>08:30</span></li>
                <li><span>09:00</span></li>
                <li><span>09:30</span></li>
                <li><span>10:00</span></li>
                <li><span>10:30</span></li>
                <li><span>11:00</span></li>
                <li><span>11:30</span></li>
                <li><span>12:00</span></li>
                <li><span>12:30</span></li>
                <li><span>13:00</span></li>
                <li><span>13:30</span></li>
                <li><span>14:00</span></li>
                <li><span>14:30</span></li>
                <li><span>15:00</span></li>
            </ul>
        </div> <!-- .timeline -->

        <div class="events" style="text-align: center;">
            <ul>
                <li class="events-group">
                    <div class="top-info"><span>Երկուշաբթի</span></div>

                    <ul>
                        <li class="single-event" data-start="08:30" data-end="9:15" data-content="schedule.armenian"
                            data-event="event-1">
                            <a href="#">
                                <em class="event-name">Հայոց լեզու և գրականություն</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="9:20" data-end="10:05" data-content="schedule.mathematics"
                            data-event="event-2">
                            <a href="#">
                                <em class="event-name">Մաթեմատիկա</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:10" data-end="10:55" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:05" data-end="11:50" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="12:50" data-end="13:30" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="13:35" data-end="14:20" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Երեքշաբթի</span></div>

                    <ul>
                        <li class="single-event" data-start="08:30" data-end="9:15" data-content="schedule.armenian"
                            data-event="event-1">
                            <a href="#">
                                <em class="event-name">Հայոց լեզու և գրականություն</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="9:20" data-end="10:05" data-content="schedule.mathematics"
                            data-event="event-2">
                            <a href="#">
                                <em class="event-name">Մաթեմատիկա</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:10" data-end="10:55" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:05" data-end="11:50" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.russian"
                            data-event="event-4">
                            <a href="#">
                                <em class="event-name">Ռուսաց լեզու և գրականություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="12:50" data-end="13:30" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="13:35" data-end="14:20" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Չորեքշաբթի</span></div>

                    <ul>
                        <li class="single-event" data-start="08:30" data-end="9:15" data-content="schedule.armenian"
                            data-event="event-1">
                            <a href="#">
                                <em class="event-name">Հայոց լեզու և գրականություն</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="9:20" data-end="10:05" data-content="schedule.mathematics"
                            data-event="event-2">
                            <a href="#">
                                <em class="event-name">Մաթեմատիկա</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:10" data-end="10:55" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:05" data-end="11:50" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.russian"
                            data-event="event-4">
                            <a href="#">
                                <em class="event-name">Ռուսաց լեզու և գրականություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="13:35" data-end="14:20" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Հինգշաբթի</span></div>

                    <ul>
                        <li class="single-event" data-start="08:30" data-end="9:15" data-content="schedule.armenian"
                            data-event="event-1">
                            <a href="#">
                                <em class="event-name">Հայոց լեզու և գրականություն</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="9:20" data-end="10:05" data-content="schedule.mathematics"
                            data-event="event-2">
                            <a href="#">
                                <em class="event-name">Մաթեմատիկա</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:10" data-end="10:55" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:05" data-end="11:50" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.russian"
                            data-event="event-4">
                            <a href="#">
                                <em class="event-name">Ռուսաց լեզու և գրականություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="12:50" data-end="13:30" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="13:35" data-end="14:20" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Ուրբաթ</span></div>

                    <ul>
                        <li class="single-event" data-start="08:30" data-end="9:15" data-content="schedule.armenian"
                            data-event="event-1">
                            <a href="#">
                                <em class="event-name">Հայոց լեզու և գրականություն</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="9:20" data-end="10:05" data-content="schedule.mathematics"
                            data-event="event-2">
                            <a href="#">
                                <em class="event-name">Մաթեմատիկա</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:10" data-end="10:55" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:05" data-end="11:50" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="11:55" data-end="12:40" data-content="schedule.russian"
                            data-event="event-4">
                            <a href="#">
                                <em class="event-name">Ռուսաց լեզու և գրականություն</em>
                            </a>
                        </li>
                        <li class="single-event" data-start="13:35" data-end="14:20" data-content="schedule.history"
                            data-event="event-3">
                            <a href="#">
                                <em class="event-name">Հայոց պատմություն</em>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="event-modal">
            <header class="header">
                <div class="content">
                    <span class="event-date"></span>
                    <h3 class="event-name"></h3>
                </div>

                <div class="header-bg"></div>
            </header>

            <div class="body">
                <div class="event-info"></div>
                <div class="body-bg"></div>
            </div>

            <a href="#" class="close">Close</a>
        </div>

        <div class="cover-layer"></div>
    </div> <!-- .cd-schedule -->





    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay" style="background-image: linear-gradient(black, grey);"></div>
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
                            <span class="fh5co-counter-label">Guys</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-user"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="2139" data-speed="5000"
                                  data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Girls</span>
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
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script>
        if (!window.jQuery) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
    </script>
    <script src="js/schedule.js"></script>
@stop