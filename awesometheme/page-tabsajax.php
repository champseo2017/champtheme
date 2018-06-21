<?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $options = array(
    'order' => 'DESC',
    'posts_per_page' => 4,
    'paged' => $paged,
  );

  if (isset($_GET['cat'])) {
    $options['category_name'] = $_GET['cat'];
  } else {
    $options['type'] = 'post';
  }

  $query = new WP_Query($options);
?>

<?php if ( $query->have_posts() ) : ?>
  <div class="card-columns">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="card">
      <?php the_post_thumbnail('full', array('class' => 'card-img-top', 'style' => 'height: auto;')); ?>
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p><?php the_content(); ?></p>
    </div>
    </div>

    <?php endwhile; ?>
  </div>
  <ul class="pagination">
  	 <?php
  				echo paginate_links( array(
  					'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
  					'total'        => $query->max_num_pages,
  					'current'      => max( 1, get_query_var( 'paged' ) ),
  					'format'       => '?paged=%#%',
  					'show_all'     => false,
  					'type'         => 'plain',
  					'end_size'     => 2,
  					'mid_size'     => 1,
  					'prev_next'    => true,
  					'prev_text' => __( 'Back', 'textdomain' ),
  					 'next_text' => __( 'Next', 'textdomain' ),
  					'add_args'     => false,
  					'add_fragment' => '',

  				) );
  		?>
  </ul>
<?php endif; ?>
