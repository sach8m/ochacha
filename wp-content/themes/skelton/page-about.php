<?php get_template_part('header',''); ?>

<section class="about-wrap">
  <?php while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title(); ?></h1>
  <div class="about-main-img">
    <?php starter_post_thumbnail(); ?>
  </div>
  <?php the_content(); ?>

  <? endwhile; // End of the loop.?>

  <?php

  $title1 = get_field('title1');
  $content1 = get_field('content1');
  $image1 = get_field('image1');
  $title2 = get_field('title2');
  $content2 = get_field('content2');
  $image2 = get_field('image2');
  $title3 = get_field('title3');
  $content3 = get_field('content3');
  $image3 = get_field('image3');

?>
  <h3><?php echo $title1; ?></h3>
  <?php echo $content1; ?>

  <h3><?php echo $title2; ?></h3>
  <?php echo $content2; ?>

  <h3><?php echo $title3; ?></h3>
  <?php echo $content3; ?>

</section>

<?php get_template_part('footer',''); ?>
