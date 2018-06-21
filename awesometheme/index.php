<?php get_header(); ?>
<?php
  if(have_posts()):
    while( have_posts() ): the_post(); ?>

    <?php get_template_part('content',get_post_format()); ?>

  <?php endwhile;
  endif;
 ?>

 <h2>Recent Posts</h2>
 <ul>
 <?php
 $rdargs = array('numberposts' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish', 'post_type' => 'post' );
 $recent_deals = wp_get_recent_posts( $rdargs );
 	foreach(  $recent_deals as $recent ){
    if ( has_post_thumbnail( $recent["ID"]) ) {

          echo  '<div><a href="' . get_permalink($recent["ID"]) . '">'.get_the_post_thumbnail($recent["ID"],'thumbnail',array('alt'=> trim(strip_tags( $post->post_title )),'class' => 'card-img-top', 'style' => 'height: auto;')).'</a></div>';
        }

 		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .$recent["post_title"].'</a></li> ';
 	}
 	wp_reset_query();
 ?>
 </ul>

 <?php
 $posts_array = get_posts( $args );
get_permalink($posts_array[0]->ID);

$args = array(
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'ASC',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
 ?>
<?php get_footer(); ?>
