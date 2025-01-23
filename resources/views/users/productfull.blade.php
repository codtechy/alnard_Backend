@extends('layouts.user')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    

                    @if (!empty($category))
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>{{$category}}</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" style="color: white" aria-current="page">{{$category}}</li>
                            </ol>
                        </nav>
                    </div>
                    @else

                     <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Products</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li  class="breadcrumb-item"><a   href="/">home</a></li>
                                <li class="breadcrumb-item active" style="color: white" aria-current="page">our Products</li>
                            </ol>
                        </nav>
                    </div>
                    @endif

                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

   
<style>
    .team-categories {
        margin-bottom: 20px;
        text-align: center;
    }

    .team-categories ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap; /* Allow items to wrap */
        justify-content: center;
        gap: 15px; /* Space between items */
        max-width: 80%;
        margin: 0 auto; /* Center align */
    }

    .team-categories ul li {
        flex: 1 1 calc(16.66% - 15px); /* 6 items per row */
        max-width: calc(16.66% - 15px);
        text-align: center;
    }

    .team-categories ul li a {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #333;
        background-color: #f1f1f1;
        padding: 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-size: 16px;
        font-weight: bold;
        text-transform: capitalize;
        min-height: 80px; /* Ensures all boxes are the same height */
        width: 100%;
    }

    .team-categories ul li a:hover {
        background-color: #007bff;
        color: #fff;
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .team-categories ul li {
            flex: 1 1 calc(25% - 15px); /* 4 items per row on larger tablets */
            max-width: calc(25% - 15px);
        }
    }

    @media (max-width: 992px) {
        .team-categories ul li {
            flex: 1 1 calc(33.33% - 15px); /* 3 items per row on smaller tablets */
            max-width: calc(33.33% - 15px);
        }
    }

    @media (max-width: 768px) {
        .team-categories ul li {
            flex: 1 1 calc(50% - 15px); /* 2 items per row on mobile (2 columns) */
            max-width: calc(50% - 15px);
        }
    }

    @media (max-width: 576px) {
        .team-categories ul li {
            flex: 1 1 100%; /* 1 item per row on very small mobile */
            max-width: 100%;
        }
    }
</style>
    <div class="page-team">
        <div class="container">
            <div class="team-categories">
                <ul>
                    @foreach ($categories as $item)
                        <li><a href="/productbycat/{{ $item->id }}">{{ $item->Name }}</a></li>
                    @endforeach


                </ul>
            </div>
            <div style="justify-content: center;display: flex" class="row">


               
                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-6">
                            <!-- Team Member Item Start -->
                            <div class="team-member-item wow fadeInUp">
                                <!-- Categories Start -->

                                <!-- Categories End -->

                                <!-- Team Image Start -->
                                <div class="team-image">
                                    <a href="#" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="/uploads/product/{{ $item->image }}" alt="">
                                        </figure>
                                    </a>


                                </div>
                                <!-- Team Image End -->

                                <!-- Team Content Start -->
                                <div class="team-content">
                                    <h3><a href="#">{{ $item->title }}</a></h3>

                                </div>
                                <!-- Team Content End -->
                            </div>
                            <!-- Team Member Item End -->
                        </div>
                    @endforeach
               
     





                <!-- Repeat the structure for other team members -->

            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection
