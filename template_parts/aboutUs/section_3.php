<?php $main_title = get_sub_field('main_title'); ?>

<section class="about_section_3">
  <?php if (!empty($main_title)): ?>
    <div class="dark-h1">
      <?php print $main_title; ?>
    </div>
  <?php endif; ?>

  <div class="content_gorizontal">

    <?php if (have_rows('content')):
      while (have_rows('content')) : the_row(); ?>

        <div class="content_vertical">

          <div class="sub_title">
            <?php the_sub_field('title_1'); ?>
          </div>

          <div class="value">
            <?php the_sub_field('value'); ?>
          </div>

          <div class="sub_title">
            <?php the_sub_field('title_2'); ?>
          </div>

          <div class="small_text">
            <?php the_sub_field('description'); ?>
          </div>

        </div>
      <?php endwhile;
    else :
      echo 'no rows found';
    endif; ?>

  </div>

</section>