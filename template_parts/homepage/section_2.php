<section class="section_2">
  <div class="container">
    <?php $text=get_sub_field('description'); ?>
    <?php $link=get_sub_field('link'); ?>
    <?php $video=get_sub_field('video'); ?>

    <div class="flex">
      <?php if (!empty($text)): ?>
      <div>
        <?php print $text; ?>
      </div>
      <?php endif; ?>

      <div class="btn">
        <?php if (!empty($video)): ?>
        <a href="<?php print $video?>" class="btn">
          <?php if (!empty($link)): ?>
          <?php print $link; ?>
          <?php endif; ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>