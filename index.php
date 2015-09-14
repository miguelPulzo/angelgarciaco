<?php include('sendmail.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AngelGarciaCO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<!-- Add jQuery library -->
		<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();

				$(".various").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none'
				});
			});

		</script>
                <script src="js/googleanalyticstracking.js"></script>
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
<li><a href="docs/CVMiguelAngelGarciaRivera.pdf" target="_blank">CV</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><div style="overflow:hidden; width:350px; height:350px;"><img src="images/migue_croped.png" alt="" /></div></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1>Hi. I'm <strong>Angel Garcia</strong>.</h1>
							</header>
							<p>And this is my <strong>CV</strong>, fully responsive HTML5 site where I show you all about me. My work and my Portfolio and Who I Am, specially.</p>
							<a href="#work" class="button big scrolly">Learn about what I do</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Here's all the stuff I do.</h2>
						<p>Well, some things, really.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-code"></span>
									<h3>Make Code</h3>
									<p>I like build code to create big products than generate impact.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-sitemap"></span>
									<h3>Protocols</h3>
									<p>I like organize the processes to do the job efficiently.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-gears"></span>
									<h3>All in One</h3>
									<p>I like apply this concept when I work with a great team.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-cloud"></span>
									<h3>Cloud Computing</h3>
									<p>I apply the Cloud Computing to let a minimum cost on efforts and maintenance.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-download"></span>
									<h3>Maximum Performance</h3>
									<p>I like give the maximum performance of me when I have to resolve and to develop things amazing.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-signal"></span>
									<h3>Reach Goals</h3>
									<p>I am oriented to gain and to reach the goals defined from the start of project, on all sprints and on the final deliver.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-retweet"></span>
									<h3>Skills back</h3>
									<p>I like be learning new skills on the technology world. If I know then I teach you. If you know then teach me.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-map-marker"></span>
									<h3>Geolocation</h3>
									<p>From side of code, I like develop with this technology on Desktop devices and Mobile devices.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured"><img src="images/aws1.png"></span>
									<h3>Some Skills</h3>
									<p>Php, Java, Grails, Json, Drupal, Symfony, Codeigniter, Amazon Web Services ( EC2, S3, Balancer, RDS, Cloudfront, Route53 ), Biometry && Google (Analytics, DFP, Adsense).</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Did you like it that you saw?</p>
						<a href="#portfolio" class="button big scrolly">See some of my recent work</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Here’s some stuff I made recently.</h2>
						<p><?php echo date('Y-m-d H:i:s'); ?> (GMT -05:00)</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="fancybox image featured" rel="group" href="images/2.png"><img src="images/2-thumb.png" alt="" /></a>
									<h3><a href="#">Drupal + Symfony</a></h3>
									Backend en Drupal CMS y Frontend en Symfony con Amazon Web Services
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="fancybox image featured" rel="group" href="images/dactilar.jpg"><img src="images/dactilar-thumb.png" alt="" /></a>
									<h3><a href="#">Biometry (WebService)</a></h3>
									<p>Sistema de Reconocimiento Biometrico para Monitoreo de Carga Pesada</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="various fancybox.iframe image featured" href="http://www.youtube.com/embed/W8lIUR2Z-ws?autoplay=1"><img src="images/apada-thumb.png" alt="" /></a>
									<h3><a href="#">APADA</a></h3>
									<p>Sistema para la Administracion de Datos del Docente</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="various fancybox.iframe image featured" href="http://www.youtube.com/embed/2qpfRRROERE?autoplay=1"><img src="images/solsao-thumb.png" alt="" /></a>
									<h3><a href="#">SIRA</a></h3>
									<p>Sistema de Informacion para el Registro de Archivos</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="various fancybox.iframe image featured" href="http://www.youtube.com/embed/DrNsQfUFZuE?autoplay=1"><img src="images/siensi-thumb.png" alt="" /></a>
									<h3><a href="#">SIENSI</a></h3>
									<p>Semillero de Investigacion en Seguridad de la Informacion</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a class="various fancybox.iframe image featured" href="https://www.intrared.net/sate.html"><img src="images/sat-thumb.png" alt="" /></a>
									<h3><a href="#">SAT</a></h3>
									<p>Sistema de Administracion de Transporte (SATE, SATB, SATC, SAT GL)</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>Did you like it too?</p>
						<a href="#contact" class="button big scrolly">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Do you want hire me?</h2>
						<p>Just do it. Contact me.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="index.php">
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li><a target="_blank" href="//www.twitter.com/angelgarciaco" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a target="_blank" href="//www.facebook.com/ingmiguelgarcia" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a target="_blank" href="//co.linkedin.com/in/miguelagarcia" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="skype:angelo047?call" class="icon fa-skype"><span></span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; AngelGarciaCO. All rights reserved.</li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script> -->
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
