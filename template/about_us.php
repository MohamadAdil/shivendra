<?php
/* template name: About Us*/
get_header();
?>
<main>
    <!-- Hero -->
    <section class="hero hero-all-page" style="background-image: url(<?php the_field('hero_image') ?>);">
        <div class="container">
            <div class="banner-content row">
                <div class="col-lg-12">
                    <h1 class="main-heading"><?php the_field('hero_title') ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- extra-approach -->
    <div class="extra-approach extra-approach-all-page">
        <div class="container">
            <div class="extra-approach-wrap" style="background:linear-gradient(to bottom, #007480 0%, #000080 100%);">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="extra-img">
                            <img src="<?php the_field('extra_approach_image') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="extra-txt">
                            <h2 class="common-h2"><?php the_field('extra_approach_title') ?></h2>
                            <p><?php the_field('extra_approach_description') ?></p>
                            <div class="extra-approach-btn">
                                <?php
                                $extra_approach_button = get_field('extra_approach_button');
                                $button_title = isset($extra_approach_button['title']) ? $extra_approach_button['title'] : '';
                                $button_url = isset($extra_approach_button['url']) ? $extra_approach_button['url'] : '';
                                if ($button_url):
                                    ?>
                                    <a href="<?php echo $button_url; ?>" class="btn-main"><?php echo $button_title; ?>
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
    </div>
    <!-- Breakthrough -->
    <section class="Breakthrough section-pd"
        style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-us-bg.png'; ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="Breakthrough-img">
                        <img src="<?php the_field('first_image'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Breakthrough-txt">
                        <h2 class="common-h2"><?php the_field('first_title'); ?></h2>
                        <p><?php the_field('first_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breakthrough -->
    <section class="Breakthrough section-pd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="Breakthrough-txt">
                        <h2 class="common-h2"><?php the_field('second_title'); ?></h2>
                        <p><?php the_field('second_description'); ?></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="Breakthrough-img">
                        <img src="<?php the_field('second_image'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breakthrough -->
    <section class="Breakthrough section-pd"
        style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/about-us-bg.png'; ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="Breakthrough-img">
                        <img src="<?php the_field('third_image'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Breakthrough-txt">
                        <h2 class="common-h2"><?php the_field('third_title'); ?></h2>
                        <p><?php the_field('third_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our team -->
    <section class="our-team section-pd">
        <div class="container">
            <h2 class="common-h2 text-center"><?php the_field('our_team_title') ?></h2>
            <div class="row">
                <?php
                $our_team = get_field('our_team');
                if ($our_team) {
                    foreach ($our_team as $team) {
                        ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="out-team-card">
                                <img src="<?php echo esc_url($team['our_team_image']); ?>" alt="">
                                <h4><?php echo esc_html($team['team_member_name']); ?></h4>
                                <?php
                                $our_team_linkedin_link = $team['our_team_linkedin_link']; // Correctly retrieve subfield values
                                $link_title = isset($our_team_linkedin_link['title']) ? esc_html($our_team_linkedin_link['title']) : '';
                                $link_url = isset($our_team_linkedin_link['url']) ? esc_url($our_team_linkedin_link['url']) : '';
                                if ($link_url):
                                    ?>
                                    <a href="<?php echo $link_url; ?>">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>



            </div>
        </div>
    </section>
    <!-- Client Stories -->
    <div class="client-stories">
        <div class="container">
            <div class="row"
                style="background-image: url(<?php the_field('client_stories_image') ?>); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                <div class="col-lg-7 g-0">
                    <div class="client-stories-txt"
                        style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                        <h4><?php the_field('client_stories_title') ?></h4>
                        <div class="client-stories-btn">
                            <?php
                            $client_stories_button = get_field('client_stories_button');
                            $button_title = isset($client_stories_button['title']) ? $client_stories_button['title'] : '';
                            $button_url = isset($client_stories_button['url']) ? $client_stories_button['url'] : '';
                            if ($button_url):
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
        </div>
    </div>
    <!-- View Services -->
    <div class="view-services section-pd pb-0">
        <div class="container">
            <div class="view-service-wrap text-center"
                style="background-image: url(<?php the_field('view_services_image') ?>);">
                <h2 class="common-h2"><?php the_field('view_services_title') ?></h2>
                <div class="view-service-button">
                    <?php
                    $view_services_button = get_field('view_services_button');
                    $button_title = isset($view_services_button['title']) ? $view_services_button['title'] : '';
                    $button_url = isset($view_services_button['url']) ? $view_services_button['url'] : '';
                    if ($button_url):
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