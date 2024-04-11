@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- Overview Section -->
    <section class="section mt-4 with-shadow" style="background-color: #f0f8ff; padding: 20px; border-radius: 15px;">
        <div class="container">
            <h2 class="text-center mb-4">Overview</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <!-- First Row of Cards -->
                <div class="col mb-4">
                    <div class="card shadow h-100 hover-effect" style="background-color: #ffe8e8;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Users</h5>
                            <p class="card-text text-center">1000</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow h-100 hover-effect" style="background-color: #e8f5ff;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Paid Users</h5>
                            <p class="card-text text-center">500</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow h-100 hover-effect" style="background-color: #fff4e8;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Courses</h5>
                            <p class="card-text text-center">50</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card shadow h-100 hover-effect" style="background-color: #e8ffed;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sold Courses</h5>
                            <p class="card-text text-center">20</p>
                        </div>
                    </div>
                </div>
                <!-- Second Row of Cards -->
                <div class="col mb-4">
                    <div class="card shadow h-100 hover-effect" style="background-color: #fcf0ff;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Income</h5>
                            <p class="card-text text-center">$1000</p>
                        </div>
                    </div>
                </div>
                <!-- Add more cards here -->
            </div>
        </div>
    </section>

    <!-- Add space after the section -->
    <div style="height: 50px;"></div>
@endsection
