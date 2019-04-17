<?php $main_title = get_sub_field('main_title'); ?>
<?php $title = get_sub_field('title'); ?>
<?php $image_title = get_sub_field('title_image'); ?>
<?php $text = get_sub_field('description'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="about_section_1">
  <?php if (!empty($main_title)): ?>
    <div class="dark-h1">
      <?php print $main_title; ?>
    </div>
  <?php endif; ?>

  <div class="content_gorizontal">
    <div class="content_vertical">

      <?php if (!empty($title)): ?>
        <div class="sub_title">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="dark-description">
          <?php print $text; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="content_vertical">
      <div class="right">
        <?php if (!empty($link)): ?>
        <a href="<?php echo $link['url']; ?>" class="btn"> <?php echo $link['title']; ?>
          <?php endif; ?>
        </a>
      </div>
      <div>
        <?php if (!empty($image)): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endif; ?>
      </div>
      <?php if (!empty($image_title)): ?>
        <div class="image-title">
          <?php print $image_title; ?>
        </div>
      <?php endif; ?>
    </div>

  </div>

</section>