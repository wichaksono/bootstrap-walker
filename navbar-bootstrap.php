<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                    <h1 class="title-site"><?php bloginfo('name');?></h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search" action="<?php echo esc_url(home_url());?>">
            <div class="form-group form-search">
              <label for="" id="search-button"><em class="glyphicon glyphicon-search"></em></label>
              <input type="text" name="s" id="form-search" class="form-control" placeholder="Search">
            </div>
          </form>
        <?php
        /**
         * menu ini akan bekerja bila file bootstrap-walker.php sudah di pasang
         * di functions.php
         */
        wp_nav_menu( 
            array(
                'menu'              => 'primary_menu',
                'theme_location'    => 'primary_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            )
        );
        ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
