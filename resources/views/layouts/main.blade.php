@php
    use Illuminate\Support\Facades\Request;
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('/assets/favicon.png') }}" type="image/x-icon">
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

        .course-thumbnail img {
            width: 100%;
            height: auto;
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

        .namedropdown {
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

        .active-now {
            color: deeppink !important;
        }

        .active-now:hover {
            color: white !important;
        }


    </style>


</head>
<body>

<!-- Section 1: Navbar -->
<nav style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"
     class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="{{ asset('/assets/jeristech-logo.png') }}" alt="Logo"></a>

    <!-- All Courses Dropdown -->
    <div class="nav-item dropdown">
        <button id="drop-all-courses" class="nav-link dropdown-toggle btn btn-info" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">
            All Courses
        </button>
        <ul id="drop-menu" class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="nav-item dropend">
                <a class="nav-link dropdown-toggle inner-drop-down" role="button" data-bs-toggle="dropdown"
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
                        <a class="nav-link dropdown-toggle inner-drop-down" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Web Development
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropend">
                                <a class="nav-link dropdown-toggle inner-drop-down" role="button"
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
                                <a class="nav-link dropdown-toggle inner-drop-down" role="button"
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
                            Log in
                        </a></li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a
                                href="{{ route('register') }}"
                                class="nav-link"
                            >
                                Register
                            </a></li>
                    @endif
                @endauth
            @endif
            <li class="nav-item">
                @if(strpos(Request::path(), '/bn') === false)
                    <a class="nav-link" href="{{ url(Request::path() . '/bn') }}">বাংলা</a>
                @else
                    <a class="nav-link" href="{{ url(str_replace('/bn', '', Request::path())) }}">English</a>
                @endif
                <!-- Language switch button -->
            </li>
        </ul>
    </div>


    <!-- Name Dropdown -->
    @auth
        <div class="nav-item dropdown">
            <button id="drop-all-courses" class="nav-link dropdown-toggle namedropdown" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div id="drop-menu" class="dropdown-menu">
                @if(strpos(Request::path(), '/bn') === false)
                    <a class="dropdown-item {{ Route::currentRouteName() == 'profile.edit' ? 'active-now' : '' }}" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                    <a class="dropdown-item {{ Route::currentRouteName() == 'course.mycourses' ? 'active-now' : '' }}" href="{{ route('course.mycourses') }}">{{ __('My Courses') }}</a>
                    <a class="dropdown-item {{ Route::currentRouteName() == 'course.favcourses' ? 'active-now' : '' }}" href="{{ route('course.favcourses') }}">{{ __('Favourites') }}</a>
                @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{ __('Admin Panel') }}</a>
                    @endif
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a class="dropdown-item {{ Route::currentRouteName() == 'profile.edit.bn' ? 'active-now' : '' }}" href="{{ route('profile.edit.bn') }}">{{ __('প্রোফাইল') }}</a>
                    <a class="dropdown-item {{ Route::currentRouteName() == 'course.mycourses.bn' ? 'active-now' : '' }}" href="{{ route('course.mycourses.bn') }}">{{ __('আমার কোর্সগুলো') }}</a>
                    <a class="dropdown-item {{ Route::currentRouteName() == 'course.favcourses.bn' ? 'active-now' : '' }}" href="{{ route('course.favcourses.bn') }}">{{ __('প্রিয় কোর্সগুলো') }}</a>
                    @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{ __('অ্যাডমিন প্যানেল') }}</a>
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
                @endif
            </div>
        </div>
    @endauth


</nav>


<!-- Page Content -->
<main>
    @yield('content')
</main>


<!-- Section 5: Footer -->
<footer class="section" style="background-color: #f0f8ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo and website tagline -->
                <img src="{{ asset('/assets/jeristech-logo.png') }}" alt="Logo">
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
                <a href=""><img src="{{ asset('/assets/google-play.png') }}" alt="Google Play"
                                style="width: 100px; height: auto;"></a>
                <a href=""><img src="{{ asset('/assets/app-store.png') }}" alt="App Store"
                                style="width: 100px; height: auto;"></a>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/6b65cbdea7.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
    $(document).ready(function() {
        $('#confirmDeleteBtn').click(function() {
            $('#confirmDeleteModal').modal('show');
        });
    });
</script>

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>


</body>
</html>
