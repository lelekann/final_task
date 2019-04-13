<section class="section_3">
  <div class="container">
    <?php $title = get_sub_field('title'); ?>
    <?php $text = get_sub_field('description'); ?>
    <?php $image = get_sub_field('image'); ?>
    <?php $link_1 = get_sub_field('link_1'); ?>
    <?php $link_2 = get_sub_field('link_2'); ?>

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

      <div class="link">
        <?php if (!empty($link_1)): ?>
        <a href="<?php echo $link_1['url']; ?>" class="btn">
          <?php endif; ?>
        </a>

        <?php if (!empty($link_2)): ?>
        <a href="<?php echo $link_2['url']; ?>" class="btn">
          <?php endif; ?>
        </a>
      </div>

    </div>
  </div>
</section>

