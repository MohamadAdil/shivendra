<?php
/* template name: What We Do */
get_header();
?>
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
                                <a href="<?php echo $button_url ?>" class="btn-main"><?php echo $button_title ?><span
                                        class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span></a>
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
<!-- Tabs -->

<div class="ques-ans section-pd">
    <div class="container">
        <h2 class="common-h2"><?php the_field('tab_heading')?></h2>
        <ul class="custom-tabs nav nav-tabs" id="myTab" role="tablist">
            <?php
            $tabs_section = get_field('tabs_section');
            // print_r($tabs_section);
            if ($tabs_section) {
                $n = 0; // Start from 0 instead of 1
                foreach ($tabs_section as $tab_data) {
                    $tab_title = $tab_data['tab_title'];
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo $n == 0 ? 'active' : ''; ?>" id="<?php echo $tab_title; ?>-tab"
                            data-bs-toggle="tab" data-bs-target="#<?php echo $tab_title; ?>-tab-pane" type="button" role="tab"
                            aria-controls="<?php echo $tab_title; ?>-tab-pane"
                            aria-selected="<?php echo $n == 0 ? 'true' : 'false'; ?>"><span
                                class="tab-icon <?php echo $tab_data['tab_classes']?> me-2"></span><?php echo $tab_title; ?></button>
                    </li>
                    <?php
                    $n++;
                }
            }
            ?>
        </ul>
        <!-- Tabs Data -->
        <div class="tab-content" id="myTabContent">
            <?php
            if ($tabs_section) {
                $n = 0; // Start from 0 instead of 1
                foreach ($tabs_section as $tab_data) {
                    $tabTitle = $tab_data['tab_title'];

                    $tabImage = $tab_data['tabs_section_image'];
                    // echo"<pre>";
                    // print_r($tabImage);
                    ?>
                    <div class="tab-pane fade<?php echo $n == 0 ? ' show active' : ''; ?>"
                        id="<?php echo $tabTitle; ?>-tab-pane" role="tabpanel" aria-labelledby="<?php echo $tabTitle; ?>-tab"
                        tabindex="0">
                        <div class="row"
                            style="background-image: url(<?php echo esc_url($tabImage); ?>); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                            <div class="col-lg-7 g-0">
                                <div class="client-stories-txt"
                                    style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                                    <h4><?php echo esc_html($tab_data['tabs_section_title']); ?></h4>
                                    <div class="client-stories-btn">
                                        <?php
                                        $button_data = $tab_data['tabs_section_button'];
                                        if (isset($button_data['url']) && isset($button_data['title'])) {
                                            $button_url = esc_url($button_data['url']);
                                            $button_title = esc_html($button_data['title']);
                                            ?>
                                            <a href="<?php echo $button_url; ?>" class="btn-main"><?php echo $button_title; ?> <span
                                                    class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span></a>
                                        <?php } ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $n++;
                }
            }
            ?>
        </div>
        <!-- <ul class="custom-tabs nav nav-tabs" id="myTab" role="tablist">
            
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Strategy-tab" data-bs-toggle="tab" data-bs-target="#Strategy-tab-pane"
                    type="button" role="tab" aria-controls="Strategy-tab-pane" aria-selected="true">Strategy</button>
            </li> -->

        <!-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="Process-tab" data-bs-toggle="tab" data-bs-target="#Process-tab-pane"
                    type="button" role="tab" aria-controls="Process-tab-pane" aria-selected="false">Process</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="PMO-tab" data-bs-toggle="tab" data-bs-target="#PMO-tab-pane"
                    type="button" role="tab" aria-controls="PMO-tab-pane" aria-selected="false">PMO</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Technology-tab" data-bs-toggle="tab" data-bs-target="#Technology-tab-pane"
                    type="button" role="tab" aria-controls="Technology-tab-pane" aria-selected="false">Technology</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Training-tab" data-bs-toggle="tab" data-bs-target="#Training-tab-pane"
                    type="button" role="tab" aria-controls="Training-tab-pane" aria-selected="false">Training</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Tendering-tab" data-bs-toggle="tab" data-bs-target="#Tendering-tab-pane"
                    type="button" role="tab" aria-controls="Tendering-tab-pane" aria-selected="false">Tendering</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="RiskManagement-tab" data-bs-toggle="tab" data-bs-target="#RiskManagement-tab-pane"
                    type="button" role="tab" aria-controls="RiskManagement-tab-pane" aria-selected="false">RiskManagement</button>
            </li> -->
        <!-- </ul>
        
        <div class="tab-content" id="myTabContent">
            
            <div class="tab-pane fade show active" id="Strategy-tab-pane" role="tabpanel" aria-labelledby="Strategy-tab"
                tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/strategy-bg.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- <div class="tab-pane fade" id="Process-tab-pane" role="tabpanel" aria-labelledby="Process-tab" tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="PMO-tab-pane" role="tabpanel" aria-labelledby="PMO-tab" tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Technology-tab-pane" role="tabpanel" aria-labelledby="Technology-tab"
                tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Training-tab-pane" role="tabpanel" aria-labelledby="Training-tab"
                tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Tendering-tab-pane" role="tabpanel" aria-labelledby="Tendering-tab"
                tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="RiskManagement-tab-pane" role="tabpanel" aria-labelledby="RiskManagement-tab"
                tabindex="0">
                <div class="row"
                    style="background-image: url(http://49.249.236.30:2425/shivendra/wp-content/uploads/2024/04/client-stories-bg-1.png); border-radius: 50px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="col-lg-7 g-0">
                        <div class="client-stories-txt"
                            style="background: linear-gradient(rgba(0, 116, 128, 0.5), rgba(0, 0, 128, 1.5));">
                            <h4>What strategies can ensure our firefighting doesn't overshadow long-term goals?</h4>
                            <div class="client-stories-btn">
                                <a href="#" class="btn-main">View all</a>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </div>  -->
    </div>
</div>
<!-- Sectors-we-serve -->
<div class="we-serve section-pd">
    <div class="container">
        <h2 class="common-h2 text-center"><?php the_field('Sectors_we_serve_title') ?></h2>
        <div class="row">
            <?php
            $sectors_we_serve = get_field('sectors_we_serve');
            if ($sectors_we_serve) {
                foreach ($sectors_we_serve as $serve) {
                    ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fe-serve-item">
                            <div class="serve-item-img">
                                <img src="<?php echo $serve['sectors_we_serve_image'] ?>" alt="">
                            </div>
                            <div class="serve-item-txt text-center">
                                <h4><?php echo $serve['sectors_we_serve_heading'] ?></h4>
                                <p><?php echo $serve['sectors_we_serve_short_description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon1.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon2.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon3.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon4.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon5.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon6.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon7.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon8.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon9.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon10.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon11.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fe-serve-item">
                    <div class="serve-item-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/sectors-icon12.svg"
                            alt="">
                    </div>
                    <div class="serve-item-txt text-center">
                        <h4>Infrastructure</h4>
                        <p>Lorem ipsum dolor sit amet, elit is a
                            consectetur adipiscing </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Client-Testimonials -->
<div class="client-testimonials section-pd">
    <div class="container">
        <h2 class="common-h2 text-center"><?php the_field('Client_Testimonials_title') ?></h2>
        <div class="testimonial-slider">
            <?php
            $client_testimonials = get_field('client_testimonials');
            if ($client_testimonials) {
                foreach ($client_testimonials as $client) {
                    ?>
                    <div class="testimonial-item">
                        <div class="testimonial-item-img">
                            <img src="<?php echo $client['client_testimonials_icon'] ?>" alt="">
                        </div>
                        <p><?php echo $client['client_testimonials_client_review'] ?></p>
                        <div class="client-dtl">
                            <div class="client-img">
                                <img src="<?php echo $client['client_testimonials_client_image'] ?>" alt="">
                            </div>
                            <div class="client-txt">
                                <h6><?php echo $client['client_testimonials_client_name'] ?></h6>
                                <p><?php echo $client['client_testimonials_client_designation'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <!-- <div class="testimonial-item">
                <div class="testimonial-item-img">
                    <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/quote.svg"
                        alt="">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip."</p>
                <div class="client-dtl">
                    <div class="client-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/zaire.png"
                            alt="">
                    </div>
                    <div class="client-txt">
                        <h6>Zaire Culhane</h6>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-item-img">
                    <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/quote.svg"
                        alt="">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip."</p>
                <div class="client-dtl">
                    <div class="client-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/ashlynn.png"
                            alt="">
                    </div>
                    <div class="client-txt">
                        <h6>Ashlynn Septimus</h6>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-item-img">
                    <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/quote.svg"
                        alt="">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip."</p>
                <div class="client-dtl">
                    <div class="client-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/peter.png"
                            alt="">
                    </div>
                    <div class="client-txt">
                        <h6>Peter, Belgium</h6>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-item-img">
                    <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/quote.svg"
                        alt="">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip."</p>
                <div class="client-dtl">
                    <div class="client-img">
                        <img src="http://49.249.236.30:2425/shivendra/wp-content/themes/shivendra/assets/images/zaire.png"
                            alt="">
                    </div>
                    <div class="client-txt">
                        <h6>Zaire Culhane</h6>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- View Services -->
<div class="view-services pt-5">
    <div class="container">
        <div class="view-service-wrap text-center"
            style="background-image: url(<?php the_field('view_services_image') ?>);">
            <h2 class="common-h2"><?php the_field('view_services_title') ?></h2>
            <div class="view-service-button">
                <?php
                $view_services_button = get_field('view_services_button');
                $button_title = isset($view_services_button['title'])? $view_services_button['title'] :'';
                $button_url = isset($view_services_button['url'])? $view_services_button['url']: '';
                if($button_url):
                    ?>
                <a href="<?php echo $button_url?>" class="btn-main"><?php echo $button_title?><span class="btn-main-icon"><i
                            class="fa-solid fa-arrow-up"></i></span></a>
                            <?php
                            endif;
                            ?>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>