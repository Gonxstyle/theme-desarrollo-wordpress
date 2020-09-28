<?php get_header('sinjumbotron') ?>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="col-md">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_content() ?></p>

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