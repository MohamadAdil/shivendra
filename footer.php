<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shivendra
 */

?>

	
<!-- Footer -->
<footer style="background-color: #111111;">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-txt">
                            <h3 class=""><?php the_field('title','option')?></h3>
                            <div class="footer-button">
								<?php
								// $button = get_field('button','option');
								// $title = isset($button['title'])? $button['title'] :'';
								// $url =isset($button['url'])? $button['url'] : '';
								// if($url):
									?>
                                <a href="<?php// echo $url?>" class="btn-main"><?php //echo $title?></a>
								<?php
								//endif;
								?>
                                <span class="btn-main-icon"><i class="fa-solid fa-arrow-up"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="list-data">
                                    <h5><?php the_field('address_heading','option')?></h5>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-location-dot me-2 "></i>
											<?php
												// $address_detail = get_field('address_detail','option');
												// $title = isset($address_detail['title'])? $address_detail['title'] :'';
												// $url =isset($address_detail['url'])? $address_detail['url'] : '';
												// if($url):
													?>
                                            <a href="<?php// echo $url?>"><?php// echo $title?></a>
											<?php
											//endif;
											?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-data">
                                    <h5><?php the_field('company_contact','option')?></h5>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-envelope me-2"></i>
											<?php
												// $company_mail = get_field('company_mail','option');
												// $title = isset($company_mail['title'])? $company_mail['title'] :'';
												// $url =isset($company_mail['url'])? $company_mail['url'] : '';
												// if($url):
													?>
                                            <a href="<?php// echo $url?>"><?php// echo $title;?></a>
											<?php
											//endif;
											?>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone me-2"></i>
                                            <a href="tell:"><?php //the_field('number','option') ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->
                <!--  -->
                <div class="footer-bottom">
				<?php
						wp_nav_menu(
							array(
								'menu' => 'Footer Menu',
								
								'container' => false,
								
							)
						);
						?>
                        
                    <div class="social-icons">

                    <?php
                        $social_media = get_field('social_media','option');
                        if($social_media){
                            foreach($social_media as $media){
                                ?>
                            <a href="<?php echo $media['social_media_url'];?>">
                            <i class="<?php echo $media['social_media_icon_class'];?>"></i>
                        </a>
                                <?php
                            }
                        }
                        ?>

                        <!-- <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-spotify"></i>
                        </a> -->
                    </div>
					<?php
						$copyright = get_field('copyright','option');
						$title = isset($copyright['title'])? $copyright['title'] :'';
						$url =isset($copyright['url'])? $copyright['url'] : '';
						if($url):
							?>
                    <a href="<?php echo $url?>" class="copyright"><?php echo $title;?></a>
					<?php
					endif;
					?>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>

</body>
</html>
