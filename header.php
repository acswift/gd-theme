<?php /* header.php */

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscore-me


 * 210505 modified to add Google fonts lines 23-24

 */

?>

<!---------------------------------------- html -->
<!doctype html>
<html <?php language_attributes(); ?>>

<!---------------------------------------- head -->
<head>
  <meta id="themeColor" name="theme-color" content="#333">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q88FGQDX51"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q88FGQDX51');

    function alertMail(){
      address = 'seurviuce@gueneratorduata.co'
      alert(address.replaceAll('u','').replace('.co','.net'))
    }
  </script>

	<?php wp_head(); ?>
</head>

<!---------------------------------------- body opening tags -->

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscore-me' ); ?></a>


<!---------------------------------------- ▼ header -->
	<header id="masthead" class="site-header">

<!---------------------------------------- ▼ div.site-branding -->
		<div class="site-branding">
      <!-- <a href=/><img src="http://dox.svija.love/wp-content/uploads/2021/06/svija-admin-300x80-1.png" id="svija-admin-logo" width=225 height=60></a> -->
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
			endif;
			$underscore_me_description = get_bloginfo( 'description', 'display' );
			if ( $underscore_me_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php bloginfo( 'name' ); ?><br><?php echo $underscore_me_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

<!---------------------------------------- ▼ nav#site-navigation -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Search & Menu', 'underscore-me' ); ?></button>
			<?php
      get_search_form();
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
    <script>

      //—————————— change search box placeholder

      var myInput = document.getElementsByClassName('search-field')[0];
      myInput.placeholder='Search';

      //—————————— togglable content

      function toggle(objClass){
        var objClass = '.' + objClass;
        var thisObj = document.querySelector(objClass);
      
        var d = thisObj.style.display;
        if (d=='none' || d=='') thisObj.style.display = 'block';
        else thisObj.style.display = 'none';
      }

      //—————————— keep parent menu items from being deactivated on mobile

      var subMenuParents = document.querySelectorAll('.menu-item-has-children');

      for (x=0; x<subMenuParents.length; x++)
        subMenuParents[x].classList.remove("menu-item-has-children");

    </script>
		</nav>

<!---------------------------------------- ▲ header -->
	</header>

