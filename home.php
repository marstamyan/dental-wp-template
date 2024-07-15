<?php get_header(); ?>

<?php
$blog_page_id    = get_option( 'page_for_posts' );
$blog_page_title = get_the_title( $blog_page_id );

$category_id = 4;
$args        = array(
	'post_type'      => 'post',
	'posts_per_page' => 6,
);

$query = new WP_Query( $args );
if ( $query->have_posts() ):
	?>
    <section class="blog-posts">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title">
				<?php
				if ( is_category() ) {
					$title = single_cat_title( '', false );
				} else {
					$title = get_the_archive_title();
				}
				?>
				<?php echo $blog_page_title; ?>
            </h2>
        </div>
    </div>
    <div class="posts-block container">
	<?php while ( $query->have_posts() ):
	$query->the_post(); ?>
    <div class="post-item">
		<?php if ( has_post_thumbnail() ): ?>
            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title_attribute(); ?>"
                 class="post-item__img">
		<?php endif; ?>
        <div class="post-item__meta">
                        <span class="post-item__meta-date">
                            <?php echo get_the_date( 'd F Y' ); ?>
                        </span>
        </div>
        <h3 class="post-item__title">
			<?php the_title(); ?>
        </h3>
        <p class="post-item__desc">
			<?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="post-item__link btn info-btn">
			<?php pll_e( 'Читать далее' ); ?>
        </a>
    </div>
<?php
endwhile;
	wp_reset_postdata();
else: ?>
    <p>
		<?php pll_e( 'Нет постов для отображения' ); ?>
    </p>
<?php endif; ?>
    </div>
    <div class="pagination">
		<?php if ( function_exists( 'custom_pagination' ) ) {
			custom_pagination();
		} ?>
    </div>
    </section>

<?php get_footer(); ?>