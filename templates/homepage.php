<?php
/**
 * Template Name: Homepage Template
 *
 * @package Underscoresme
 * @since Underscoresme 1.0
 */

get_header(); ?>	

		<div id="primary" class="site-content">
			
			<section id="generator" role="main">
				<div class="wrap">
					<h1>Create your Underscores based theme</h1>
					<?php do_action( 'underscoresme_print_form' ); ?>
				</div><!-- .wrap -->
			</section><!-- #generator -->

			<section id="about">
				<div class="wrap">
					<div id="intro">
						<h1>What is Underscores?</h1>
						<p>Hi. I'm a starter theme called <em>_s</em>, or <em>underscores</em>, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.</p>
						<p>My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here ...</p>
						<p>Learn more about me in "<a href="http://themeshaper.com/2012/02/13/introducing-the-underscores-theme/">A 1000-Hour Head Start: Introducing The _s Theme</a>" on <a href="http://themeshaper.com/">ThemeShaper</a>.</p>
					</div><!-- #intro -->
					<ul id="features">
						<li>A just right amount of lean, well-commented, modern, HTML5 templates.</li>
						<li>A helpful 404 template.</li>
						<li>An optional sample custom header implementation in <code>inc/custom-header.php</code>.</li>
						<li>Custom template tags in <code>inc/template-tags.php</code> that keep your templates clean and neat and prevent code duplication.</li>
						<li>Some small tweaks in <code>inc/template-functions.php</code> that can improve your theming experience.</li>
						<li>A script at <code>js/navigation.js</code> that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry.</li>
						<li>2 sample CSS layouts in <code>layouts/</code> for a sidebar on either side of your content.</li>
						<li>Smartly organized starter CSS in <code>style.css</code> that will help you to quickly get your design off the ground.</li>
						<li>Licensed under GPLv2 or later. :) Use it to make something cool.</li>
					</ul><!-- #features -->
				</div><!-- .wrap -->
			</section><!-- #about -->
			
			<section id="contribute">
				<div class="wrap">
					<h1>Underscores is brought to you by these fine folks</h1>
					<div id="github">
						<a href="https://github.com/automattic/_s" title="Go to the Underscores page on github to contribute to the project">Underscores on github</a>
					</div><!-- #github -->
					<ul id="team">
						<?php foreach ( underscoresme_get_contributors() as $contributor ) : ?>
							<?php
								$title = sprintf( '@%s with %d %s', $contributor->login, $contributor->contributions, _n( 'contribution', 'contributions', $contributor->contributions ) );
								$url = sprintf( 'http://github.com/%s', $contributor->login );
								$avatar_url = add_query_arg( 's', 280, $contributor->avatar_url );
								$avatar_url = add_query_arg( 'd', esc_url_raw( 'https://secure.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=280' ), $avatar_url );
							?>
							<li><a title="<?php echo esc_attr( $title ); ?>" href="<?php echo esc_url( $url ); ?>"><img class="avatar" src="<?php echo esc_url( $avatar_url ); ?>" /></a></li>
						<?php endforeach; ?>
					</ul><!-- #team -->
				</div><!-- .wrap -->
			</section><!-- #contribute -->

		</div><!-- #primary .site-content -->



<?php get_footer(); ?>
