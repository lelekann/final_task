<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('description'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="home_section_8">

    <div class="content_gorizontal">
      <div class="content-vertical">
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

      <?php if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>

    </div>

</section>

