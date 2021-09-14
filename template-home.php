<?php
/*
 Template Name: Homepage
 */
?>
<?php
get_header( 'template-home' ); ?>

<!-- Page Sample Section -->
<section id="page-sample">
    <!-- About Section -->
    <section id="about">
        <div class="container content-section text-center">
            <div class="row">
                <h2><?php echo get_theme_mod( 'aboutme_title', __( 'LIL\' ABOUT ME', 'wowaries' ) ); ?></h2>
                <div class="col-lg-8 col-lg-offset-2">
                    <p><?php echo get_theme_mod( 'aboutme_description', 'Praesent ac dignissim diam. Aliquam lobortis elit et sapien eleifend, at sollicitudin metus elementum. Morbi imperdiet id ipsum at tristique. Nam suscipit tristique sem, <a href="#">quis</a> laoreet leo. Maecenas eget ante ipsum.' ); ?></p>
                    <p><a href="<?php echo esc_url( get_theme_mod( 'aboutme_button_link' ) ); ?>" class="btn btnghost"><?php if( get_theme_mod( 'aboutme_button_text' ) ) : ?><span><?php echo get_theme_mod( 'aboutme_button_text', __( 'Curriculum VITAE', 'wowaries' ) ); ?></span><?php endif; ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="gallery">
            <ul>
                <?php
                    $portfolio_query_args = array(
                        'post_type' => 'post',
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => '12',
                        'order' => 'DESC',
                        'orderby' => 'date'
                    )
                ?>
                <?php $portfolio_query = new WP_Query( $portfolio_query_args ); ?>
                <?php if ( $portfolio_query->have_posts() ) : ?>
                    <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
                        <li class="col-md-3">
                            <a href="<?php echo esc_url( the_permalink() ); ?>"><?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }
                                 ?></a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'wowaries' ); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><?php echo get_theme_mod( 'socialtitle', __( 'Author\'s Message', 'wowaries' ) ); ?></h2>
                    <p><?php echo get_theme_mod( 'socialdescription', __( 'If you like "Aries" template, we\'d love to hear from you, whether it be feedback, thanks, new template ideas or even just to say hello, we welcome it all!', 'wowaries' ) ); ?></p>
                    <?php if( get_theme_mod( 'socialemail' ) ) : ?>
                        <p>
                          <i>
                            <a href="mailto:<?php echo get_theme_mod( 'socialemail'); ?>" style="border-bottom:1px dashed #ccc;">
                            <?php echo get_theme_mod( 'socialemail'); ?>
                           </a>
                        </i>
                        </p>
                    <?php endif; ?>
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'socialtwitter' ) ); ?>" class="btn btnghost btn-lg"><i class="fa fa-twitter fa-fw"></i><span class="network-name"><?php _e( 'Twitter', 'wowaries' ); ?></span></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'socialfb' ) ); ?>" class="btn btnghost btn-lg"><i class="fa fa-facebook fa-fw"></i><span class="network-name"><?php _e( 'Facebook', 'wowaries' ); ?></span></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'socialgoogle' ) ); ?>" class="btn btnghost btn-lg"><i class="fa fa-google-plus fa-fw"></i><span class="network-name"><?php _e( 'Google+', 'wowaries' ); ?></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>
