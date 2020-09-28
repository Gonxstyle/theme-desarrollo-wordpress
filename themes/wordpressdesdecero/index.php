<?php get_header() ?>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                
                <div class="col-md-4">
                    <figure class='list-posts'>
                        <?php if ( has_post_thumbnail() ) : ?>
                        
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        
                        </a>
                        <?php endif; ?>
                    </figure>
                    <h2> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <p><?php the_excerpt() ?> </p>
                    <p><a class="btn btn-secondary" href="<?php the_permalink() ?>" role="button">Ver detalles &raquo;</a></p>
                </div>
        <?php
            }
        } else {
            echo 'NO DATA';
        }

        ?>

    </div>

    <hr>

</div> <!-- /container -->

</main>
<?php get_footer() ?>