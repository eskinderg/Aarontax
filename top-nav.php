<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    
    <a href="http://www.aarontax.com/"> <img src="http://www.aarontax.com/wp-content/uploads/2015/02/logo.png" alt="" 
         
        style="width:35px;float:left; margin-top:10px; margin-left:10px; ">
    </a>
  <div class="container">
    		
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'nav-container collapse navbar-collapse',
            'container_id'      => 'navbar-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
    ?>
	
	
  </div>
</nav>