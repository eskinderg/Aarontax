<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 		
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <link rel="icon" href="http://www.aarontax.com/favicon.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="http://www.aarontax.com/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<?php 

get_template_part( 'top-nav' ); 

if ( true ) : ?>
<!--Video Section-->
<section class="content-section video-section" id="section0">
  <?php if ( get_header_image() ) : ?>
	<div id="header-image">

	</div>	
  <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1 class="text-center v-center">
            <?php if (!get_theme_mod( 'unconditional_logo_image' )) : ?>
            <div>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <img src="<?php echo esc_url(get_theme_mod( 'unconditional_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'unconditional_logo_alt_text' )); ?>" /> 
			</a>
                <span id='header-title' style="margin-left: -41px;color: rgb(255, 66, 66);text-shadow: 2px 1px 2px #8B8B8B, 3px 3px 5px rgb(153, 153, 153);">Aaron Tax</span>
            </div>
		<?php else : ?>
            <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>
		</h1>
	   </div>
      </div>
		
    </div>
<?php if ( get_theme_mod( 'unconditional_home_intro_visibility' ) != 1 ) { 
    get_template_part( 'parts/cta' );	
} ?>
</section>

<!--Video Section Ends Here-->
<?php 

else : ?>

<section class="top-section header-inner" id="section5">
    
	 <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <?php //if(is_front_page()) {?>
                <h1 class="text-center v-center">
                    <?php if (get_theme_mod( 'unconditional_logo_image' )) : ?>
                                      <!--  <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <img src="<?php echo esc_url(get_theme_mod( 'unconditional_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'unconditional_logo_alt_text' )); ?>" />
                                        </a>
                                      -->
                        <?php else : ?>
                        <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="" rel="home"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                </h1>
           <?php// }?>
	   </div>
      </div>		
    </div>
	
</section>
<?php endif; ?>