<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>
	
<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

	<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums col-container">

		<h2><?php bbp_forum_title(); ?></h2>

		<li class="bbp-body">

			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		</li><!-- .bbp-body -->
	
	</ul><!-- .forums-directory -->

<?php endwhile; ?>

<?php do_action( 'bbp_template_after_forums_loop' ); ?>
