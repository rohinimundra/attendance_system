
<?php
$allowlist = array(
    '106.51.19.251'
   
);

//if users IP is not in allowed list kill the script
if(!in_array($_SERVER['REMOTE_ADDR'],$allowlist)){
    die('This website cannot be accessed from your location.');
}
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
			<nav>
           	<ul id="mobile_menu">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Service</a></li>
					
					<li><a href="#">Career</a></li>
					
					<li><a href="contact_us.html">Contact Us</a></li>
				</ul>
			</nav>
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
                                    <li><a href="about_us">About Us</a></li>
                                    <li><a href="service">Service</a></li>
                                    <li><a href="contact_us">Contact Us</a></li>
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
                                <a href="index.php"><img src="img/logonw.jpg" alt="">
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
        <!--End Header Area-->
        <!--Start Slider Area -->
        <section class="slider_area">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="img/1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="top_quate_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                                            <div class="top_quate_text text-center">
                                               <div class="quate_text_overlay"></div>
                                                <h3>Commercial relocation</h3>
                                                <p>A company is really a group of people who get together and work toward a specific goal. Together they accomplish what was impossible individually and make a contribution to society.</p>
                                                <a class="top_quate_action" href="">JOIN US</a>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000" >
                            <!-- MAIN IMAGE -->
                            <img src="img/2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="top_quate_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                                            <div class="top_quate_text text-center">
                                               <div class="quate_text_overlay"></div>
                                                <h3>Commercial Relocation</h3>
                                                <p>Business and human efforts exist as interconnected systems. For this reason we often focus on specific aspects of a larger system. This position is the reason many greater problems remain unsolved to date.</p>
                                                <a class="top_quate_action" href="">JOIN US</a>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mainmenu_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="mainmenu nav">
									<nav>
										<ul id="nav">
                                        <marquee><p style="font-size:20px; font-weight:600; color:#FFF; padding-top:12px;">Success in the marketplace is only possible if you strive for success in the workplace.</p></marquee>
											
										</ul>
									</nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="request_code">
                                <a href="admin_login.html"><input type="submit" value="Admin" src="admin_login.html"></a>
                               
                         <br><br>
                            <div class="request_code">
                                <a href="employee_login.html"><input type="submit" value="Employee">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        
        
        
        <!--End Slider Area-->
         
        <!--Start Promotions Area -->
       <!-- <section class="promotions_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                        <div class="page_title text-center">
                            <h2>WElCOME TO RECRUITMENT OFFICE</h2>
                            <p>This is what we call the Muppet Show. Makin their way the only way they know how. That's just a little bit more than the law will allow. Just two change if they could. Fightin' the system sunday Monday Happy Days.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="single_promotions text-center">
                            <div class="s_promotion_icon">
                                <img src="img/track_icon.png" alt="">
                            </div>
                            <h2>we make it faster</h2>
                            <p>They really are a scream the Addams Family. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain  </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single_promotions text-center">
                            <div class="s_promotion_icon">
                                <img src="img/hand_icon.png" alt="">
                            </div>
                            <h2>save and secure move</h2>
                            <p>They really are a scream the Addams Family. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single_promotions text-center">
                            <div class="s_promotion_icon">
                                <img src="img/alarm_clock_icon.png" alt="">
                            </div>
                            <h2>on time delevery</h2>
                            <p>They really are a scream the Addams Family. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Promotions Area-->
        <!--Start Signup Area -->
        
        <!--End Signup Area-->
        <!--Start Work Area -->
       <!-- <section class="work_area section_padding">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title">
                            <h2>why we are best form other</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/24_7.png" alt=""></a>
                            <h4>24/7 Service</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/track_two.png" alt=""></a>
                            <h4>over 750 companies</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/man_icon.png" alt=""></a>
                            <h4>sequrity cleared drivers</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/map_maker.png" alt=""></a>
                            <h4>live tracking</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/sms_mail.png" alt=""></a>
                            <h4>sms / emails alerts</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                        <div class="single_work">
                            <a href=""><img class="alignleft" src="img/fire_clock.png" alt=""></a>
                            <h4>estamited delevery time</h4>
                            <p>Three's company too. Michael Knight a young loner on a crusade to the innocent</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="work_area_img">
                            <img src="img/asistent.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
      <!--End Work Area-->
        <!--Start Sercice Area -->
       <!-- <section class="work_area section_padding section_gray">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title text-center">
                            <h2>Service we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                        <a href=""><img src="img/software.jpg"></a>
                          <div class="service_title">
                              <i class="fa fa-dropbox"></i>
                            <h4><a href="#">Software Development</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                            <a href=""><img src="img/staffing.jpg" alt=""></a>
                            <div class="service_title">
                                <i class="fa fa-dropbox"></i>
                                <h4><a href="#">IT Staffing</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                            <a href=""><img src="img/Recruitment.jpg" alt=""></a>
                            <div class="service_title">
                                <i class="fa fa-dropbox"></i>
                                <h4><a href="#">Recruitment</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                            <a href=""><img src="img/cust.jpg" alt=""></a>
                            <div class="service_title">
                                <i class="fa fa-dropbox"></i>
                                <h4><a href="#">Product Sales & Services</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                            <a href=""><img src="img/hr.jpg" alt=""></a>
                            <div class="service_title">
                               <i class="fa fa-dropbox"></i>
                                <h4><a href="#">H R Service</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="single_service">
                            <a href=""><img src="img/emp.jpg" alt=""></a>
                            <div class="service_title">
                                <i class="fa fa-dropbox"></i>
                                <h4><a href="#">Training And Development</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--End Service Area-->
        <!--Our Process Area -->
     <!--   <section class="process_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title text-center">
                            <h2>Our Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="process_area_menu">
                        <ul>
                            <li>
                                <a href="#"><img src="img/process_1.png" alt=""></a>
                                <p class="process_title">book our service</p>
                            </li>
                            <li>
                                <a href="#"><img src="img/process_2.png" alt=""></a>
                                <p class="process_title">we pack our things</p>
                            </li>
                            <li>
                                <a href="#"><img src="img/process_3.png" alt=""></a>
                                <p class="process_title">we move you things</p>
                            </li>
                            <li>
                                <a href="#"><img src="img/process_4.png" alt=""></a>
                                <p class="process_title">delevery you safely</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>-->
        <!--Our Process Area-->
        <!--Our Great Team Area  -->
        <!--<section class="process_area section_padding section_gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title text-center">
                            <h2>Our Great Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="single_team">
                            <a href=""><img src="img/team_1.jpg" alt=""></a>
                            <div class="team_discription">
                                <h3>michel wague</h3>
                                <p>ceo/founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="single_team">
                            <a href=""><img src="img/team_2.jpg" alt=""></a>
                            <div class="team_discription">
                                <h3>George hilson</h3>
                                <p>HR Recruiter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="single_team">
                            <a href=""><img src="img/team_3.jpg" alt=""></a>
                            <div class="team_discription">
                                <h3>chries hemsworth</h3>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="single_team">
                            <a href=""><img src="img/team_4.jpg" alt=""></a>
                            <div class="team_discription">
                                <h3>chris evans</h3>
                                <p>manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Our Great Team Area-->
        <!--Client Discription Area  -->
       <!-- <section class="client_discription_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="page_title text-center">
                            <h2>what out customer say about us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single_client">
                            <div class="client_img">
                                <img src="img/client_discription_1.png" alt="">
                            </div>
                            <div class="client_discription">
                                <h5>rik nelson</h5>
                                <p class="client_address">sydney,australia</p>
                                <p>Thank you for being a friend. Travelled down the road and back again. Your heart is true you're a pal and a confidant. Movin' on up to the east side. We finally got a piece of the pie. </p>
                                <div class="rating_area">
                                    <p class="text-left">100% recomended</p>
                                    <div class="ratting text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single_client">
                            <div class="client_img">
                                <img src="img/client_discription_2.png" alt="">
                            </div>
                            <div class="client_discription">
                                <h5>fish burn</h5>
                                <p class="client_address">sydney,australia</p>
                                <p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow would be lost.</p>
                                <div class="rating_area">
                                    <p class="text-left">100% recomended</p>
                                    <div class="ratting text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--End Client Discription Area-->
        <!--Blog Area  -->
       
        <!--End Blog Area-->
        <!-- Slider Bottom Area -->
     
        <!--End Slider Bottom Area-->
        <!-- Newsletter Area -->
        
        <!--End Newsletter Area-->
        <!-- Footer Area  -->
     <!--   <footer class="footer_area">
            <div class="footer_top_area  section_dark">
                <div class="container">
                    <div class="row footer_padding_top">
                        <div class="col-md-4 col-lg-4">
                            <div class="footer_adddress s_footer">
                                <div><i class="fa fa-home"></i></div>
                                <p class="uppercase">address</p>
                                <p>09 Movers and Packers,Design Street,Victoria,Australia</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer_call_us s_footer">
                                <div><i class="fa fa-phone"></i></div>
                                <p class="uppercase">quick contact</p>
                                <p>+123 456 789 <br>+123 456 789</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer_email_us s_footer">
                                <div><i class="fa fa-envelope-o"></i></div>
                                <p class="uppercase">Email address</p>
                                <p>INFO@YOUR.COM <br>Help@company.Com</p>
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="footer_border"></div>
                        </div>
                    </div>
                    <div class="row footer_padding_bottom">
                        <div class="col-md-3 col-lg-3">
                            <div class="footer_discription">
                                <h3>About Us</h3>
                                <p>In a freak mishap Ranger 3 and its pilot Captain William Buck Rogers are blown out of their trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. </p>
                                <div class="footer_social_bookmark">
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
                        <div class="col-md-6 col-lg-6">
                            <div class="footer_list">
                                <h3>our service</h3>
                                <div class="col-md-6 col-lg-6">
                                    <ul>
                                        <li><a href="#">SOFTWARE DEVELOPMENT</a></li>
                                        <li><a href="#">IT STAFFING</a></li>
                                        <li><a href="#">RECRUITMENT</a></li>
                                        <li><a href="#">PRODUCT SALES & SERVICES</a></li>
                                        <li><a href="#">H R SERVICE</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul>
                                        <li><a href="#">TRAINING AND DEVELOPMENT</a></li>
                                        <li><a href="#">ABOUT US</a></li>
                                        <li><a href="#">CAREER</a></li>
                                        <li><a href="#">SERVICE</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="footer_opening_time">
                                <h3>buseness hour</h3>
                                <p>Monday To Friday:<br>9:00 am to 9:00 pm </p>
                                <p>Saturday:<br> 9:00 am to 5:00 pm</p>
                                <p>Vacations:<br>All Sundays <br> All Official Holydays</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer_copyright">
                                <p>Copyright 2017 &copy; &nbsp; <a style="color:#FFF" href ="http://www.vdotech.in/">Designed By Vdotech</a> | All Rights Reserved</p>
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
        </footer>-->
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