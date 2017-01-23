<?php
session_start();
$con = mysqli_connect("Localhost", "root", "", "demopharma");
?>
<!DOCTYPE HTML>
<html class="csstransforms no-csstransforms3d csstransitions">
    <head>
        <title>GESUND</title>
        <!--   For Menu Bar Imported code -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>

        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
        <!-- start menu -->
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
                            <li class="current-menu-item">
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
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li><a href="FAQS.php">FAQ'S</a></li>
                        </ul>
                    </nav>                 
                    <div class="clear"></div>
                </div>
            </header>	
        </div>    
        <!--menu code ends here-->
        <!--header//-->
        <div class="product-model">	 
            <div class="container">
                <ol class="breadcrumb">
                    <li><a class="side" href="index.php">Home</a></li>
                    <li class="parent"><a class="side" href="products.php">Products</a></li>
                    <?php
                    $res = $con->query("Select * from product where prod_type='" . $_GET['type'] . "'");
                    $headrow = $res->fetch_assoc();
                    ?>
                    <li>
                        <?php echo $headrow["prod_type"] ?>
                    </li>
                </ol>
                <h2>OUR PRODUCTS</h2>			
                <div class="col-md-9 product-model-sec">
                    <?php
                    $res = $con->query("Select * from product where prod_type='" . $_GET['type'] . "'");
                    while ($row = $res->fetch_assoc()) {
                        ?>                        
                        <a href="single.php?id=<?php echo $row["prod_id"]; ?>">
                            <div class="product-grid love-grid">
                                <div class="product-img b-link-stripe b-animate-go thickbox">
                                    <img src="<?php echo $row["Prod_Img"]; ?>" class="img-responsive"/>
                                    <div class="b-wrapper">
                                        <h4 class="b-animate b-from-left  b-delay03">   
                                            <button class="btns">
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View
                                            </button>
                                        </h4>
                                    </div>
                                </div>				
                                <div class="product-info simpleCart_shelfItem">
                                    <div class="product-info-cust prt_name">
                                        <h4><?php echo $row["prod_name"]; ?></h4>
                                        <br/>
                                        <a href="contact.php">
                                            <input type="button" class="item_add items" value="Order Now"/>
                                        </a>
                                    </div>													
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>

                <div class="rsidebar span_1_of_left">
                    <section  class="sky-form">
                        <div class="product_right">
                            <h4 class="m_2">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories
                            </h4>
                            <?php
                            $res = $con->query("Select distinct(prod_type) from product");
                            $tabnum = 1;
                            while ($row = $res->fetch_assoc()) {
                                ?>
                                <div class="tab<?php echo $tabnum; ?>">
                                    <ul class="place">								
                                        <li class="sort">
                                            <a class="side" href="demoprod.php?type=<?php echo $row["prod_type"] ?>"><?php echo $row["prod_type"] ?></a>
                                        </li>
                                        <li class="by"><img src="images/do.png" alt=""></li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                    <div class="single-bottom">						
                                        <?php
                                        $subres = $con->query("Select distinct prod_id,prod_name from product where prod_type='" . $row["prod_type"] . "'");
                                        while ($subrow = $subres->fetch_assoc()) {
                                            ?>
                                            <a href="single.php?id=<?php echo $subrow["prod_id"] ?>">
                                                <p><?php echo $subrow["prod_name"] ?></p></a>
                                        <?php } ?>
                                    </div>
                                </div>						
                                <?php
                                $tabnum++;
                            }
                            ?>

                            <script>
                                $(document).ready(function () {
                                    var i = 0, j = 0;
                                    for (i = 0; i <=<?php echo $tabnum; ?>; i++)
                                    {
                                        $(".tab" + i + " .single-bottom").hide();
                                    }
                                    var i = 0, j = 0;
<?php
$r = 0;
for ($r = 0; $r < $tabnum; $r++) {
    ?>
                                        $(".tab" +<?php echo $r; ?> + " ul").click(function ()
                                        {
                                            $(".tab" +<?php echo $r; ?> + " .single-bottom").slideToggle(300);

                                        })
<?php } ?>
                                });
                            </script>
                        </div>
                    </section>
                    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
                    <script type='text/javascript'>//<![CDATA[ 
                                $(window).load(function () {
                                    $("#slider-range").slider({
                                        range: true,
                                        min: 0,
                                        max: 400000,
                                        values: [8500, 350000],
                                        slide: function (event, ui) {
                                            $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                                        }
                                    });
                                    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

                                });
                    </script>
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
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h4>Customer service</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Bulk Orders</a></li>
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
                    <p>Copyright © 2016 GUSEND All rights reserved</p>
                </div>			 
                <!--                        <div class="scroll-back-to-top-wrapper show">
                                            <span class="scroll-back-to-top-inner">
                                                <a href="#"><i class="fa fa-2x fa-arrow-circle-up"></i></a>
                                            </span>
                                        </div>-->
                <script>
                    $(function () {

                        $(document).on('scroll', function () {

                            if ($(window).scrollTop() > 100) {
                                $('.scroll-top-wrapper').addClass('show');
                            } else {
                                $('.scroll-top-wrapper').removeClass('show');
                            }
                        });
                    });
                    $(function ()
                    {
                        $(document).on('scroll', function ()
                        {
                            if ($(window).scrollTop() > 100)
                            {
                                $('.scroll-top-wrapper').addClass('show');
                            } else
                            {
                                $('.scroll-top-wrapper').removeClass('show');
                            }
                        });
                        $('.scroll-top-wrapper').on('click', scrollToTop);
                    });

                    function scrollToTop()
                    {
                        verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
                        element = $('body');
                        offset = element.offset();
                        offsetTop = offset.top;
                        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>