<?php

/* 
* Home template
*/


    get_header();

?>

<main>
    <div class="container">
        <?php
            if (have_posts()) {
                ?>
                <div>
                    <h1>Home:</h1>
                </div>
                <div>
                    <?php
                        get_template_part('partials/mainpage', 'section');
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
 </main>


<?php

    get_footer();
