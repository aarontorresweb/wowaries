<?php
get_header( 'page' ); ?>

                <!-- Page Sample Section -->
                <section id="page-sample">
                    <div class="container content-section text-left">
                        <div class="row">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="loopstarts col-md-8 col-md-offset-2">
                                        <div class="beginarticle">
                                            <div class="col-md-12">
                                                <?php the_content(); ?>
                                                <div class="clearfix">
</div>
                                                <div class="paginatepost">
                                                    <?php wp_link_pages( array() ); ?>
                                                </div>
                                                <?php if ( comments_open() ) : ?>
                                                    <div>
                                                        <?php comments_template(); ?>
                                                    </div>
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
