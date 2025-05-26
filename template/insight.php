<?php
/* template name: Insight*/
get_header();
?>

<main>
    <!-- Hero -->
    <section class="hero hero-all-page" style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/banner-bg.png);">
        <div class="container">
            <div class="banner-content row">
                <div class="col-lg-12">
                    <h1 class="main-heading">Insights</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- extra-approach -->
    <div class="extra-approach extra-approach-all-page">
        <div class="container">
            <div class="extra-approach-wrap" style="background:linear-gradient(to bottom, #007480 0%, #000080 100%);">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-12">
                        <div class="extra-img">
                            <img src="<?php the_field('extra_approach_image') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="extra-txt">
                            <h2 class="common-h2"><?php the_field('extra_approach_title') ?></h2>
                            <p><?php the_field('extra_approach_description') ?></p>
                            <div class="extra-approach-btn">
                                <?php
                                $extra_approach_button = get_field('extra_approach_button');
                                $button_title = isset($extra_approach_button['title']) ? $extra_approach_button['title'] : '';
                                $button_url = isset($extra_approach_button['url']) ? $extra_approach_button['url'] : '';
                                if ($button_url) :
                                ?>
                                    <a href="<?php echo $button_url; ?>" class="btn-main"><?php echo $button_title; ?>
                                        <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span></a>
                                <?php
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news -->
    <div class="news section-pd" id="news_and_media">
        <div class="container">
            <h2 class="common-h2 text-center"><?php the_field('news_title') ?></h2>
            <div class="news-slider">
                <?php
                $news_and_media = get_field('news_and_media');
                if ($news_and_media) {
                    foreach ($news_and_media as $news) {
                ?>
                        <div>
                            <div class="prodcast-card news-card" style="background-image:url(<?php echo esc_url($news['news_content_image']); ?>);">
                                <span><?php echo esc_html($news['news_date']); ?></span>
                                <div>
                                    <h6><?php echo esc_html($news['news_heading']); ?></h6>
                                    <?php
                                    $news_button = $news['news_button']; // Correctly retrieve subfield values
                                    $button_title = isset($news_button['title']) ? esc_html($news_button['title']) : '';
                                    $button_url = isset($news_button['url']) ? esc_url($news_button['url']) : '';
                                    if ($button_url) :
                                    ?>
                                        <a href="<?php echo $button_url; ?>">
                                            <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Breakthrough -->
    <div class="event-webinars section-pd" id="event_webinars">
        <div class="container">
            <h2 class="common-h2 text-center">
                <?php the_field('breakthrough_title') ?>
            </h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-webinar-slider">
                        <?php
                        $breakthrough_section = get_field('breakthrough_section');
                        if ($breakthrough_section) {
                            foreach ($breakthrough_section as $breakthrough) {
                        ?>
                                <div class="row item" style="background-image: url(<?php echo esc_url($breakthrough['breakthrough_section_image']); ?>); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                                    <div class="col-lg-7 g-0">
                                        <div class="client-stories-txt" style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                                            <h6><?php echo esc_html($breakthrough['breakthrough_section_date']); ?></h6>
                                            <h4><?php echo esc_html($breakthrough['breakthrough_section_heading']); ?></h4>
                                            <div class="client-stories-btn">
                                                <?php
                                                $breakthrough_section_button = $breakthrough['breakthrough_section_button'];
                                                if ($breakthrough_section_button && isset($breakthrough_section_button['title']) && isset($breakthrough_section_button['url'])) :
                                                    $breakthrough_button_title = $breakthrough_section_button['title'];
                                                    $breakthrough_button_url = $breakthrough_section_button['url'];
                                                ?>
                                                    <a href="<?php echo esc_url($breakthrough_button_url); ?>" class="btn-main"><?php echo esc_html($breakthrough_button_title); ?>
                                                        <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                                                    </a>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Through Leadership Section -->
    <div class="thought-leadership section-pd" id="thought_leadership">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="service-txt">
                        <h2 class="common-h2"><?php the_field('through_leadership_title') ?></h2>
                        <!-- <h4><?php the_field('through_leadership_heading') ?></h4> -->
                        <p><?php the_field('through_leadership_description') ?></p>
                        <div class="service-btn">
                            <?php
                            $through_leadership_button = get_field('through_leadership_button');
                            $button_title = isset($through_leadership_button['title']) ? $through_leadership_button['title'] : '';
                            $button_url = isset($through_leadership_button['url']) ? $through_leadership_button['url'] : '';
                            if ($button_url) :
                            ?>
                                <a href="<?php echo $button_url ?>" class="btn-main"><?php echo $button_title ?>
                                    <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            <?php
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-item">
                        <img src="<?php the_field('through_leadership_image') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View Services -->
    <div class="view-services section-pd pb-0">
        <div class="container">
            <div class="view-service-wrap text-center" style="background-image: url(<?php the_field('view_services_image') ?>);">
                <h2 class="common-h2"><?php the_field('view_services_title') ?></h2>
                <div class="view-service-button">
                    <?php
                    $view_services_button = get_field('view_services_button');
                    $button_title = isset($view_services_button['title']) ? $view_services_button['title'] : '';
                    $button_url = isset($view_services_button['url']) ? $view_services_button['url'] : '';
                    if ($button_url) :
                    ?>
                        <a href="<?php echo $button_url ?>" class="btn-main"><?php echo $button_title ?>
                            <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                        </a>
                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>