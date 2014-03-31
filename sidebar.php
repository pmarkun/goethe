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

	<div class="contato">
		<div class="contato-telefone">
			<div class="contato-texto"><b>telefone</b><br>+55-11-999-999-999</div>
			<div class="contato-icone"></div>
		</div>
		<div class="contato-email">
			<div class="contato-texto"><b>email</b><br>desconferencia@email.com</div>
			<div class="contato-icone"></div>
		</div>
		<div class="contato-local">
			<div class="contato-texto"><b>local</b><br>rua endereco, numero</div>
			<div class="contato-icone"></div>
		</div>

	</div>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
