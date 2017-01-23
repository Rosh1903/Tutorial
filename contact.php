<?php
session_start();
require_once('connection.php');
$con = mysqli_connect("Localhost", "root", "", "demopharma");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>GESUND</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script type="text/javascript" src="js/megamenu.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
<!-- header -->
<div class="top_bg">
            <div class="container">
                <div class="header_top-sec">
                    <div class="top_right">
                        <ul>                                
                            <li><a href="index.php" style="font-family: fantasy; text-transform: initial; font-size: 30px; "><img src="images/logo.png" class="logo"></a></li>
                        </ul>
                    </div>
                    <div class="top_left">
                        <ul>
                            <li class="top_link">
                                <a href="mailto@example.com" target="_blank">Email Us 
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </a>
                            </li>|
                            <li class="top_link"><a href="contact.php">Message Us</a></li>					
                        </ul>
                        <div class="social">
                            <ul>
                                <li><a href="https://www.facebook.com" target="_blank"><i class="facebook"></i></a></li>
                                <li><a href="https://www.twitter.com" target="_blank"><i class="twitter"></i></a></li>

                                <li><a href="https://www.google.com" target="_blank"><i class="google"></i></a></li>										
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--Menu Code Starts here-->
        <div id="wrap">
            <header>
                <div class="inner relative">
                    <a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
                    <nav id="navigation">
                        <ul id="main-menu">
                            <li><a href="index.php">Home</a></li>
                            <li class="parent">
                                <a href="products.php">Products</a>
                                <ul class="sub-menu">
                                    <?php
                                    $res = $con->query("Select distinct prod_type from product");
                                    while ($row = $res->fetch_assoc()) {
                                        ?>
                                        <li>
                                            <a href="demoprod.php?type=<?php echo $row["prod_type"] ?>">
                                                <i class="glyphicon glyphicon-cog"></i> <?php echo $row["prod_type"] ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            

                            <li>
                                <a href="aboutus.php">About Us</a>
                            </li>
                            <li class="current-menu-item">
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li><a href="FAQS.php">FAQ'S</a></li>
                        </ul>
                    </nav>                 
                    <div class="clear"></div>
                </div>
            </header>	
        </div>    
<div class="contact">
	 <div class="container" class="slide">
		 <ol class="breadcrumb">
                     <li><a class="side" href="index.php">Home</a></li>
                     <li class="active"> <a class="side" href="contact.php">Contact</a></li>
		 </ol>
		 <div class="contact-head">
		 	 <h2>START A CONVERSATION</h2>
                         <form action="getprice.php" method="post" >
				  <div class="col-md-6 contact-left">
						<input type="text" placeholder="Name" name="name" id="name" required/>
						<input type="text" class="validate[required,custom[email]] feedback-input" id="email" name="email" placeholder="Email" required/>
						<input type="text" placeholder="Phone" name="phone" id="phone" required/>
				 </div>
				 <div class="col-md-6 contact-right">
						 <textarea placeholder="Message" name="msg" id="msg"></textarea>
						 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">				 
				  <ul>
					 				 					
					 <li>
						 <div class="address-info">	
							 <h4>India , Maharashtra<br>B/106 , Soham Tower<br>90 Feet Road , Bhayander (West),<br>Thane 401101<br>
							 Phone: 9967796612
                                                         </h4>
							 <p>Mail: <a href="mailto:support@gesund.co.in">support center</a></p>
							 	
						 </div>
					 </li>				
				  </ul>	
				  <ul>
					 				 					
					 <li>
						 <div class="address-info">	
							 <h4>India , Gujarat<br>C/43,Narhari Avenue ,<br> B/H Sterling Biotech Atladra<br>Vadodara, <br>Vadodra 390012<br>
							 Phone: 9967796612
                                                         </h4>
							 <p>Mail: <a href="mailto:support@gesund.co.in">support center</a></p>
							 	
						 </div>
					 </li>				
				  </ul>	
                              </div>			 
		 </div>
	 </div>
</div>
	 </div>
</div>
<!---->
<div class="footer-content">
            <div class="container">
                <div class="ftr-grids">
                    <div class="col-md-3 ftr-grid">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="aboutus.php">Who We Are</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <h4>Customer service</h4>
                        <ul>
                            <li><a href="FAQS.php">FAQ</a></li>
                            <li><a href="products.php">Bulk Orders</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <h4>Products</h4>
                        <ul>
                            <li><a href="demoprod.php?type=Anti Cancer Medicine">> Anti Cancer Medicine</a></li>
                            <li><a href="demoprod.php?type=Anti HIV Drugs">> Anti HIV Drugs</a></li>
                            <li><a href="demoprod.php?type=Anti Smoking Medicine">> Anti Smoking Medicine</a></li>
                            <li><a href="demoprod.php?type=Anti Viral Medicine">> Anti Viral Medicine</a></li>
                            <li><a href="demoprod.php?type=Antibiotic Medicines">> Antibiotic Medicines</a></li>
                            <li><a href="products.php">...More</a></li>					 
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <div class="scroll-top-wrapper ">
                            <span class="scroll-top-inner">
                                <i class="fa fa-3x fa-arrow-circle-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="copywrite">
                        <p>Copyright © 2016 GESUND All rights reserved</p>
                    </div><!--                        <div class="scroll-back-to-top-wrapper show">
                            <span class="scroll-back-to-top-inner">
                                <a href="#"><i class="fa fa-2x fa-arrow-circle-up"></i></a>
                            </span>
                        </div>-->
            <script>
                $(function(){

                        $(document).on( 'scroll', function(){

                                if ($(window).scrollTop() > 100) {
                                        $('.scroll-top-wrapper').addClass('show');
                                } else {
                                        $('.scroll-top-wrapper').removeClass('show');
                                }
                        });
                });
                $(function()
                {
                        $(document).on( 'scroll', function()
                        {
                               if ($(window).scrollTop() > 100) 
                               {
                                    $('.scroll-top-wrapper').addClass('show');
                               } 
                               else 
                               {
                                    $('.scroll-top-wrapper').removeClass('show');
                               }
                        });
                    $('.scroll-top-wrapper').on('click', scrollToTop);
                });

                function scrollToTop() 
                {
                    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                    element = $('body');
                    offset = element.offset();
                    offsetTop = offset.top;
                    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                }
            </script>
	</div>
</div>
</div>
<!---->
</body>
</html>