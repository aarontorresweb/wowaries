<?php
get_header( 'single' ); ?>

                <!-- Page Sample Section -->
                <section id="page-sample">
                    <div class="container content-section text-left">
                        <div class="row">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="loopstarts col-md-8 col-md-offset-2">
                                        <div class="beginarticle">
                                            <div class="col-md-12">
                                              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                <?php the_content(); ?>
                                              </div>
                                                <div class="clearfix"></div>
                                                <div class="tagslist">
                                                <?php echo get_the_tag_list (); ?>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="paginatepost">
                                                    <?php wp_link_pages( array() ); ?>
                                                </div>
                                                <nav class="navigation post-navigation" role="navigation">
                                                    <div class="nav-links">
                                                        <div class="nav-previous nav-link col-md-6">
                                                            <?php previous_post_link(); ?>
                                                        </div>
                                                        <div class="nav-next nav-link col-md-6 text-right">
                                                            <?php next_post_link(); ?>
                                                        </div>
                                                    </div>
                                                    <!-- .nav-links -->
                                                </nav>
                                                <?php if ( comments_open() ) : ?>
                                                    <?php comments_template(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'wowaries' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>

<?php get_footer(); ?>
