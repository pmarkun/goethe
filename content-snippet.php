<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-boxdate">
			<div class="time"><?php echo get_the_time(); ?></div>
			<?php 
				$data = explode(" ",get_the_date('d M'));
			?>
			<div class="date">
				<div class="date-m"><?php echo $data[0]; ?></div>
				<div class="date-d"><?php echo $data[1]; ?></div>
			</div>
		</div>
	</header>
	<div class="entry-snippet">
		<div class="entry-summary">
			<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<div class="entry-meta">
			<?php
				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
				<?php
					endif;

					edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
		</div><!-- .entry-comments -->
	</div>
</article><!-- #post-## -->
