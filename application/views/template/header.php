<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="images/headicon.png">



    <title>Nipa Hut Hotel &amp; Resort</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/CSS/bootstrap.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/CSS/style.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/CSS/datepicker.css");?>">

</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="nav-icon" src="<?php echo base_url("assets/IMAGES/logo_site_original.png");?>">
                    <a class="navbar-brand" href="index.php">
                        Nipa Hut Hotel &amp; Resort</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right index">
                        <li class="index"><a href="<?php echo base_url();?>NipaHut_Controller/index">Hotel</a></li>
                        <li class="index"><a href="<?php echo base_url();?>NipaHut_Controller/Rooms_User">Rooms</a></li>
                        <li class="index"><a href="coming-soon.php">Resort</a></li>
                        <li class="index"><a href="coming-soon.php">Amenities</a></li>
                        <li class="index"><a href="coming-soon.php">Gallery</a></li>
                        <li class="index">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Reservations
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="log-in">
                                                <h3 class="log-in-title">Reserve A Room Now!</h3>
                                                <hr class="feature-title-line">
                                                <form id="reservation-form" method="POST" action="index.php">
                                                    <div class="list-group">
                                                        <a class="list-group-item list-group-item-warning lg-reservenow">
                                                            <p class="list-group-item-heading">Dates</p>
                                                        </a>
                                                        <a class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    Check-In Date
                                                                    <input name="check-in-date" type="text" class="form-control datepicker span2" id="dpd1" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    Check-Out Date
                                                                    <input name="check-out-date" type="text" class="form-control datepicker span2" id="dpd2" required>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="list-group">
                                                        <a class="list-group-item list-group-item-warning lg-reservenow">
                                                            <p class="list-group-item-heading">Guests</p>
                                                        </a>
                                                        <a class="list-group-item">
                                                            <div class="row text-center">
                                                                <div class="col-md-6">
                                                                    Adults
                                                                    <select name="num-adults" class="btn btn-default">
                                                                        <option selected value = "0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    Children
                                                                    <select name="num-children" class="btn dropdown">
                                                                        <option selected value="0">0</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <button name="sbt-reservation" type="submit" class="btn btn-warning form-control">CHECK AVAILABILITY</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="index">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Log In
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="log-in">
                                                <h3 class="log-in-title">Log In User Account</h3>
                                                <hr class="feature-title-line">
                                                <form method="POST" action="index.php">
                                                    <input type="text" name="login-username" class="form-control" id="exampleInputEmail2" placeholder="Username" required>
                                                    <input type="password" name="login-password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    <input type="submit" name="sbt-login" class="form-control btn-warning" value="Log-In">
                                                </form>
                                                <div class="register-account">
                                                    New to Nipa Hut? <a href="<?php echo base_url();?>NipaHut_Controller/SignUp"><b>Register Now!</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>
