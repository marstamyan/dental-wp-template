<?php get_header(); ?>

<?php if ( function_exists( 'custom_breadcrumbs' ) ): ?>
    <div class="breadcrumbs-block">
		<?php custom_breadcrumbs(); ?>
    </div>
<?php endif; ?>

    <section class="custom-single-post">
        <div class="container">
			<?php
			while ( have_posts() ):
				the_post(); ?>
                <div class="single-content">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
                    <div class="single-meta">
                    <span class="single-date">
                        <?php echo get_the_date(); ?>
                        <?php  display_post_views(); ?>
                    </span>
                    </div>
                    <h1 class="single-title">
						<?php the_title(); ?>
                    </h1>
                    <div class="single-content">
						<?php the_content(); ?>
                    </div>
                </div>
			<?php endwhile; ?>

            <section class="post-navigation">
				<?php $prev_post = get_previous_post();
				if ( ! empty( $prev_post ) ): ?>
                    <a href="<?php echo get_permalink( $prev_post ); ?>"
                       class="post-navigation__item post-navigation__item--prev">
						<?php echo esc_html( $prev_post->post_title ); ?>
                    </a>
				<?php endif; ?>

				<?php $next_post = get_next_post();
				if ( ! empty( $next_post ) ): ?>
                    <a href="<?php echo get_permalink( $next_post ); ?>"
                       class="post-navigation__item post-navigation__item--next">
						<?php echo esc_html( $next_post->post_title ); ?>
                    </a>
				<?php endif; ?>
            </section>
            <hr class="section-separator">
        </div>
    </section>

<?php get_footer(); ?>