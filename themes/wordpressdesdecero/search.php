<?php 
get_header('sinjumbotron');

if(have_posts()){
while (have_posts()){
    the_post();
?>
<dl class="row">
  <dt class="col-sm-3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></dt>
  <dd class="col-sm-9"><?php the_excerpt() ?></dd>
</dl>



<?php  } }else{
    echo 'NO POST';
}






get_footer();

                