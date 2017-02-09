<?php

namespace appli\vue;

class IndexVue {

    protected $slim, $head, $par, $uri, $content;


    public function afficher(){
        $html = '<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Coloc Senior</title>
    
	<link href=\'http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800\' rel=\'stylesheet\' type=\'text/css\'>
	<link href=\'http://fonts.googleapis.com/css?family=Audiowide\' rel=\'stylesheet\' type=\'text/css\'>

	<link rel="stylesheet" href="src/appli/vue/files/css/bootstrap.css">
	<link rel="stylesheet" href="src/appli/vue/files/css/animate.css">
	<link rel="stylesheet" href="src/appli/vue/files/css/simple-line-icons.css">
	<link rel="stylesheet" href="src/appli/vue/files/css/font-awesome.min.css">
	<link rel="stylesheet" href="src/appli/vue/files/css/style.css">
	<link rel="stylesheet" href="src/appli/vue/files/rs-plugin/css/settings.css">
    
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="index-2.html">CSE</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="">Acceuil</a></li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="services.html">Services</a></li>
											<li><a href="clients.html">Clients</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog.html">Blog Classic</a></li>
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-single.html">Single Post</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li><a href="#" class="has-submenu">Work</a>
										<ul class="sub-menu">
											<li><a href="work-3columns.html">Three Columns</a></li>
											<li><a href="work-4columns.html">Four Columns</a></li>
											<li><a href="single-project.html">Single Project</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="src/appli/vue/files/images/01-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Colocation Seniors-Etudiants</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">La colocation qui satisfait tout le monde !</div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="src/appli/vue/files/images/02-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Colocation Seniors-Etudiants</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">La colocation qui satisfait tout le monde !</div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="src/appli/vue/files/images/03-slide.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Colocation Seniors-Etudiants</div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">La colocation qui satisfait tout le monde !</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>Un site ou vous pourrez trouver votre bonheur !</h4>
    <p class="col-md-10 col-md-offset-1">Trouvez un colocataire parmis un grand choix de personnes prêtes à faire le grand saut avec vous.</p>
					</div>	
				</section>
				

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Nos logements</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
									<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/10.jpg">
				        					<figcaption>
				            					<h3>Plaid Authentic</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/11.jpg">
				        					<figcaption>
				            					<h3>Portland Neutra</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/12.jpg">
				        					<figcaption>
				            					<h3>Synth Thundercats</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/13.jpg">
				        					<figcaption>
				            					<h3>Bushwick Letterpress</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/20.jpg">
				        					<figcaption>
				            					<h3>Fashion Heirloom</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/21.jpg">
				        					<figcaption>
				            					<h3>Locavore Brooklyn</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/23.jpg">
				        					<figcaption>
				            					<h3>Meggings Mixtape</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="img/apart/25.jpg">
				        					<figcaption>
				            					<h3>Normcore Dreamcatcher</h3>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <!--<a href="work-3columns.html" class="go-to">Go to portfolio</a>-->
						</div>
					</div>
				</section>
               
				
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>
		
	<div id="container">
	'.$this->content.'
	</div>

		

	</div>


	<script type="text/javascript" src="src/appli/vue/files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="src/appli/vue/files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="src/appli/vue/files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="src/appli/vue/files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="src/appli/vue/files/js/plugins.js"></script>
	<script type="text/javascript" src="src/appli/vue/files/js/custom.js"></script>

</body>
</html>';

        return $html;
        
    }
}