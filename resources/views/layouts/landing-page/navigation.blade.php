<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>
                        {{ env('APP_NAME') }}
                    </span>
                </a>

                <button class="navbar-toggler d-none" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home <span
                                        class="sr-only">(current)</span></a>
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
</div>

@include('layouts.landing-page.bottom-navigation')