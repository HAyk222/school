<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School 11 &mdash; after Monte Melqonyan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="11school after Monte Melqonyan"/>
    <meta name="keywords"
          content="11school"/>


    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/School.ico')}}"/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <!-- Pricing -->
    <link rel="stylesheet" href="{{asset('css/pricing.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>


{{--<div style="background-color: #2c1613">--}}
    {{--<h3 style="text-align: center; color: #fff  "> Hargeli ayceluner kayqi barelavman hamar--}}
        {{--tarvum en ashxatanqner,ayd isk patcharov hnaravor e vorosh   </h3>--}}
{{--</div>--}}

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation" >
        <div class="top" style="background: #E9E4F0; color:black;">
            <div class="container">
                <div class="row" style="color:black;">
                    <div class="col-xs-12 text-right">
                        <p class="site"><span class="icon"><i class="icon-mail"></i></span> monte11dproc@mail.ru</p>
                        <p class="site"><span class="icon"><i class="icon-world"></i></span> www.11school.am</p>
                        <p class="num icon-phone" style="color:black;"> +374 10 720221</p>
                        <p class="num" style="color:black;"><span class="icon"><i class="icon-location"></i></span>
                            Երևան,Մալաթիա-Սեբաստիա,Հ/Ա Բ2 թաղամաս</p>
                        <ul class="fh5co-social">
                            <li><a href="https://www.facebook.com/%D5%84%D5%B8%D5%B6%D5%A9%D5%A5-%D5%84%D5%A5%D5%AC%D6%84%D5%B8%D5%B6%D5%B5%D5%A1%D5%B6%D5%AB-%D5%A1%D5%B6%D5%BE%D5%A1%D5%B6-%D5%B0%D5%A1%D5%B4%D5%A1%D6%80-11-%D5%A4%D5%BA%D6%80%D5%B8%D6%81-610279226004786/" target="_blank" style="color:#3b5999;"><i class="icon-facebook2"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCLKu-oDipt6ldC7XCNIKgYA?view_as=subscriber" target="_blank" style="color:#cd201f;"><i class="icon-youtube2"></i></a></li>
                            {{--<li ><a href="#"  title="English"><img style="height: 15px; width: 25px; margin-right: -10px;margin-left: 50px" src="{{asset('images/england.jpg')}}"></a></li>--}}
                            {{--<li ><a href="#" title="Հայերեն"><img style="height: 15px; width: 25px; margin-right: -10px" src="{{asset('images/armenia.png')}}"></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="top-menu" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="{{route('home')}}"><i class="icon-study"></i>School
                                11<span></span></a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="{{route('home')}}">Գլխավոր</a></li>
                            <li class="has-dropdown"><a href="#">Մեր Մասին</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('history')}}">Պատմություն</a></li>
                                    <li><a href="{{route('events')}}">Միջոցառումներ</a></li>
                                    <li><a href="{{route('news')}}">Նորություններ</a></li>
                                    <li><a href="{{route('documents')}}">Փաստաթղթեր</a></li>
                                    <li><a href="{{route('monte')}}">Մոնթե Մելքոնյան</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="{{route('home')}}">Անձնակազմ</a>
                                <ul class="dropdown" style="width: 150px">
                                    <li><a href="{{route('administration')}}">Մանկավարժական</a></li>
                                    <li><a href="{{route('pedagogical')}}">Վարչական</a></li>
                                    <li><a href="{{route('servicing')}}">Սպասարկման</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown" id="sub-menu" > <a href="#">Դասարաններ</a>
                                <ul class="dropdown" style="width: 150px">
                                    <li class="has-dropdown" style="cursor: pointer">1-ին դասարան
                                    <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.1-1')}}">1-1</a></li>
                                            <li><a href="{{route('classes.1-2')}}">1-2</a></li>
                                            <li><a href="{{route('classes.1-3')}}">1-3</a></li>
                                            <li><a href="{{route('classes.1-4')}}">1-4</a></li>
                                            <li><a href="{{route('classes.1-5')}}">1-5</a></li>
                                            <li><a href="{{route('classes.1-6')}}">1-6</a></li>
                                            <li><a href="{{route('classes.1-7')}}">1-7</a></li>
                                            <li><a href="{{route('classes.1-8')}}">1-8</a></li>
                                            <li><a href="{{route('classes.1-9')}}">1-9</a></li>
                                   </ul>
                                    </li>
                                    <li  class="has-dropdown" style="cursor: pointer">2-րդ դասարան
                                    <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                        <li><a href="{{route('classes.2-1')}}">2-1</a></li>
                                        <li><a href="{{route('classes.2-2')}}">2-2</a></li>
                                        <li><a href="{{route('classes.2-3')}}">2-3</a></li>
                                        <li><a href="{{route('classes.2-4')}}">2-4</a></li>
                                        <li><a href="{{route('classes.2-5')}}">2-5</a></li>
                                        <li><a href="{{route('classes.2-6')}}">2-6</a></li>
                                        <li><a href="{{route('classes.2-7')}}">2-7</a></li>
                                        <li><a href="{{route('classes.2-8')}}">2-8</a></li>
                                    </ul>
                                    </li>
                                    <li class="has-dropdown" style="cursor: pointer">3-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.3-1')}}">3-1</a></li>
                                            <li><a href="{{route('classes.3-2')}}">3-2</a></li>
                                            <li><a href="{{route('classes.3-3')}}">3-3</a></li>
                                            <li><a href="{{route('classes.3-4')}}">3-4</a></li>
                                            <li><a href="{{route('classes.3-5')}}">3-5</a></li>
                                            <li><a href="{{route('classes.3-6')}}">3-6</a></li>
                                            <li><a href="{{route('classes.3-7')}}">3-7</a></li>
                                            <li><a href="{{route('classes.3-8')}}">3-8</a></li>
                                            <li><a href="{{route('classes.3-9')}}">3-9</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="cursor: pointer">4-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.4-1')}}">4-1</a></li>
                                            <li><a href="{{route('classes.4-2')}}">4-2</a></li>
                                            <li><a href="{{route('classes.4-3')}}">4-3</a></li>
                                            <li><a href="{{route('classes.4-4')}}">4-4</a></li>
                                            <li><a href="{{route('classes.4-5')}}">4-5</a></li>
                                            <li><a href="{{route('classes.4-6')}}">4-6</a></li>
                                            <li><a href="{{route('classes.4-7')}}">4-7</a></li>
                                            <li><a href="{{route('classes.4-8')}}">4-8</a></li>
                                            <li><a href="{{route('classes.4-10')}}">4-10</a></li>
                                        </ul>
                                    </li>
                                    <li  class="has-dropdown" style="cursor: pointer">5-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.5-1')}}">5-1</a></li>
                                            <li><a href="{{route('classes.5-2')}}">5-2</a></li>
                                            <li><a href="{{route('classes.5-3')}}">5-3</a></li>
                                            <li><a href="{{route('classes.5-4')}}">5-4</a></li>
                                            <li><a href="{{route('classes.5-5')}}">5-5</a></li>
                                            <li><a href="{{route('classes.5-6')}}">5-6</a></li>
                                            <li><a href="{{route('classes.5-7')}}">5-7</a></li>
                                            <li><a href="{{route('classes.5-8')}}">5-8</a></li>
                                            <li><a href="{{route('classes.5-10')}}">5-10</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="cursor: pointer">6-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.6-1')}}">6-1</a></li>
                                            <li><a href="{{route('classes.6-2')}}">6-2</a></li>
                                            <li><a href="{{route('classes.6-3')}}">6-3</a></li>
                                            <li><a href="{{route('classes.6-4')}}">6-4</a></li>
                                            <li><a href="{{route('classes.6-5')}}">6-5</a></li>
                                            <li><a href="{{route('classes.6-6')}}">6-6</a></li>
                                            <li><a href="{{route('classes.6-7')}}">6-7</a></li>
                                            <li><a href="{{route('classes.6-8')}}">6-8</a></li>
                                            <li><a href="{{route('classes.6-9')}}">6-9</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="cursor: pointer">7-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.7-1')}}">7-1</a></li>
                                            <li><a href="{{route('classes.7-2')}}">7-2</a></li>
                                            <li><a href="{{route('classes.7-3')}}">7-3</a></li>
                                            <li><a href="{{route('classes.7-4')}}">7-4</a></li>
                                            <li><a href="{{route('classes.7-5')}}">7-5</a></li>
                                            <li><a href="{{route('classes.7-6')}}">7-6</a></li>
                                            <li><a href="{{route('classes.7-7')}}">7-7</a></li>
                                        </ul>
                                    </li>
                                    <li  class="has-dropdown" style="cursor: pointer">8-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.8-1')}}">8-1</a></li>
                                            <li><a href="{{route('classes.8-2')}}">8-2</a></li>
                                            <li><a href="{{route('classes.8-3')}}">8-3</a></li>
                                            <li><a href="{{route('classes.8-4')}}">8-4</a></li>
                                            <li><a href="{{route('classes.8-5')}}">8-5</a></li>
                                            <li><a href="{{route('classes.8-8')}}">8-8</a></li>
                                            <li><a href="{{route('classes.8-9')}}">8-9</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="cursor: pointer">9-րդ դասարան
                                        <ul class="dropdown" style="display: none;left:90px;top:10px;">
                                            <li><a href="{{route('classes.9-1')}}">9-1</a></li>
                                            <li><a href="{{route('classes.9-2')}}">9-2</a></li>
                                            <li><a href="{{route('classes.9-3')}}">9-3</a></li>
                                            <li><a href="{{route('classes.9-4')}}">9-4</a></li>
                                            <li><a href="{{route('classes.9-5')}}">9-5</a></li>
                                            <li><a href="{{route('classes.9-6')}}">9-6</a></li>
                                            <li><a href="{{route('classes.9-7')}}">9-7</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Խորհուրդ</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('pupilary')}}">Աշակերտական</a></li>
                                    <li><a href="{{route('parental')}}">Ծնողական</a></li>
                                    <li><a href="{{route('management')}}">Կառավարման</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('electroniclibrary')}}">Էլեկտրոնային գրադարան</a></li>
                            <li><a href="{{route('contact')}}">Կապ</a></li>

                            {{--<li class="btn-cta"><a href="#"><span>Login</span></a></li>--}}
                            {{--<li class="btn-cta"><a href="#"><span>Registration</span></a></li>--}}

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    @yield('content')


    <footer>
        <nav class="fh5co-nav" role="navigation">
            <div class="top" style="background: #E9E4F0; color:black;">
                <div class="container">
                    <br><br><br>
                    <div class="row" style="color:black;">
                        <div class="col-xs-12 text-right">
                            <p class="site"><span class="icon"><i class="icon-mail"></i></span> monte11dproc@mail.ru</p>
                            <p class="site"><span class="icon"><i class="icon-world"></i></span> www.school11.am</p>
                            <p class="num icon-phone" style="color:black;"> +374 10 720221</p>
                            <p class="num" style="color:black;"><span class="icon"><i class="icon-location"></i></span>
                                Yerevan,Malatia-Sebastia,S/W B2 district</p>
                            <ul class="fh5co-social">
                                <li><a href="https://www.facebook.com/%D5%84%D5%B8%D5%B6%D5%A9%D5%A5-%D5%84%D5%A5%D5%AC%D6%84%D5%B8%D5%B6%D5%B5%D5%A1%D5%B6%D5%AB-%D5%A1%D5%B6%D5%BE%D5%A1%D5%B6-%D5%B0%D5%A1%D5%B4%D5%A1%D6%80-11-%D5%A4%D5%BA%D6%80%D5%B8%D6%81-610279226004786/" target="_blank" style="color:#3b5999;"><i class="icon-facebook2"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCLKu-oDipt6ldC7XCNIKgYA?view_as=subscriber" target="_blank" style="color:#cd201f;"><i class="icon-youtube2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <p style="text-align: center">
                        <small class="block">&copy; 2018 School 11. All Rights Reserved.</small>

                    </p>
                </div>
            </div>


        </nav>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>
<!-- Count Down -->
<script src="{{asset('js/simplyCountdown.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>

<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

</body>
</html>

