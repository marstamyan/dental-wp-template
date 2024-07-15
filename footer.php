<?php
$footer_services = carbon_get_theme_option( 'footer_services' . carbon_lang_prefix() );
$working_time    = carbon_get_theme_option( 'working_time' . carbon_lang_prefix() );
?>
<footer class="footer">
    <div class="footer-content container">
        <div class="footer-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo-light.svg" class="footer-logo"
                 alt="logo">
            <div class="tel-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg" alt="phone">
                <a href="tel:11111">+(374)770000</a>
            </div>
            <div class="mail-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" alt="mail">
                <a href="mailto:dentaldev@mail.am">dentaldev@mail.am</a>
            </div>

            <ul class="socials-list">
                <li class="socials-list__item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg"
                             alt="twitter">
                    </a>
                </li>
                <li class="socials-list__item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg"
                             alt="instagram">
                    </a>
                </li>
                <li class="socials-list__item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.svg" alt="vk">
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-list-block">
            <h4 class="footer-blok-title">
				<?php pll_e( 'Наши услуги' ); ?>
            </h4>
            <ul class="footer-list">
				<?php foreach ( $footer_services as $service ): ?>
                    <li>
						<?php echo esc_html( $service['footer_services_item'] ); ?>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>

		<?php
		$staff = new WP_Query( [
			'post_type'      => 'staff',
			'posts_per_page' => 4,
		] );

		if ( $staff->have_posts() ):
			?>
            <div class="footer-list-block">
                <h4 class="footer-blok-title">
					<?php pll_e( 'Наши стоматологи' ); ?>
                </h4>
                <ul class="footer-list">
					<?php while ( $staff->have_posts() ):
						$staff->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?> ">
								<?php the_title(); ?>
                            </a></li>
					<?php endwhile;
					wp_reset_postdata(); ?>
                </ul>
            </div>
		<?php endif; ?>

        <div class="footer-list-block">
            <h4 class="footer-blok-title">
				<?php pll_e( 'Часы работы' ); ?>
            </h4>
            <ul class="footer-list">
				<?php foreach ( $working_time as $time ): ?>
                    <li>
						<?php echo esc_html( $time['working_time_day'] ); ?>: <span class="work-time">
                            <?php echo esc_html( $time['working_time'] ); ?>
                        </span>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="copyright">
			<?php echo date( "Y" ); ?> | Portfolio site by <a class="author" href="https://vk.com/mamikonarsvk/"
                                                              target="_blank">Mamikon</a>
        </div>
    </div>
    <div class="mask-modal" role="dialog"></div>
    <div class="modal form-modal" role="alert">
        <button class="close-modal" role="button">X</button>
        <h3 class="modal-title">
			<?php pll_e( 'Получить консультацию' ); ?>
        </h3>
        <form action="#" class="modal-form">
            <input type="text" name="name" placeholder="<?php pll_e( 'Ваше имя' ); ?>" required>
            <input type="tel" name="phone" placeholder="<?php pll_e( 'Ваш телефон' ); ?>" required>
            <input type="hidden" name="action" value="submit_form">
            <button type="submit" class="btn info-btn">
				<?php pll_e( 'Отправить' ); ?>
            </button>
            <p class="form-info">
				<?php pll_e( 'Нажимая кнопку, я даю свое согласие на обработку моих персональных данных' ); ?>
            </p>
        </form>


    </div>


    <div class="modal modal-info" role="alert">
        <button class="close-modal" role="button">X</button>
        <h3 class="modal-info-title">

        </h3>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>