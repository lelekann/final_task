<?php
/*
Template Name: aboutus
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php if (have_rows('home')): ?>
  <?php while (have_rows('home')): the_row(); ?>
    <?php get_template_part('template_parts/aboutUs/' . get_row_layout()); ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>


