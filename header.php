<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/paramania/libs/bootstrap/bootstrap-grid-3.3.1.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/paramania/libs/font-awesome-4.2.0/css/font-awesome.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/paramania/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/paramania/css/style.css" type="text/css" media="screen" />
	<script src="http://localhost/wordpress/wp-content/themes/paramania/js/jquery.min.js"></script>
	<script src="http://localhost/wordpress/wp-content/themes/paramania/js/jquery-ui-min.js"></script>
	<script src="http://localhost/wordpress/wp-content/themes/paramania/js/cusel-2.5-min.js"></script>
	<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });		
			});
		</script>
</head>
<body>
	<!--[if lt IE 9]>
	<script src="js/css3-mediaqueries.js"></script>
 	<script src="js/html5shiv.min.js"></script>
 	<script src="js/respond.min.js"></script>
	<![endif]-->
	<div class="wrapper">
			<div class="row">
						<div class="social">
							<ul>
								<li class="fb"><a href="#"></a></li>
								<li class="vk"><a href="#"></a></li>
								<li class="mail"><a id="go" rel="leanModal" href="#mail-modal"></a>
									<div id="mail-modal">
										<form class="sign-up">
										  <input type="text" name="name" placeholder="введіть свое ім'я"><br>
										  <input type="email" name="email" placeholder="введіть свій email"><br>
										  <input type="submit" value="Відправити">
										  </form>
									</div>
								</li>
							</ul>
						</div>
			</div>
			<div class="row header">
				<div class="container">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="logo">
							<a href="index.html"><img id="hid" src="http://localhost/wordpress/wp-content/themes/paramania/images/logo.png" alt="Paramania">
							<h1>Paramania</h1></a>
						</div>
						<div class="button-wrap">
							<span></span>
						</div>
						<nav>
							<a href="about-us.html">Про нас</a>
							<a href="places.html">Місця</a>
							<a href="team.html">Команда</a>
						</nav>	
					</div>	
				</div>
			</div>