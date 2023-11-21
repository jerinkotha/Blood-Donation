<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DONATE BLOOD & SAVE LIFE | BLOODDonorS.COM</title>
    <!-- <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" href="assets/css/counter.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        .donation-care {
            padding: 50px;
            background-color: #fff;
        }

        @media screen and (max-width: 940px) {
            .donation-care {
                padding: 30px 10px;
            }
        }

        .donation-care h4 {
            padding: 10px;
            margin-bottom: 0px;
            font-size: 1rem;
            font-weight: 600;
        }

        .donation-care p {
            padding: 10px;
            padding-top: 0px;
            text-align: justify;
            font-size: 0.85rem;
        }

        .donation-care i {
            font-size: 13px;
            margin-left: 10px;
        }

        .donation-care .vd {
            margin-bottom: 20px;
        }

        .donation-care .bkjiu {
            background-color: #f8f9fa;
            padding: 5px;
        }

        .donation-care .bkjiu .btn {
            margin-bottom: 6px;
            margin-left: 6px;
        }

        @media screen and (max-width: 940px) {
            .health-care {
                padding: 50px 10px;
            }
        }
    </style>
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                mail@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                +0123447788
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li>
                                <i class="fas fa-user"></i>
                                <a class="text-white" href="login.html">Login</a>
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-user-plus"></i>
                                <a class="text-white" href="signup.html">Registration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <img src="img/logo.jpg" alt="">
                    </div>
                    <div class="col-md-9 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#process">Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link btn btn-danger text-white" href="donate-now.html">Donate
                                            Now</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ################# Donor form Starts Here#######################--->

    <form action="{{ route('donor.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="blood_group">Blood Group</label>
        <input type="text" name="blood_group" id="blood_group"><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"><br>
        <label for="last_donate">last donated</label>
        <input type="date" name="last_donate" id="last_donate"><br>
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob"><br>
        <label for="donation_count">donation count</label>
        <input type="number" name="donation_count" id="donation_count"><br>
        <input type="submit" value="Submit">
    </form>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/counter/multi-animated-counter.js"></script>
<script src="assets/js/script.js"></script>

</html>
