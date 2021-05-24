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
        <?php
            
        if (is_home()) {

            get_template_part('partials/mainpage', 'section');

        }    

        ?>
    </main>



<?php

    get_footer();

