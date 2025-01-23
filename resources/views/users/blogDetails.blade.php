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
            <h1>Blog Details</h1>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Blog Details</li>
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


    <!-- Start Blog Details Area -->
    <div class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-details-content">
                        <div class="blog-details-img">
                            <img src="/uploads/blogs/{{ $blogs->image }}" alt="images">
                        </div>
                        <h2>{{ $blogs->title }}</h2>
                        <ul>
                            <li><i class="flaticon-calendar"></i>{{ $blogs->date }}</li>

                        </ul>
                        <p>{!! $blogs->words !!}</p>




                    </div>



                </div>

                <div class="col-lg-4">
                    <div class="blog-details-right-bar">


                        <div class="popular-tags">
                            <h2>Popular Services</h2>
                            <ul>
                                <li>
                                    <a href="#">GENERAL MAINTENANCE</a>
                                </li>
                                <li>
                                    <a href="#">FLOORING</a>
                                </li>
                                <li>
                                    <a href="#">AC & VENTILATION</a>
                                </li>
                                <li>
                                    <a href="#">GYPSUM WORKS</a>
                                </li>
                                <li>
                                    <a href="#">Indoor Cleaning</a>
                                </li>
                                <li>
                                    <a href="#">ALUMINIUM AND GLASS WORKS</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
        <!-- End Blog Details Area -->
    @endsection
