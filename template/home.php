<?php
/* template name: Home */
get_header();
?>
<main>
    <!-- Hero -->
    <section class="hero" style="background-image: url(<?php the_field('hero_background_image') ?>);">
        <div class="container">
            <div class="banner-content row">
                <div class="col-xl-8 col-lg-12">
                    <h1 class="main-heading"><?php the_field('hero_title') ?></h1>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <img src="<?php the_field('hero_image') ?>"  class="img-fluid banner-inner">
                    <p class="innner-content"><?php the_field('hero_description') ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- extra-approach -->
    <div class="extra-approach">
        <div class="container">
            <div class="extra-approach-wrap" style="background:linear-gradient(to bottom, #007480 0%, #000080 100%);">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-12">
                        <div class="extra-img">
                            <img src="<?php the_field('extra_approach_image') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-12">
                        <div class="extra-txt">
                            <h2 class="common-h2"><?php the_field('extra_approach_title') ?></h2>
                            <p><?php the_field('extra_approach_description') ?></p>
                            <div class="extra-approach-btn">
                                <?php
                                $extra_approach_url = get_field('extra_approach_url');
                                $title = isset($extra_approach_url['title']) ? $extra_approach_url['title'] : '';
                                $url = isset($extra_approach_url['url']) ? $extra_approach_url['url'] : '';
                                if ($url) :
                                ?>
                                    <a href="<?php echo $url ?>" class="btn-main"><?php echo $title ?>
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
    <!-- Latest insights -->
    <section class="latest-insights">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="heading-txt">
                        <h2 class="common-h2"><?php the_field('latest_insights_title') ?></h2>
                        <div class="extra-approach-btn">
                            <?php
                            $latest_insights_url = get_field('latest_insights_url');
                            $title = isset($latest_insights_url['title']) ? $latest_insights_url['title'] : '';
                            $url = isset($latest_insights_url['url']) ? $latest_insights_url['url'] : '';
                            if ($url) :
                            ?>
                                <a href="<?php echo $url ?>" class="btn-main"><?php echo $title ?>
                                    <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            <?php
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="insight-slider">
                        <?php
                        $latest_insights = get_field('latest_insights');
                        if ($latest_insights) {
                            foreach ($latest_insights as $latest) {
                        ?>
                                <div class="row insight-item align-items-center">
                                    <div class="insight-image col-lg-7 col-md-6 col-sm-6">
                                        <img src="<?php echo $latest['latest_insights_image'] ?>" alt="">
                                    </div>
                                    <div class="insight-txt col-lg-5 col-md-6 col-sm-6">
                                        <h4><?php echo $latest['latest_insights_heading'] ?></h4>
                                        <p><?php echo $latest['latest_insights_short_description'] ?></p>
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
    </section>
    <!-- Events and Webinars -->
    <div class="events-webinars section-pd">
        <div class="container-fluid px-5">
            <div class="row ">
                <div class="col-xl-6 col-md-6 mb-3">
                    <div class="big-samll" style="background: url(<?php the_field('events_and_webinars_image') ?>) no-repeat;">
                        <div class="big-txt">

                            <h4><?php the_field('events_and_webinars_title'); ?></h4>
                            <div class="d-flex justify-content-between align-items-end">
                                <p><?php the_field('events_and_webinars_description') ?></p>
                                <?php
                                $event_button = get_field('event_button');
                                $button_url = isset($event_button['url']) ? esc_url($event_button['url']) : '';
                                if ($button_url) :
                                ?>
                                    <a href="<?php echo $button_url; ?>" tabindex="-1">
                                        <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                    </a>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>
                <?php
                $events_and_webinars = get_field('events_and_webinars');
                if ($events_and_webinars) {
                    foreach ($events_and_webinars as $event_and_web) {
                ?>
                        <div class="col-xl-3 col-md-6 centerr mb-3">
                            <div class="card-samll" style="background-image: url(<?php echo $event_and_web['content_image'] ?>);">
                                <h6><?php echo $event_and_web['category_heading'] ?></h6>
                                <div class="div">
                                    <h4><?php echo $event_and_web['category_content'] ?></h4>
                                    <?php
                                    $content_link = $event_and_web['content_link'];
                                    $button_url = isset($content_link['url']) ? $content_link['url'] : '';
                                    if ($button_url) :
                                    ?>
                                        <a href="<?php echo $button_url ?>" tabindex="-1">
                                            <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                        </a>
                                    <?php
                                    endif;
                                    ?>
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
    <!-- Client Stories -->
    <div class="client-stories">
        <div class="container">
            <div class="row" style="background-image: url(<?php the_field('client_stories_image') ?>); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="col-lg-7 g-0">
                    <div class="client-stories-txt" style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                        <h6><?php the_field('client_stories_title') ?></h6>
                        <h4><?php the_field('client_stories_heading') ?></h4>
                        <div class="client-stories-btn">
                            <?php
                            $client_stories_button = get_field('client_stories_button');
                            $title = isset($client_stories_button['title']) ? $client_stories_button['title'] : '';
                            $url = isset($client_stories_button['url']) ? $client_stories_button['url'] : '';
                            if ($url) :
                            ?>
                                <a href="<?php echo $url ?>" class="btn-main"><?php echo $title; ?>
                                    <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            <?php
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <div class="our-services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="service txt">
                        <h2 class="common-h2"><?php the_field('our_services_title') ?></h2>
                        <h4><?php the_field('our_services_heading') ?></h4>
                        <p><?php the_field('our_services_description') ?></p>
                        <div class="service-btn">
                            <?php
                            $our_services_button = get_field('our_services_button');
                            $title = isset($our_services_button['title']) ? $our_services_button['title'] : '';
                            $url = isset($our_services_button['url']) ? $our_services_button['url'] : '';
                            if ($url) :
                            ?>
                                <a href="<?php echo $url; ?>" class="btn-main"><?php echo $title; ?>
                                    <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            <?php
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-slider">
                        <?php
                        $our_services = get_field('our_services');
                        if ($our_services) {
                            foreach ($our_services as $service) {
                        ?>
                                <div class="service-item" style="background: linear-gradient(to bottom, rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 0.5)), url('<?php echo $service['our_services_image'] ?>') center/cover no-repeat;">
                                    <h6><?php echo $service['service_heading'] ?></h6>

                                    <a href="">
                                        <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <!-- <div class="service-item"
                                style="background: linear-gradient(to bottom, rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 0.5)), url('../images/service-slider-1.png') center/cover no-repeat;">
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h6>
                                <a href="#">
                                    <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            </div>
                            <div class="service-item"
                                style="background: linear-gradient(to bottom, rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 0.5)), url('../images/service-slider-1.png') center/cover no-repeat;">
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h6>
                                <a href="#">
                                    <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            </div>
                            <div class="service-item"
                                style="background: linear-gradient(to bottom, rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 0.5)), url('../images/service-slider-1.png') center/cover no-repeat;">
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h6>
                                <a href="#">
                                    <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                </a>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Podcast -->
    <div class="latest-podcast">
        <div class="container">
            <div class="podcast-icon-img">
                <img src="<?php the_field('latest_podcast_icon') ?>" alt="" class="podcast-icon">
            </div>
            <h3 class="text-center"><?php the_field('latest_podcast_title') ?></h3>
            <div class="row">
                <?php
                $latest_podcast = get_field('latest_podcast');
                if ($latest_podcast) {
                    foreach ($latest_podcast as $podcast) {
                ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="prodcast-card" style="background-image:url(<?php echo $podcast['latest_podcast_image'] ?>);">
                                <span><?php echo $podcast['title']?></span>
                                <div>
                                    <h6><?php echo $podcast['latest_podcast_heading'] ?></h6>
                                    <?php
                                    $button = $podcast['button'];
                                    $button_url = isset($button['url'])? $button['url'] : '';
                                    if($button_url):
                                        ?>
                                    <a href="<?php echo $button_url?>">
                                        <span class="btn-main-icon-single"><i class="fa-solid fa-arrow-up"></i></span>
                                    </a>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <div class="latest-podcast-btn text-center">
                    <?php
                    $discover_button = get_field('discover_button');
                    $title = isset($discover_button['title']) ? $discover_button['title'] : '';
                    $url = isset($discover_button['url']) ? $discover_button['url'] : '';
                    if ($url) :
                    ?>
                        <a href="<?php echo $url ?>" class="btn-main"><?php echo $title ?>
                            <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                        </a>
                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- View Services -->
    <div class="view-services">
        <div class="container">
            <div class="view-service-wrap text-center" style="background-image: url(<?php the_field('view_services_image') ?>);">
                <h2 class="common-h2"><?php the_field('view_services_title') ?></h2>
                <div class="view-service-button">
                    <?php
                    $view_services_button = get_field('view_services_button');
                    $title = isset($view_services_button['title']) ? $view_services_button['title'] : '';
                    $url = isset($view_services_button['url']) ? $view_services_button['url'] : '';
                    if ($url) :
                    ?>

                        <a href="<?php echo $url ?>" class="btn-main"><?php echo $title ?>
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