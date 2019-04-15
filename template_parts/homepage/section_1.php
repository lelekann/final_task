    <?php $title = get_sub_field('title'); ?>
    <?php $text = get_sub_field('description'); ?>
    <?php $link = get_sub_field('link'); ?>
    <?php $bg_image = get_sub_field('bg_image'); ?>

  <section class="home_section_1">
      <?php
      $size = 'full';
      if (!empty($bg_image)): { ?>
        <div class="bg_image">
          <?php echo wp_get_attachment_image($bg_image, $size); ?>
        </div>
          <?php
      }
      endif;
      ?>

    <div class="content_vertical_main">

      <?php if (!empty($title)): ?>
        <div class="white-h1">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="top-description">
          <?php print $text; ?>
        </div>
      <?php endif; ?>

      <div>
        <?php if (!empty($link)): ?>
        <a href="<?php echo $link['url']; ?>" class="btn"> <?php echo $link['title']; ?>
          <?php endif; ?>
        </a>
      </div>

    </div>
</section>