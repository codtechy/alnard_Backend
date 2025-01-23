@extends('layouts.user')
@section('content')

  <style>
        /* Page Banner Area */
        .page-banner-area {
            background-color: white; /* White background */
            display: flex;
            align-items: center; /* Vertically centers content */
            justify-content: center; /* Centers content horizontally */
            height: 200px; /* Small height */
            text-align: center;
            padding: 20px;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        .page-banner-content h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333; /* Dark text color */
        }

        .page-banner-content ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 16px;
        }

        .page-banner-content ul li {
            color: #666; /* Subtle text color */
        }

        .page-banner-content ul li a {
            text-decoration: none;
            color: #bd9e30; /* Blue link color */
            font-weight: bold;
        }

        .page-banner-content ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-banner-area {
                height: auto; /* Adjusts height dynamically */
                padding: 30px;
            }

            .page-banner-content h1 {
                font-size: 24px;
            }

            .page-banner-content ul {
                font-size: 14px;
            }
        }
    </style>
        <div class="page-banner-area">
        <div class="page-banner-content">
            <h1>About Us</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- Start Page Banner Area -->
    <!-- <div class="page-banner-area pt-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="single-page-banner-content">
              <h1>About Us</h1>
              <ul>
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>About Us</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div
              class="single-page-banner-img"
              data-cue="zoomIn"
              data-duration="1000"
            >
              <img src="/users/assets/images/page-banner-img.png" alt="images" />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Page Banner Area -->
    <!-- Start About Style One Area -->
    <div class="about-style-one-area pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-cue="slideInLeft" data-duration="1500">
            <div class="single-about-two-img">
              <div class="about-img-two">
                <img src="/users/assets/images/about/about-two-img.png" alt="images" />
              </div>
              <!-- <div class="about-two-shape-1">
                                <img src="/users/assets/images/about/about-two-shape-1.png" alt="images">
                            </div> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="single-about-content about-content-two">
              <span class="left-title">About Us</span>
              <h2>HI THERE!</h2>
              <p style="color: white">
                Welcome to AL NARD TECHNICAL SERVICES your trusted partner in
                maintenance services in Dubai. With a relentless commitment to
                quality and trust, we have established ourselves as a leading
                provider of reliable and efficient maintenance solutions. Our
                team of expert technicians and professionals are dedicated to
                delivering exceptional service, ensuring that your properties
                and /users/assets are well-maintained, safe, and running smoothly.
              </p>
              <p style="color: white">
                At AL NARD we understand the importance of trust and reliability
                in building long-term relationships. That's why we strive to
                exceed our clients' expectations with every project, every time.
                Our comprehensive range of maintenance services is designed to
                cater to all your needs, from routine maintenance to emergency
                repairs. AL NARD
              </p>
              <div
                class="single-about-item about-item-two-card"
                data-cue="slideInUp"
                data-duration="1000"
              >
                <div class="about-icon">
                  <i class="flaticon-favorite"></i>
                  <!-- <div class="favorite-shape">
                                        <img
                                            src="/users/assets/images/about/about-two-shape-3.png"
                                            alt="images">
                                    </div> -->
                </div>
                <h3 style="color: black">Professional Team</h3>
                <!-- <div class="about-style-two-shape">
                                    <img
                                        src="/users/assets/images/about/about-two-shape-4.png"
                                        alt="images">
                                </div> -->
              </div>
              <div
                class="single-about-item about-item-two-card"
                data-cue="slideInUp"
                data-duration="2000"
              >
                <div class="about-icon">
                  <i class="flaticon-wrench"></i>
                  <!-- <div class="favorite-shape">
                                        <img
                                            src="/users/assets/images/about/about-two-shape-3.png"
                                            alt="images">
                                    </div> -->
                </div>
                <h3 style="color: black">Quality Works</h3>
                <!-- <div class="about-style-two-shape">
                                    <img
                                        src="/users/assets/images/about/about-two-shape-4.png"
                                        alt="images">
                                </div> -->
              </div>
              <a
                href="about-style-two.html"
                class="default-btn btn-style-three"
                data-cue="slideInUp"
                data-duration="1500"
              >
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="about-style-two-shape-1">
        <img src="/users/assets/images/about/about-two-shape-2.png" alt="images" />
      </div>
    </div>
    <!-- End About Style One Area -->
    <style>
      /* Main container */
      .container1 {
        display: flex;
        flex-wrap: wrap; /* Ensures wrapping on smaller screens */
        justify-content: center; /* Center align the boxes */
        align-items: stretch; /* Ensures equal height */
        max-width: 1200px; /* Adjust width for better layout */
        min-height: 350px; /* Ensures the starting height is same */
        margin: 50px auto;
        padding: 20px;
        gap: 20px;
      }

      /* Box styling */
      .box {
        flex: 1;
        min-width: 300px; /* Prevents shrinking too much */
        max-width: 600px; /* Controls max width on large screens */
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: all 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Centers text inside */
        height: 100%; /* Makes sure both boxes stretch equally */
      }

      /* Hover effect */
      .box:hover,
      .box:hover h2,
      .box:hover p {
        color: white !important; /* Change text color */
      }

      .box:hover {
        background-color: black; /* Background changes */
        transform: translateY(-5px);
      }

      h2 {
        margin-bottom: 10px;
      }

      /* Responsive for mobile devices */
      @media (max-width: 768px) {
        .container1 {
          flex-direction: column;
          text-align: center;
        }
        .box {
          width: 100%; /* Full width on smaller screens */
          min-width: auto;
        }
      }
    </style>
    <div class="container1">
      <div class="box">
        <h2 style="color: black">Our Vision</h2>
        <p>
          "Our vision at Al Nard Technical Services is to be the leading
          building maintenance company in [Your City/Region], recognized for our
          unwavering commitment to quality, safety, and innovation. We aim to
          set the industry standard for excellence, leveraging cutting-edge
          technologies and expert technicians to provide sustainable and
          proactive maintenance solutions that enhance the value and integrity
          of our clients' properties. Through our dedication and expertise, we
          aspire to be the trusted partner of choice for building owners,
          managers, and occupants alike."
        </p>
      </div>
      <div  class="box">
        <h2 style="color: black">Our Mission</h2>
        <p>
          VISION & MISSION "At Al Nard Technical Services, our mission is to
          provide exceptional building maintenance services that exceed our
          clients' expectations. We are dedicated to delivering timely,
          efficient, and cost-effective solutions that ensure the optimal
          performance and longevity of our clients' properties. We strive to
          build long-term relationships with our clients, founded on trust,
          reliability, and unparalleled customer service."
        </p>
      </div>
    </div>
    @endsection