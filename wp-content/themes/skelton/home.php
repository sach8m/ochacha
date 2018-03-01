<?php
/* Blog level 1 */
?>
<?php get_header(); ?>

	<article id="blog-level-1">
    <h1>Blog</h1>
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="row blog-con">
      <div class="thumb-img four columns">
        <?php starter_post_thumbnail(); ?>
      </div>
      <div class="eight columns blog-contents">
        <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </div>
    </div>

    <div class="blog-line"></div>

		<?php endwhile; ?>


		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>
