@extends('layouts.user')
@section('content')

        <!-- Page Header Start -->
        <div class="page-header parallaxie">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">About
                                <span>Us</span>
                            </h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/">home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
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
                                    <img src="/users/images/about-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->
                            <!-- About Image Start -->
                            <div class="about-img-2">
                                <figure class="image-anime reveal">
                                    <img src="/users/images/about-img-2.jpg" alt="">
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
                                    <p>years of experience</p>
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
                                 <h2 class="text-anime-style-2"
                                    data-cursor="-opaque"> welcome to
                                    <span>Maximo Group</span>
                                </h2>
                                <p style="font-size: 25px" >Exporting material to all over india</p>
                                 <p class="wow fadeInUp"
                                    data-wow-delay="0.25s">At Maximo Group, we
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
                                            <div
                                                class="about-content-list wow fadeInUp"
                                                data-wow-delay="0.5s">
                                                <ul>
                                                    <li>Premium Quality Products: Maximo Group excels in offering top-tier aluminum products, door locks, and hardware designed for durability and performance.</li>
                                                    <!-- <li>advanced automation</li> -->
                                                    <li>Innovative Designs: Combining modern aesthetics with functionality, our products are crafted to elevate both residential and commercial spaces.</li>
                                                    <li>Trusted Reliability: With a focus on quality and customer satisfaction, Maximo Group is your dependable partner for secure and lasting solutions.</li>
                                                </ul>
                                            </div>
                                            <!-- About Content List End -->
                                            <!-- About Content Btn Start -->
                                            <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                                <a href="/contact" class="btn-default">
                                                    <span>contact us</span>
                                                </a>
                                            </div>
                                            <!-- About Content Btn End -->
                                        </div>
                                        <!-- About List Btn Box End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- About Content Counter Start -->
                                        <div class="genuine-rating-counter">
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
        <style>
        .chairman-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 8px;
        }

        .chairman-image {
            flex: 1 1 300px;
            max-width: 300px;
            margin: 10px;
        }

        .chairman-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .chairman-message {
            flex: 2 1 400px;
            margin: 10px;
            padding: 10px;
        }

        .chairman-message h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #005b96;
        }

        .chairman-message p {
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .chairman-section {
                flex-direction: column;
                text-align: left;
            }

            .chairman-message {
                margin-top: 20px;
            }
        }
        </style>
    </style>
    <section class="chairman-section">
        <div class="chairman-image">
            <img src="/users/images/team-6.jpg" alt="Chairman">
        </div>
        <div class="chairman-message">
            <h2>Message from the Chairman</h2>
            <p>
                Dear Valued Customers, Partners, and Stakeholders,

It is with great pride and gratitude that I welcome you to Maximo Group. Our journey has been one of dedication, innovation, and a relentless pursuit of excellence. From the very beginning, our mission has been to deliver high-quality aluminum products, door locks, and hardware solutions that not only meet but exceed our customers' expectations.
            </p>
            <p>
                At Maximo Group, we believe in the power of quality craftsmanship, modern design, and customer-centricity. These principles guide every aspect of our work, allowing us to create products that are durable, reliable, and tailored to the evolving needs of our clients.
            </p>
            <p>
                As we look to the future, we remain committed to driving progress through continuous innovation and sustainability. Together with our talented team and trusted partners, we aim to build enduring relationships and create solutions that empower homes and businesses across the globe.
            </p>
            <p>
                Thank you for your trust and support as we continue to grow and achieve new milestones. We are excited about the opportunities ahead and look forward to serving you with the same passion and commitment that defines Maximo Group.
            </p>
        </div>
    </section>
    <!-- Our Mission Vision Section Start -->
    <div class="our-mission-vision">
        <div class="mission-vision-bg parallaxie">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering sustainable
                                <span>growth in industry</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <p>We drive sustainable solutions in factory and industrial settings, focusing on efficiency, innovation, and environmental responsibility to support long-term growth.</p>
                        </div>
                        <!-- Section Title Content End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mission Vision Box Start -->
                    <div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
                        <!-- Sidebar Mission Vision Nav start -->
                        <div class="mission-vision-nav">
                            <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="remodeling-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#mission"
                                        type="button"
                                        role="tab"
                                        aria-selected="true"
                                    >
                                        <img src="/users/images/icon-mission-nav.svg" alt=""> our mission
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="installation-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#vision"
                                        type="button"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        <img src="/users/images/icon-vision-nav.svg" alt=""> our vision
                                    </button>
                                </li>
                           
                            </ul>
                        </div>
                        <!-- Sidebar Mission Vision Nav End -->
                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>To deliver premium-quality aluminum products, door locks, and hardware solutions through innovation, precision, and customer-centricity, ensuring durability, functionality, and aesthetic excellence for homes and businesses worldwide.</p>
                                        </div>
                                        <!-- <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Sustainable Manufacturing Practices</li>
                                                <li>Advanced Technology Integration</li>
                                                <li>Community Environmental Responsibility</li>
                                                <li>Innovation-Driven Growth</li>
                                            </ul>
                                        </div>                                      -->
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="/users/images/mission-image.jpg" alt="">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>To be a global leader in aluminum products and hardware solutions, recognized for our commitment to quality, sustainability, and innovation, shaping secure and modern living and working spaces.</p>
                                        </div>
                                       
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="/users/images/vision-image.jpg" alt="">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                      
                    </div>
                    <!-- Mission Vision Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission Vision Section End -->
    @endsection