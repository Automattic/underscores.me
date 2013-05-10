<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Underscores.me
 * @since Underscores.me 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="automattic-credit">
			An <a href="http://automattic.com/" id="automattic-credit-logo">Automattic</a> 
			<?php
			$words = array( 'Production', 'Joint', 'Medley', 'Experiment', 'Ruckus', 'Invention', 'Creation', 'Thingamajig', 'Opus', 'Brainchild', 'Contraption' );
			echo $words[ mt_rand( 0, count( $words) -1 ) ];
			?>
		</div><!-- .automattic-credit -->
		<div class="site-info">
			<?php do_action( 'underscoresme_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'underscoresme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'underscoresme' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>