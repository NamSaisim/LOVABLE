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
    $query3 = "SELECT cart_id FROM cart WHERE customer_id='$cus_id' ";
    $result3 = $mysqli->query($query3);
    if(mysqli_num_rows($result3)==0){
        header('location: product.php');
    }
    else{
    while($row=$result3->fetch_array()){
        $cart_id = $row['cart_id'];
        }
    $query4 = "SELECT product.img as img, product.price as price, product.product_name as pname, cart_details.quantity as quantity, cart_details.total_price as tp from cart_details inner join product WHERE cart_details.cart_id='$cart_id' and cart_details.product_id = product.product_id ";
    $result4 = $mysqli->query($query4);
    $query5 = "SELECT price from cart WHERE cart_id = '$cart_id'";
    $result5 = $mysqli->query($query5);
    $query6 = "SELECT product.product_id as id, product.img as img, product.price as price, product.product_name as pname, cart_details.quantity as quantity, cart_details.total_price as tp from cart_details inner join product WHERE cart_details.cart_id='$cart_id' and cart_details.product_id = product.product_id";
    $result6 = $mysqli->query($query6);
    $query7 = "SELECT price from cart WHERE cart_id = '$cart_id'";
    $result7 = $mysqli->query($query7);
    $query8 = "SELECT count(quantity) as countq from cart_details inner join product WHERE cart_details.cart_id='$cart_id' and cart_details.product_id = product.product_id";
    $result8 = $mysqli->query($query8);
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
        <!--Body Content-->
        <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
                <style>
                    h1{
                        background-color: #EEEBDD;
                        text-align: center;
                        text: center;
                        margin: 50px;
                       
                    }
                </style>
        		<div class="wrapper"><h1 class="page-width">Basket</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <style>
                                    tr,th,td{
                                       

                                        background-color: white;
                                        padding: 4px;
                                    }
                                   
                                   

                                </style>
                                <col width = "20%">
                                <col width = "20%">
                                <col width = "20%">
                                <col width = "20%">
                                <col width = "20%">
                                <tr>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    
                                </tr>
                            </thead>
                    		
                            <?php
                            
                            while($row=$result6->fetch_array()){
                            ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a><img class="cart__image" src="<?php echo $row["img"]?>" height="300"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a><?php echo $row["pname"]?></a>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money"><?php echo $row['price']?> THB</span>
                                    </td>
                                    
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                            <span class="money"><?php echo $row['quantity']?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                    <div class="cart__qty text-center">
                                        <div class="qtyField"><span class="money"><?php echo $row['tp']?> THB</span></div>
                                        </div>
                                    </td>
                                    
                                </tr>
                                <?php 
                               }
                            
                            ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                </tr>
                           
                            
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left">
                                        <a href="product.php" class="bag-btn">Continue shopping</a>
                            
                                    </td>
                                    <td colspan="3" class="text-right">
	                                    <button  onclick = "location.href = 'clear_cart.php'" class="bag-btn">Clear Cart </button>
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
                
                <style>
                    .bg{
                        background-color: white;
                    }
                    .a{
                        text-align: center;
                    }
                </style>
                <div class="container mt-4">
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4"></div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                        <div class= "bg">
                            <div class="solid-border">	
                                
                              <div class="row border-bottom pb-2">
                                <?php while($row=$result7->fetch_array()){?>
                                <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money"><?php echo $row['price']?> THB</span></span>
                              </div>
                             
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                <span class="col-12 col-sm-6 text-right">Free shipping</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money"><?php echo $row['price']?> THB</span></span>
                              </div>
                              <?php }?>
                              <p class="cart_tearm">
                                
                              </p>
                              <a href = "checkout.php"><input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Proceed To Checkout"></a>
                              
                            </div>
                            </div>
                        </div>
                    </div>
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