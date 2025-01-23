@extends('layouts.user')
@section('content')
    <!-- End  Menubar Area -->
    <style>
        .my-float1 {
            margin-top: 16px;
            transform: rotate(0deg) !important;
        }

        /* Page Banner Area */
        .page-banner-area {
            background-color: white;
            /* White background */
            display: flex;
            align-items: center;
            /* Vertically centers content */
            justify-content: center;
            /* Centers content horizontally */
            height: 200px;
            /* Small height */
            text-align: center;
            padding: 20px;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
        }

        .page-banner-content h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
            /* Dark text color */
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
            color: #666;
            /* Subtle text color */
        }

        .page-banner-content ul li a {
            text-decoration: none;
            color: #bd9e30;
            /* Blue link color */
            font-weight: bold;
        }

        .page-banner-content ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-banner-area {
                height: auto;
                /* Adjusts height dynamically */
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
                <li>
                    <a href="/">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- Start Page Banner Area -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Contact Section */
        .contact-section {
            background-color: #f8f9fa;
            padding: 50px 20px;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #333;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .contact-item {
            flex: 1;
            min-width: 250px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .contact-item:hover {
            /* background-color: #007bff; */
            /* color: white; */
            transform: translateY(-5px);
        }

        .contact-item h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .contact-item p {
            font-size: 16px;
            color: #555;
        }

        .contact-item i {
            font-size: 36px;
            /* color: #007bff; */
            margin-bottom: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            .contact-item {
                margin-bottom: 20px;
                width: 100%;
            }
        }
    </style>
    <div class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <!-- Phone -->
            <div class="contact-item">
                <i style="transform: rotate(90deg)" class="fas fa-phone-alt"></i>
                <h3>Phone</h3>
                <p>+971 56 221 3821 <br>
                    +9715O 3071 989 <br>
                    O4 587 6922</p>
            </div>
            <!-- Email -->
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>narddubai@gmail.com</p>
            </div>
            <!-- Address -->
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>International City, Dubai- UAE</p>
            </div>
        </div>
    </div>
    <!-- Start Contact Map area -->
    <div class="google-map-area">
        <div class="container-fluid">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28889.314159012833!2d55.38937536684982!3d25.163930574840283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f614eb88deb71%3A0x1639bd9727e18e15!2sDubai%20International%20City%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1737530997447!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- End Contact Map area -->
@endsection
