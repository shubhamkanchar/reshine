@extends('layout.app')

@section('content')
<div id="custom-services-section" class="custom-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>About Us</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center" id="who-we-are">
            <div class="col-md-12 col-sm-12">
                <div class="services animate-box">
                    <span><i class="icon-heart"></i></span>
                    <h3>Who We Are?</h3>
                    <p style="font-size: 22px;">Reshine Organisation is made up of bunch of motivated youth trying to give life to the saying "Service to humanity is service to God".<br />
                        Our team collects surplus food from parties, festivals, functions etc and distribute it among the disadvantaged section of the society
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
  let gallery = document.getElementById('section-gallery');
  for (i = 1; i <= 21; i++) {
    gallery.innerHTML += '<div class="col-lg-3"><a data-fancybox="gallery" href="img/' + i + '.jpeg"><img src="img/' + i + '.jpeg" class="image-custom"></a></div>';
  }
</script>
@endsection