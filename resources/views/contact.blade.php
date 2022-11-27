@extends('layout.app')

@section('content')

<section id="contact">
    <div id="custom-contact" class="animate-box custom-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading-section">
                    <h3>Contact Us</h3>
                </div>
            </div>
            <form method="POST" action="https://reshineorg.com/contact.php" data-ajax="false">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">Our Address</h3>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>Triveni complex ,Opp KSRTC complex Depo 2 ,<br/>New Bus Stand Road,<br/> BIDAR-585401 (K.S)</li>
                            <li><i class="icon-phone2"></i>+91 90666 16858</li>
                            <li><i class="icon-mail"></i><a href="mailto:reshineorg@gmail.com" rel="external">reshineorg@gmail.com</a></li>
                            <li><i class="icon-globe2"></i><a href="#">www.reshineorg.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.3122453162223!2d77.50269502401356!3d17.9175846093967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcec7f82bd2341b%3A0xfb758874520ea5f0!2sReshine%20Organisation!5e0!3m2!1sen!2sin!4v1669544900336!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </form>
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
