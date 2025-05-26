<?php
/* template name: Contact Us */
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
<!-- get intouch -->
<div class="get-in-touch">
    <div class="container">
        <div class="get-in-wrap">
            <h4><?php the_field('get_intouch_title') ?></h4>
            <p class="get-p"><?php the_field('get_intouch_description') ?></p>
            <!-- <div class="row mb-40">
                <div class=" col-md-6">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class=" col-md-6">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-Mail">
                </div>
            </div>
            <div class="row mb-40">
                <div class=" col-md-6">
                    <input type="text" class="form-control" id="Title" placeholder="Title">
                </div>
                <div class=" col-md-6">
                    <input type="text" class="form-control" id="Company" placeholder="Company">
                </div>
            </div>
            <div class="row mb-40">
                <div class=" col-md-6">
                    <label for="Asia-Pacific" class="form-label">Asia-Pacific</label>
                    <select id="Asia-Pacific" class="form-select">
                        <option selected></option>
                        <option>...</option>
                    </select>
                </div>
                <div class=" col-md-6">
                    <label for="General-Information" class="form-label">General Information</label>
                    <select id="General-Information" class="form-select">
                        <option selected></option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="row mb-40">
                <div class="form-floating col-md-12">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div>
            </div>
            <div class="row justify-content-center mb-40">
                <div class=" col-sm-4 g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
            </div>
            <div class="row">
                <div class="Contact-button text-center">
                    <a href="#" class="btn-main">Contact us</a>
                    <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                </div>
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="b61aead" title="Contact form"]'); ?>

        </div>
    </div>
</div>
<!-- View Services -->
<div class="view-services">
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
                    <a href="<?php echo $button_url ?>" class="btn-main"><?php echo $button_title ?> <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span></a>
                    <?php
                endif;
                ?>           
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php get_footer(); ?>