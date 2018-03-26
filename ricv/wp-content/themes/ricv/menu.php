


<div id="float">
<nav class="navbar " role="navigation"  >
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				
                <span class="text-success">menu</span><span class="fa-stack text-success ">

                  <i class="fa fa-square-o fa-stack-2x"></i>
                <span class="fa fa-bars "></span>
              </span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </div>
    <?php


    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'navbar collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav navbar-right',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker())
);
?>
</nav>
</div>