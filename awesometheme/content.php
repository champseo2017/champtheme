<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('medium_large'); ?></div>

<small>Posted on:<?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>
<p><?php the_content(); ?></p>
<hr>
<div class="container --recent-post">
				<div class="recent-post-header">
				<h3 style="display: inline-block;">Recent Posts</h3> <a style="display: inline-block;float: right;color:black;text-decoration: none;" href="<?php get_permalink( get_page_by_title( 'ggwpoo' ) ) ?>">see all</a>
			</div>
<ul class="latest-post">
<?php
$rdargs = array('numberposts' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish', 'post_type' => 'post' );
$recent_deals = wp_get_recent_posts( $rdargs );
 foreach(  $recent_deals as $recent ){
   if ( has_post_thumbnail( $recent["ID"]) ) {
         echo  '<li><a href="' . get_permalink($recent["ID"]) . '">'.get_the_post_thumbnail($recent["ID"],'thumbnail').'</a>';
       }else{
       echo  '<li style="border: 1px solid #ccc;"><a href="' . get_permalink($recent["ID"]) . '"><img src="http://www.smartphonefilmpro.com/wp-content/uploads/2015/11/smartphone-upload-video-to-the-web.jpg"></a>';
       }
   echo '<h3><a href="'. get_permalink($recent["ID"]).'"><p style="padding: 10px;">' .$recent["post_title"].'</p></a></h3></li>';
 }
 wp_reset_query();
?>
</ul>
</div>
<hr>
