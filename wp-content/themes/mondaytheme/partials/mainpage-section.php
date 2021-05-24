<?php


?>

    <section>
    

    <?php

        while( have_posts() ) {
            the_post();
            

            ?>


            <?php the_title(); ?>


            <?php the_excerpt(); ?>


            <?php
        }

        

    ?>
    
    
    </section>
