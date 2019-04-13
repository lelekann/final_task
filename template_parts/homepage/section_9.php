<section class="section_3">
  <div class="container">
    <?php $title = get_sub_field('title'); ?>
    <?php $text = get_sub_field('description'); ?>
    <?php $image = get_sub_field('image'); ?>

    <div>
      <div class="picture">
        <?php if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>

      <?php if (!empty($title)): ?>
        <div class="white-h1">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="white-description">
          <?php print $text; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>