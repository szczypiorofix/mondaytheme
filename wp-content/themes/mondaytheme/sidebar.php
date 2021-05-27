<?php

/* 
* Sidebar template
*/

?>


    <?php
        if (have_posts()) {
            ?>
            <div>
                <h1>Sidebar:</h1>
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


<?php
