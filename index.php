<!DOCTYPE html>
<?php
    session_start();
    include('server.php');
    include('errors.php');
    $cus_id=$_SESSION['cus_id'];
    if(!isset($_SESSION['username'])){
        $_SESSION['msg']="You must log in first";
        header('location: sign-in.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: sign-in.php');
    }
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
                        <a href="index.pho"><img src="images/logo.jpg" alt="logo" style="width: 70%;"></a>
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
                            <?php if(isset($_SESSION['username'])): ?>
                                <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                                <a href="index.php?logout='1'" style="color: red;">Logout</a>
                            <?php endif?>
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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/lovable hp.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/promotion.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/fall.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="body1-description">
            <h1>Welcome to LOVABLE!</h1>
            <p>LOVABLE was created for lipstick lovers that are looking for an affordable, high-quality lipstick that will put the finishing touches for their makeup looks.</p>
        </div>
    </div>

    <div name="body2" class="body2">
        <div name="body2-recommend" class="body2-recommend">
            <a href="recommendations.php">
                <h2>New Line of Products Available Now!</h2>
            </a>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a href="#">
                        <img src="images/matt1.jpg" alt="matt1">
                        <h5>LOVABLE Matt - Red</h5>
                        <h6>690 THB</h6>
                        <p>Our LOVABLE matt is formulated to be long wearing, soft to the touch, bold lipsticks.</p>
                    </a>
                    <a href="product.php"><button class="bag-btn">View More</button></a>
                </div>
                <div class="col-sm">
                    <a href="#">
                        <img src="images/matt2.jpg" alt="matt2">
                        <h5>LOVABLE Matt - Brick</h5>
                        <h6>690 THB</h6>
                        <p>Our LOVABLE matt is formulated to be long wearing, soft to the touch, bold lipsticks.</p>
                    </a>
                    <a href="product.php"><button class="bag-btn">View More</button></a>
                </div>
                <div class="col-sm">
                    <a href="#">
                        <img src="images/matt3.jpg" alt="matt3">
                        <h5>LOVABLE Matt - Maroon</h5>
                        <h6>690 THB</h6>
                        <p>Our LOVABLE matt is formulated to be long wearing, soft to the touch, bold lipsticks.</p>
                    </a>
                    <a href="product.php"><button class="bag-btn">View More</button></a>
                </div>
            </div>
        </div>
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