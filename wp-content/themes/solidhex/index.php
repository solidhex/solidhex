<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/main.css">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<h1><a href="#">solidhex<span>dot</span>com</a></h1>
		</header>
		<div id="main" role="main">
			<section class="intro">
				<h1>Howdy!</h1>
				<p>
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</section>
			<section class="work">
				<ul class="grid">
					<li>
						<figure>
	                        <img src="http://placekitten.com/320/200">
	                        <figcaption>
	                                Bijouxs
	                        </figcaption>
                        </figure>
					</li>
				</ul>
			</section>
		</div>
		<footer>
			
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>