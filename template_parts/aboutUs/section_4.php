<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('description'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="about_section_4">

  <div class="content_gorizontal">
    <div class="image">
      <?php if (!empty($image)): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
      <?php endif; ?>
    </div>

    <div class="content_vertical">
      <?php if (!empty($title)): ?>
        <div class="dark-h1 ">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="dark-description-2">
          <?php print $text; ?>
        </div>
      <?php endif; ?>
    </div>

  </div>

</section>