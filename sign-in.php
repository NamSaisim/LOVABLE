<!DOCTYPE html>
<?php 
session_start();
include('server.php');
include('errors.php'); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOVABLE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <header>
        <div name="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin: auto;">
                        <a href="index.php"><img src="images/logo.jpg" alt="logo" style="width: 70%;"></a>
                    </div>
                    <div class="col-6" style="margin: auto;">
                        <nav class="web-nav">
                            <form action="" class="form-inline">
                                <input class="search" type="search" placeholder="search product" style="width: 70%;">
                                <button class="button-search" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                    <div class="col" style="margin: auto;">
                        <div class="row">
                            <div class="col-6 col-md-4" style="margin: auto;">
                                <a href="sign-in.php"><img src="images/user.png" alt="user" style="width: 70%;"></a>
                            </div>
                            <div class="col-6 col-md-4" style="margin: auto;">
                                <a href="wishlist.php"><img src="images/favorite.png" alt="favorite" style="width: 70%;"></a>
                            </div>
                            <div class="col-6 col-md-4" style="margin: auto;">
                                <a href="basket.php"><img src="images/basket.png" alt="basket" style="width: 70%;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div name="nav-bar" class="nav-bar" style="margin-left: 1em; margin-right: 1em;">
                <div class="row" style="margin-left: 1em; margin-right: 1em;">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <a href="index.php"><button class="button-nav" type="menu">HOME</button></a>
                            </div>
                            <div class="col-6">
                                <a href="product.php"><button class="button-nav" type="menu">OUR LOVABLES</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <a href="recommendations.php"><button class="button-nav" type="menu">RECOMMENDATIONS</button></a>
                            </div>
                            <div class="col-6">
                                <a href="about-us.php"><button class="button-nav" type="menu">ABOUT US</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    <div name="body1" class="body1">
            <div class="form-group">
                <form method="POST" action="sign-in_db.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                <?php if (isset($_SESSION['error'])): ?>
                            <div class="error">
                                <h3>
                                    <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                    ?>
                                </h3>
                            </div>
                <?php endif?>
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group" style="width: 25%; margin: auto;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                
            </div>
            <!-- <a href="registration.php" class="sign-up"><p>Don't have an account? Sign Up.</p></a> -->
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Stay Signed In</label>
            </div> -->
            <input type="submit" class="btn btn-primary" name="sign_submit" value="Sign in">
            </form>
    </div>

    <footer>
        <div name="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div name="footer-contact" class="footer-contact">
                        <h4>Contact Us</h4>
                        <p>Mail Us At : 6222782987@g.siit.tu.ac.th</p>
                        <p>Call Us At : 0987654321</p>
                        <p>Locate Us At : SIIT Bangkadi, XHJ3+9R2, Bang Kadi, Mueang Pathum Thani District, Pathum Thani 12000</p>

                    </div>
                </div>
                <div class="col-sm">
                    <a href="index.php"><img src="images/logo.jpg" alt="logo" style="width: 50%;"></a>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <a href="https://www.instagram.com"><img src="images/instagram.png" alt="instagram" style="width: 50%;"></a>
                        </div>
                        <div class="col-sm">
                            <a href="https://www.facebook.com"><img src="images/facebook.png" alt="facebook" style="width: 50%;"></a>
                        </div>
                        <div class="col-sm">
                            <a href="https://www.twitter.com"><img src="images/twitter.png" alt="twitter" style="width: 50%;"></a>
                        </div>
                    </div>
                    <p style="padding-top: 2em;">Follow us on our social media platforms for the lastest updates!</p>
                </div>
            </div>
        </div>
    </div>
    </footer>
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>