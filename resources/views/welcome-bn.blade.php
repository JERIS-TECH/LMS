<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | {{ config('app.name') }}</title>
    <link rel="icon" href="./assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the page */
        body {
            background-color: #fff; /* Default white background */
        }

        .section {
            padding: 50px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* Default white background for all sections */
        }

        .course-thumbnail {
            position: relative;
            overflow: hidden;
        }

        .course-thumbnail img {
            width: 100%;
            height: auto;
        }

        .btn-preview, .btn-enroll {
            position: absolute;
            bottom: 10px;
        }

        /* Custom CSS for button borders */
        .navbar-nav .nav-item .nav-link {
            border: 1px solid #ccc; /* Add border to the buttons */
            padding: 5px 10px; /* Adjust padding for better appearance */
            margin: 0 5px; /* Add margin between buttons */
            border-radius: 5px; /* Add rounded corners to buttons */
            color: darkblue;
        }

        /* Custom CSS for button borders and hover effect */
        .navbar-nav .nav-item .nav-link {
            border: 1px solid #ccc; /* Add border to the buttons */
            padding: 5px 10px; /* Adjust padding for better appearance */
            margin: 0 5px; /* Add margin between buttons */
            border-radius: 5px; /* Add rounded corners to buttons */
            transition: all 0.3s ease; /* Add smooth transition effect */
            color: darkblue;
        }

        /* Hover effect */
        .navbar-nav .nav-item .nav-link:hover {
            background-color: #003366; /* Change background color on hover to deep blue */
            border-color: #003366; /* Change border color on hover to match the background color */
            color: #fff; /* Change text color on hover to white */
        }

        .namedropdown{
            border: 1px solid #ccc; /* Add border to the buttons */
            padding: 5px 10px; /* Adjust padding for better appearance */
            margin: 0 5px; /* Add margin between buttons */
            border-radius: 5px; /* Add rounded corners to buttons */
            transition: all 0.3s ease; /* Add smooth transition effect */
            color: darkblue;
        }

        .namedropdown:hover {
            background-color: #003366; /* Change background color on hover to deep blue */
            border-color: #003366; /* Change border color on hover to match the background color */
            color: #fff; /* Change text color on hover to white */
        }

        .with-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .arrow-img {
            width: 30px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .social-icons li {
            display: inline-block;
            margin-right: 10px; /* Adjust as needed */
        }

        .social-media-icons.social-icons li a:hover i {
            transform: scale(1.2); /* Increase the icon size on hover */
        }


        /* Custom CSS for dropdown */
        .dropend .dropdown-toggle {
            /*color: salmon;*/
            margin-left: 1em;
        }

        .dropdown-item:hover {
            background-color: #003366;
            color: #fff;
        }

        .inner-drop-down {
            color: black;
        }

        /*.dropend:hover{
            background-color: #003366;
            color: #fff;
        }
        .dropend:hover .inner-drop-down{
            color: #fff;
        }*/
        .dropdown-toggle.active {
            color: red;
        }

        .dropdown {
            position: relative;
        }

        .dropdown .dropdown-menu {
            display: none;
        }

        .dropdown > .dropdown-menu {
            /*display: block;*/
            margin-top: .125em;
            margin-left: .125em;
            position: absolute;
            top: 100%; /* Adjust as needed */
            left: -60%; /* Position to the right side of the dropdown */
        }

        .dropend > .dropdown-menu {
            /*display: block;*/
            margin-top: .125em;
            margin-left: .125em;
            position: absolute;
            top: 100%; /* Adjust as needed */
            left: 0; /* Position to the right side of the dropdown */
        }

        @media screen and (min-width: 992px) {
            .dropdown > .dropdown-menu {
                margin-top: .125em;
                margin-left: .125em;
                position: absolute;
                top: 100%;
                left: 0;
            }

            .dropend > .dropdown-menu {
                position: absolute;
                top: 60%;
                left: 100%;
            }

            .dropend .dropdown-toggle {
                margin-left: .5em;
            }
        }

        /* CSS for hover effect */
        .course-card:hover {
            transform: translateY(-5px); /* Move the card slightly up on hover */
            transition: all 0.3s ease; /* Add a smooth transition effect */
        }


        /* Add shadow and hover effect to the course contents cards */
        .cc {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow */
            transition: all 0.3s ease; /* Add smooth transition effect */
        }

        .cc:hover {
            transform: translateY(-5px); /* Move the card slightly up on hover */
        }


        /* CSS for love icon and tooltip */
        .love-icon {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .love-icon i {
            font-size: 24px;
            color: #ccc; /* Unfilled heart color */
            cursor: pointer;
        }

        /* Hover effect for unfilled heart */
        .love-icon i:hover {
            color: #f00; /* Change color on hover */
        }


    </style>


</head>
<body>

<!-- Section 1: Navbar -->
<nav style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"
     class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="./assets/jeristech-logo.png" alt="Logo"></a>

    <!-- All Courses Dropdown -->
    <div class="nav-item dropdown">
        <a id="drop-all-courses" class="nav-link dropdown-toggle btn btn-info" href="#" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">
            কোর্স সমুহ
        </a>
        <ul id="drop-menu" class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle inner-drop-down" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Development
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="nav-item dropend">
                        <a class="nav-link dropdown-toggle inner-drop-down" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Web Development
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle inner-drop-down" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Frontend
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">HTML & CSS</a></li>
                                    <li><a class="dropdown-item" href="#">Bootstrap</a></li>
                                    <li><a class="dropdown-item" href="#">Javascript</a></li>
                                    <li><a class="dropdown-item" href="#">React.js</a></li>
                                    <li><a class="dropdown-item" href="#">Vue.js</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle inner-drop-down" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Backend
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">PHP & Laravel</a></li>
                                    <li><a class="dropdown-item" href="#">Python & Django</a></li>
                                    <li><a class="dropdown-item" href="#">Node.js & Express.js</a></li>
                                    <li><a class="dropdown-item" href="#">Next.js</a></li>
                                    <li><a class="dropdown-item" href="#">Ruby on Rails</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="খুজুন" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">খুজুন</button>
        </form>
        <ul class="navbar-nav ml-auto">

            @if (Route::has('login'))
                @auth
                    <!--<li class="nav-item">
                        <a
                            href="{{ url('/dashboard') }}"
                            class="nav-link"
                        >
                            Dashboard
                        </a></li>-->
                @else
                    <li class="nav-item">
                        <a
                            href="{{ route('login') }}"
                            class="nav-link"
                        >
                            লগ ইন
                        </a></li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a
                                href="{{ route('register') }}"
                                class="nav-link"
                            >
                                রেজিস্টার
                            </a></li>
                    @endif
                @endauth
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/">English</a> <!-- Language switch button -->
            </li>
        </ul>
    </div>


    <!-- Name Dropdown -->
    @auth
        <div class="nav-item dropdown">
            <a id="drop-all-courses" class="nav-link dropdown-toggle namedropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div id="drop-menu" class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('profile.edit.bn') }}">{{ __('প্রোফাইল') }}</a>
                <a class="dropdown-item" href="#">{{ __('আমার কোর্সগুলো') }}</a>
                <a class="dropdown-item" href="#">{{ __('প্রিয় কোর্সগুলো') }}</a>
                @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                    <a class="dropdown-item" href="#">{{ __('অ্যাডমিন প্যানেল') }}</a>
                @endif
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('লগ আউট') }}
                    </a>
                </form>
            </div>
        </div>
    @endauth


</nav>

<!-- Section 1: Main Content -->
<section style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"
         class="section with-shadow shadow-lg mb-5 bg-body rounded">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>ইন্টারেক্টিভ শেখার অভিজ্ঞতার সাথে আপনার সম্ভাবনা আনলক করুন</h1>
                <p>বাস্তব-বিশ্ব সাফল্যের জন্য জ্ঞানকে কর্মে রূপান্তরিত করে, গতিশীল কোর্স এবং হ্যান্ডস-অন প্রজেক্টের মাধ্যমে নিজেকে শক্তিশালী করুন।</p>
                <p><strong>25+</strong> মোট কোর্স, <strong>17k+</strong> মোট ছাত্র, <strong>30+</strong> মোট শিক্ষক.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <!-- Added "d-flex justify-content-end" for moving the image to the right -->
                <img src="./assets/intro_img.jpg" alt="Image" class="img-fluid">
                <!-- Added class "img-fluid" for responsiveness -->
            </div>
        </div>
    </div>
</section>


<!-- Section 2: Popular Courses -->
<section class="section">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between mb-4">
            <div class="col-md-2">
                <a href=""><img src="./assets/arrowLeft.png" alt="" class="arrow-img"></a>
            </div>
            <div class="col-md-8">
                <h2 class="text-center">জনপ্রিয় কোর্স</h2>
            </div>
            <div class="col-md-2 text-right">
                <a href=""><img src="./assets/arrowRight.png" alt="" class="arrow-img"></a>
            </div>
        </div>

        <!-- Course Thumbnails -->
        <div class="row">
            @for($i = 1; $i <= 4; $i++)
                <div class="col-md-3 mb-4">
                    <div class="card shadow course-card">
                        <img src="./assets/course_img.jpg" class="card-img-top" alt="Course {{$i}}">
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

    </div>
</section>


<!-- Section 3: Filtered Courses -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Course Categories as Buttons -->
                <div class="btn-group mb-3" role="group" aria-label="Course Categories">
                    <a href="" type="button" class="btn btn-secondary active">HSC</a>
                    <a href="" type="button" class="btn btn-secondary">SSC</a>
                    <a href="" type="button" class="btn btn-secondary">Web Design</a>
                    <a href="" type="button" class="btn btn-secondary">Graphic Design</a>
                    <a href="" type="button" class="btn btn-secondary">BCS</a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <!-- Filter Options -->
                <a id="filterBtn" class="btn btn-primary mb-3 mr-2">Filter By</a>
                <a id="allCoursesBtn2" class="btn btn-info mb-3">All Courses</a>
                <!-- Modal for filter options -->
                <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="filterModalLabel">Filter Options</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Checkboxes for filter options -->
                                <label><input type="checkbox" value="option1"> Option 1</label><br>
                                <label><input type="checkbox" value="option2"> Option 2</label><br>
                                <label><input type="checkbox" value="option3"> Option 3</label><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Thumbnails -->
        <div class="row">
            @for($i = 1; $i <= 8; $i++)
                <div class="col-md-3 mb-4">
                    <div class="card shadow course-card">
                        <img src="./assets/course_img.jpg" class="card-img-top" alt="Course {{$i}}">
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


<!-- Section 4: Course Contents -->
<section class="section">
    <div class="container">
        <h2 class="text-center mb-4">Course Contents</h2>
        <p class="text-center mb-5">See what you are getting after joining our courses</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="card bg-primary text-white cc">
                    <div class="card-body">
                        <i class="fas fa-industry fa-3x"></i>
                        <p class="mt-3">Industry Focused Live Courses</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="card bg-success text-white cc">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x"></i>
                        <p class="mt-3">Interactive Live Class</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-6">
                <div class="card bg-danger text-white cc">
                    <div class="card-body">
                        <i class="fas fa-book fa-3x"></i>
                        <p class="mt-3">Module Based Study Plan</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card bg-warning text-white cc">
                    <div class="card-body">
                        <i class="fas fa-chart-line fa-3x"></i>
                        <p class="mt-3">Realtime Progress Tracking</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-6">
                <div class="card bg-info text-white cc">
                    <div class="card-body">
                        <i class="fas fa-user-tie fa-3x"></i>
                        <p class="mt-3">Learn from Industry Experts</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-6">
                <div class="card bg-primary text-white cc">
                    <div class="card-body">
                        <i class="fas fa-handshake fa-3x"></i>
                        <p class="mt-3">Intensive Job Placement Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 5: Footer -->
<footer class="section" style="background-color: #f0f8ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo and website tagline -->
                <img src="./assets/jeristech-logo.png" alt="Logo">
                <p>Online Skill Development Platform</p>
                <p>Stay connected with community</p>
                <!-- Social media icons -->
                <ul class="social-media-icons social-icons">
                    <li><a href="#"><i class="fab fa-facebook" style="color: #3b5998; font-size: 24px;"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" style="color: #e4405f; font-size: 24px;"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube" style="color: #c4302b; font-size: 24px;"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <!-- Contact information -->
                <h4>Contacts</h4>
                <p><i class="far fa-envelope"></i> example@example.com</p>
                <p><i class="fas fa-map-marker-alt"></i> TMSS Engineering College, Bogura</p>
            </div>
            <div class="col-md-3">
                <!-- Company information -->
                <h4>Company</h4>
                <ul style="list-style-type: none;">
                    <li><a href="#" style="color: black; text-decoration: none;">About Us</a></li>
                    <li><a href="#" style="color: black; text-decoration: none;">Refund Policy</a></li>
                    <li><a href="#" style="color: black; text-decoration: none;">Privacy Policy</a></li>
                    <li><a href="#" style="color: black; text-decoration: none;">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <!-- App download options -->
                <h4>Apps</h4>
                <a href=""><img src="./assets/google-play.png" alt="Google Play"
                                style="width: 100px; height: auto;"></a>
                <a href=""><img src="./assets/app-store.png" alt="App Store" style="width: 100px; height: auto;"></a>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/6b65cbdea7.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('#filterBtn').click(function () {
            $('#filterModal').modal('show'); // Show the modal
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.dropdown-toggle').click(function (event) {
            event.stopPropagation();
            // If the dropdown menu of the clicked dropdown toggle is visible, hide it
            if ($(this).siblings('.dropdown-menu').is(':visible')) {
                $(this).siblings('.dropdown-menu').css('display', 'none');
                $(this).removeClass('active'); // Remove the 'active' class
            } else {
                // Hide all other sibling dropdown menus
                $(this).parent().siblings().find('.dropdown-menu').css('display', 'none');
                $(this).parent().siblings().find('.dropdown-toggle').removeClass('active'); // Remove the 'active' class from other dropdown toggles
                // Show the dropdown menu of the clicked dropdown toggle
                $(this).siblings('.dropdown-menu').css('display', 'block');
                $(this).addClass('active'); // Add the 'active' class
            }
        });

        $(document).click(function (event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown-menu').css('display', 'none');
                $('.dropdown-toggle').removeClass('active'); // Remove the 'active' class
            }
        });
    });
</script>


<script>
    $(document).ready(function () {
        // Toggle filled state of love icon and display tooltip
        $('.love-icon i').click(function () {
            $(this).toggleClass('filled'); // Toggle filled class
            if ($(this).hasClass('filled')) {
                $(this).siblings('.tooltip').text('Remove from favorite').fadeIn();
            } else {
                $(this).siblings('.tooltip').text('Add to favorite').fadeIn();
            }
        });
    });
</script>


</body>
</html>
