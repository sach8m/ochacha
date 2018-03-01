<?php get_template_part('header',''); ?>

<div class="hero-con">
	<video src="<?php bloginfo('template_url'); ?>/assets/video/ochacha.mp4" autoplay loop></video>
	<div class="hero">
		<h1>Sparkling Flavour!</h1>
		<p>Feel reflesh once you drink <br> Ochacha's Japanese green tea with fruities</p>
		<button class="" type="button" name="button">SHOP NOW</button>
	</div>
</div>

<section class="row latest-title-wrap">
	<img class="one-third column" src="<?php bloginfo('template_url'); ?>/assets/images/leaves1.svg" alt="">
	<h1 class="one-third column">Latest Products</h1>
	<img class="one-third column" src="<?php bloginfo('template_url'); ?>/assets/images/leaves2.svg" alt="">
</section>

<section class="row latest-wrap">
	<?php
		$args = array(
		'post_type' => 'product',
		'stock' => 1,
		'posts_per_page' => 4,
		'orderby' =>'date',
		'order' => 'DESC' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); global $product;
	?>

	<div class="three columns latest-con">
		<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
			<p class="woocommerce-loop-product__title"><?php the_title(); ?></p>
			<p class="price"><?php echo $product->get_price_html(); ?></p>
		</a>
		<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
	</div>
<?php endwhile; ?>
</section>
<?php wp_reset_query(); ?>

<section class="what-con">
	<img class="what-bg" src="<?php bloginfo('template_url'); ?>/assets/images/what_bg.png" alt="">
	<h1 class="what-text">What's <span class="o">O</span>chacha?</h1>
</section>

<div class="what-wrap">

	<section class="what-con what-1 row">
		<div class="seven columns">
			<div class="title-1">
				<h4 class="title-small">Our Green Tea is</h4>
				<h1 class="title-big">100% Made in Japan</h1>
			</div>
			<div class="line line-1"></div>
			<div class="contents-1">
				<p>Type Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="btn what-btn-1" type="button" name="button">SEE MORE</button>
			</div>
		</div>
		<div class="tea-bg five columns"></div>
	</section>

	<section class="what-con what-2 row">
		<div class="flavour-bg five columns"></div>
		<div class="seven columns text-con">
			<div class="title-1">
				<h4 class="title-small">Created by French Sommelier</h4>
				<h1 class="title-big">Variety of Flavour</h1>
			</div>
			<div class="line line-2"></div>
			<div class="contents-1">
				<p>Type Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="btn what-btn-2" type="button" name="button">SEE PRODUCTS</button>
			</div>
		</div>
	</section>

	<section class="what-con what-3 row">
		<div class="seven columns text-con">
			<div class="title-1">
				<h4 class="title-small">Cold blew tea bag</h4>
				<h1 class="title-big">Make your special tea</h1>
			</div>
			<div class="line line-3"></div>
			<div class="contents-1">
				<p>Type Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="btn what-btn-3" type="button" name="button">SEE RECIPIES</button>
			</div>
		</div>
		<div class="ice-bg five columns"></div>
	</section>

</div>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}
?>

<div class="circle-bg"></div>

<?php get_template_part('footer',''); ?>
