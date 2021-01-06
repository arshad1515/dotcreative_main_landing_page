<?php
$err=[];
if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
    $to = "fatehjagdeo@teamoxio.com";
    $subject = "Contact";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $body=$_POST['message'];
    $message = "
<html>
<head>
	<title>Contact Details</title>
</head>
<body>
<table>
	<tr>
		<th>Name</th>
		<td>".$name."</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>".$email."</td>
	</tr>
	<tr>
		<th>Contact Number</th>
		<td>".$contact."</td>
	</tr>
	<tr>
		<th>Message</th>
		<td>".$body."</td>
	</tr>
	
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <'.$email.'>' . "\r\n";

    if(mail($to,$subject,$message,$headers)){
        $err['success']="Email sent successfully.";
    }
}
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Camond Services</title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css?v=1.1" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

		<!--<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>-->
</head>

<body>


	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">


		</div>
	</div>

	<div id="canvas">
		<div id="box_wrapper">
			<div class="header_absolute s-pb-30">
				<header class="page_header ds">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="index.html" class="logo text-center">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-lg-6 col-1 text-sm-center">
								<nav class="top-nav">
									<ul class="nav sf-menu">
										<li>
											<a href="index.html">Home</a>
										</li>

										<li>
											<a href="#about">About</a>
										</li>

										<li>
											<a href="#services">Services</a>
										</li>

										<li>
											<a href="#steps">Steps</a>
										</li>
										<li>
											<a href="#testimonials">Testimonials</a>
										</li>
										<li>
											<a href="#contact">Contact Us</a>
										</li>
									</ul>
								</nav>

							</div>
							<div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
								<div class="header_phone">
									<h6>
										<span>+91</span> 7626941234
									</h6>
								</div>
							</div>
						</div>
					</div>
					<span class="toggle_menu">
						<span></span>
					</span>
				</header>
			</div>
			<span class="toggle_menu_side header-slide">
				<span></span>
			</span>

			<section class="page_slider main_slider">
				<div class="flexslider" data-nav="true" data-dots="false">
					<ul class="slides">
						<li class="ds text-center slide1">
							<span class="flexslider-overlay"></span>
							<span class="embed-responsive embed-responsive-16by9">
								<iframe src="https://www.youtube.com/embed/UBufeh1yv2c?feature=oembed&amp;;showinfo=0&amp;;autoplay=1&amp;;controls=0&amp;;mute=1&amp;;loop=1&amp;;playlist=UBufeh1yv2c" allowfullscreen=""></iframe>
							</span>
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<p class="text-uppercase intro_after_featured_word">welcome to</p>
												</div>

												<div class="intro_layer" data-animation="slideRight">
													<h2 class="text-uppercase intro_featured_word">Camond Services
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="intro_before_featured_word">
														<span class="color-main2">Web Design</span>,
														<span class="color-main3">Marketing</span> &
														<span class="color-main4">Branding</span>
													</h3>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="#contact">Get Started</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="ds text-center slide2">
							<span class="flexslider-overlay"></span>
							<img src="images/slide_02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="text-lowercase intro_before_featured_word">
														Online
													</h3>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word">
														Marketing
													</h2>
												</div>
												<div class="intro_layer" data-animation="pullDown">
													<p class="text-uppercase intro_after_featured_word">Solutions</p>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="#contact">Get Started</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="ds text-center slide3">
							<img src="images/slide_03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h2 class="text-uppercase intro_featured_word light">
														Modern
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word bold">
														Marketing & design
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word">
														That works
													</h2>
												</div>

												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="#contact">Get Started</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="flexslider-bottom d-none d-xl-block">
					<a href="#about" class="mouse-button animated floating"></a>
				</div>
			</section>
			<div class="divider-10 d-block d-sm-none"></div>
			<section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
				<div class="divider-5 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<div class="main-content text-center">
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
									<div class="divider-35"></div>
								</div>
								<h5>
									We are the one of the most effective Web Design Companies
								</h5>
								<p>
									Getting online is easy. Succeeding online is a different story. You’ll need more than just a beautiful website to stand out these days.
									 Conversion-based web design coupled with a lead generating marketing plan, your online success is inevitable.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div>
									<div class="divider-40"></div>
									<button type="button" class="btn btn-outline-maincolor" href="#contact">Get Started</button>
									<div class="divider-40"></div>
								</div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div class="divider-10 d-none d-xl-block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-10 d-block d-sm-none"></div>
			</section>

			<section class="s-pt-30 s-pb-3 service-item2 ls animate" id="services" data-animation="fadeInUp">
				<div class="container">
					<div class="row c-mb-50 c-mb-md-60">
						<div class="d-none d-lg-block divider-20"></div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_1-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">Marketing</a>
									</h6>

									<p>
										We use strategic marketing tactics that have been proven to work.
									</p>

								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_2-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">Development</a>
									</h6>

									<p>
										Custom programming for most complex functions you can think.
									</p>

								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_3-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">Web Design</a>
									</h6>

									<p>
										Pork chop pork belly hamburger prosciutto, fatback andouille flank.
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_4-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">SEO Optimization</a>
									</h6>

									<p>
										Optimizing our web designs to rank on the first page of google is our specialty.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_5-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">Ecommerce</a>
									</h6>

									<p>
										We build your online store using a flexible, modular platform that allows
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_6-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="javascript:;">Branding</a>
									</h6>

									<p>
										A solid brand strategy, logo and guidelines help you to get You recognized.
									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="pink-line text-center">
						<img src="img/pink_line_big.png" alt="">
					</div>
				</div>
			</section>


			<section class="s-pt-100 s-pt-lg-130 ds process-part skew_right s-parallax top_white_line_big overflow-visible" id="steps">
				<div class="container">
					<div class="divider-65"></div>
					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right">
								<h2 class="step-title">
									<span class="color-main">01</span>Strategy</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_1.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We define your competition and target audience. Discover what is working in your online industry, then design your website accordingly.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part">
								<h2 class="step-title color1">
									<span class="color-main2">02</span>Design</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right part3">
								<h2 class="step-title">
									<span class="color-main3">03</span>Develop</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_3.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We turn your ideas into a reality. &our website is placed on a "development server" where you get to watch the whole process, live.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part part4">
								<h2 class="step-title color1">
									<span class="color-main4">04</span>Support</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center last">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
							</div>
						</div>
					</div>
					<div class="divider-10 d-block d-sm-none"></div>
					<div class="img-wrap text-center">
						<img src="img/vertical_line2.png" alt="">
					</div>
				</div>
			</section>

<section>
	<div class="img-wrap text-center">
		<img src="img/vertical_line.png" alt="">
	</div>
	<section class="s-pt-30 s-pt-lg-50 ls about">
		<div class="divider-60 d-none d-xl-block"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="main-content text-center">
						<h5>
							"We love what we do and we love helping others succeed at what they love to do."
						</h5>



						<div class="divider-10 d-none d-xl-block"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75 ls about-icon teaser-contact-icon">
		<div class="divider-10 d-none d-xl-block"></div>
		<div class="container">
			<div class="row c-mt-50 c-mt-lg-0">
				<div class="col-lg-4 text-center call-icon">
					<div class="border-icon">
						<div class="teaser-icon">
							<img src="images/icon1_about.png" alt="">
						</div>
					</div>
					<h6>
						Who We Are
					</h6>
					<div class="icon-content">
						<p>
							We are a team of Camond Service and development professionals who love partnering with good people and businesses to help them achieve online success.
						</p>
					</div>
				</div>
				<div class="col-lg-4 text-center write-icon">
					<div class="divider-30 d-none d-xl-block"></div>
					<div class="border-icon">
						<div class="teaser-icon">
							<img src="images/icon2_about.png" alt="">
						</div>
					</div>
					<div class="icon-content">
						<h6>
							What We Do
						</h6>
						<p>
							We’re focused on honing our crafts and bringing everything we have to the table for our clients. We create custom, functional websites focused on converting your users into customers.
						</p>
					</div>
				</div>
				<div class="col-lg-4 text-center visit-icon">
					<div class="border-icon">
						<div class="teaser-icon">
							<img src="images/icon3_about.png" alt="">
						</div>
					</div>
					<div class="icon-content">
						<h6>
							Why We Do It
						</h6>
						<p>
							Each of us loves what we do and we feel that spirit helps translate into the quality of our work. Working with clients who love their work combines into a fun, wonderful partnership for everyone involved.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="pink-line text-center">
		<img src="img/pink_line_big.png" alt="">
	</div>
</section>


			<section class="s-pt-130 s-pb-15 s-pb-md-50 s-pt-xl-100 s-pb-lg-30 overflow-visible s-parallax testimonials-sliders main-testimonials ds" id="testimonials">
				<div class="container">
					<div class="row c-mt-30 c-mt-md-0">
						<div class="divider-20"></div>
						<div class="text-center img-wrap line col-md-12">
							<img src="img/vertical_line2.png" alt="">
						</div>
						<div class="divider-40 d-none d-md-block"></div>
						<div class="col-md-12">
							<div class="owl-carousel" data-autoplay="false" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true" id="quote">
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_02.jpg" alt="">
									</div>

									<h5>
										<a href="#">George M. Baty</a>
									</h5>
									<p>
										<em class="big">
											I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!
										</em>
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>

									<h5>
										<a href="#">Jeffrey P. McAllister</a>
									</h5>
									<p>
										<em class="big">
											I highly recommend this company for all and any of your design needs. I am very happy with the new redesigned and restructured website they built for my moving company!
										</em>
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_03.jpg" alt="">
									</div>

									<h5>
										<a href="#">Josephine B. Anderson</a>
									</h5>
									<p>
										<em class="big">
											This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys. My website is exactly what I needed and even more...
										</em>
									</p>

								</div>
							</div>
							<!-- .testimonials-slider -->
						</div>
						<div class="divider-55 d-none d-md-block"></div>
						<div class="text-center img-wrap col-md-12">
							<img src="img/vertical_line2.png" alt="">
						</div>
						<div class="divider-10 d-none d-md-block"></div>
					</div>
				</div>
				<div class="testimonials-btn text-center">
					<a href="#quote" class="btn-maincolor">
						<i class="fa fa-angle-up"></i>
					</a>
				</div>
				<div class="corner corner-light"></div>
			</section>

			<section class="s-pt-130 s-pt-md-50 ls text-section">
				<div class="divider-30"></div>
				<div class="container">
					<div class="row">
						<div class="text-center col-md-12 justify-content-center text-block">
							<img src="img/vertical_line.png" alt="">
							<div class="divider-35"></div>
							<div class="content">
								<h1>
									Lets Get Started
									<br> Your Project
								</h1>
								<p>
									We’ll help to achieve your goals and to grow business
								</p>
								<div class="divider-30"></div>
							</div>
							<img src="img/vertical_line.png" alt="">
							<div>
								<div class="divider-40"></div>
								<a href="#contact" class="btn btn-outline-maincolor">Let’s Talk!</a>
								<div class="divider-30"></div>
							</div>
							<div class="img-wrap overflow-visible">
								<img src="img/vertical_line.png" alt="">
								<div class="divider-5 d-none d-xl-block"></div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section id="contact" class="s-pt-50 s-pb-100 s-pt-md-30 s-pb-xl-75 ls ms teaser-contact-icon main-icon s-parallax" id="days. Camond Services">
				<div class="corner corner-inverse"></div>
				<div class="text-center img-wrap col-md-12">
					<img src="img/dark_line_short.png" alt="">
				</div>
				<div class="container">
					<div class="divider-10 d-none d-xl-block"></div>
					<div class="row c-mb-25 c-mt-25 c-mb-lg-0 c-mt-lg-0">
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1.png" alt="">
								</div>
							</div>
							<h6>
								Call Us
							</h6>
							<p>
								0172- 4648799
								<br>
								 +91 7626941234
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Write Us
							</h6>
							<p>
								info@camondservices.in
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon2.png" alt="">
								</div>
							</div>
							<h6>
								Visit Us
							</h6>
							<p>
								SCO-47 Level-1 Sector 65
								<br> Phase 11, Mohali
							</p>
						</div>
					</div>
					<div class="divider-50 d-none d-lg-block"></div>
					<div class="row">
						<div class="col-lg-12 ">
							<form method="post" action="">
                                <?php
                                if(count($err)>0 && $err['success']!=""){
                                    ?>
                                    <p class="alert alert-success"><?php echo $err['success'];?></p>
                                    <?php
                                }
                                ?>

								<div class="row c-gutter-20">

									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Full Name">
										</div>
										<div class="form-group has-placeholder ">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="Email Address">
										</div>
										<div class="form-group has-placeholder">
											<label for="subject">Phone number
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="contact" id="contact" class="form-control text-left" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-12 col-md-6">

										<div class="form-group has-placeholder">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Your Message"></textarea>
										</div>
									</div>
								</div>
								<div class="divider-30 d-none d-lg-block"></div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<input type="submit" name="submit" value="Submit" class="btn btn-maincolor">
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
					<div class="divider-30 d-none d-lg-block"></div>
					<div class="text-center img-wrap col-md-12 layout-2">
						<img src="img/dark_line_short.png" alt="">
					</div>
				</div>
				<div class="divider-10"></div>
			</section>


			<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

				<div class="container">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
								<img class="margin-negative" src="images/footer_logo.png" alt="">
								<div class="widget widget_social_buttons">
									<a href="https://www.facebook.com/#" class="fa fa-facebook color-icon" title="facebook"></a>
									<a href="https://www.twitter.com/#" class="fa fa-twitter color-icon" title="twitter"></a>
									<a href="https://www.plus.google.com/#" class="fa fa-google color-icon" title="google"></a>
									<a href="https://www.youtube.com/#" class="fa fa-youtube-play color-icon" title="youtube-play"></a>
									<a href="https://www.linkedin.com/#" class="fa fa-linkedin color-icon" title="linkedin"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright
								<span class="copyright_year">2020</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>
		</div>
	</div>

</body>
<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
</html>