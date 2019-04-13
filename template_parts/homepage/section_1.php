<section class="section_1">
  <div class="container">
    <?php $title = get_sub_field('title'); ?>
    <?php $text = get_sub_field('description'); ?>
    <?php $link = get_sub_field('link'); ?>
    <?php $bg_image = get_sub_field('bg_image'); ?>

    <div class="content">
      <?php if (!empty($title)): ?>
        <div class="white-h1">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="main-description">
          <?php print $text; ?>
        </div>
      <?php endif; ?>

      <div class="link">
        <?php if (!empty($link)): ?>
        <a href="<?php echo $link['url']; ?>" class="btn">
          <?php endif; ?>
        </a>
      </div>

      <?php
      $size = 'full';
      if( !empty($bg_image)): {
        echo wp_get_attachment_image( $bg_image, $size );
      }
        endif;
      ?>

    </div>
  </div>
</section>

