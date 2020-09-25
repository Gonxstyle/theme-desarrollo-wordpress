<?php get_header() ?>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="col-md-3">
                    <h2><span><?php the_title() ?></span></h2>
                    <div><a href="<?php the_permalink() ?>"></a><?php the_excerpt() ?></div>

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