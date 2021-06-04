<?php
/*
Template Name: Strona kontaktowa
*/



get_header();

?>

    <div>
        <h1>STRONA KONTAKTOWA</h1>

        <?php

            while( have_posts() ) {
                the_post();

                ?>
                <h1><?= the_title(); ?></h1>

                <div>
                    <?=
                        the_content();
                    ?>
                </div>
                <?php
            }

        ?>
    </div>


<?php

get_footer();

