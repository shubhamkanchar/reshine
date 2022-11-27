@extends('layout.app')

@section('content')
<div class="container">
  <div class="row" style="margin:15px">
    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
      <h3>Reshine Gallery</h3>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div id="section-gallery"></div>
    <div class="col-lg-3">
      <a data-fancybox="gallery" href="{{ asset('theme/img/1.jpg') }}">
        <img src="{{ asset('theme/img/1.jpg') }}" class="image-custom">
      </a>
    </div>
    <div class="col-lg-3">
      <a data-fancybox="gallery" href="{{ asset('theme/img/2.jpg') }}">
        <img src="{{ asset('theme/img/2.jpg') }}" class="image-custom">
      </a>
    </div>
    <div class="col-lg-3">
      <a data-fancybox="gallery" href="{{ asset('theme/img/3.jpg') }}">
        <img src="{{ asset('theme/img/3.jpg') }}" class="image-custom">
      </a>
    </div>
    <div class="col-lg-3">
      <a data-fancybox="gallery" href="{{ asset('theme/img/4.jpg') }}">
        <img src="{{ asset('theme/img/4.jpg') }}" class="image-custom">
      </a>
    </div>
    <div class="col-lg-3">
      <a data-fancybox="gallery" href="{{ asset('theme/img/5.jpg') }}">
        <img src="{{ asset('theme/img/5.jpg') }}" class="image-custom">
      </a>
    </div>
    <div class="col-lg-3 mb-5">
      <a data-fancybox="gallery" href="{{ asset('theme/img/6.jpg') }}">
        <img src="{{ asset('theme/img/6.jpg') }}" class="image-custom">
      </a>
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