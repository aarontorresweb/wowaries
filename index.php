<?php
get_header(); ?>

                <!-- Page Sample Section -->
                <section id="page-sample">
                    <div class="container content-section text-left">
                        <div class="row grid">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="loopstarts col-md-6 grid-item">
                                      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <div class="sitecontenthere">
                                            <div class="thumb">
                                              <a href="<?php echo esc_url( the_permalink() ); ?>">
                                                <?php
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( array(570,350), array(
                                                        'class' => 'thumb'
                                                    ) );
                                                    }
                                                 ?>
                                               </a>
                                            </div>
                                            <div class="insideexcerpt">
                                                <h2><a href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
                                                <?php if ( is_home() ) : ?>
                                                    <div class="date">
                                                        <?php echo get_the_date( 'F j, Y' ); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="theexcerpt">

                                                    <?php the_excerpt( ); ?>

                                                </div>
                                                <a href="<?php echo esc_url( wp_get_shortlink()); ?>" class="btn btnghost"><?php _e( 'Read More', 'wowaries' ); ?></a>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                <?php endwhile; ?>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'wowaries' ); ?></p>
                            <?php endif; ?>
                              <div class="col-md-12">
                                  <?php wp_bootstrap_pagination( array() ); ?>
                              </div>
                            </div>
                    </div>
                </section>

<?php get_footer(); ?>
