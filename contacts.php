<?php /* Template Name: Cantacts */ ?>

<?php get_header(); ?>

<?php if ( function_exists( 'custom_breadcrumbs' ) ): ?>
    <div class="breadcrumbs-block">
		<?php custom_breadcrumbs(); ?>
    </div>
<?php endif; ?>


<?php
$address_text = carbon_get_theme_option( 'address_text' . carbon_lang_prefix() );
$phone        = carbon_get_theme_option( 'phone' );
$valid_phone  = preg_replace( '/[^0-9]/', '', $phone );
$mail         = carbon_get_theme_option( 'mail' );
$twitter      = carbon_get_theme_option( 'twitter' );
$instagram    = carbon_get_theme_option( 'instagram' );
$vk           = carbon_get_theme_option( 'vk' );
$map_code     = carbon_get_theme_option( 'map_code' );
?>

    <section class="contacts">
        <div class="container">
            <h2 class="section-title">
				<?php the_title(); ?>
            </h2>
            <div class="contacts-block">
                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/location.svg"
                         alt="contact-icon" class="contact-item-icon">
                    <h3 class="contact-subtitle">
						<?php pll_e( 'Наш офис' ); ?>
                    </h3>
                    <p class="contact-text"><?php echo $address_text; ?></p>
                </div>
                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg" alt="contact-icon"
                         class="contact-item-icon">
                    <h3 class="contact-subtitle">
						<?php pll_e( 'Наш телефон' ); ?>
                    </h3>
                    <p class="contact-text"><a href="tel:<?php echo $valid_phone; ?>"><?php echo $phone; ?></a></p>
                </div>
                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" alt="contact-icon"
                         class="contact-item-icon">
                    <h3 class="contact-subtitle">
						<?php pll_e( 'Наша почта' ); ?>
                    </h3>
                    <p class="contact-text"><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                </div>
            </div>

			<?php if ( ! empty( $map_code ) ) : ?>
                <div class="map-section">
					<?php echo $map_code ?>
                </div>
			<?php endif; ?>

            <div class="contact-form-block">
                <h2 class="section-title"><?php pll_e( 'Связаться с нами' ); ?></h2>

                <!-- <form action="" class="contact-form">
                <input type="text" name="" id="" placeholder="<?php //pll_e( 'Ваше имя' ); ?>">
                <input type="text" name="" id="" placeholder="<?php //pll_e( 'Ваш телефон' ); ?>">
                <textarea name="" id="" cols="10" rows="10" placeholder="<?php //pll_e( 'Комментарий' ); ?>"></textarea>
                <button class="btn action-btn"><?php //pll_e( 'Отправить' ); ?></button>
            </form> -->
				<?php
				if ( pll_current_language() == 'en' ) {
					echo do_shortcode( '[contact-form-7 id="4bda6ec" title="Contact form" html_id="contact-form-1234" html_class="contact-form"]' );
				} elseif ( pll_current_language() == 'ru' ) {
					echo do_shortcode( '[contact-form-7 id="35adf15" title="Contact form" html_id="contact-form-1234" html_class="contact-form"]' );
				}

				?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>