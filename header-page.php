<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="<?php echo implode(' ', get_body_class()); ?>">
        <!-- Navigation -->
        <!-- Intro Header -->
        <?php
            $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ) : null;
            if( !$image_attributes  && ( $header_image = get_header_image() ) ) $image_attributes = array( $header_image );
        ?>
        <header class="intro" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                          <i class="fa fa-bars"></i>
                      </button>

                      <?php if ( get_theme_mod( 'logoimage_upload' )) { ?>
                      <a href="<?php echo esc_url( get_home_url() ); ?>">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'logoimage_upload' ), array(180,50), null, array(
                                  'class' => 'navbar-brand page-scroll'
                          ) )
                        ?>
                      </a>
                      <?php } else { ?>
                      <a class="navbar-brand page-scroll" href="<?php echo esc_url( get_home_url() ); ?>">
                        <?php bloginfo( 'name' ); ?>
                      </a>
                      <?php } ?>

                  </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <?php wp_nav_menu( array(
                                'menu' => 'wowtopmenu',
                                'menu_class' => 'nav navbar-nav',
                                'container' => '',
                                'theme_location' => 'primary',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                            <h1 class="brand-heading"><?php single_post_title(); ?></h1>
                            <p><a href="#page-sample" class="btn btn-circle page-scroll"><i class="fa fa-angle-double-down animated"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="wrapmainsite">
