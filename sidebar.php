<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

	<?php if (is_front_page()) { ?>
	<div class="contato">
		<div class="contato-telefone">
			<div class="contato-icone"></div>
			<div class="contato-texto"><b>telefone</b><br>+55 11 3296-7000</div>
		</div>
		<div class="contato-email">
			<div class="contato-icone"></div>
			<div class="contato-texto"><b>email</b><br>contato@saopaulo.goethe.org</div>
		</div>
		<div class="contato-local">
			<div class="contato-icone"></div>
			<div class="contato-texto"><b>local</b><br>Rua Lisboa, 974 - Pinheiros, SP</div>
		</div>

		<div class="contato-mapa">
		<iframe width="275" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=rua+lisboa,+974&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.86519,86.572266&amp;ie=UTF8&amp;hq=rua+lisboa,+974&amp;hnear=&amp;radius=15000&amp;ll=-23.556072,-46.681872&amp;spn=0.071946,0.071946&amp;t=m&amp;output=embed"></iframe>
		</div>
	</div>
	<?php } else { ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php }	?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
