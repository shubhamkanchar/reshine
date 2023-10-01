@extends('layout.app')

@section('content')
<section id="the-issues">
    <div id="custom-feature-product">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 animate-box">
                    <div class="text-center" style="margin-top:20px;margin-bottom:40px">
                        <span class="h3" style="border-bottom: 3px solid rgb(67,168,224);">Elderly and Disabled People</span>
                    </div>
                    <p style="font-size: 18px;">The application procedure for social security benefits can be intricate, making it challenging for some to navigate. Paper work may not be accessible to those with disabilities such as visually individuals.Delays in processing applications and receiving benefits can cause financial strain. Some disabled individuals may face societal stigma making it even harder to access benefits.</p>
                    <p style="font-size: 18px;"> Addressing these issues our Reshine Organisation helps to ease the struggle faced by elderly and disabled people in accessing social security schemes and other support.</p>    
                </div>
                <!-- <div class="col-md-5 text-center animate-box">
                    <iframe width="344" height="611" src="https://www.youtube.com/embed/mffF7n5uOec" title="Read &amp; Grow #viral #bidar #reels #video #youtubeshorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div> -->
            </div>
        </div>
    </div>
</section>


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
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ url('public/theme/elder/elder1.jpeg') }} ); ">
                           
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ url('public/theme/elder/elder2.jpeg') }}); ">
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ url('public/theme/elder/elder4.jpeg') }}); ">
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ url('public/theme/elder/elder3.jpeg') }}); ">
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ url('public/theme/elder/elder5.jpeg') }}); ">
                        </li>
                    </ul>
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
                    <p><img src="{{ url('public/theme/images/donate1.jpg') }}" alt="" class="img-responsive"></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 animate-box">
                    <h4>Donate To Us Online, Just click below 'Donate Now' button</h4>
                    <p>
                    <form class="text-center">
                        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_J0Yar97z8xmsHJ" async> </script>
                    </form>
                    </p>
                    <p class="text-center">OR</p>
                    <h4>Donate To Us On,</h4>
                    <form>
                        <fieldset disabled>
                            <div class="form-group">
                                <label for="disabledTextInput">In Favor Of</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Reshine Organisation">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Account Number</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="40739649129">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">IFSC Code</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="SBIN0020237">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Bank Name</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="State Bank of India">
                            </div>
                            <div class="form-group">
                                <label for="disabledTextInput">Branch</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Near DC office Bidar">
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
                <center><img src="{{ url('public/theme/images/public.jpg') }}" alt="Public Hero 2019 - Regshine Organisation" class="img-responsive" style="height:20vh;align-self: center;"></center><br />
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