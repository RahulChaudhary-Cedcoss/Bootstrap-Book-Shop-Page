<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-control {
            width: 80%;
            padding-right: 5%;
        }

        .nav {
            margin-left: 38%;
        }

        .centered {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;

        }

        .cen {
            border-radius: 16px;
            border-style: none;
        }

        .phipino {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 58px;
        }

        .browse {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;

        }

        .store {
            border-radius: 25px;
            border-style: none;
            background-color: red;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .checked {
            color: orangered;
        }

        .nav-link {
            border-radius: 16px;
            border-style: none;
            color: gray;
            padding-bottom: 12px;
            padding-top: 12px;
            padding-right: 20px;
            padding-left: 20px;
        }

        .browseM {
            border-radius: 25px;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            padding-bottom: 20px;
            border-color: red;
            color: red;
        }

        .phipino2 {
            position: absolute;
            top: 30%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
        }

        .view1 {
            transform: translate(-10%, -400%);
            color: white;
            background-color: red;
            border-style: none;
            border-radius: 25px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-top: 10%;
        }

        .detail1 {
            border-radius: 25px;
            border-style: none;
            background-color: red;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .bg-img {
            width: 100%;
            height: 350px;
        }

        .news {
            margin-top: -20%;
            padding-top: 0%;
            color: white;
        }

        .email {
            color: gray;
            background-color: white;
            border-style: none;
            border-radius: 25px;
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .subs {
            color: white;
            background-color: red;
            border-style: none;
            border-radius: 25px;
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .dragones {
            background-color: red;
            width: 100%;
            height: 505px;
            color: white;
        }
        .detail3 {
            border-radius: 25px;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            padding-bottom: 20px;
            border-color: white;
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><span><img style="width: 35px; color:red;" src="images/booklogo.png" alt="booklogo">&nbsp;&nbsp;<span><big><b style="color: #040151;">ABC</b></big></span> <big style="color: gray;">Book</big></span></a>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input style="width: 200%; padding:12%; border-radius:16px; " type="text" class="form-control" placeholder="Search book by author or publisher" name="search">
                            <i class="bi bi-search"></i>
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-nav">
                    <li><a style="color: gray;"><b>FAQ</b></a></li>
                    <li><a style="color: gray;"><b>Track Order</b></a></li>
                    <li><a style="color: gray;"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart text-secondary" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a>
                        <span style="background-color: red;" class="position-sticky top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </li>
                    <li><a><button type="button" style="background-color:red; padding:25%; border-radius:16px; color:white;" class="btn btn-secondary"><b>Sign in</b></button></a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <ul class="list-inline" style="text-align:center;">
                <li><big><b>Home &nbsp;&nbsp;&nbsp;&nbsp;</b></big></li>
                <li><big><b>Caterories &nbsp;&nbsp;&nbsp;&nbsp;</b></big></li>
                <li><big><b>About &nbsp;&nbsp;&nbsp;&nbsp;</b></big></li>
                <li><big><b>Pages &nbsp;&nbsp;&nbsp;&nbsp;</b></big></li>
                <li><big><b>Blog &nbsp;&nbsp;&nbsp;&nbsp;</b></big></li>
                <li><big><b>Contacts</b></big></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <img class="bg-img " src="images/UcAi2P.webp" alt="sunset" style="height: 550px; width:1150px;">
        <div class="centered"><button class="cen">Science Fiction</button></div>
        <h1 class="phipino"><b>The History<br> of Phipino</b></h1>
        <div class="browse"><button class="store"><b>Browse Store</b></button></div>
    </div><br><br><br>
    <h2 style="margin-left: 40%;"><b>Best Seliing Books Ever</b></h2><br><br>
    <div class="container" style="margin-left: 7%; ">
        <div class="row">
            <div class="col-sm-2" style="margin-right: 25px;">
                <span><img src="images/QeenBee.jpg" style="width: 200px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2" style="margin-right: 25px;">
                <span><img src="images/QeenBee.jpg" style="width: 200px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2" style="margin-right: 25px;">
                <span><img src="images/QeenBee.jpg" style="width: 200px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2" style="margin-right: 25px;">
                <span><img src="images/QeenBee.jpg" style="width: 200px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2" style="margin-right: 25px;">
                <span><img src="images/QeenBee.jpg" style="width: 200px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <span>
                    <h2><b>Featured This Week</b><span><small><button style="margin-left: 55%; color:black; border-style:none;">View All</button></small></span></h2>
                </span><br>
                <div class="dragones">
                    <div class="text-right redbox" style="margin-right: 150px; padding-top:120px; ">
                        <h2><b>The Rage of Dragones</b></h2>
                        <h6 class="text-center" style="margin-left:20%;"><b>By Evan Winter</b></h6>
                        <h1 class="text-center" style="margin-left:25%;"><b>$50.00</b></h1>

                        <div class="text-center" style="margin-left:35%; ">
                            <big><span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-full"></span></big>
                            <span> (120 Review)</span>
                        </div><br><br>
                        <button class="detail3"><b>View Details</b></button>
                    </div>
                    <img class="bg-img " src="images/dragons.jpg" alt="dragone" style="height: 450px; width:350px; padding-top:0%; padding-bottom:0%; padding-left:10%; margin-top:-43%;">
                </div>
            </div>
            <div class="col-sm-3"><img src="images/joker.jpg" style="width:110%"></div>
        </div>
    </div><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><b>Latest Published items</b></h2>
            </div>
            <div class="col-sm-7">
                <nav class="navbar navbar-expand-sm bg-light">
                    <ul class="navbar-nav navbar-right" style="padding: 12px; margin:12px; border-radius:16%;">
                        <button style="border-radius:16px; border-style: none; color:white; padding-bottom:12px; padding-top:12px; padding-right:20px; padding-left:20px; background-color:red; " href="#"><b>All</b></button>
                        <button class="nav-link" href="#"><b>Horror</b></button>
                        <button class="nav-link" href="#"><b>Thriller</b></button>
                        <button class="nav-link" href="#"><b>Science Fiction</b></button>
                        <button class="nav-link" href="#"><b>History</b></button>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
            <div class="col-sm-2">
                <span><img src="images/QeenBee.jpg" style="width: 150px;"></span>
                <span>
                    <h3><b>Moon Dance</b></h3>
                </span>
                <span style="color: gray;">J. R Rain</span><br>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-full checked"></span><br>
                <span style="color: gray;">(<span class="checked">120&nbsp;</span>Review)</span><span style="font-size: 25px; color:red;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$50</b></span>
            </div>
        </div>
    </div><br><br><br>

    <div class="border border-danger p-6 mb-6">
        <div class="text-center">
            <button type="button" class="browseM"><b>Browse More</b></button>
        </div>
    </div><br><br><br><br>

    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6">
                <img class="bg-img " src="images/Screenshot3.png" alt="face" style="height: 180px; width:550px;">

                <p class="phipino2"><b>The History <br>of Phipino </b></p> <button class="view1" style="margin-left: 65%;"><b>View Detailes</b></button>
            </div>
            <div class="col-sm-6">
                <img class="bg-img " src="images/tiger.jpeg" alt="tiger" style="height: 180px; width:550px;">
                <p class="phipino2"><b>Wilma Mumduya</b></p> <button class="view1" style="margin-left: 65%;"><b>View Detailes</b></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <img class="bg-img" src="images/blueback.jpg">
            <div class="row text-center news">
                <h1><b>Join Newsletter</b></h1>
                <p style="color: gray;"><b>Lorem started its journey with cast icon (CI) products in 1980. The initial main<br>
                        objective was to ensure pure water and affordable irrigation.</b></p>
                <p><button class="email"><b>Enter your email</b></button>&nbsp;&nbsp;&nbsp;<button class="subs"><b>Subscribe</b></button></p>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="col-sm-3 text-inline" style="display: inline-block;">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span><img style="width: 35px; color:red;" src="images/booklogo.png" alt="booklogo">&nbsp;&nbsp;<span><big><b style="color: #040151;">ABC</b></big></span> <big style="color: gray;">Book</big></span></a>
                <br><br><br><br>
                <p style="color: gray;"><b>Get the breathing space now, and we'll extend your term at the other end year for go.</b></p><br>
            </div>
            <div class="circle" style="color: gray;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
            </div>
        </div>

        <div class="col-sm-3">
            <h4 style="color: #040151;"><b>Book Category</b></h4><br><br>
            <p style="color: gray;"><b>History<br><br> Horror-Thriller<br><br> Love Stories<br><br> Science Fiction<br><br> Business</b></p>
        </div>
        <div class="col-sm-3">
            <p style="color: gray;"><br><br> <br><br> <b>Biography<br><br> Astrology<br><br> Digital Marketing<br><br> Software Development<br><br> Ecommerce</b></p>
        </div>
        <div class="col-sm-3">
            <h4 style="color: #040151;"><b>Site Mape</b></h4><br><br>
            <p style="color: gray;"><b>Home<br><br> About Us<br><br> FAQs<br><br> Blog<br><br> Contact</b></p>
        </div>
    </div><br><br><br><br><br><br>
    <div class="text-center">
        <h5><b>Copyright © 2022 All right reserved | This Template is made with 🖤 by Rahul</b></h5>
    </div>
</body>

</html>