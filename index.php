<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mysql= new mysqli("localhost","id3742422_shrey","shreygupta","id3742422_portfolio");
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
     if(isset($_POST['submit'])){
              $name=$_POST['name'];
              $d=$_POST['designation'];
              $o=$_POST['organisation'];
              $e=$_POST['email'];
              $t=$_POST['text'];
           $preparedstmt = $mysql->prepare("insert into testimonials values(NULL,?,?,?,?,?,0)");
      	  if ( false===$preparedstmt ) {
  				die('prepare() failed: ' . htmlspecialchars($mysqli->error));
			}
          $rc=$preparedstmt->bind_param('sssss',$name,$d,$o,$e,$t); //prevent injection
          if ( false===$rc ) {
  				die('bind_param() failed: ' . htmlspecialchars($stmtins->error));
			}
          $rc=$preparedstmt->execute();
          if ( false===$rc ) {
  				die('execute() failed: ' . htmlspecialchars($stmtins->error));
			}else{
              echo '<script>alert("Successfully Submitted Thank You!")</script>';
          }
          $preparedstmt->close();
         
     $headers = 'From: '.'contact@shreygupta.info'.'' . "\r\n" .
   'Reply-To: '.'contact@shreygupta.info'.'' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
    // the message
$msg = "Sir/Ma'am,\nThank You For Submitting The Testification/Review.\n Thank You\nShrey Gupta\nconnectwithshrey@gmail.com";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
echo mail($e,"Thank You For Submitting Testification",$msg,$headers);
         $link="http://shreygupta.info/verify.php?id=1";
         $msg = $name." / ".$d." Of ".$o." Have Submitted Testimonial"." Contact At ".$e."\n".$link;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
echo mail("connectwithshrey@gmail.com","Testimonial Submitted Kindly Review",$msg,$headers);
     }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    
<!-- Mirrored from demo.mutationmedia.net/SPLIT/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2017 13:18:49 GMT -->
<head>
	
	
	 <!-- Metas -->
        <meta charset="utf-8">
        <title>Shrey Gupta - Portfolio</title>
        <meta name="description" content="">
      	<meta name="viewport" content="width=device-width, initial-scale=1">



		
		
		

		
		
		


		<!-- Css -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet"  media="all">
		<link href="css/owl-carousel/owl.theme.css" rel="stylesheet"  media="all">
		<link href="css/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
		<link href="css/font.css" rel="stylesheet" type="text/css"  media="all">
		<link href="css/fontello.css" rel="stylesheet" type="text/css"  media="all">
		<link href="css/base.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/main.css"  rel="stylesheet" type="text/css" media="all"/>
		
		
		
		
		
		
		<!--Alternate styles-->
		
		<link href="css/styles/switcher.css"  rel="stylesheet" type="text/css"/>
		<link href="css/styles/clr-1.css" rel="stylesheet" type="text/css" title="clr-1" media="all"/>
<!--
		<link href="css/styles/clr-2.css" rel="alternate stylesheet" type="text/css" title="clr-2" media="all" />
		<link href="css/styles/clr-3.css" rel="alternate stylesheet" type="text/css" title="clr-3" media="all" />
		<link href="css/styles/clr-4.css" rel="alternate stylesheet" type="text/css" title="clr-4" media="all" />
		<link href="css/styles/clr-5.css" rel="alternate stylesheet" type="text/css" title="clr-5" media="all" />
		<link href="css/styles/clr-6.css" rel="alternate stylesheet" type="text/css" title="clr-6" media="all" />
		<link href="css/styles/clr-7.css" rel="alternate stylesheet" type="text/css" title="clr-7" media="all" />
		<link href="css/styles/clr-8.css" rel="alternate stylesheet" type="text/css" title="clr-8" media="all" />
		<link href="css/styles/clr-9.css" rel="alternate stylesheet" type="text/css" title="clr-9" media="all" />
		<link href="css/styles/clr-10.css" rel="alternate stylesheet" type="text/css" title="clr-10" media="all" />
		<link href="css/styles/clr-11.css" rel="alternate stylesheet" type="text/css" title="clr-11" media="all" />
		<link href="css/styles/clr-12.css" rel="alternate stylesheet" type="text/css" title="clr-12" media="all" />
		<link href="css/styles/clr-13.css" rel="alternate stylesheet" type="text/css" title="clr-13" media="all" />
		<link href="css/styles/clr-14.css" rel="alternate stylesheet" type="text/css" title="clr-14" media="all" />
		<link href="css/styles/clr-15.css" rel="alternate stylesheet" type="text/css" title="clr-15" media="all" />
		<link href="css/styles/clr-16.css" rel="alternate stylesheet" type="text/css" title="clr-16" media="all" />
		<link href="css/styles/clr-17.css" rel="alternate stylesheet" type="text/css" title="clr-17" media="all" />
		<link href="css/styles/clr-18.css" rel="alternate stylesheet" type="text/css" title="clr-18" media="all" />
		<link href="css/styles/clr-19.css" rel="alternate stylesheet" type="text/css" title="clr-19" media="all" />
		<link href="css/styles/clr-20.css" rel="alternate stylesheet" type="text/css" title="clr-20" media="all" />
		<link href="css/styles/clr-21.css" rel="alternate stylesheet" type="text/css" title="clr-21" media="all" />
		<link href="css/styles/clr-22.css" rel="alternate stylesheet" type="text/css" title="clr-22" media="all" />
		<link href="css/styles/clr-23.css" rel="alternate stylesheet" type="text/css" title="clr-23" media="all" />
		<link href="css/styles/clr-24.css" rel="alternate stylesheet" type="text/css" title="clr-24" media="all" />
		<link href="css/styles/clr-25.css" rel="alternate stylesheet" type="text/css" title="clr-25" media="all" />
		<link href="css/styles/clr-26.css" rel="alternate stylesheet" type="text/css" title="clr-26" media="all" />
		<link href="css/styles/clr-27.css" rel="alternate stylesheet" type="text/css" title="clr-27" media="all" />
		<link href="css/styles/clr-28.css" rel="alternate stylesheet" type="text/css" title="clr-28" media="all" />
		<link href="css/styles/clr-29.css" rel="alternate stylesheet" type="text/css" title="clr-29" media="all" />
		<link href="css/styles/clr-30.css" rel="alternate stylesheet" type="text/css" title="clr-30" media="all" />
		<link href="css/styles/clr-31.css" rel="alternate stylesheet" type="text/css" title="clr-31" media="all" />
		<link href="css/styles/clr-32.css" rel="alternate stylesheet" type="text/css" title="clr-32" media="all" />
		<link href="css/styles/clr-33.css" rel="alternate stylesheet" type="text/css" title="clr-33" media="all" />
		
		
-->
		

		
		
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
    </head>
    <body>
	
	
	
	

<!-- Preloader -->
<div id="loader">
		<!-- Preloader inner -->
  <div id="loaderInner">
	<div class="spinner"></div>
  </div>
<!-- End preloader inner -->
</div>
<!-- End preloader-->


<!--Wrapper-->
<div id="wrapper" class="margLTop  margLBottom">
	
	<!--Container-->
	<div class="container">
		
		
		
		
			<div class="row ">
		
		
		
		
		<!--Left content-->
		
		<div class="col-md-3 nopr left-content">
	
	<!--Header-->
	<header id="header">
		

		
				
					
					<!--Main header-->
					<div class="main-header">
					
					<!--Profile image-->
					<figure class="img-profile">
						<img src="img/profile.jpg" alt=""/>
						
						<figcaption class="name-profile">
							<span>Shrey Gupta<sup>&reg;</sup></span>
						</figcaption>
						
					</figure>
					<!--End profile image-->
					
					
				
							<!--Main navigation-->
								<nav id="main-nav" class="main-nav clearfix tabbed">

								<ul>
									<li ><a href="#about"><i class="icon-user"></i>About</a></li>
									<li><a  href="#experience"><i><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDUxMCA1MTAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMCA1MTA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8ZyBpZD0id29yayI+CgkJPHBhdGggZD0iTTQ1OSwxMTQuNzVIMzU3di01MWwtNTEtNTFIMjA0bC01MSw1MXY1MUg1MWMtMjguMDUsMC01MSwyMi45NS01MSw1MXYyODAuNWMwLDI4LjA1LDIyLjk1LDUxLDUxLDUxaDQwOCAgICBjMjguMDUsMCw1MS0yMi45NSw1MS01MXYtMjgwLjVDNTEwLDEzNy43LDQ4Ny4wNSwxMTQuNzUsNDU5LDExNC43NXogTTMwNiwxMTQuNzVIMjA0di01MWgxMDJWMTE0Ljc1eiIgZmlsbD0iIzhmOTI5NCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></i>Experience</a></li>
									<li><a  href="#education"><i><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyOTYuOTk5IDI5Ni45OTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI5Ni45OTkgMjk2Ljk5OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNNDUuNDMyLDM1LjA0OWMtMC4wMDgsMC0wLjAxNywwLTAuMDI1LDBjLTIuODA5LDAtNS40NTEsMS4wOTUtNy40NDYsMy4wODVjLTIuMDE3LDIuMDEyLTMuMTI4LDQuNjkxLTMuMTI4LDcuNTQzICAgICB2MTU5LjM2NWMwLDUuODQ0LDQuNzczLDEwLjYxLDEwLjY0MSwxMC42MjVjMjQuNzM4LDAuMDU5LDY2LjE4NCw1LjIxNSw5NC43NzYsMzUuMTM2Vjg0LjAyM2MwLTEuOTgxLTAuNTA2LTMuODQyLTEuNDYxLTUuMzgyICAgICBDMTE1LjMyMiw0MC44NDksNzAuMjI2LDM1LjEwNyw0NS40MzIsMzUuMDQ5eiIgZmlsbD0iIzc5ODA4NSIvPgoJCQk8cGF0aCBkPSJNMjYyLjE2NywyMDUuMDQyVjQ1LjY3NmMwLTIuODUyLTEuMTExLTUuNTMxLTMuMTI4LTcuNTQzYy0xLjk5NS0xLjk5LTQuNjM5LTMuMDg1LTcuNDQ1LTMuMDg1Yy0wLjAwOSwwLTAuMDE4LDAtMC4wMjYsMCAgICAgYy0yNC43OTMsMC4wNTktNjkuODg5LDUuODAxLTkzLjM1Nyw0My41OTNjLTAuOTU1LDEuNTQtMS40NiwzLjQwMS0xLjQ2LDUuMzgydjE2Ni43NzkgICAgIGMyOC41OTItMjkuOTIxLDcwLjAzOC0zNS4wNzcsOTQuNzc2LTM1LjEzNkMyNTcuMzk0LDIxNS42NTEsMjYyLjE2NywyMTAuODg1LDI2Mi4xNjcsMjA1LjA0MnoiIGZpbGw9IiM3OTgwODUiLz4KCQkJPHBhdGggZD0iTTI4Ni4zNzMsNzEuODAxaC03LjcwNnYxMzMuMjQxYzAsMTQuOTIxLTEyLjE1NywyNy4wODgtMjcuMTAxLDI3LjEyNWMtMjAuOTgzLDAuMDUtNTUuNTgxLDQuMTUzLTgwLjA4NCwyNy4zNDQgICAgIGM0Mi4zNzgtMTAuMzc2LDg3LjA1Mi0zLjYzMSwxMTIuNTEyLDIuMTcxYzMuMTc5LDAuNzI0LDYuNDY0LTAuMDI0LDkuMDExLTIuMDU0YzIuNTM4LTIuMDI1LDMuOTk0LTUuMDUyLDMuOTk0LTguMzAxVjgyLjQyNyAgICAgQzI5Nyw3Ni41NjgsMjkyLjIzMiw3MS44MDEsMjg2LjM3Myw3MS44MDF6IiBmaWxsPSIjNzk4MDg1Ii8+CgkJCTxwYXRoIGQ9Ik0xOC4zMzIsMjA1LjA0MlY3MS44MDFoLTcuNzA2QzQuNzY4LDcxLjgwMSwwLDc2LjU2OCwwLDgyLjQyN3YxNjguODk3YzAsMy4yNSwxLjQ1Niw2LjI3NiwzLjk5NCw4LjMwMSAgICAgYzIuNTQ1LDIuMDI5LDUuODI3LDIuNzgsOS4wMTEsMi4wNTRjMjUuNDYtNS44MDMsNzAuMTM1LTEyLjU0NywxMTIuNTExLTIuMTcxYy0yNC41MDItMjMuMTktNTkuMS0yNy4yOTItODAuMDgzLTI3LjM0MiAgICAgQzMwLjQ5LDIzMi4xMywxOC4zMzIsMjE5Ljk2MywxOC4zMzIsMjA1LjA0MnoiIGZpbGw9IiM3OTgwODUiLz4KCQk8L2c+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></i>Educations</a></li>
									<li><a  href="#contact"><i class="icon-phone"></i>Contact/TESTIMONIALS</a></li>
								</ul>

								</nav>
							<!--End main navigation-->
				

				
		
				</div>
				<!--End main header-->
				
				<div class="bottom-header bgWhite ofsTSmall ofsBSmall tCenter">
					<ul class="social">
						<li><a href="https://www.facebook.com/connectwithshrey"><i class="icon-facebook"></i></a></li>
<!--					<li><a href="#"><i class="icon-twitter"></i></a></li>-->
					<li><a href="https://linkedin.com/in/withshrey"><i class="icon-linkedin"></i></a></li>


				</ul>
				
				<p>&copy; 2017 &copy; Shrey Gupta</p>
					
				</div>
				
				
				

		</header>
		<!--End  header-->
		
		
		</div>
		<!--End left content-->
		
		
		
			<!--Right content-->
			<div class="col-md-9 right-content">
		


						<!--About Tab-->
					<section id="about" class="bgWhite ofsInBottom">
						
						<!--About -->
						<div class="about">
						
							<!--Main title-->
							
								<div class="main-title">
									<h1>who am i</h1>
									<div class="divider">
											<div class="zigzag large clearfix "  data-svg-drawing="yes" >
<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
<path d="M1.357,12.26 10.807,2.81 20.328,12.332
	29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
</svg>
</div>
									</div>
								</div>	
								
							<!--End main title-->
						
						
							
						
						<!--Content-->	
						<div class="content">
							
							<!--Block content-->	
							<div class="block-content margBSmall">
								
							<div class=" profile margBSmall">
                                <h1>Shrey Gupta</h1>
                                <h3>Web And Android Developer</h3>
                            </div>

							<!--Row-->	
							<div class="row">
								<div class="col-md-10">
									<p>Hey, I Am Shrey Gupta , A Tech Enthusiast And A TechNerd , My Core Intrests Lies In Android Application And Web Backend Development Using Latest Tools And Technique. I Am A Big Google Fan And Interested In Google Provided Services And Techniques Like Service Workers , Progressive Mobile Web Applications And Firebase<br>Improving EveryDay! </p>
								</div>
								
								
								<div class="col-md-2"></div>
							

							</div>
							<!--End row-->	
							
							</div>
							<!--End block content-->	
							
							
							
							<!--Block content-->	
							<div class="block-content">
								
								<div class="info">
	                               
									<!--Row-->	
									<div class="row">
										<div class="col-md-6">
											
											<ul class="info-list clearfix">
												<li><span class="inf">Name </span>  <span class="value">Shrey Gupta</span></li>
												<li><span class="inf">Date of birth</span>  <span class="value"> November 1, 1998 </span></li>
												<li><span class="inf">Address</span>  <span class="value"> Sitapur , UP , India </span></li>
											</ul>
											
										</div>


										<div class="col-md-6">
										
											<ul class="info-list">
												<li><span class="inf">Email</span>  <span class="value">connectwithshrey@gmail.com</span></li>
												<li><span class="inf">Phone</span>  <span class="value"> +91 8726212000	</span></li>
												<li><span class="inf">LinkedIN</span>  <span class="value">@withshrey</span></li>
											</ul>
											
										</div>


									</div>
									<!--End row-->
	
	                            </div>

                            </div>
							<!--End block content-->
							
						
						</div>
						<!--End content-->
						
						
						
						

							
								<!--Main title-->

									<div class="main-title">
										<h1>professional skills</h1>
										<div class="divider">
												<div class="zigzag large clearfix "  data-svg-drawing="yes" >
	<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
	<path d="M1.357,12.26 10.807,2.81 20.328,12.332
		29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
	</svg>
	</div>
	
	
	</div>
										
										
										
									</div>	

								<!--End main title-->
							
							
							
							
							
							<!--Content-->	
							<div class="content">

								<!--Block content-->	
								<div class="block-content margBMedium">
									
									
								<!--Skill design-->
								<div class=" skill des">
									
									
	                               	<!--Row-->	
									<div class="row ">
										
										<div class="vc">
										
										<div class="col-md-11">
											
											<ul class="skills-list clearfix">
											<li>
												<h4>Photoshop</h4>
												<div class="progress">
												<div class="percentage">
												75%
												</div>
												</div>
											</li>
								      	</ul>
											
										</div>
										
										
										<div class="col-md-1">
											<div class="title des">
												<span>design</span>
											</div>
										</div>
										
										</div>
										
									</div>
									<!--End row-->
	
	                            </div>
								<!--End skill design-->

								</div>
								<!--End block content-->	
								
								<div class="divider-m tCenter margTSmall margBSmall clearfix">
												
												
												
														<div class="col-md-12">
															
															
															
						<div class="zigzag medium clearfix " data-svg-drawing="yes">
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
					29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"></path>
				</svg>
			</div>
												</div>
												
												
												
												
											</div>
								
									<!--Block content-->	
									<div class="block-content margBMedium">


									<!--Skill design-->
									<div class=" skill dev">


		                               	<!--Row-->	
										<div class="row">
											
											<div class="vc">

											<div class="col-md-11">

												<ul class="skills-list clearfix">
                                                 <li>
													<h4>Java</h4>
													<div class="progress">
													<div class="percentage">
													90%
													</div>
													</div>
												</li>
												<li>
													<h4>javascript</h4>
														<div class="progress">
														<div class="percentage">
														79%
														</div>
														</div>
												</li>
                                                    <li>
													<h4>Python 2</h4>
														<div class="progress">
														<div class="percentage">
														70%
														</div>
														</div>
												</li>
												<li>
													<h4>php</h4>
														<div class="progress">
														<div class="percentage">
														90%
														</div>
														</div>
												</li>
                                                <li>
													<h4>MYSQL/MYPHPADMIN</h4>
														<div class="progress">
														<div class="percentage">
														90%
														</div>
														</div>
												</li>
                                                    <li>
													<h4>Html/css</h4>
													<div class="progress">
													<div class="percentage">
													90%
													</div>
													</div>
												</li>
                                                <li>
													<h4>C Language</h4>
													<div class="progress">
													<div class="percentage">
													90%
													</div>
													</div>
												</li>
                                                    <li>
													<h4>C++</h4>
													<div class="progress">
													<div class="percentage">
													90%
													</div>
													</div>
												</li>
                                                   
												


											</ul>

											</div>


											<div class="col-md-1">
												<div class="title dev">
													<span>Coding </span>
												</div>
											</div>
											
											</div>

										</div>
										<!--End row-->

		                            </div>
									<!--End skill design-->

									</div>
                                <div class="divider-m tCenter margTSmall margBSmall clearfix">
												
												
												
														<div class="col-md-12">
															
															
															
						<div class="zigzag medium clearfix " data-svg-drawing="yes">
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
					29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"></path>
				</svg>
			</div>
												</div>
												
												
												
												
											</div>
									<!--End block content-->
                                    <div class="block-content margBMedium">
									
									
								<!--Skill design-->
								<div class=" skill des">
									
									
	                               	<!--Row-->	
									<div class="row ">
										
										<div class="vc">
										
										<div class="col-md-11">
											
											<ul class="skills-list clearfix">
                                            <li>
												<h4>Android</h4>
												<div class="progress">
												<div class="percentage">
												75%
												</div>
												</div>
											</li>    
											<li>
												<h4>JQuery</h4>
												<div class="progress">
												<div class="percentage">
												5%
												</div>
												</div>
											</li>
											<!-- <li>
												<h4>Laravel</h4>
													<div class="progress">
													<div class="percentage">
													35%
													</div>
													</div>
											</li>
											<li>
												<h4>Slim</h4>
													<div class="progress">
													<div class="percentage">
													15%
													</div>
													</div>
											</li> -->
												

										</ul>
											
										</div>
										
										
										<div class="col-md-1">
											<div class="title des">
												<span>Frameworks</span>
											</div>
										</div>
										
										</div>
										
									</div>
									<!--End row-->
	
	                            </div>
								<!--End skill design-->
                                        

								</div>
								<!--End block content-->
                            <div class="divider-m tCenter margTSmall margBSmall clearfix">
												
												
												
														<div class="col-md-12">
															
															
															
						<div class="zigzag medium clearfix " data-svg-drawing="yes">
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
					29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"></path>
				</svg>
			</div>
												</div>
												
												
												
												
											</div>

									<!--Block content-->	
									<div class="block-content margBMedium">


									<!--Skill design-->
									<div class=" skill dev">


		                               	<!--Row-->	
										<div class="row">
											
											<div class="vc">

											<div class="col-md-11">

												<ul class="skills-list clearfix">
                                                 <li>
													<h4>Windows Enviornment</h4>
													<div class="progress">
													<div class="percentage">
													85%
													</div>
													</div>
												</li>
												<li>
													<h4>Debian Linux (Ubuntu)</h4>
														<div class="progress">
														<div class="percentage">
														45%
														</div>
														</div>
												</li>
											</ul>

											</div>


											<div class="col-md-1">
												<div class="title dev">
													<span>Operating Systems </span>
												</div>
											</div>
											
											</div>

										</div>
										<!--End row-->

		                            </div>
									<!--End skill design-->

									</div>
									<!--End block content-->
                                <div class="divider-m tCenter margTSmall margBSmall clearfix">
												
												
												
														<div class="col-md-12">
															
															
															
						<div class="zigzag medium clearfix " data-svg-drawing="yes">
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
					29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"></path>
				</svg>
			</div>
												</div>
												
												
												
												
											</div>
										<!--Block content-->	
										<div class="block-content">


										<!--Skill design-->
										<div class=" skill prs">


			                               	<!--Row-->	
											<div class="row ">
												
												<div class="vc">

												<div class="col-md-11">

													<ul class="skills-list clearfix">
													<li>
														<h4>Responsible</h4>
														<div class="progress">
														<div class="percentage">
														85%
														</div>
														</div>
													</li>
													<li>
														<h4>Creative</h4>
															<div class="progress">
															<div class="percentage">
															75%
															</div>
															</div>
													</li>
													<li>
														<h4>Multitasking</h4>
															<div class="progress">
															<div class="percentage">
															90%
															</div>
															</div>
													</li>
													
													
												
													
													


												</ul>

												</div>


												<div class="col-md-1">
													<div class="title prs">
														<span>assets </span>
													</div>
												</div>
												
												
												</div>
											</div>
											<!--End row-->

			                            </div>
										<!--End skill design-->

										</div>
										<!--End block content-->
									


							
							</div>
							<!--End content-->
							
							
							<!--Main title-->
							
								<div class="main-title">
									<h1>services</h1>
										<div class="divider">
												<div class="zigzag large clearfix "  data-svg-drawing="yes" >
	<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
	<path d="M1.357,12.26 10.807,2.81 20.328,12.332
		29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
	</svg>
	</div>
	</div>
								</div>	
								
							<!--End main title-->
							
							
							
							
								<!--Content-->	
								<div class="content">

									<!--Block content-->	
									<div class="block-content ">


									<!--Services-->
									<div class="services">


		                               	<!--Row-->	
										<div class="row ">
										
										
										<!--Block-->
										<div class="block service tCenter">
											
											
											<div class="col-md-4">
												<div class="ico">
												<i class="icon-lifebuoy"></i>
												</div>
												
												<div class="det">
												<h3>Virtual Internship</h3>
												<p>Work From Internships.</p>
											</div>
												
											</div>
											
											
											<div class="col-md-4">
												<div class="ico">
												<i class="icon-print-1"></i>
												</div>
												
												<div class="det">
												<h3>Team Collaboration</h3>
												<p>Collaborating With Existing Team.</p>
											</div>
												
											</div>
											
											
											
											<div class="col-md-4">
												<div class="ico">
												<i class="icon-megaphone"></i>
												</div>
												
												<div class="det">
												<h3>Freelancing</h3>
												<p>Developing Independently With Help Of Fellow Mates</p>
											</div>
												
											</div>
											
											
											
										</div>
										<!--End block-->

										</div>
										<!--End row-->
										
										
										
										
										<!--Row-->
										<div class="row">
											
											<!--Divider-->
											<div class="divider-m tCenter margTSmall margBSmall clearfix">
												
												
												
														<div class="col-md-12">
															
															
															
						<div class="zigzag medium clearfix "  data-svg-drawing="yes" >
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
					29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
				</svg>
			</div>
												</div>
												
												
												
												
											</div>
											<!--End divider-->
											
										</div>
										<!--End row-->
										
										
										
										
										
										
										
		                               	<!--Row-->	
										<div class="row ">
										
										
										<!--Block-->
										<div class="block service tCenter">
											
											
											<div class="col-md-4">
												<div class="ico">
												<i class="icon-monitor"></i>
												</div>
												
												<div class="det">
												<h3>Web Development</h3>
												<p>Backend With PHP And Javascript And Ajax Are Current Area Of Expertise</p>
											</div>
												
											</div>
											
											
											<div class="col-md-4">
												<div class="ico">
												
												</div>
												
												<div class="det">
												<h3></h3>
												<p></p>
											</div>
												
											</div>
											
											
											
											<div class="col-md-4">
												<div class="ico">
												<i class="icon-lamp"></i>
												</div>
												
												<div class="det">
												<h3>Android Development</h3>
												<p>I Have Been A Android Developer For Almost A Year Gaining Experience And Excellence</p>
											</div>
												
											</div>
											
											
											
										</div>
										<!--End block-->

										</div>
										<!--End row-->


		                            </div>
									<!--End servcices-->

									</div>
									<!--End block content-->


						</div>
						<!--End content-->
							
							
							
							
							



									<!--Button-->
									<div class="button margTop ofsInTop tCenter">
											
											<div class="divider">
													<div class="zigzag large clearfix "  data-svg-drawing="yes" >
		<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
		<path d="M1.357,12.26 10.807,2.81 20.328,12.332
			29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
		</svg>
		</div>
		</div>
										
										
		                               	<!--Row-->	
										<div class="row ">
											
											
											<div class="col-md-12">
												<a class="but opc-1 ico" target="_blank" href="My_CV.pdf">Download my cv</a>
												<!--<a class="but opc-2 ico" href="My_CV.pdf">Print my resume</a>-->
												
											</div>
										
										
										
											</div>
											<!--End row-->


			                            </div>
										<!--End button-->


						
						</div>
						<!--End about-->

					</section>
						<!--End about tab-->
						
						
						
						
				
				
								<!--Portfolio Tab-->
							<section id="experience" class="bgWhite ofsInBottom">

								<div class="main-title">
									<h1>experience</h1>
										<div class="divider">
												<div class="zigzag large clearfix "  data-svg-drawing="yes" >
	<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
	<path d="M1.357,12.26 10.807,2.81 20.328,12.332
		29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
	</svg>
	</div>
	</div>
								</div>	
								
							<!--End main title-->
								
								
								
								
								
								
								<!--Content-->	
								<div class="content">

									<!--Block content-->	
									<div class="block-content ">


									<!--Timeline-->
									<div class="timeline experience">


		                               	<!--Row-->	
										<div class="row ">
											
											
											<div class="col-md-12">
												
												
												<!--Experience holder-->	
												<div class="exp-holder margTop">
													
													
												<!--Experience-->
												<div class="exp">
												<div class="hgroup" >
													<h4>Android Developer – Shoocal </h4>
													<h6><i class="icon-calendar"></i>Oct 2016 - Jan 2018</h6>
												</div>
												<p>This Is My First Intership Work Here Involved Product Planning , Development &amp; Design Planning , Development Of Multiple Applications , All Together It Is A Good Experience First Time Working In Team.</p>
												</div>
												<!--End experience-->
												
												<!--Experience-->
												<div class="exp">
												<div class="hgroup" >
													<h4>My22yards Backend-PHP(<a href="my22yards.com">Visit To Page</a>)</h4>
													<h6><i class="icon-calendar"></i>Nov 2016 - Jan 2017</h6>
												</div>
													<p>This Was A Small Job Although First Work In The Field Of Web Development Under A Senior, Work Included Developing  Admin Panel For The Website To Manage Matches And Tournaments.</p>
												</div>
												<!--End experience-->
												
												<!--Experience-->
												<div class="exp">
												<div class="hgroup" >
													<h4>My Juet App (<a href="http://myjuet.tk">Visit To App Page</a>)</h4>
													<h6><i class="icon-calendar"></i>Nov 2016 - Jan 2017</h6>
												</div>
													<p>This Was My Personal Project On Android, This App Targets Audience From JUET Campus Students , Giving Them Ease To Access/View Attendence And TimeTable And Easy Login To The Portal .  </p>
												</div>
												<!--End experience-->
												
												
												
													<!--Experience-->
													
													<!--End experience-->
												
												
												</div>
												<!--End experience holder-->
											</div>
											
										
										</div>
										<!--End row-->

		                            </div>
									<!--End timeline-->

									</div>
									<!--End block content-->


						</div>
						<!--End content-->
						
									</section>
										<!--End portfolio tab-->
										
										
										
										
										
						
						
						
										<!--Blog Tab-->
									<section id="education" class="bgWhite ofsInBottom">

										<div class="main-title">
									<h1>education</h1>
										<div class="divider">
												<div class="zigzag large clearfix "  data-svg-drawing="yes" >
	<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
	<path d="M1.357,12.26 10.807,2.81 20.328,12.332
		29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
	</svg>
	</div>
	</div>
								</div>	
								
							<!--End main title-->





									<!--Content-->	
									<div class="content">

										<!--Block content-->	
										<div class="block-content">


										<!--Timeline-->
										<div class="timeline education">


			                               	<!--Row-->	
											<div class="row ">


												<div class="col-md-12">


													<!--Experience holder-->	
													<div class="exp-holder margTop">


													<!--Experience-->
													<div class="exp">
													<div class="hgroup" >
														<h4>Bachelor Degree – Computer Science Engineering </h4>
														<h6><i class="icon-calendar"></i>Jul 2016 - <span class="current">Current</span></h6>
													</div>
                                                        <p>I Am Currently Persuing B.TECH (
                                                            <?php

                                                            $start_date = new DateTime(Date('Y-m-d'));
                                                            $since_start = $start_date->diff(new DateTime('2016-07-19'));
                                                            $month=0;
                                                            if($since_start->m > 0)
                                                                $month=1;
                                                                echo $since_start->y+$month.' year';
                                                            ?> )
                                                            From <strong>Jaypee University Of Engineering &amp; Technology,Guna</strong> In Computer Science Branch </p>
													</div>
													<!--End experience-->

                                                    <!--Experience-->
													<div class="exp">
													<div class="hgroup" >
														<h4>Sir Padampat Singhania Educational Centre </h4>
														<h6><i class="icon-calendar"></i>Apr 2014 - Mar 2016</h6>
													</div>
																<p>The School Is Located In Kanpur , Studied 11th And 12th Standard AlongSide Preperations For Engineering Entrance.</div>
													<!--End experience-->

													<!--Experience-->
													<div class="exp">
													<div class="hgroup" >
														<h4>City International School </h4>
														<h6><i class="icon-calendar"></i>Apr 2008 - Mar 2014</h6>
													</div>
																<p>This Is A Boarding School Located In Lucknow , Most Of My Learning Is Accomplished Here. </p>													</div>
													<!--End experience-->



														<!--Experience-->
														<div class="exp">
														<div class="hgroup" >
															<h4>St. Xavier's School </h4>
															<h6><i class="icon-calendar"></i>Apr 2003 - Mar 2008</h6>
														</div>
																	<p>School In My Home Town </p>														</div>
														<!--End experience-->
                                                        <!--Experience-->
														<div class="exp">
														<div class="hgroup" >
															<h4>B.N.S.D Public School </h4>
															<h6><i class="icon-calendar"></i><span class="current">Beginning</span> - Mar 2003</h6>
														</div>
																	<p>School In My Home Town</p>														</div>
														<!--End experience-->


													</div>
													<!--End experience holder-->
												</div>


											</div>
											<!--End row-->

			                            </div>
										<!--End timeline-->

										</div>
										<!--End block content-->


							</div>

												

											</section>
												<!--End blog tab-->
												
												
												
												
							

											<!--Contact Tab-->
										<section id="contact" class="bgWhite ofsInBottom">

											<!--Contact -->
											<div class="contact">
<div class="main-title">
									
							<!--End main title-->
						
								
						
								<!--Content-->	
								
                                                <!--Main title-->
                                                
													<div id="contactinfo" class="main-title">
														<h1>contact info</h1>
															<div class="divider">
																	<div class="zigzag large clearfix "  data-svg-drawing="yes" >
						<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
						<path d="M1.357,12.26 10.807,2.81 20.328,12.332
							29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
						</svg>
						</div>
						</div>
													</div>	

												<!--End main title-->
												
												
												
												
										<!--Content-->	
										<div class="content">

											<!--Block content-->	
											<div class="block-content ">

											<!--Info-->
											<div class="block-info">
												
												<!--Row-->
												<div class="row">

												<div class="col-md-12">

													<div class="info-holder   margTMedium">

													<!--Address info-->	
													<div class="address-info">
													<i class="icon-location"></i>
													<p>Jaypee University Of Engineering And Technology <br>GUNA,MP,INDIA 567 890.</p>
													</div>
													<!--End address info-->


													<!--Contact info-->
													<div class="contact-info tCenter">
													<ul>
                                                        <li><div class="ico"><a href="mailto:connectwithshrey@gmail.com"><i class="icon-mail"></i></a></div>
														<p>connectwithshrey@gmail.com </p></li>
														<li><div class="ico"><a href="tel:+918726212000"><i class="icon-phone"></i></a></div>
														<p>Tel : +91 8726212000</p></li>
                                                        <li><div class="ico"><a href="https://linkedin.com/in/withshrey"><i class="icon-link"></i></a></div>
															<p>WebSite : <a href="https://linkedin.com/in/withshrey">LinkedIN</a></p></li>
													</ul>
													</div>
													<!--End contact info-->	

													</div>

												</div>
												
												</div>
												<!--End row-->

			                            </div>
										<!--End info-->

										</div>
										<!--End block content-->



										</div>
										<!--End content-->
										
										
                                                					<!--Main title-->
                                        <section id="post"></section>
											

										<!--End main title-->




								<!--Content-->	
								





										<!--Button-->
										<div class="button ofsInTop tCenter">

												<div class="divider">
														<div class="zigzag large clearfix "  data-svg-drawing="yes" >
			<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
			<path d="M1.357,12.26 10.807,2.81 20.328,12.332
				29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
			</svg>
			</div>
			</div>


			                               	<!--Row-->	
											<div class="row ">


												<div class="col-md-12">
													<a class="but opc-1 ico"  target="_blank" href="My_CV.pdf">Download my cv</a>
													<!--<a class="but opc-2 ico" href="#">Print my resume</a>-->

												</div>



												</div>
												<!--End row-->


				                            </div>
											<!--End button-->


							
								


											</div>
											<!--End contact-->

										</section>
											<!--End contact tab-->
													

		</div>
		<!--End right content-->
		
		
			</div>
			<!--End  row-->
		
		
		</div>
		<!--End  container-->
		
	


</div>
<!--End wrapper-->

				
	
<!--Javascript-->	
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js" type="text/javascript"></script>			
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/placeholders.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Switcher/switcher.js"></script>
<script src="js/script.js" type="text/javascript"></script>


<script>

(function($) {
  "use strict";

$(document).ready(function(){

	$('#wrapper').easytabs({
	animate			: true,
	updateHash		: false,
	transitionIn	:'fadeIn',
	transitionOut	:'fadeOut',
	animationSpeed	:100,
	tabActiveClass	:'active',
	tabs            :' #main-nav.tabbed > ul > li ',
	transitionInEasing: 'linear',
  	transitionOutEasing: 'linear'	

});


//---------------------------------- Google map location -----------------------------------------//










//---------------------------------- End google map location -----------------------------------------//


});

})(jQuery);
    

</script>


<!-- Google analytics -->


<!-- End google analytics -->


    </body>

</html>
