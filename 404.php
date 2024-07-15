<?php get_header(); ?>

    <section class="not-found">
        <div class="container">
            <div class="not-found-content">
                <div class="not-found-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404-image.png" alt="404 page">
                    <div class="not-found-meta">
                        <h3 class="not-found-title"><?php pll_e( 'Страница не найдена' ); ?></h3>
                        <p class="not-found-text"><?php pll_e( 'Перейти на' ); ?> <a
                                    href=""><?php pll_e( 'главную' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>