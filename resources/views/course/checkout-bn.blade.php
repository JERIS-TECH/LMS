@extends('layouts.main')

@section('title', 'Checkout')

@section('content')

    <style>
        .course-thumbnail {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.3); /* white color with 0.2 opacity */
            /*opacity: 0.2;  Adjust this value to change the opacity of the overlay */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .overlay i {
            color: black; /* Fill the icon with black */
            background-color: white; /* Create a white background */
            padding: 10px; /* Add space around the icon */
            border-radius: 50%; /* Make the background a circle */
        }

        .overlay p {
            color: black;
            text-align: center;
            font-weight: bold;
            margin-top: 5px;
            background-color: white;
            padding: 5px;
            border-radius: 5%;
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-size: 1.5rem;
        }

        .card-body {
            padding: 1.5rem;
            border-radius: 15px;
        }

        .card-body ul {
            margin-left: 1.5rem;
        }

        .card-body ul li {
            list-style: none;
            padding: 0.5rem 0;
            color: #666;
        }

        .card-body ul li:before {
            content: "\2022";
            color: #007bff;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .card-body ul li:hover {
            color: #333;
        }

    </style>

    <!-- Section 1: Order Details -->
    <section class="section with-shadow" style="background-color: #f0f8ff; margin-bottom: 20px;">
        <div class="container">
            <h2 class="text-center" style="text-decoration: underline;">চেকআউট</h2>
            <h3>অর্ডার ডিটেইলস :</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/course_img.jpg') }}" alt="Course Thumbnail"
                         style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-8" style="text-align: end;">
                    <h4>এসএসসি / রসায়ন</h4>
                    <h4>অধ্যায় 1</h4>
                    <a href="/course/1/preview/bn" class="mt-2 btn btn-primary">দেখুন</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Summary -->
    <section class="section with-shadow" style="background-color: #f0f8ff; margin-bottom: 20px;">
        <div class="container">
            <h3>সারসংক্ষেপ :</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <strong>মূল দাম :</strong>
                        <span><strong>1200 টাকা</strong></span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <strong>কুপন কোড :</strong>
                        <div class="input-group" style="max-width: 275px;">
                            <input type="text" class="form-control" placeholder="কুপন কোডটি লিখুন">
                            <div class="input-group-append">
                                <button class="btn btn-primary">প্রয়োগ করুন</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <strong>ছাড় :</strong>
                        <span><strong>0 টাকা</strong></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <strong>মোট দাম :</strong>
                        <span><strong>1200 টাকা</strong></span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end"> <!-- Add these classes -->
                <button class="btn btn-success">চেকআউট সম্পূর্ণ করুন</button>
            </div>
        </div>
    </section>



    <!-- Section 3: Related Courses -->
    <section class="section">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between mb-4">
                <!--<div class="col-md-2">
                    <a href=""><img src="{{ asset('/assets/arrowLeft.png') }}" alt="" class="arrow-img"></a>
                </div>-->
                <div class="col-md-12">
                    <h2 class="text-center">সম্পর্কিত কোর্স</h2>
                </div>
                <!--<div class="col-md-2 text-right">
                    <a href=""><img src="{{ asset('/assets/arrowRight.png') }}" alt="" class="arrow-img"></a>
                </div>-->
            </div>

            <!-- Course Thumbnails -->
            <div class="row">
                @for($i = 1; $i <= 8; $i++)
                    <div class="col-md-3 mb-4">
                        <div class="card shadow course-card">
                            <img src="{{ asset('/assets/course_img.jpg') }}" class="card-img-top" alt="Course {{$i}}">
                            <!-- Love icon -->
                            <div class="love-icon">
                                <i class="far fa-heart"></i>
                                <span class="tooltip">Add to favorite</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Course Title {{$i}}</h5>
                                <!-- Add course price here -->
                                <p class="card-text"><strong>1200 টাকা</strong></p>
                                <div class="btn-group d-flex justify-content-between">
                                    <a href="/course/1/preview/bn" class="btn btn-primary btn-preview">দেখুন</a>
                                    <a href="/course/1/checkout/bn" class="btn btn-success btn-enroll">ক্রয় করুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center">
                <a class="btn btn-primary btn-more">আরও দেখুন</a>
            </div>

        </div>
    </section>

@endsection
