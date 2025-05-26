<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivendra
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'shivendra'); ?></a>

        <header id="masthead" class="site-header">

            <div class="container">
                <nav class="navbar navbar-expand-md">
                    <?php
                    $logo_button = get_field('logo_button','option');
                    $button_url = isset($logo_button['url'])? $logo_button['url'] : '';
                    if($button_url):
                        ?>
                    <a class=" navbar-brand" href="<?php echo $button_url; ?>">
                        <img src="<?php the_field('image', 'option') ?>" alt="logo">
                    </a>
                    <?php
                    endif;
                    ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="fa-solid fa-bars" style="color: #fff;"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'Header Menu',
                                'menu_class' => 'navbar-nav ms-auto',
                                'container' => false,
                                'add_li_class' => 'nav-item'
                            )
                        );
                        ?>

                        <div class="header-button">
                            <?php
                            $button = get_field('button', 'option');
                            $title = isset($button['title']) ? $button['title'] : '';
                            $url = isset($button['url']) ? $button['url'] : '';
                            if ($url):
                                ?>
                                <a href="<?php echo $url ?>" class="btn-main"><?php echo $title ?><span
                                        class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span></a>
                                <?php
                            endif;
                            ?>

                        </div>
                    </div>
                </nav>
            </div>






        </header><!-- #masthead -->