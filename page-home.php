<?php
/*
Template Name: homepage
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container">
  <?php if (have_rows('home')): ?>
    <?php while (have_rows('home')): the_row(); ?>
       <?php get_template_part('template_parts/homepage/' . get_row_layout()); ?>
    <?php endwhile; ?>
  <?php endif; ?>

</div>

<?php get_footer(); ?>


