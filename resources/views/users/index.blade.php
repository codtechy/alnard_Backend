@extends('layouts.user')
@section('content')
    <!-- Header End -->
    <!-- Hero Section Start -->
    {{-- <div class="hero hero-slider-layout">
            <div class="swiper">
                <div class="swiper-wrapper">

                    <!-- Hero Slide Start -->
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <!-- Slider Image Start -->
                            <div class="hero-slider-image">
                                <img src="/users/images/hero-bg.jpg" alt>
                            </div>
                            <!-- Slider Image End -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- Hero Content Start -->
                                        <div class="hero-content">
                                            <!-- Section Title Start -->
                                            <div
                                                class="section-title dark-section">
                                                <h3 class="wow fadeInUp">welcome
                                                    our industry</h3>
                                                <h1 class="text-anime-style-2"
                                                    data-cursor="-opaque">Excellence
                                                    innovating
                                                    <span>industry for
                                                        today</span>
                                                </h1>
                                                <p class="wow fadeInUp"
                                                    data-wow-delay="0.25s">At
                                                    the heart of our operations
                                                    is a commitment to
                                                    delivering superior products
                                                    through cutting-edge
                                                    technology and innovative
                                                    processes.</p>
                                            </div>
                                            <!-- Section Title End -->
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn wow fadeInUp"
                                                data-wow-delay="0.4s">
                                                <a href="contact.html"
                                                    class="btn-default">
                                                    <span>explore more</span>
                                                </a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slide End -->

                    <!-- Hero Slide Start -->
                    <div class="swiper-slide">
                        <div class="hero-slide">
                            <!-- Slider Image Start -->
                            <div class="hero-slider-image">
                                <img src="/users/images/hero-bg-2.jpg" alt>
                            </div>
                            <!-- Slider Image End -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- Hero Content Start -->
                                        <div class="hero-content">
                                            <!-- Section Title Start -->
                                            <div
                                                class="section-title dark-section">
                                                <h3 class="wow fadeInUp">welcome
                                                    our industry</h3>
                                                <h1 class="text-anime-style-2"
                                                    data-cursor="-opaque">Excellence
                                                    innovating
                                                    <span>industry for
                                                        today</span>
                                                </h1>
                                                <p class="wow fadeInUp"
                                                    data-wow-delay="0.25s">At
                                                    the heart of our operations
                                                    is a commitment to
                                                    delivering superior products
                                                    through cutting-edge
                                                    technology and innovative
                                                    processes.</p>
                                            </div>
                                            <!-- Section Title End -->
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn wow fadeInUp"
                                                data-wow-delay="0.4s">
                                                <a href="contact.html"
                                                    class="btn-default">
                                                    <span>explore more</span>
                                                </a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slide End -->
                </div>
                <div class="hero-pagination"></div>
            </div>
        </div> --}}


    <link rel="stylesheet" type="text/css" href="users/engine1/style.css" />
    <script type="text/javascript" src="users/engine1/jquery.js"></script>

    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>

                @foreach ($banners as $item)
                    <li><a href="http://wowslider.net"><img src="/uploads/banner/{{ $item->image }}" alt="html5 slider"
                                title="hero-bg-2" id="wows1_0" /></a></li>
                @endforeach



            </ul>
        </div>
        {{-- <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel
                example</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div> --}}
    </div>
    <script type="text/javascript" src="users/engine1/wowslider.js"></script>
    <script type="text/javascript" src="users/engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->


    <!-- Hero Section End -->
    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/users/images/about-img-1.jpg" alt>
                            </figure>
                        </div>
                        <!-- About Image End -->
                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="/users/images/about-img-2.jpg" alt>
                            </figure>
                        </div>
                        <!-- About Image End -->
                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2>
                                    <span class="counter">14</span>+
                                </h2>
                            </div>
                            <div class="company-experience-content">
                                <p>years of experience </p>
                              
                                
                            </div>
                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"> welcome to
                                <span>Maximo Group</span>
                            </h2>
                            <p style="font-size: 25px" >Exporting material to all over india</p>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At Maximo Group, we
                                specialize in delivering premium-quality
                                aluminum products, door locks, and hardware
                                solutions. Our commitment to innovation and
                                excellence ensures we provide reliable and
                                durable products tailored to meet diverse
                                customer needs. With a focus on quality
                                craftsmanship and modern designs, Maximo
                                Group stands as a trusted partner for both
                                residential and commercial projects. Let us
                                secure and enhance your spaces with products
                                designed to last.</p>
                        </div>
                        <!-- Section Title End -->
                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>Premium Quality Products: Maximo Group excels in offering top-tier
                                                    aluminum products, door locks, and hardware designed for durability and
                                                    performance.</li>
                                                <!-- <li>advanced automation</li> -->
                                                <li>Innovative Designs: Combining modern aesthetics with functionality, our
                                                    products are crafted to elevate both residential and commercial spaces.
                                                </li>
                                                <li>Trusted Reliability: With a focus on quality and customer satisfaction,
                                                    Maximo Group is your dependable partner for secure and lasting
                                                    solutions.</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->
                                        <!-- About Content Btn Start -->
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="/about" class="btn-default">
                                                <span>learn more</span>
                                            </a>
                                        </div>
                                        <!-- About Content Btn End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- About Content Counter Start -->
                                    <div style="height: 280px" class="genuine-rating-counter">
                                        <!-- About Counter Item Start -->
                                        <div class="about-counter-item">
                                            <div class="about-counter">
                                                <h2>
                                                    <span class="counter">4.9</span>
                                                </h2>
                                            </div>
                                            <div class="genuine-rating">
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="genuine-rating-counter-content">
                                                <p>15.5K genuine rating</p>

                                            </div>
                                        </div>

                                        <!-- About Counter Item End -->
                                    </div>
                                    <!-- About Content Counter End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Our Service List Start -->
    <div class="our-services-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Services List Box Start -->
                    <div class="services-list-box">
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="/users/images/icon-service-1.svg" alt>
                            </div>
                            <div class="service-body">
                                <h3>High-Quality Aluminum Products</h3>
                            </div>

                        </div>
                        <!-- Service Item End -->
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="/users/images/icon-service-2.svg" alt>
                            </div>
                            <div class="service-body">
                                <h3>Premium Door Locks</h3>
                            </div>

                        </div>
                        <!-- Service Item End -->
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="/users/images/icon-service-3.svg" alt>
                            </div>
                            <div class="service-body">
                                <h3>Comprehensive Hardware Solutions</h3>
                            </div>

                        </div>
                        <!-- Service Item End -->
                        <!-- Service Item Start -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="/users/images/icon-service-4.svg" alt>
                            </div>
                            <div class="service-body">
                                <h3>Innovative and Modern Designs</h3>
                            </div>

                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Services List Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service List End -->
    <!-- Our Story Start -->
    <div class="our-story">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our story</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming industries
                            <span>with innovative efficient solutions</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-lg-6">
                    <!-- Our Story Header Image Start -->
                    <div class="our-story-header-img">
                        <figure class="reveal image-anime">
                            <img src="/users/images/our-story-header-img-1.jpg" alt>
                        </figure>
                        <figure class="reveal image-anime">
                            <img src="/users/images/our-story-header-img-2.jpg" alt>
                        </figure>
                    </div>
                    <!-- Our Story Header Image End -->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Story Image Start -->
                    <div class="our-story-img">
                        <figure class="reveal image-anime">
                            <img src="/users/images/our-story-img.jpg" alt>
                        </figure>
                    </div>
                    <!-- Our Story Image End -->
                </div>
                <div class="col-lg-6">
                    <div class="our-story-content">
                        <div class="our-story-content-body">
                            <p>At Maximo Group, our journey is rooted in the vision of delivering excellence in aluminum
                                products, door locks, and hardware. From humble beginnings, we have grown into a trusted
                                name, driven by a commitment to quality, innovation, and customer satisfaction.

                                Our story is one of relentless pursuit to redefine industry standards, offering products
                                that combine durability, design, and functionality. Each product we deliver reflects our
                                dedication to craftsmanship and a passion for creating solutions that empower homes and
                                businesses alike.

                                As we continue to grow, our mission remains clear: to be a leader in providing reliable,
                                modern, and secure hardware solutions. At Maximo Group, we don't just build products; we
                                build trust, one customer at a time.</p>
                        </div>
                        <div class="our-story-counters">
                            <!-- Our Story Counter Start -->
                            <div class="our-story-counter">
                                <h3>
                                    <span class="counter">10</span>k+
                                </h3>
                                <p>completed project</p>
                            </div>
                            <!-- Our Story Counter End -->
                            <!-- Our Story Counter Start -->
                            <div class="our-story-counter">
                                <h3>
                                    <span class="counter">15</span>+
                                </h3>
                                <p>satisfied customer</p>
                            </div>
                            <!-- Our Story Counter End -->
                            <!-- Our Story Counter Start -->
                            <div class="our-story-counter">
                                <h3>
                                    <span class="counter">14</span>k+
                                </h3>
                                <p>years of mastery</p>
                            </div>
                            <!-- Our Story Counter End -->
                        </div>
                        <!-- Our Story Intro Video Start -->
                        <div class="our-story-intro-video">
                            <!-- Our Story Client Image Start -->

                            <!-- Our Story Client Image End -->
                            <!-- Intro Video Box Start -->
                            <div class="intro-video-box">
                                <!-- Video Play Button Start -->
                                <div class="video-play-button">
                                    <a href="{{$videos['0']->video}}" class="popup-video"
                                        data-cursor-text="Play">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <p>Watch Our Video</p>
                                </div>
                                <!-- Video Play Button End -->
                            </div>
                            <!-- Intro Video Box End -->
                        </div>
                        <!-- Our Story Intro Video End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->


    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our products</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"> <span>From our Best
                                Products</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="user-products" class="btn-default"><span>Explore
                                More</span></a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="#" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/uploads/product/{{$item->image}}" alt>
                                </figure>
                            </a>

                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="">{{$item->title}}</a></h3>

                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
                @endforeach
                

               
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our client say</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">What our satisfied
                                clients
                                <span>are saying</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">

                                @foreach ($says as $item )
                                 <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>"{{$item->words}}"</p>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/uploads/clientsays/{{$item->image}}" alt>
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>{{$item->name}}</h3>
                                                    <p>{{$item->designation}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                @endforeach

                                   
                             
                                </div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>
                <div class="col-lg-6">
                   
                    <div class="our-testimonial-image">
                        <figure class="image-anime reveal">
                            <img src="/users/images/testimonial-image.jpg" alt>
                        </figure>
                    </div>
                  
                </div>
                <div  class="col-lg-12">
                    <!-- Agency Support Slider Start -->
                    <div  class="testimonial-company-slider">
                        <div  class="swiper">
                            <div class="swiper-wrapper">
                               
                                
                                @foreach ($teams as $item)
                                    <!-- Agency Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="/uploads/team/{{$item->image}}" alt>
                                    </div>
                                </div>
                                <!-- Agency Support Logo End -->
                                @endforeach
                                
                              
                            
                            </div>
                        </div>
                    </div>
                    <!-- Agency Support Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->
@endsection
