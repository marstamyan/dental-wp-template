<?php
/**
 * The header for our theme
 *
 * @package start-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$address_text = carbon_get_theme_option( 'address_text' . carbon_lang_prefix() );
$phone        = carbon_get_theme_option( 'phone' );
$valid_phone  = preg_replace( '/[^0-9]/', '', $phone );
$mail         = carbon_get_theme_option( 'mail' );
$twitter      = carbon_get_theme_option( 'twitter' );
$instagram    = carbon_get_theme_option( 'instagram' );
$vk           = carbon_get_theme_option( 'vk' );
?>
<div class="wrapper">
    <header class="header" id="header">
        <div class="header-top">
            <div class="container header-top-content">
				<?php if ( ! empty( $address_text ) ): ?>
                    <div class="header-top__left">
                        <div class="address-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/location.svg"
                                 alt="address">
                            <span>
                                    <?php echo $address_text; ?>
                                </span>
                        </div>
                        <ul>
							<?php
							if ( function_exists( 'pll_the_languages' ) ) {
								pll_the_languages( array( 'show_flags' => 1, 'show_names' => 0 ) );
							}
							?>
                        </ul>
                    </div>
				<?php endif; ?>
                <div class="header-top__right">
					<?php if ( ! empty( $phone ) ): ?>
                        <div class="tel-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
                                 alt="phone">
                            <a href="tel:<?php echo $valid_phone; ?>">
								<?php echo $phone; ?>
                            </a>
                        </div>
					<?php endif; ?>
					<?php if ( ! empty( $mail ) ): ?>
                        <div class="mail-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" alt="mail">
                            <a href="mailto:<?php echo $mail; ?>">
								<?php echo $mail; ?>
                            </a>
                        </div>
					<?php endif; ?>
                    <div class="socials-block">
                        <ul class="socials-list">
							<?php if ( ! empty( $twitter ) ): ?>
                                <li class="socials-list__item">
                                    <a href="<?php echo $twitter; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg"
                                             alt="twitter">
                                    </a>
                                </li>
							<?php endif; ?>
							<?php if ( ! empty( $instagram ) ): ?>
                                <li class="socials-list__item">
                                    <a href="<?php echo $instagram; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg"
                                             alt="instagram">
                                    </a>
                                </li>
							<?php endif; ?>
							<?php if ( ! empty( $vk ) ): ?>
                                <li class="socials-list__item">
                                    <a href="<?php echo $vk; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.svg"
                                             alt="vk">
                                    </a>
                                </li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- toggle  -->
                <div class="toggle-menu">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
                <div class="mobile-menu">
					<?php if ( ! empty( $phone ) ): ?>
                        <div class="tel-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
                                 alt="phone">
                            <a href="tel:<?php echo $valid_phone; ?>">
								<?php echo $phone; ?>
                            </a>
                        </div>
					<?php endif; ?>

					<?php if ( ! empty( $address_text ) ): ?>
                        <div class="header-top__left">
                            <div class="address-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/location.svg"
                                     alt="address">
                                <span>
                                        <?php echo $address_text; ?>
                                    </span>
                            </div>
                        </div>
					<?php endif; ?>
                    <ul class="socials-list">
						<?php if ( ! empty( $twitter ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo $twitter; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg"
                                         alt="twitter">
                                </a>
                            </li>
						<?php endif; ?>
						<?php if ( ! empty( $instagram ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo $instagram; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg"
                                         alt="instagram">
                                </a>
                            </li>
						<?php endif; ?>
						<?php if ( ! empty( $vk ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo $vk; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.svg"
                                         alt="vk">
                                </a>
                            </li>
						<?php endif; ?>
                    </ul>
					<?php
					wp_nav_menu( [
						'theme_location' => 'header_menu',
						'menu_class'     => 'mobile-nav__list',
					] );
					?>
                </div>
                <!-- toggle  -->
            </div>
        </div>
        <div class="header-main container">
			<?php
			if ( function_exists( 'the_custom_logo' ) ): ?>
                <div class="header-logo">
					<?php the_custom_logo(); ?>
                </div>
			<?php endif; ?>
            <div class="header-menu">
                <nav class="header-nav">
					<?php
					wp_nav_menu( [
						'theme_location' => 'header_menu',
						'menu_class'     => 'header-nav__list',
					] );
					?>
                </nav>
            </div>
            <div class="header-btn">
                <button class="btn action-btn show-modal" aria-haspopup="true">
					<?php pll_e( 'Получить консультацию' ); ?>
                </button>
            </div>
        </div>
    </header>