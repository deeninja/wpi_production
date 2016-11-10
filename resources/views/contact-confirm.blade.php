@extends('layouts.app')

@section('content')

    <div class="content-container">
        <!-- notifications -->
        @if(Session::has('contact_sent'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" aria-label="close" data-dismiss="alert">&times;</a>
                <h4>{{session('contact_sent')}}</h4>
            </div>
    @endif
    <!-- /.notifications -->
        <div class="col-lg-offset-2 col-lg-10">

            <hr>

            <div class="col-lg-8 contact-form-container" id="box">

                <h2 class="text-primary">Thank you for contacting us, we'll get back to you as soon as possible!</h2>
                <hr>

                <!-- contact form -->
                <form class="contact-form form-horizontal" action="/contact" method="POST"
                      id="contact_form">
                {{csrf_field()}}

                    <!-- name -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="first_name" id="name-field" placeholder="Your Name" class="form-control" type="text">
                                <div class="form-warning-msg"><span id="name-warning"></span></div>
                            </div>
                        </div>
                    </div>


                    <!-- last name -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="last_name" placeholder="Your Last Name" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" id="email-field" placeholder="Your E-Mail" class="form-control" type="text">
                                <div class="form-warning-msg"><span id="email-warning"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- phone  -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input name="phone" placeholder="(005)501-120101" class="form-control" type="text">
                            </div>
                        </div>
                    </div>


                    <!-- subject -->

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-arrow-circle-right"></i></span>
                                <input name="subject" id="subject-field" placeholder="Subject" class="form-control"
                                       type="text">
                                <div class="form-warning-msg"><span id="subject-warning"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- message input-->
                    <div class="form-group">
                        <div class="col-md-12 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <textarea class="form-control" id="msg-field" name="body_message"
                                          placeholder="Message"></textarea>
                                <div class="form-warning-msg"><span id="msg-warning"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- button-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">Send <span
                                        class="fa fa-send"></span></button>
                        </div>
                    </div>
                </form>

            </div>

            <hr>
            <!-- contact details -->
            <div class="col-lg-4 panel panel-body">
                <h3 class="text-primary">Contact Details:</h3>
                <ul class="list-unstyled">
                    <li>Amy Jephta</li>
                    <li><a href="mailto:wpic2015@gmail.com">wpic2015@gmail.com</a></li>
                    <li>Physical Address:</li>
                    <li>Drama Department</li>
                    <li>Hiddingh Campus</li>
                    <li>32 Orange Street</li>
                    <li>Gardens, Cape Town</li>
                    <li>8001</li>

                </ul>


            </div>

        </div>


        <article class="google-map-form-container">

            <!-- google map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.4522141387847!2d18.41081135124369!3d-33.92949542954888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc67704bbc388b%3A0xa3b386cf0f0fced0!2s32+Orange+St%2C+Gardens%2C+Cape+Town%2C+8001!5e0!3m2!1sen!2sza!4v1478526688935"
                    width="100%" height="500px" frameborder="1" style="border:2px solid #fff;" allowfullscreen></iframe>



        </article>
        <div class="google-map-overlay"></div>
    </div>


@endsection()