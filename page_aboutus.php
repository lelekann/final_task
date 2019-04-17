<?php
/*
Template Name: aboutus
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php if (have_rows('aboutus')): ?>
  <?php while (have_rows('aboutus')): the_row(); ?>
    <?php get_template_part('template_parts/aboutUs/' . get_row_layout()); ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>


