<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('description'); ?>
<?php $image = get_sub_field('image'); ?>
<?php $link_1 = get_sub_field('link_1'); ?>
<?php $link_2 = get_sub_field('link_2'); ?>

<section class="home_section_7">

    <div class="content_gorizontal">
      <div>
        <?php if (!empty($image)): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endif; ?>
      </div>

      <div class="content_vertical">
        <?php if (!empty($title)): ?>
          <div class="dark-h1">
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
        <div>
          <?php if (!empty($link_1)): ?>
          <a href="<?php echo $link_1['url']; ?>" class="btn"> <?php echo $link_1['title']; ?>
            <?php endif; ?>
          </a>
        </div>

        <div>
          <?php if (!empty($link_2)): ?>
          <a href="<?php echo $link_2['url']; ?>" class="btn"> <?php echo $link_2['title']; ?>
            <?php endif; ?>
          </a>
        </div>
      </div>

    </div>

</section>

