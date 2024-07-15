<section class="signup" id="signup">
    <div class="signup-content container">
        <div class="signup-form-block">
            <!-- <form action="" class="signup-form"> -->
                <!-- <h3 class="signup-form__title">
                    <?php //pll_e( 'Записаться на прием' ); ?>
                </h3>
                <input type="text" placeholder="<?php //pll_e( 'Ваше имя' ); ?>" required>
                <input type="tel" placeholder="<?php //pll_e( 'Ваш телефон' ); ?>" required>
                <button class="btn info-btn">
                    <?php //pll_e( 'Записаться на прием' ); ?>
                </button>
                <p class="form-info">
                    <?php //pll_e( 'Нажимая кнопку, я даю свое согласие на обработку моих персональных данных' ); ?>
                </p> -->
                
            <!-- </form> -->
            <?php 
            if(pll_current_language() == 'en'){
                echo do_shortcode('[contact-form-7 id="a700a06" title="Make an appointment RU" html_id="contact-form-1234" html_class="signup-form"]');
             } elseif(pll_current_language() == 'ru')  {
                echo do_shortcode('[contact-form-7 id="4b29873" title="Make an appointment RU" html_id="contact-form-1234" html_class="signup-form"]');
             }
             ?>
        </div>
        <div class="signup-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/form-bg.png" alt="signup">
        </div>
    </div>
</section>