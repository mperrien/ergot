<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ergot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ergot' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <?php
          $page = get_page_by_path( 'es' );
          $id = $page->ID;
          $ancestors = get_post_ancestors($post->ID);
          if (in_array($id, $ancestors) || is_page($id)) {
            wp_cache_set( 'lang', 'es' );
            the_field('menu-es', 'option');
          } else {
            wp_cache_set( 'lang', 'fr' );
            the_field('menu-fr', 'option');
          }
        ?> 
      </button>
      <?php
        $lang = wp_cache_get( 'lang' );
        if ($lang === 'es') {
          wp_nav_menu(
            array(
              'menu' => 'ES_top',
            )
          );
        } else {
          wp_nav_menu(
            array(
              'menu' => 'FR_top',
            )
          );
        }
      ?>
    </nav><!-- #site-navigation -->
    <!--
    <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif; ?>
    </div> -->
    

	</header><!-- #masthead -->
