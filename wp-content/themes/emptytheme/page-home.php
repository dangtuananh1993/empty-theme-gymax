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
// Slider content
$title2 = get_field('title_slider_2');
$slogan2 = get_field('slogan_slider_2');
$content2 = get_field('content_slider_2');
$button2 = get_field('content_button_slider_2');
 ?>
	<main id="primary" class="site-main">
        <!-- Header -->
        <div class="header">
            <!-- Slider -->
            <div class="slider">
                <?php if(have_rows('home_page_slider')):?>
                    <?php while(have_rows('home_page_slider')):the_row();?>
                        <?php 
                        $image_home_slider = get_sub_field('image');
                        // echo "<pre>";
                        // print_r($image_home_slider);
                        // echo "</pre>";
                        // wp_die();
                        $picture_home_slider = $image_home_slider['sizes']['slide'];
                        ?>
                        <!-- Slider 1 -->
                            <div class="slider-item" style="background-image: url(<?php echo $picture_home_slider;?>);
                                                            min-height: 594px;
                                                            background-size: cover;
                                                            background-position: right 30% top;
                                                            background-repeat: no-repeat;">
                                <img src="<?php echo $picture_home_slider; ?>" alt="">
                                <div class="slider-content container">
                                    <div class="row">
                                        <div class="slider-content-inner">
                                            <div class="title"><?php echo the_sub_field('title'); ?></div>
                                            <div class="summary"><?php echo the_sub_field('slogan'); ?></div>
                                            <div class="content"><?php echo the_sub_field('content'); ?></div>
                                            <div class="btn"><a href=""><?php echo the_sub_field('button_text'); ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slider 1 -->
                    <?php endwhile; ?>
                <?php endif;?> 
            </div>
            <!-- End Slider -->
        </div>
        <!-- End Header --> 
        <!-- Banner -->
        <?php
        // banner 1
        $image_banner_1 = get_field('img_banner_1');
        if($image_banner_1){
        $picture_banner_1 = $image_banner_1['sizes']['banner-image'];
        }
        // banner 2
        $image_icon_banner_2 = get_field('img_banner_2');
        if($image_icon_banner_2){
        $picture_icon_banner_2 = $image_icon_banner_2['sizes']['banner-image'];
        }
        $title_banner_2 = get_field('title_banner_2');
        $content_banner_2 = get_field('content_banner_2');
        echo "<pre>";
        // var_dump($image_icon_banner_2);
        echo "</pre>";
        //banner 3 img_banner_4
        $image_banner_3 = get_field('img_banner_3');
        if($image_banner_3){
            $picture_banner_3 = $image_banner_3['sizes']['banner-image'];
        }
        // banner 4
        $image_icon_banner_4 = get_field('img_banner_4');
        if($image_icon_banner_4){
        $picture_icon_banner_4 = $image_icon_banner_4['sizes']['banner-image'];
        }
        $title_banner_4 = get_field('title_banner_4');
        $content_banner_4 = get_field('content_banner_4');
        //banner 5
        $image_banner_5 = get_field('img_banner_5');
        if($image_banner_5){
            $picture_banner_5 = $image_banner_5['sizes']['banner-image'];
        }
        //banner 6
        $image_icon_banner_6 = get_field('img_banner_6');
        if($image_icon_banner_6){
        $picture_icon_banner_6 = $image_icon_banner_6['sizes']['banner-image'];
        }
        $title_banner_6 = get_field('title_banner_6');
        $content_banner_6 = get_field('content_banner_6');
        ?>
         <?php /**<div><img src="<?php echo $image['sizes']['thumbnail']?>" alt=""></div>*/?>
        <div class="banner">
                <div class="banner-inner container">
                    <div class="row">
                        <!-- img-dumbbells -->
                        <div class="dumbbells-img banner-inner-item">
                            <div class="banner-col">
                                <img src="<?php echo $picture_banner_1?>" alt="" class="dumbbells-img">
                            </div>
                        </div>
                        <!-- End img-dumbbells -->
                        <!-- Strength Icon -->
                        <div class=" strength-icon banner-inner-icon">
                            <div class="banner-col">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/bg-white-390x250.png" alt="" class="dumbbells-img">
                            </div>
                            <div class="strength-banner banner-content">
                                <div class="banner-content-icon"><img src="<?php echo $picture_icon_banner_2?>" alt=""></div>
                                <div class="banner-content-title"><?php echo $title_banner_2?></div>
                                <div class="space"></div>
                                <div class="banner-content-summary"><?php echo $content_banner_2?></div>
                            </div>
                        </div>
                        <!-- End Strength Icon -->
                        <!-- Power img -->
                        <div class="power-img banner-inner-item">
                            <div class="banner-col">
                                <img src="<?php echo $picture_banner_3?>" alt="" class="dumbbells-img">
                            </div>
                        </div>
                        <!-- End Power Img -->
                        <!-- Dumbbells icon -->
                        <div class="dumbbells-icon banner-inner-icon">
                            <div class="banner-col">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/bg-white-390x250.png" alt="">
                            </div>
                            <div class="dumbbells-banner banner-content">
                                <div class="banner-content-icon"><img src="<?php echo $picture_icon_banner_4?>" alt=""></div>
                                <div class="banner-content-title"><?php echo $title_banner_4?></div>
                                <div class="space"></div>
                                <div class="banner-content-summary"><?php echo $content_banner_4?></div>
                            </div>
                        </div>
                        <!-- End Dumbbells icon -->
                        <!-- Strength img -->
                        <div class="strength-img banner-inner-item">
                            <div class="banner-col">
                                <img src="<?php echo $picture_banner_5?>" alt="">
                            </div>
                        </div>
                        <!-- End Strength img -->
                        <div class="power-icon banner-inner-icon">
                            <div class="banner-col">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/bg-white-390x250.png" alt="">
                            </div>
                            <div class="power-banner banner-content">
                                <div class="banner-content-icon"><img src="<?php echo $picture_icon_banner_6?>" alt=""></div>
                                <div class="banner-content-title"><?php echo $title_banner_6?></div>
                                <div class="space"></div>
                                <div class="banner-content-summary"><?php echo $content_banner_6?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner -->
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
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 8,
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        global $product;
                        $permalink = $product->get_permalink(); 
                        ?>
                        <!-- Product 1 -->
                        <div class="product-item">
                                <div class="product-item-img">
                                    <a href="<?php echo $permalink?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID, 'post-thumbnail');?>" alt="">
                                    </a>
                                    <div class="product-item-icon">
                                        <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                        <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                        <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                        <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                                    </div>
                                    <a href="https://www.businessbloomer.com/woocommerce-easily-get-product-info-title-sku-desc-product-object/">
                                    <div class="product-item-content">
                                        <div class="prd-content-name"><?php the_title(); ?></div>
                                        <div class="space"></div>
                                        <div class="prd-content-price"><?php echo $product->get_price_html(); ?></div>
                                    </div>
                                    </a>
                                </div>
                        </div>
                        <!-- End Product 1 -->
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                        
                    </div>
                    <!-- End Top Sellers -->
                    <!-- Featured -->
                    <div class="row product-row" id="featured">
                        <!-- ======================================= -->
                    <?php
                    $args = array(
                        'posts_per_page' => 8,
                        'post_type'      => 'product',
                        'post_status'    => 'publish',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                                'operator' => 'IN',
                                ),
                            )  
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    global $product; ?>   
                     <!--=========================== ========================== -->
                    
                        <!-- Product 1 -->
                        <div class="product-item">
                            <div class="product-item-img">
                                <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID, 'post-thumbnail');?>" alt="">
                                <div class="product-item-icon">
                                <div class="prd-icon"><i class="fas fa-shopping-basket"></i></div>
                                <div class="prd-icon"><i class="fas fa-eye"></i></div>
                                <div class="prd-icon"><i class="fas fa-heart"></i></div>
                                <div class="prd-icon"><i class="fas fa-exchange-alt"></i></div>
                            </div>
                            </div>
                            <div class="product-item-content">
                                <div class="prd-content-name"><?php the_title()?>;</div>
                                <div class="space"></div>
                                
                                <?php
                                // function action_woocommerce_after_shop_loop_item_title(){
                                //     echo "<div class='product-meta'><span class='product-meta-label'>my text here 1</span></div>";
                                // }?>
                                <div class="prd-content-price"><?php echo $product->get_price_html(); ?></div>
                            </div>
                        </div>
                        <!-- End Product 1 -->
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                        
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
            <!-- Customer Said -->
            <div class="customer-said">
                <div class="what-they-said">
                    See What They Said About Us
                </div>
                <div class="slider-2">
                    <?php if(have_rows('customer_said_slider')): ?>
                                <?php while(have_rows('customer_said_slider')):the_row();?>
                                <?php 
                                $image_customer_said = get_sub_field('image');
                                $picture_customer_said = $image_customer_said['sizes']['thumbnail'];
                                // echo "<pre>";
                                // print_r($image_customer_said);
                                // wp_die();
                                ?>
                                    <!-- Slider 1 -->
                                    <div class="slider-item-they-said">
                                            <div class="slider-item-they-said-img"><img class="img-cover" src="<?php echo get_template_directory_uri() . '/' ?>img/white-background.png" alt=""></div>
                                            <div class="slider-item-they-said-inner container">
                                                <div class="row">
                                                    <div class="col-1"></div>
                                                    <div class="slider-item-they-said-content ">
                                                        <div class="sld-icon"><img src="<?php echo $picture_customer_said;?>" alt=""></div>
                                                        <div class="sld-summary"><?php echo the_sub_field('customer_comment')?></div>
                                                        <div class="sld-customer-name"><?php echo the_sub_field('name')?></div>
                                                        <div class="sld-happy"><?php echo the_sub_field('happy_client')?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Slider 1 -->
                                <?php endwhile;?>
                    <?php endif; ?>        
                </div>
             </div>   
            <!-- End Customer Said -->
            <div class="brand-line-outer">
                <div class="brand-line"></div>
            </div>
            <!-- Brand -->
            <div class="brand">
                <div class="container">
                    <div class="row">
                        <?php 
                        $image_brands = get_field('brand');
                        if($image_brands):?>
                            <?php foreach($image_brands as $image_brand):?>        
                                <div class="brand-item">
                                    <a href=""><img src="<?php echo $image_brand['sizes']['thumbnail']?>" alt=""></a>                        
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>    
                    </div>
                </div>
            </div>
            <!-- End Brand -->
        </div>
        <!-- End Main Content -->
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
