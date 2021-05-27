<?php

/* 
* Single post template
*/

    get_header();

?>


<main>
    <div class="container">
        <section class="single-post-section">
            <div class="single-post-main-part">

                <div class="the-thumbnail">
                    <img class="img-fluid" src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri().'/assets/placeholder.png'; ?>" />
                </div>

                <div class="the-title">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="the-content">
                    <?php echo get_the_content(); ?>
                </div>
            </div>
        </section>
    </div>
</main>



<?php
    get_footer();

