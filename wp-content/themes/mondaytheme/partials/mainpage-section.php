<?php


?>

    
    
    <div class="container">
        
        <section class="main-page-section">
        
        <?php
            while( have_posts() ) {
                the_post();
                
                ?>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri().'/assets/placeholder.png'; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Przeczytaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri().'/assets/placeholder.png'; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Przeczytaj</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri().'/assets/placeholder.png'; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Przeczytaj</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    
        </section>

    </div>
