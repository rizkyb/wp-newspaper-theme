<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();?>


                    <div class="td-pb-span12 td-main-content" role="main">

                        <?php
                        if (have_posts()) {
                            while ( have_posts() ) : the_post();
                                ?>
                                <div class="td-page-header">
                                    <h1 class="entry-title td-page-title">
                                        <span><?php the_title() ?></span>
                                    </h1>
                                </div>
                                <div class="td-page-content">
                                <?php echo do_shortcode ('[ess_grid alias="wedding-needs"]')
                                
                            endwhile; //end loop
                        }
                        ?>
                        </div>
                        <?php
                        if($td_enable_or_disable_page_comments == 'show_comments') {
                            comments_template('', true);
                        }?>
                    </div>
                    <?php
                    break;
            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

    <?php
}




get_footer();