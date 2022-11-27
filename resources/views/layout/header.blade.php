<header id="custom-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-custom-nav-toggle custom-nav-toggle dark" onclick="toTop()"><i></i></a>
            <h1 id="custom-logo" style="white-space:nowrap"><img src="{{ url('public/theme/images/logo.png') }}" class="img-responsive" style="height:35px;display: inline;"><a href="{{ route('home') }}" style="display:inline; white-space:nowrap;color:rgb(67,168,224)">RESHINE ORGANISATION</a></h1>
            <nav id="custom-menu-wrap" role="navigation">
                <ul class="sf-menu" id="custom-primary-menu">
                    <li><a href="{{ route('home') }}" data-ajax="false" onclick="onLinkClick()">Home</a></li>
                    <li><a href="{{ route('home') }}#the-issues" data-ajax="false" onclick="onLinkClick()">The Issues</a></li>
                    <li><a href="{{ route('home') }}#gallery" data-ajax="false" onclick="onLinkClick()">Gallery</a></li>
                    <li><a href="{{ route('about') }}" data-ajax="false" onclick="onLinkClick()">About Us</a></li>
                    <li><a href="{{ route('home') }}#join-us" data-ajax="false" onclick="onLinkClick()">Join Us</a></li>
                    <li><a href="{{ route('home') }}#recognition" data-ajax="false" onclick="onLinkClick()">Recognition</a></li>
                    <li><a href="{{ route('home') }}#donate" data-ajax="false" onclick="onLinkClick()">Donate</a></li>
                    <li><a href="{{ route('contact') }}" data-ajax="false" onclick="onLinkClick()">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>