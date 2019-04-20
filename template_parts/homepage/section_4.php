<?php $main_title = get_sub_field('main_title'); ?>

<section class="home_section_4">
  <?php if (!empty($main_title)): ?>
    <div class="dark-h1">
      <?php print $main_title; ?>
    </div>
  <?php endif; ?>

  <div class="content_gorizontal">

    <?php if (have_rows('gallery')):
      while (have_rows('gallery')) : the_row(); ?>

        <?php $image = get_sub_field('bg_image'); ?>

      <div class="wrap_for_hover">
        <div class="wrap">
          <div class="bg_image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
          </div>


          <div class="content_vertical">

            <div class="white_sub_title">
              <?php the_sub_field('title'); ?>
            </div>

            <div class="white-description">
              <?php the_sub_field('description'); ?>
            </div>

          </div>
        </div>
      </div>



      <?php endwhile;
    else :
      echo 'no rows found';
    endif; ?>

  </div>

</section>