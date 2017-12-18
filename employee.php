
<?php
session_start();  //start of session
include('mysession.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Responsive Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title-->
        <title>IT Recruitment | Home Page</title>
        <!--Bootstrap Css-->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <!--Font-awesome-->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!--Fonts Form Google Web Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
        <!--Responsive Mobile Menu-->
        <link rel="stylesheet" href="css/slicknav.css" />
        <!--Revolation Slider-->
        <link href="rs-plugin/css/settings.css" rel="stylesheet">
        <!--Carousel Slider-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <!--Main Style Css-->
        <link href="style.css" rel="stylesheet">
        <!--Responsive-->
        <link href="css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Start Mobile Menu Area-->
        <div id="preloader">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
        </div>		
        <div class="mobile_menu_area">
			
        </div>
        <!--End Mobile Menu Area-->
        
        <!--Start Header area  -->
             <div class="header_area">
             <div class="header_top_area">
                <div class="container">
                    <div class="row">  
                        <div class="col-md-4 col-lg-4">
                            <div class="header_top_menu">
                                <ul>
                                   
                                    <li style="color:#FFF; padding-top:5px;"> <?php
             //for display date time in to BAR
             $timezone = new DateTimeZone("Asia/Kolkata" );
                $date = new DateTime();
                        $date->setTimezone($timezone );
                        $ins_dt=$date->format( 'M jS, Y - H:i:A' );
                        echo $ins_dt."&nbsp; &nbsp; &nbsp; &nbsp;";
						


?>
</li>
                                   
                                </ul>
                            </div>
                        </div>  
                        <div class="col-md-2 col-lg-2 col-md-offset-6 col-lg-offset-6">
                            <div class="header_social_bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="header_bottom_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html"><img src="img/logonw.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1" style="margin-top:30px;">
                            <div class="opening_time s_header">
                                <div><i class="fa fa-clock-o"></i></div>
                                <p class="contact_title">Opening Hours</p>
                                <p class="uppercase">Mon to Sat - 9:30 am to 6:30 pm</p>
                              
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2" style="margin-top:30px;">
                            <div class="call_us s_header">
                                <div><i class="fa fa-phone"></i></div>
                                <p class="contact_title">Call Us</p>
                                <p>+123 456 789</p>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3" style="margin-top:30px;">
                            <div class="email_us s_header">
                                <div><i class="fa fa-envelope-o"></i></div>
                                <p class="contact_title">Email Us</p>
                                <p class="uppercase">rohini@7intelligence.com</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="slider_area">
           
            <div class="mainmenu_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="mainmenu nav">
									<nav>
										<ul id="nav">
										 <marquee><p style="font-size:20px; font-weight: 600; color:#FFF; padding-top:12px;">Success in the marketplace is only possible if you strive for success in the workplace.</p></marquee>                           
										</ul>
									</nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="request_code">
                                <a href="logout.php"><input type="submit" value="LOG OUT"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!--End Slider Area-->
         
        <!--Start Promotions Area -->
      
        <!--End Promotions Area-->
        <!--Start Signup Area -->
        
     
        <!--End Work Area-->
        <!--Start Sercice Area -->
        <section class="work_area section_padding" align="right" >
            <div class="container">
               
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-6">
                        <div class="single_service">
                        <a href="employee_info.php"><img src="img/Recruitment.jpg"></a>
                          <div class="service_title">
                              <i class="fa fa-dropbox"></i>
                            <h4><a href="employee_info.php">Employee Details</a></h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-6">
                        <div class="single_service">
                            <a href="set_attendance.php"><img src="img/software.jpg" alt=""></a>
                            <div class="service_title">
                                <i class="fa fa-dropbox"></i>
                                <h4><a href="set_attendance.php">Attendance Details</a></h4>
                            </div>
                        </div>
                    </div>
                    
                   
                    
                    
                   
                </div>
            </div>
        </section>
       
            <div class="footer_bottom_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer_copyright">
                                <p>Copyright 2017 &copy; &nbsp; <a style="color:#FFF" href ="#">Designed By Raju</a> | All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <div class="footer_menu">
                                <nav>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>I</li>
										<li><a href="about_us.html">About Us</a></li>
										<li>I</li>
										<li><a href="service.html">Service</a></li>
										<li>I</li>
										<li><a href="contact_us.html">Contact Us</a></li>
									</ul>
								</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Area-->
        
        <!--jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!--Bootstrap-->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!--Carousel Slider-->
        <script src="js/owl.carousel.min.js"></script>
        <!--Revolation Slider-->
        <script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>		
        <!--Mobile Menu Js-->
        <script src="js/jquery.slicknav.min.js"></script>
        <!--Active jQuery-->
        <script src="js/main.js"></script>
    </body>
</html>