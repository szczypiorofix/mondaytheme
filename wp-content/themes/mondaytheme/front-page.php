<?php

/* 
* Front Page template
*/


    get_header();

?>

<main>
    <div class="container">
        <?php
            if (have_posts()) {
                ?>
                <div>
                    <div>
                    <?php
                        echo ( (get_option( 'mondaytheme_installed' ) &&  ( get_option( 'mondaytheme_installed' ) == '1' ) ) 
                        ? 'Zainstalowano motyw' 
                        : 'Pierwsza instalacja.');
                        echo '<br>'. get_option( 'mondaytheme_installed' ) .'</br>';
                    ?></div>
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
