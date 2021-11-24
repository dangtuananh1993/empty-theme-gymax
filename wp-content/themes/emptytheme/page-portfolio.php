<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emptytheme
 */

get_header();
?>

	<main id="primary" class="site-main">
        
		<!-- Main Content -->
        <div class="main-content">
            <!-- Product -->
            <div class="product ">
                <div class="product-inner container">
                    <ul class="product-bar">
                        <li ><a class="product-bar-name active" href="#top-sellers">top sellers</a></li>
                        <li ><a class="product-bar-name" href="#featured">featured</a></li>
                        <li ><a class="product-bar-name" href="#most-reviews">most reviews</a></li>
                    </ul>
                    <div class="product-cover">
                        <!-- Top Sellers -->
                    <div class="row active product-row" id="top-sellers" >
                        <!-- Product 1 -->
                        <div class="product-item">
                            <a href="">
                                <div class="product-item-img">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-1.png" alt="">
                                    <div class="content">
                                        <div class="prd-content-name">Title</div>
                                        <div class="prd-content-price">excerpt</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Product 1 -->
                        
                    </div>
                    <!-- End Top Sellers -->
                    <!-- Featured -->
                    <div class="row product-row" id="featured">
                        <!-- Product 1 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-1.png" alt="">
                            </div>
                            
                            <div class="content">
                                <div class="prd-content-name">Body Champ Cardio</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$342.00</div>
                            </div>
                        </div>
                        <!-- End Product 1 -->
                        <!-- Product 2 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-2.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Body Solid GCEC340</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$214.00</div>
                            </div>
                        </div>
                        <!-- End Product 2 -->
                        <!-- Product 3 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-3.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Bowflex BXE116 Elliptical</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$421.00</div>
                            </div>
                        </div>
                        <!-- End Product 3 -->
                        <!-- Product 4 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-4.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">ETHOS GHD</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$152.00</div>
                            </div>
                        </div>
                        <!-- End Product 4 -->
                        <!-- Product 5 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-5.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">AFG Pro 7.2AI Incline</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$252.00</div>
                            </div>
                        </div>
                        <!-- End Product 5 -->
                        <!-- Product 6 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-6.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Weight Bench</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$412.00</div>
                            </div>
                        </div>
                        <!-- End Product 6 -->
                        <!-- Product 7 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-7.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">ProForm Hiit Trainer Lite 5.9</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$300.00</div>
                            </div>
                        </div>
                        <!-- End Product 7 -->
                        <!-- Product 8 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-8.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Fitness Gear Pro</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$124.00</div>
                            </div>
                        </div>
                        <!-- End Product 8 -->
                    </div>
                    <!-- End Featured -->
                    <!-- Most Reviews -->
                    <div class="row product-row" id="most-reviews">
                        <!-- Product 1 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-1.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Body Champ Cardio</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$342.00</div>
                            </div>
                        </div>
                        <!-- End Product 1 -->
                        <!-- Product 2 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-2.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Body Solid GCEC340</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$214.00</div>
                            </div>
                        </div>
                        <!-- End Product 2 -->
                        <!-- Product 3 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-3.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Bowflex BXE116 Elliptical</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$421.00</div>
                            </div>
                        </div>
                        <!-- End Product 3 -->
                        <!-- Product 4 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-4.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">ETHOS GHD</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$152.00</div>
                            </div>
                        </div>
                        <!-- End Product 4 -->
                        <!-- Product 5 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-5.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">AFG Pro 7.2AI Incline</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$252.00</div>
                            </div>
                        </div>
                        <!-- End Product 5 -->
                        <!-- Product 6 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-6.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Weight Bench</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$412.00</div>
                            </div>
                        </div>
                        <!-- End Product 6 -->
                        <!-- Product 7 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-7.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">ProForm Hiit Trainer Lite 5.9</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$300.00</div>
                            </div>
                        </div>
                        <!-- End Product 7 -->
                        <!-- Product 8 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/product-8.png" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            
                            <div class="product-item-content">
                                <div class="prd-content-name">Fitness Gear Pro</div>
                                <div class="space"></div>
                                <div class="prd-content-price">$124.00</div>
                            </div>
                        </div>
                        <!-- End Product 8 -->
                    </div>
                    <!-- End Most Reviews -->
                    </div>
                </div>
            </div>
            <!-- End Product -->
            
            
        </div>
        <!-- End Main Content -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
