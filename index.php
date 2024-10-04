<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/png" href="<?php if (get_option('site_icon')){echo get_site_icon_url();}else{ echo get_template_directory_uri().'/favicon.png';}?>">
    
	<link href='https://fonts.googleapis.com/css?family=Oswald&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Poppins:100,500,700,40&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Home</title>

	<?php wp_head(); ?>

    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body class="  <?php echo implode(" ",get_body_class()); ?>">

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<!-- hero -->
<div class="bloc bloc-fill-screen b-parallax bloc-bg-texture texture-darken-strong none full-width-bloc d-bloc" id="hero">
	<div class="parallax bg-Screen-20Shot-202024-04-07-20at-2010-50-39-20AM bgc-1165 bg-t-edge">
	</div>
	<div class="container">
		<div class="row bgc-3648">
			<div class="align-self-start offset-lg-0 text-lg-left col-md-12 offset-md-0 text-md-center col-lg-6">
				<p class="text-sm-center text-center text-lg-left text-md-center float-lg-none hero-sub-heading mb-0 tc-3648">
					Welcome To
				</p>
				<h1 class="float-lg-none sm-shadow hero-heading tc-3409">
					<strong>Fernando</strong> <strong>James Pitso</strong>
				</h1>
			</div>
		</div>
	</div>
	<div class="container fill-bloc-bottom-edge">
		<div class="row">
			<div class="col-12">
			</div>
		</div>
	</div>
</div>
<!-- hero END -->

<!-- services -->
<div class="bloc bgc-1165 d-bloc" id="services">
	<div class="container bloc-md bloc-lg-md">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 mb-5 col-md-8 offset-md-2">
				<picture><source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-srcset="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2011.55.37%20AM-1.webp"><img src="<?php echo get_template_directory_uri(); ?>/img/lazyload-ph.png" data-src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2011.55.37%20AM-1.png" class="img-fluid img-services-style img-fluid-up mx-auto d-block lazyload" alt="Screen%20Shot%202024 04 07%20at%2011.55.37%20AM" width="555" height="166"></picture>
				<h3 class="mx-auto d-block text-lg-center tc-6728 text-md-center text-sm-center text-center section-heading">
					Who is Fernando?
				</h3>
				<div class="divider-h primary-divider center-divider">
				</div>
				<p class="text-lg-center mx-auto d-block text-md-center text-sm-center text-center section-p tc-3648 p-services-style">
					"Fernando's Fabulous Fusion: Mixing Cocktails, Code, Beats, and Visual Treats with Expertise and a Smile!"
				</p>
			</div>
		</div>
	</div>
</div>
<!-- services END -->

<!-- pricing -->
<div class="bloc bloc-bg-texture texture-darken-strong b-parallax d-bloc" id="pricing">
	<div class="parallax bg-Screen-20Shot-202024-04-07-20at-2010-52-34-20AM bgc-1165">
	</div>
	<div class="container bloc-md bloc-lg-md bloc-lg-lg">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 text-lg-center mb-5 text-center col-md-8 offset-md-2">
				<h3 class="mb-4 section-heading tc-3409">
					stats
				</h3>
				<div class="divider-h primary-divider center-divider">
				</div>
			</div>
			<div class="col-md-6 text-sm-center col-sm-12 col-12 text-md-left scroll-fx-zoom-push text-lg-center align-self-center col-lg-9 offset-lg-2">
				<ul class="list-unstyled">
					<li>
						<h5 class="mg-md mx-auto d-block text-lg-left text-md-left text-sm-center text-center tc-3648 h5-style glow-t">
							<strong>NATIONALITY&nbsp;</strong>………………………<strong>SOUTH AFRICA</strong>
						</h5>
						<h5 class="mg-md mx-auto d-block text-lg-left text-md-left text-sm-center text-center tc-3648 glow-t h5-style">
							<strong>AGE&nbsp;</strong>…………………………………………………...<strong>33</strong>
						</h5>
						<h5 class="mg-md mx-auto d-block text-lg-left text-md-left text-sm-center text-center tc-3648 glow-t h5-2-style">
							<strong>HEIGHT&nbsp;</strong>…………………………………………<strong>167CM/5,6FT</strong>
						</h5>
						<h5 class="mg-md mx-auto d-block text-lg-left text-md-left text-sm-center text-center tc-3648 h5-3-style glow-t">
							<strong>WEIGHT&nbsp;</strong>………………………………………<strong>85KG</strong>
						</h5>
					</li>
					<li>
						<p class="mg-clear-md mg-clear text-center text-lg-left float-lg-none text-md-left tc-3648">
							<br>
						</p>
					</li>
					<li>
						<h5 class="mg-md tc-3409 mx-auto d-block text-center text-lg-left text-md-left">
							<br>
						</h5>
						<p class="mg-clear-md mg-clear text-center text-lg-left float-lg-none text-md-left tc-3648">
							<br>
						</p>
					</li>
					<li>
						<h5 class="mg-md tc-3409 mx-auto d-block text-center text-lg-left text-md-left">
							<br>
						</h5>
					</li>
				</ul>
			</div>
			<div class="col-md-6 text-sm-center col-sm-12 col-12 offset-lg-0 col-lg-6 text-lg-left">
				<ul class="list-unstyled">
					<li>
						<h5 class="mg-md tc-3409 mx-auto d-block text-center text-lg-left text-md-left">
							<br>
						</h5>
					</li>
					<li>
						<h5 class="mg-md tc-3409 mx-auto d-block text-center text-lg-left text-md-left">
							<br>
						</h5>
						<p class="mg-clear-md mg-clear text-center text-lg-left float-lg-none text-md-left tc-3648">
							<br>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- pricing END -->

<!-- gallery -->
<div class="bloc none b-parallax full-width-bloc d-bloc" id="gallery">
	<div class="parallax bg-Screen-20Shot-202024-04-07-20at-2011-55-16-20AM bgc-1165">
	</div>
	<div class="container bloc-md bloc-lg-md b-divider-dashed">
		<div class="row voffset scroll-fx-left-in-fade scroll-fx-right-out-fade">
			<div class="text-lg-center mb-5 text-center col-md-8 offset-md-2 offset-lg-2 col-lg-8">
				<h3 class="mb-4 section-heading tc-6728">
					Gallery
				</h3>
				<div class="divider-h primary-divider center-divider">
				</div>
				<p class="section-p tc-3648 p-style">
					<br>
				</p>
			</div>
			<div class="text-lg-center offset-lg-2 col-lg-8">
				<div id="carousel-2" class="carousel slide carousel-style animated floating mx-auto d-block mt-lg-2 ml-lg-2 mr-lg-2 pl-lg-2 pr-lg-2 scroll-fx-zoom-push scroll-fx-up-in-fade scroll-fx-out-fade pb-lg-2 none pt-lg-2 carousel-fade mb-lg-2" data-ride="carousel" data-appear-anim-style="floating">
					<ol class="carousel-indicators">
						<li data-target="#carousel-2" data-slide-to="0" class="active">
						</li>
						<li data-target="#carousel-2" data-slide-to="1">
						</li>
						<li data-target="#carousel-2" data-slide-to="2">
						</li>
						<li data-target="#carousel-2" data-slide-to="3">
						</li>
						<li data-target="#carousel-2" data-slide-to="4">
						</li>
						<li data-target="#carousel-2" data-slide-to="5">
						</li>
						<li data-target="#carousel-2" data-slide-to="6">
						</li>
						<li data-target="#carousel-2" data-slide-to="7">
						</li>
						<li data-target="#carousel-2" data-slide-to="8">
						</li>
						<li data-target="#carousel-2" data-slide-to="9">
						</li>
						<li data-target="#carousel-2" data-slide-to="10">
						</li>
						<li data-target="#carousel-2" data-slide-to="11">
						</li>
						<li data-target="#carousel-2" data-slide-to="12">
						</li>
						<li data-target="#carousel-2" data-slide-to="13">
						</li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-inline-block w-100" alt="placeholder image wide" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.50.16%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="IMG_0507.JPG" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0507.JPG">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="IMG_0506.JPG" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0506.JPG">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="IMG_0505.JPG" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0505.JPG">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.53.19%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.53.19%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.53.13%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.53.13%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.52.48%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.52.48%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.51.48%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.51.48%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.51.38%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.51.38%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.51.28%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.51.28%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.53.28%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.53.28%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.52.18%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.52.18%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.52.34%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.52.34%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-inline-block w-100" alt="Screen%20Shot%202024 04 07%20at%2010.50.39%20AM" src="<?php echo get_template_directory_uri(); ?>/img/Screen%20Shot%202024-04-07%20at%2010.50.39%20AM.png">
							<div class="carousel-caption carousel-caption-center">
							</div>
						</div>
					</div><a class="carousel-nav-controls carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><svg width="26" height="26" viewBox="0 0 32 32"><path class="carousel-nav-icon carousel-prev-icon" d="M22,2L9,16,22,30"></path></svg><span class="sr-only">Previous</span></a><a class="carousel-nav-controls carousel-control-next" href="#carousel-2" role="button" data-slide="next"><svg width="26" height="26" viewBox="0 0 32 32"><path class="carousel-nav-icon carousel-next-icon" d="M10.344,2l13,14-13,14"></path></svg><span class="sr-only">Next</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- gallery END -->

<footer>

<!-- team -->
<div class="bloc none b-parallax scroll-fx-up-in-fade bloc-fill-screen full-width-bloc l-bloc" id="team">
	<div class="parallax bg-BAR-20FLAIR-20VIDEO-Cover bgc-5561 bg-repeat">
	</div>
	<div class="video-bg-container nonein">
		<video class="bloc-video lazyload" preload="auto" loop="loop" muted="muted" playsinline="playsinline" autoplay="autoplay" data-src="<?php echo get_template_directory_uri(); ?>/vid/BAR%20FLAIR%20VIDEO.mp4">
			
		</video>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="divider-h">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 scroll-fx-zoom-push scroll-fx-up-in-fade text-lg-center col-lg-6 order-lg-1">
				<h3 class="mb-4 h3-team-style lg-shadow text-lg-center mx-auto d-block">
					<span class="fa fa-star"></span>EXTRA FOR A MUSIC VIDEO<br>
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- team END -->

</footer>
<!-- contact -->
<div class="bloc b-parallax bloc-bg-texture texture-darken-strong d-bloc" id="contact">
	<div class="parallax bg-Screen-20Shot-202024-04-07-20at-2011-55-16-20AM bgc-1165">
	</div>
	<div class="container bloc-md bloc-lg-md">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 text-lg-center mb-5 text-center col-md-8 offset-md-2">
				<h3 class="mb-4 section-heading tc-6728">
					CONTACT ME
				</h3>
				<div class="divider-h primary-divider center-divider">
				</div>
				<p class="section-p tc-3648">
					Feel free to get in contact with me using the form below, and i will respond back to you ASAP. If you require an instant response, please give me a call.
				</p>
			</div>
			<div class="text-lg-left mb-4 col-md-6 mb-md-0 col-lg-6 offset-lg-3">
				<form template-path="<?php echo get_template_directory_uri(); ?>/" id="contact_form" data-form-type="blocs-form" novalidate="" data-success-msg="Your message has been sent." data-fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!">
					<div class="form-group">
						<input id="name" class="form-control custom-field" required="" placeholder="Name">
					</div>
					<div class="form-group">
						<input id="email" class="form-control custom-field" type="email" data-error-validation-msg="Not a valid email address" required="" placeholder="Email">
					</div>
					<div class="form-group">
						<textarea id="message" class="form-control custom-field" rows="6" cols="50" required="" placeholder="Message"></textarea>
					</div>
					<div class="text-center">
						<a class="btn btn-sq btn-d primary-btn scroll-fx-zoom-push btn-block btn-xl" href="mailto:fpitso@hotmail.com">Holler at me</a>
					</div>
				</form>
			</div>
			<div class="text-lg-center col-lg-4 col-md-6 text-md-center text-sm-center d-flex col-sm-12 offset-md-0 offset-lg-0">
			</div>
		</div>
	</div>
</div>
<!-- contact END -->

<!-- ScrollToTop Button -->
<button aria-label="Scroll to top button" class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32"><path class="scroll-to-top-btn-icon" d="M30,22.656l-14-13-14,13"/></svg></button>
<!-- ScrollToTop Button END-->


<?php get_footer(); ?>

</div>
<!-- Main container END -->
    
<?php wp_footer(); ?>

<!-- Additional JS -->
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/formHandler.js?8170"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/lazysizes.min.js" defer></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/universal-parallax.min.js?9283"></script><!-- Additional JS END -->

<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/scrollFX.js?183"></script>

</body>
</html>
