<?php
/*
Template Name: FAQ_page
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="title_FAQ">
  <h1 class="white-h1">Frequently asked questions</h1>
</div>
<div class="information">
  <?php
  if (have_rows('faq')):
    while (have_rows('faq')) : the_row(); ?>
      <ul class="question_block">
        <li class="question"> <?php the_sub_field('title'); ?>
          <div class="dark-description">
            <?php the_sub_field('description'); ?>
          </div>
        </li>

      </ul>

    <?php
    endwhile;
  else :
    echo 'no rows found';
  endif;
  ?>
</div>


<?php get_footer(); ?>


