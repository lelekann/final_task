<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>


  <?php
  $image = get_field('bg_section_1');
  $size = 'full'; // (thumbnail, medium, large, full or custom size)
  if ($image) {
    echo wp_get_attachment_image($image, $size);
  }
  ?>
  <h2><?php the_field('title_section_1'); ?></h2>
  <p><?php the_field('description_section_1'); ?></p>
  <?php
  $link = get_field('link_section_1');
  if( $link ): ?>
    <a class="button" href="<?php echo $link; ?>">TRY LIFELENS NOW!</a>
  <?php endif; ?>


  <p><?php the_field('description_section_2'); ?></p>
  <?php
  $link = get_field('link_section_2');
  if( $link ): ?>
    <a class="button" href="<?php echo $link; ?>">WATCH VIDEO</a>
  <?php endif; ?>


  <h2><?php the_field('title_section_3'); ?></h2>
  <p><?php the_field('description_section_3'); ?></p>
  <?php
  $image = get_field('image_section_3');
  if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <?php endif; ?>
<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>


