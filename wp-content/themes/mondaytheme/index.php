<?php
/**
 * The main index page of Monday Theme
 * 
 * 
 * 
 * @package Monday Theme
 * @since 1.0
 */


    get_header();


?>

<main>
    <div class="container">
        <?php
            if (have_posts()) {
                ?>
                <div>
                    <?php
                        while(have_posts()) {
                            the_post();

                            the_title("<h1>", "</h1>");

                            the_content();

                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
</main>


<?php

    get_footer();

