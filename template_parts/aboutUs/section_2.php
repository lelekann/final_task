<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('description'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="about_section_2">

  <div class="content_gorizontal">
    <div>
      <?php if (!empty($image)): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
      <?php endif; ?>
    </div>

    <div class="content_vertical">
      <?php if (!empty($title)): ?>
        <div class="sub_title ">
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