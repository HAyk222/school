@extends('layouts.app')


@section('content')

    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">Yerevan,Malatia-Sebastia,S/W B2 district</li>
                            <li class="phone"><a href="tel://1234567920">+374 10 720221</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">monte11dproc@mail.ru</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Get In Touch</h3>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" class="form-control"
                                       placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                          placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--GOOGLE MAP-->
    <h2 style="text-align: center">Map</h2>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6098.0679194822305!2d44.4491936!3d40.1637976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abdd85d5da793%3A0x62e43b3246469814!2sMonte+Melkonyan+Basic+School+No.11!5e0!3m2!1sen!2s!4v1535739862744"
                width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
@stop
