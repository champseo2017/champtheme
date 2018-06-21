<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<?php wp_head(); ?>
</head>
 <?php
   if( is_front_page() ): /* specify the location of the first page to add the class */
     $awesome_classes = array( 'awesome-class', 'my-class' ); /* declare variables to store the class array */
   else:
     $awesome_classes = array( 'no-awesome-class' ); /* declare variables to store the class array */
   endif;
 ?>
<body <?php body_class( $awesome_classes ); ?>> <!-- add a class by wordpress and function of the variable into -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php wp_nav_menu(array('theme_location'=>'primary')); ?> <!-- Use the add function menu of wordpress and use the data from the array and uses

the webinvoke method that is generated in the function to specify the position of the menu -->

<hr>
<?php wp_nav_menu(array('theme_location'=>'menu-three')); ?><!-- use the add function menu of wordpress and use the data from the array and uses

the webinvoke method that is generated in the function to specify the position of the menu -->

<!-- รูปภาพพื้นหลังส่วนหัว <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
