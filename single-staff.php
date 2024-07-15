<?php get_header(); ?>

<?php if ( function_exists( 'custom_breadcrumbs' ) ) : ?>
    <div class="breadcrumbs-block">
		<?php custom_breadcrumbs(); ?>
    </div>
<?php endif; ?>

<?php
$educationList   = carbon_get_post_meta( get_the_ID(), 'education_list' );
$experienceList  = carbon_get_post_meta( get_the_ID(), 'experience_list' );
$scheduleList    = carbon_get_post_meta( get_the_ID(), 'schedule_list' );
$phoneNumber     = carbon_get_post_meta( get_the_ID(), 'phone_number' );
$emailAddress    = carbon_get_post_meta( get_the_ID(), 'email_address' );
$socialTwitter   = carbon_get_post_meta( get_the_ID(), 'social_twitter' );
$socialInstagram = carbon_get_post_meta( get_the_ID(), 'social_instagram' );
$socialVk        = carbon_get_post_meta( get_the_ID(), 'social_vk' );

?>
    <section class="staff-block">
        <div class="container">
            <div class="staff-content">
                <div class="staff-content__img">
					<?php the_post_thumbnail( 'full' ); ?>
                </div>
                <div class="staff-content__info">
                    <h2 class="staff-name section-title">
						<?php the_title(); ?>
                    </h2>
                    <p class="staff-info-title">
						<?php pll_e( 'Образование и квалификация' ); ?>
                    </p>
                    <ul class="staff-list">
						<?php if ( ! empty( $educationList ) ): ?>
							<?php foreach ( $educationList as $educationItem ): ?>
                                <li>
									<?php echo esc_html( $educationItem['education_item'] ); ?>
                                </li>
							<?php endforeach; ?>
						<?php endif; ?>
                    </ul>

                    <!-- Опыт -->
                    <p class="staff-info-title">
						<?php pll_e( 'Опыт' ); ?>
                    </p>
                    <ul class="staff-list">
						<?php if ( ! empty( $experienceList ) ): ?>
							<?php foreach ( $experienceList as $experienceItem ): ?>
                                <li>
									<?php echo esc_html( $experienceItem['experience_item'] ); ?>
                                </li>
							<?php endforeach; ?>
						<?php endif; ?>
                    </ul>

                    <!-- График работы -->
                    <p class="staff-info-title">
						<?php pll_e( 'График работы' ); ?>:
                    </p>
                    <ul class="schedule-list">
						<?php if ( ! empty( $scheduleList ) ): ?>
							<?php foreach ( $scheduleList as $scheduleItem ): ?>
                                <li>
									<?php echo esc_html( $scheduleItem['schedule_day'] ); ?>: <span class="work-time">
                                    <?php echo esc_html( $scheduleItem['schedule_time'] ); ?>
                                </span>
                                </li>
							<?php endforeach; ?>
						<?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="contacts-block">
                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg" alt="contact-icon"
                         class="contact-item-icon">
                    <h3 class="contact-subtitle">
						<?php pll_e( 'Телефон' ); ?>
                    </h3>
                    <p class="contact-text">
						<?php if ( ! empty( $phoneNumber ) ): ?>
                            <a href="tel:<?php echo esc_attr( $phoneNumber ); ?>">
								<?php echo esc_html( $phoneNumber ); ?>
                            </a>
						<?php endif; ?>
                    </p>
                </div>

                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" alt="contact-icon"
                         class="contact-item-icon">
                    <h3 class="contact-subtitle">Email</h3>
                    <p class="contact-text">
						<?php if ( ! empty( $emailAddress ) ): ?>
                            <a href="mailto:<?php echo esc_attr( $emailAddress ); ?>">
								<?php echo esc_html( $emailAddress ); ?>
                            </a>
						<?php endif; ?>
                    </p>
                </div>

                <div class="contact-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/social.svg"
                         alt="contact-icon"
                         class="contact-item-icon">
                    <h3 class="contact-subtitle">
						<?php pll_e( 'Социальные сети' ); ?>
                    </h3>
                    <ul class="socials-list">
						<?php if ( ! empty( $socialTwitter ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo esc_url( $socialTwitter ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg"
                                         alt="twitter">
                                </a>
                            </li>
						<?php endif; ?>
						<?php if ( ! empty( $socialInstagram ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo esc_url( $socialInstagram ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg"
                                         alt="instagram">
                                </a>
                            </li>
						<?php endif; ?>
						<?php if ( ! empty( $socialVk ) ): ?>
                            <li class="socials-list__item">
                                <a href="<?php echo esc_url( $socialVk ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.svg"
                                         alt="vk">
                                </a>
                            </li>
						<?php endif; ?>
                    </ul>
                </div>
            </div>
    </section>

<?php get_footer(); ?>