<?php

/* 
* Home template
*/


    get_header();

?>

<section>
    <div class="container">
        <?php
            if (have_posts()) {
                ?>
                <div>
                    <h1>Home:</h1>
                </div>
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
</section>


<?php

    get_footer();
