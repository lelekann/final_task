<?php $text=get_sub_field('description'); ?>
<?php $link=get_sub_field('link'); ?>
<?php $video=get_sub_field('video'); ?>

<section class="home_section_2">

    <div class="content_gorizontal">
      <?php if (!empty($text)): ?>
      <div class="top-description">
        <?php print $text; ?>
      </div>
      <?php endif; ?>

      <div>
        <?php if (!empty($video)): ?>
        <a href="<?php print $video['url']; ?>" class="btn"><?php if (!empty($link)): ?>
          <?php print $link['title']; ?>
          <?php endif; ?>
        </a>
        <?php endif; ?>
      </div>
    </div>

</section>