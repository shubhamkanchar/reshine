@extends('layout.app')

@section('content')
<div class="custom-hero">
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="d-block w-100" src="{{ asset('theme/images/cover-3.jpg') }}" alt="First slide" style="width:100%;height:85vh">
                <div class="carousel-caption">
                    <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:30px;font-weight: bold;color:white">Humanity is the only way to experience the true love of god.</h3>
                    <p>
                    <form>
                        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kl0qGHMRo8FFBH" async> </script>
                    </form>
                    </p>
                </div>
            </div>
            <div class="item">
                <video muted autoplay loop style="height:85vh;width:100%;object-fit: cover;" src="{{ asset('theme/images/vid-1.mp4') }}" type="video/mp4"></video>
                <div class="carousel-caption">
                    <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:30px;font-weight: bold;color:white">Humanity is the only way to experience the true love of god.</h3>
                    <p><span>
                            <form>
                                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kl0qGHMRo8FFBH" async> </script>
                            </form>
                        </span></p>
                </div>
            </div>
            <div class="item">
                <video muted autoplay loop style="height:85vh;width:100%;object-fit: cover;" src="{{ asset('theme/images/vid-2.mp4') }}" type="video/mp4"></video>
                <div class="carousel-caption">
                    <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:30px;font-weight: bold;color:white">Humanity is the only way to experience the true love of god.</h3>
                    <p><span>
                            <form>
                                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kl0qGHMRo8FFBH" async> </script>
                            </form>
                        </span></p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselIndicators" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="custom-features" class="custom-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="feature-left">
                    <span class="icon">
                        <i class="icon-happy"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Our Vision</h3>
                        <p>To join hands to fight the menace of malnutrition and hunger by providing food to the marginalized section of the society.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5">
                <div class="feature-left">
                    <span class="icon">
                        <i class="icon-happy"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Our Mission</h3>
                        <p>To step up to the challenge and work towards serving the needy and killing the hunger in our areas of operation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="the-issues">
    <div id="custom-feature-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading-section">
                    <h3>The Issue</h3>
                </div>
            </div>

            <div class="row row-bottom-padded-md">
                <div class="col-md-7 animate-box">
                    <p style="text-align: justify;">
                    <div class="col-md-12">
                        <h4>Did You Know?</h4>
                    </div>
                    <ul>
                        <li>20 crore people in India sleep hungry every night , i.e. approx. 2 to 3 people in every 10 people.</li>
                        <li>India is the world’s second largest food producer, yet faces severe hunger problem.</li>
                        <li>25% of children in India are malnourished. </li>
                        <li>Child malnourishment is the largest nutrition related health burden in the world.</li>
                        <li>Large chunk of these hungry people exist in countries with sufficient food production.Clearly food availability is not the issue but equitable sharing of resources is.</li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-5 text-center animate-box">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/GIUMuuUF17Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/iscwNAoyXrI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br />
            <hr>
            <div class="row">
                <div class="col-md-12 text-center heading-section">
                    <h3>Other Activities</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="feature-text">
                        <h3>Afforrestation</h3>
                        <p>World today is facing the wrath of climate change, Global warming and pollution. Trees – “The lungs of the nature” are one step solution to these problems.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-text">
                        <p><img src="{{ asset('theme/images/afforestation.jpg') }}" alt="" class="img-responsive" style="border-radius:10px"></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-6">
                    <div class="feature-text">
                        <h3>Enlightning Tomorrow</h3>
                        <p>It’s said that “India lives in its villages”, it’s also said that “today’s children are tomorrow’s citizens”. So our organization is working towards career guidance programs helping rural and unreached children.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-text">
                        <p><img src="{{ asset('theme/images/enlighten.jpg') }}" alt="" class="img-responsive" style="border-radius:10px"></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="feature-text">
                        <p style="text-align: justify;">Md Jahangir was a daily wage construction labourer from Astoor village, Bidar. He was sole bread winner for the family of 7 including 5 kids . 2 years ago he fell down from 2nd floor of building during work. He lost both legs and suffered major back injury owing to which he has to be on bed for the rest of his life.
                            This matter was brought to the notice of RESHINE ORGANISATION. Our team took the matter into their own hands and took Md. Jahangir to " JANATA DARSHANA' program of the then Hon'ble Chief Minister Shri H D Kumaraswamy in Ujjalum village,tq Basavakalyan,dist Bidar on 27th June 2019.
                            Reshine Organisation was successful in convincing CM of grave situation of family. CM announced compensation of Rs 2 lakhs /- to Md.Jahangir . Jahangir's family received amount of Rs 2 lakh in the month of July 2019.<br />
                            <br />
                            <b>"If we want, we can"</b><br />
                            <b>"Service to needy people is service to God"</b><br />
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-text">
                        <p><img src="{{ asset('theme/images/cm-1.jpg') }}" alt="" class="img-responsive" style="border-radius:10px"></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>

<div id="custom-content-section" class="custom-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Opinion Of Dignitaries</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="custom-testimonial text-center animate-box">
                    <figure>
                        <img src="{{ asset('theme/images/testimonial-1.jpg') }}" alt="user">
                    </figure>
                    <blockquote>
                        <p>&ldquo;In India The largest and severe problem is hunger . The main reason for the cause is our society. In order to tackle the problem Reshine Organisation has taken an initiative of serving the surplus food to the needful. I advice two precious things which is to be implemented in our life contentment and Humanity. I congratulate the team for this gracious and godly work.&rdquo;</p>
                    </blockquote>
                    <span style="font-weight: bold;color:rgb(67,168,224);">Justice Santosh Hegde,<br />
                        Former judge of supreme Court of India</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-testimonial text-center animate-box">
                    <figure>
                        <img src="{{ asset('theme/images/testimonial-2.jpg') }}" alt="user">
                    </figure>
                    <blockquote>
                        <p>&ldquo;Hunger is a word which is terrible by itself. Everywhere in the world if you visit,you can find people who have nothing to eat. I thank Reshine team for visiting my home and having the concern towards the hungry people.&rdquo;</p>
                    </blockquote>
                    <span style="font-weight: bold;color:rgb(67,168,224);">Dr H T Sangliana, <br />
                        Former DGP of Karnataka
                    </span>
                </div>
            </div>
        </div>
        <br /><br /><br />
        <div class="row">
            <div class="col-md-6">
                <div class="custom-testimonial text-center animate-box">
                    <figure>
                        <img src="{{ asset('theme/images/testimonial-3.jpg') }}" alt="user">
                    </figure>
                    <blockquote>
                        <p>&ldquo;In today's world, we are persuing higher education but lacking common sense and humanity.
                            <br />
                            Proverb -
                            <br />
                            A stone thrown reaches 100 m,
                            A bullet fired from gun reaches 1000 m
                            but when food is fed to hungry and needy people it reaches heaven.
                            <br />
                            I congratulate the Reshine team for this wonderful humanitarian work.&rdquo;
                        </p>
                    </blockquote>
                    <span style="font-weight: bold;color:rgb(67,168,224);">Dr. C N MANJUNATH, <br />
                        Director of the Sri Jayadeva Institute of Cardiovascular Sciences and Research.</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-testimonial text-center animate-box">
                    <figure>
                        <img src="{{ asset('theme/images/testimonial-4.jpg') }}" alt="user">
                    </figure>
                    <blockquote>
                        <p>&ldquo;Reshine organisation is doing a innovative program of collecting excess food from functions and distributing
                            it among destitutes and poor. 3 out of 10 Indian children don't get proper food every night.
                            Today's children are tomorrow's citizens.We should not donate food with sympathy but as symbol of humanity to them.
                            We shouldn't wait for government at every step,few things have to be done by common man
                            as part of his social duty and humane duty.&rdquo;</p>
                    </blockquote>
                    <span style="font-weight: bold;color:rgb(67,168,224);">K .Annamalai (IPS), <br />
                        DCP South Bangalore</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="gallery">
    <div id="custom-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="custom-portfolio-list">
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset('theme/images/gallery-2.jpg') }} ); ">
                            <a href="gallery.html" class="color-3" data-ajax="false">
                                <!--
									<div class="case-studies-summary" style="background: rgba(0,0,0,0.8);padding:5px;border-radius:10px;">
										<h4 style="color: white;margin-bottom: 5px;"><i>What ever you did for the least of my brother and sisters you did for me
											<br /><small>- Jesus</i></small></h4>
									</div>-->
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset('theme/images/gallery-1.jpg') }}); ">
                            <a href="gallery.html" class="color-4" data-ajax="false">
                                <!--
									<div class="case-studies-summary" style="background: rgba(0,0,0,0.8);padding:5px;border-radius:10px;">
										<h4 style="color: white;margin-bottom: 5px;"><i>If you can't Feed  Hundred, then just feed one <br />
											<small>-Mother Teresa</i></small>
										</h4>
									</div>-->
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset('theme/images/gallery-3.jpg') }}); ">
                            <a href="gallery.html" class="color-5" data-ajax="false">
                                <!--
									<div class="case-studies-summary" style="background: rgba(0,0,0,0.8);padding:5px;border-radius:10px;">
										<h4 style="color: white;margin-bottom: 5px;"><i>ಉಂಬ ಜಂಗಮ ಬಂದರೆ ನಡೆ ನಡೆ ಎಂಬರು
											ಉಣ್ಣದ ಲಿಂಗಕ್ಕೆ ಬೋನವ ಹಿಡಿವರು
											 <br />
											<small>- ವಿಶ್ವಗುರು ಬಸವಣ್ಣನ</i></small>
										</h4>
									</div>-->
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset('theme/images/gallery-4.jpg') }}); ">
                            <a href="gallery.html" class="color-6" data-ajax="false">
                                <!--
									<div class="case-studies-summary" style="background: rgba(0,0,0,0.8);padding:5px;border-radius:10px;">
										<h4 style="color: white;margin-bottom: 5px;"><i>“The war against hunger is truly mankind’s war of liberation.”
											<br />
											<small>- John F. Kennedy</i></small>
										</h4>
									</div>-->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <a href="{{ route('gallery') }}" class="btn btn-primary btn-lg" data-ajax="false">View Full Gallery</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="custom-services-section" class="custom-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Join Us</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center" id="join-us">
            <div class="col-md-12 col-sm-12">
                <div class="services animate-box">
                    <span><i class="icon-heart"></i></span>
                    <h3>Join Us</h3>
                    <p style="font-size: 18px;">We’re looking for great souls ,Join us on our mission.<br /><br />
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 bordered">
                            <u>Volunteer time</u><br />
                            We need just 4 hours/week to bring it into action. If we have team in your city looking forward to grow
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <u>Join Our Family</u>
                            <p>Please send in the following details to <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=reshineorg@gmail.com" target="_blank">reshineorg@gmail.com</a> to join us.</p>
                            <table class="table table-hover table-bordered ">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Particulars</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Full Name</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth</td>
                                    </tr>
                                    <tr>
                                        <td>Social Media URL (Facebook/Twitter/Instagram)</td>
                                    </tr>
                                    <tr>
                                        <td>Your City</td>
                                    </tr>
                                    <tr>
                                        <td>Your State</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=reshineorg@gmail.com" target="_blank" class="btn btn-primary btn-md">Join Now</a>
                        </div>
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="donate">
    <div id="custom-feature-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading-section">
                    <h3>Donate</h3>
                    <div style="text-align: center;font-size: 2.1rem; color: rgb(77, 77, 77);">The donations are tax exempted under 80G.</div>
                </div>
            </div>

            <div class="row row-bottom-padded-md">
                <div class="col-md-5 text-center animate-box">
                    <p><img src="{{ asset('theme/images/donate.jpg') }}" alt="" class="img-responsive"></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 animate-box">
                    <h4>Donate To Us Online, Just click below 'Donate Now' button</h4>
                    <p>
                    <form class="text-center">
                        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kl0qGHMRo8FFBH" async> </script>
                    </form>
                    </p>
                    <p class="text-center">OR</p>
                    <h4>Donate To Us On,</h4>
                    <form>
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="disabledTextInput">In Favor Of</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="RESHINE ORGANIZATION DEVELOPMENT SOCIETY">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Account Number</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="510101006521844">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">IFSC Code</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="CORP0000196">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Bank Name</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="CORPORATION BANK">
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="recognition">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading-section">
                <h3>Recognition</h3>
            </div>
        </div>
        <div class="row">
            <div style="text-align: center;align-content: center;">
                <p style="font-size: larger;margin-bottom: 5px;">Public Hero - 2019</p>
                <center><img src="{{ asset('theme/images/public.jpg') }}" alt="Public Hero 2019 - Regshine Organisation" class="img-responsive" style="height:20vh;align-self: center;"></center><br />
            </div>
        </div>
    </div>
</section>
</div>
</div>
@endsection
@if($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Error!</strong> {{ $message }}
</div>
@endif

@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Success!</strong> {{ $message }}
</div>
@endif

@section('script')
<script>
    var onLinkClick = function() {
        if ($('body').hasClass('custom-offcanvas')) {
            $('body').removeClass('custom-offcanvas');
        }
    }
    var toTop = function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $('.carousel').carousel({
        interval: 3000
    });

    $(document).ready(function() {
        $(".carousel").swiperight(function() {
            $(".carousel").carousel('prev');
        });
        $(".carousel").swipeleft(function() {
            $(".carousel").carousel('next');
        });
    });
    let num = 1;
    jQuery(".carousel").on("tap", function(event) {
        if (num == 1) {
            num = 0;
            $('.carousel').carousel('pause');
        } else {
            num = 1;
            $('.carousel').carousel('cycle');
        }
    });
</script>
@endsection