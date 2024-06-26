@extends('layouts.base-landing-page')

@section('title', 'Home')

@section('content')
{{-- <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>
                        {{ env('APP_NAME') }}
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}"> Gallery </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="quote_btn-container ">
                        <a href="{{ route('login') }}" target="blank">
                            Log in
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div class="slider_number-container ">
            <div class="number-box">
                <span>
                    01
                </span>
                <hr>
                <span>
                    02
                </span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-lg-6 col-md-8">
                                <div class="detail_box">
                                    <h2>
                                        Welcome
                                    </h2>
                                    <h1>
                                        {{ env('APP_NAME') }}
                                    </h1>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been
                                        the
                                        industry's
                                        standard dummy text ever since
                                    </p>
                                    <div>
                                        <a href="{{ env('URL_SHOP') }}">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-md-8">
                                <div class="detail_box">
                                    <h2>
                                        Welcome
                                    </h2>
                                    <h1>
                                        {{ env('APP_NAME') }}
                                    </h1>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been
                                        the
                                        industry's
                                        standard dummy text ever since
                                    </p>
                                    <div>
                                        <a href="">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-md-8">
                                <div class="detail_box">
                                    <h2>
                                        Welcome
                                    </h2>
                                    <h1>
                                        {{ env('APP_NAME') }}
                                    </h1>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been
                                        the
                                        industry's
                                        standard dummy text ever since
                                    </p>
                                    <div>
                                        <a href="">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_btn-container">
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end slider section -->
</div> --}}

<!-- about section -->
<section class="about_section ">
    <div class="section_number">
        01
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-7">
                <div class="img-box">
                    <img src="{{ asset('landing-page/images/about-img.png') }}" alt="" />
                </div>
            </div>
            <div class="col-md-5 col-xl-5">
                <div class="detail_box">
                    <div class="heading_container justify-content-end">
                        <h2>
                            About Flowers
                        </h2>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the
                        printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        ever since
                        ever since
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end about section -->

<!-- why section -->
<section class="why_section layout_padding">
    <div class="section_number">
        02
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Why Choose Us
                </h2>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin wordsContrary to popular
                    belief,
                    Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45
                    BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                    Virginia,
                    looked up one of the more obscure Latin words
                </p>
                <div>
                    <a href="{{ env('URL_PROFILE') }}">
                        Visit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end why section -->

<!-- gallery section -->
<section class="gallery_section layout_padding">
    <div class="section_number">
        03
    </div>
    <div class="heading_container justify-content-center">
        <h2>
            Our Gallery
        </h2>
    </div>
    <div class="container">
        <div class="img_container">
            <div class="box-1">
                <div class="box-1-container">
                    <div class="b-1">
                        <div class="img-box">
                            <img src="{{ asset('landing-page/images/g-1.jpg') }}" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('landing-page/images/g-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="b-2">
                        <div class="img-box">
                            <img src="{{ asset('landing-page/images/g-2.jpg') }}" alt="">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('landing-page/images/g-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="b-3">
                    <div class="img-box">
                        <img src="{{ asset('landing-page/images/g-7.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="box-2">
                <div class="img-box">
                    <img src="{{ asset('landing-page/images/g-3.jpg') }}" alt="">
                </div>
                <div class="img-box">
                    <img src="{{ asset('landing-page/images/g-6.jpg') }}" alt="">
                </div>
                <div class="img-box flex-grow-1">
                    <img src="{{ asset('landing-page/images/g-8.jpg') }}" alt="">
                </div>
            </div>
        </div>
</section>
<!-- end gallery section -->

<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container justify-content-center">
            <h2>
                What Our Customers Say
            </h2>
            <div class="section_number">
                04
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="client_box">
                    <div class="detail_box">
                        <div class="img_box">
                            <img src="{{ asset('landing-page/images/client-1.png') }}">
                        </div>
                        <h5>
                            nomil du
                        </h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="client_box">
                    <div class="detail_box">
                        <div class="img_box">
                            <img src="{{ asset('landing-page/images/client-2.png') }}">
                        </div>
                        <h5>
                            zabih jo
                        </h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<!-- arrange section -->
<section class="arrange_section">
    <div class="container">
        <div class="detail_box">
            <h2>
                Our Wonderful Arrangements
            </h2>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin
                literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney
                College in Virginia, looked up one of the more obscure Latin words
            </p>
        </div>
    </div>
</section>
<!-- end arrange section -->

<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="section_number">
        05
    </div>
    <div class="container ">
        <div class="heading_container justify-content-center">
            <h2 class="">
                Contact Us
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Pone Number" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex  mt-4 ">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

<!-- map section -->
<div class="map_section">
    <div class="map_container">
        <div class="map">
            <div id="googleMap"></div>
        </div>
    </div>
</div>
<!-- end map section -->

<!-- info section -->
<section class="info_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_logo">
                    <h5>
                        Fior
                    </h5>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_links pl-lg-5">
                    <h5>
                        Useful Link
                    </h5>
                    <ul>
                        <li class="active">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.html">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_insta">
                    <h5>
                        Instagram
                    </h5>
                    <div class="insta_container">
                        <div>
                            <a href="">
                                <div class="insta-box b-1">
                                    <img src="{{ asset('landing-page/images/insta-1.png') }}" alt="">
                                </div>
                            </a>
                            <a href="">
                                <div class="insta-box b-2">
                                    <img src="{{ asset('landing-page/images/insta-2.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <div class="insta-box b-3">
                                    <img src="{{ asset('landing-page/images/insta-3.png') }}" alt="">
                                </div>
                            </a>
                            <a href="">
                                <div class="insta-box b-4">
                                    <img src="{{ asset('landing-page/images/insta-4.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <div class="insta-box b-3">
                                    <img src="{{ asset('landing-page/images/insta-5.png') }}" alt="">
                                </div>
                            </a>
                            <a href="">
                                <div class="insta-box b-4">
                                    <img src="{{ asset('landing-page/images/insta-6.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_contact">
                    <h5>
                        Contact
                    </h5>
                    <div>
                        <img src="{{ asset('landing-page/images/location-white.png') }}" alt="">
                        <p>
                            It is a long
                            fact that a reader
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('landing-page/images/telephone-white.png') }}" alt="">
                        <p>
                            +01 1234567890
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('landing-page/images/envelope-white.png') }}" alt="">
                        <p>
                            demo@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info_section -->
@endsection
