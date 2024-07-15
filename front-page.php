<?php get_header(); ?>
    <section class="intro">
		<?php
		$intro_title         = carbon_get_theme_option( 'intro_title' . carbon_lang_prefix() );
		$intro_desc          = carbon_get_theme_option( 'intro_desc' . carbon_lang_prefix() );
		$intro_btn_text      = carbon_get_theme_option( 'intro_btn_text' . carbon_lang_prefix() );
		$intro_img           = carbon_get_theme_option( 'intro_img' );
		$services_title      = carbon_get_theme_option( 'services_title' . carbon_lang_prefix() );
		$services_subtitle   = carbon_get_theme_option( 'services_subtitle' . carbon_lang_prefix() );
		$services_desc       = carbon_get_theme_option( 'services_desc' . carbon_lang_prefix() );
		$services_list_title = carbon_get_theme_option( 'services_list_title' . carbon_lang_prefix() );
		$services_list       = carbon_get_theme_option( 'services_list' . carbon_lang_prefix() );
		$advantage_1_icon    = carbon_get_theme_option( 'advantage_1_icon' );
		$advantage_1_title   = carbon_get_theme_option( 'advantage_1_title' . carbon_lang_prefix() );
		$advantage_1_text    = carbon_get_theme_option( 'advantage_1_text' . carbon_lang_prefix() );
		$advantage_2_icon    = carbon_get_theme_option( 'advantage_2_icon' );
		$advantage_2_title   = carbon_get_theme_option( 'advantage_2_title' . carbon_lang_prefix() );
		$advantage_2_text    = carbon_get_theme_option( 'advantage_2_text' . carbon_lang_prefix() );
		$advantage_3_icon    = carbon_get_theme_option( 'advantage_3_icon' );
		$advantage_3_title   = carbon_get_theme_option( 'advantage_3_title' . carbon_lang_prefix() );
		$advantage_3_text    = carbon_get_theme_option( 'advantage_3_text' . carbon_lang_prefix() );
		$pricing_title       = carbon_get_theme_option( 'pricing_title' . carbon_lang_prefix() );
		$pricing_description = carbon_get_theme_option( 'pricing_description' . carbon_lang_prefix() );
		$pricing_list        = carbon_get_theme_option( 'pricing_list' . carbon_lang_prefix() );
		$reviews_title       = carbon_get_theme_option( 'reviews_title' . carbon_lang_prefix() );
		$reviews_list        = carbon_get_theme_option( 'reviews_list' . carbon_lang_prefix() );

		?>
        <div class="container">
            <div class="intro-content">
                <div class="intro-left">
					<?php if ( ! empty( $intro_title ) ): ?>
                        <h1 class="intro-title">
							<?php echo esc_html( $intro_title ); ?>
                        </h1>
					<?php endif; ?>
					<?php if ( ! empty( $intro_desc ) ): ?>
                        <p class="intro-desc">
							<?php echo esc_html( $intro_desc ); ?>
                        </p>
					<?php endif; ?>
					<?php if ( ! empty( $intro_btn_text ) ): ?>
                        <a href="#signup" class="btn info-btn">
							<?php echo esc_html( $intro_btn_text ); ?>
                        </a>
					<?php endif; ?>
                </div>
                <div class="intro-right">
					<?php if ( ! empty( $intro_img ) ): ?>
                        <div class="intro-img-block">
							<?php
							echo wp_get_attachment_image( $intro_img, 'full', false, [ "class" => 'intro-img' ] );
							?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-logo.png"
                                 alt="banner-logo"
                                 class="intro-img__bg">
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services container">
        <div class="services-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-bg.jpg" class="services-img"
                 alt="services">
        </div>
        <div class="services-right">
			<?php if ( ! empty( $services_title ) ): ?>
                <h2 class="services-title">
					<?php echo esc_html( $services_title ); ?>
                </h2>
			<?php endif; ?>

			<?php if ( ! empty( $services_subtitle ) ): ?>
                <span class="main-title">
                <?php echo esc_html( $services_subtitle ); ?>
            </span>
			<?php endif; ?>

			<?php if ( ! empty( $services_desc ) ): ?>
                <p class="services-text">
					<?php echo esc_html( $services_desc ); ?>
                </p>
			<?php endif; ?>

			<?php if ( ! empty( $services_list_title ) && ! empty( $services_list ) ): ?>
                <span class="span-services-list-title">
                <?php echo esc_html( $services_list_title ); ?>
            </span>
                <ul class="services-list">
					<?php foreach ( $services_list as $service_item ): ?>
                        <li>
							<?php echo esc_html( $service_item['services_list_item'] ); ?>
                        </li>
					<?php endforeach; ?>
                </ul>
			<?php endif; ?>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="advantages-content">
				<?php if ( ! empty( $advantage_1_icon ) ): ?>
                    <div class="advantages-item">
						<?php echo wp_get_attachment_image( $advantage_1_icon, 'full', false, array( 'class' => 'advantages-icon' ) ); ?>
                        <h3 class="advantages-title">
							<?php echo esc_html( $advantage_1_title ); ?>
                        </h3>
                        <p class="advantages-text">
							<?php echo esc_html( $advantage_1_text ); ?>
                        </p>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $advantage_2_icon ) ): ?>
                    <div class="advantages-item">
						<?php echo wp_get_attachment_image( $advantage_2_icon, 'full', false, array( 'class' => 'advantages-icon' ) ); ?>
                        <h3 class="advantages-title">
							<?php echo esc_html( $advantage_2_title ); ?>
                        </h3>
                        <p class="advantages-text">
							<?php echo esc_html( $advantage_2_text ); ?>
                        </p>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $advantage_3_icon ) ): ?>
                    <div class="advantages-item">
						<?php echo wp_get_attachment_image( $advantage_3_icon, 'full', false, array( 'class' => 'advantages-icon' ) ); ?>
                        <h3 class="advantages-title">
							<?php echo esc_html( $advantage_3_title ); ?>
                        </h3>
                        <p class="advantages-text">
							<?php echo esc_html( $advantage_3_text ); ?>
                        </p>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>

<?php
$staff_query = new WP_Query( [
	'post_type'      => 'staff',
	'posts_per_page' => 4,
] );

if ( $staff_query->have_posts() ):
	?>
    <section class="team" id="staff">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">
					<?php pll_e( 'Наши специалисты' ); ?>
                </h2>
            </div>
            <div class="team-block">
				<?php
				while ( $staff_query->have_posts() ):
					$staff_query->the_post();
					$profession = carbon_get_post_meta( get_the_ID(), 'staff_profession' );
					?>
                    <a href="<?php the_permalink(); ?>" class="team-item">
                        <div class="team-item__img">
							<?php the_post_thumbnail( 'full' ); ?>
                        </div>
                        <div class="team-item__footer">
                            <h4 class="team-name">
								<?php the_title(); ?>
                            </h4>
                            <span class="team-position">
                                <?php echo esc_html( $profession ); ?>
                            </span>
                        </div>
                    </a>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <section class="pricing">
        <div class="container">
            <div class="price-block">
				<?php if ( ! empty( $pricing_title ) ): ?>
                    <h3 class="price-block__title">
						<?php echo esc_html( $pricing_title ); ?>
                    </h3>
				<?php endif; ?>

				<?php if ( ! empty( $pricing_description ) ): ?>
                    <div class="price-block__desc">
						<?php echo esc_html( $pricing_description ); ?>
                    </div>
				<?php endif; ?>

				<?php if ( ! empty( $pricing_list ) && is_array( $pricing_list ) ): ?>
                    <ul class="pricing-list">
						<?php foreach ( $pricing_list as $item ): ?>
                            <li class="pricing-list__item">
								<?php if ( ! empty( $item['pricing_item_name'] ) ): ?>
                                    <span class="pricing-list__name">
                                    <?php echo esc_html( $item['pricing_item_name'] ); ?>
                                </span>
								<?php endif; ?>

								<?php if ( ! empty( $item['pricing_item_price'] ) ): ?>
                                    <span class="pricing-list__price">
                                    <?php echo esc_html( $item['pricing_item_price'] ); ?>
                                </span>
								<?php endif; ?>
                            </li>
						<?php endforeach; ?>
                    </ul>
				<?php endif; ?>
            </div>
        </div>
    </section>

<?php
$category_id   = 4;
$category_link = get_category_link( $category_id );
$args          = array(
	'post_type'      => 'post',
	'posts_per_page' => 6,
	'cat'            => $category_id,
);

$query = new WP_Query( $args );
if ( $query->have_posts() ):
	?>
    <section class="news">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title">
				<?php pll_e( 'Новости Dental Tooth' ); ?>
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
    <div class="container">
        <div class="button-block">
            <a href="<?php echo $category_link; ?>" class="btn info-btn">
				<?php pll_e( 'Все статьи' ); ?>
            </a>
        </div>
    </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="swiper reviews-swiper">
                <div class="swiper-wrapper">
					<?php if ( ! empty( $reviews_list ) && is_array( $reviews_list ) ): ?>
						<?php foreach ( $reviews_list as $review ): ?>
                            <div class="swiper-slide">
                                <div class="review-block">
                                    <div class="review-item">
										<?php if ( ! empty( $reviews_title ) ): ?>
                                            <h2 class="review-item__title">
												<?php echo esc_html( $reviews_title ); ?>
                                            </h2>
										<?php endif; ?>

                                        <div class="review-content">
											<?php if ( ! empty( $review['review_avatar'] ) ): ?>
                                                <div class="review-img">
													<?php echo wp_get_attachment_image( $review['review_avatar'], 'full' ); ?>
                                                </div>
											<?php endif; ?>

                                            <div class="review-meta">
												<?php if ( ! empty( $review['review_text'] ) ): ?>
                                                    <p class="review-text">
														<?php echo esc_html( $review['review_text'] ); ?>
                                                    </p>
												<?php endif; ?>

												<?php if ( ! empty( $review['review_author'] ) ): ?>
                                                    <p class="review-name">
														<?php echo esc_html( $review['review_author'] ); ?>
                                                    </p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

<?php get_template_part( 'template-parts/sign-up' ) ?>

<?php get_footer(); ?>