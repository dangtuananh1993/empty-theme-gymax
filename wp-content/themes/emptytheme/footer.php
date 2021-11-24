<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emptytheme
 */

?>
	<footer id="colophon" class="site-footer">
		<!-- Footer -->
        <div class="footer">
            <div class="footer-inner">
                <div class="container footer-top">
                    <div class="footer-top-logo"><a href="http://localhost/anhdt/"><img src="<?php echo get_template_directory_uri() . '/' ?>img/logo.png" alt=""></a></div>
                    <div class="footer-top-content"><?php echo get_field('message','options');?></div>
                    <div class="footer-top-icon">
                        <?php $social_networks = get_field('social_network', 'options');?>
                        <?php foreach($social_networks as $social_network):?>
                        <div class="ft-top-icon face-icon"><a href="<?php echo $social_network['link'];?>"><?php echo $social_network['social_network'];?></a></div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="footer-line-outer">
                    <div class="footer-line"></div>
                </div>
                <div class="container footer-bot">
                    <div class="row">
                        <!-- Colum 1 -->
                        <div class="footer-bot-col">
                            <div class="ft-title"><?php echo get_field('first_column_name','options');?></div>
                            <div class="ft-detail">
                                <div class="detail-1"><a href=""><i class="fas fa-map-marker-alt"></i></a><a href="https://www.google.com/maps/place/200+Lincoln+Ave,+Salinas,+CA+93901,+Hoa+K%E1%BB%B3/@36.6749318,-121.6600425,17z/data=!3m1!4b1!4m5!3m4!1s0x808df8c23b956f4d:0xcc79b62dcee79070!8m2!3d36.6749275!4d-121.6578538?hl=vi-VN"> <?php echo get_field('first_column_address','options');?></a></div>
                                <div class="detail-1"><a href=""><i class="fas fa-phone"></i></a><a href="tel:<?php echo get_field('firt_column_phone_number','options');?>"><?php echo get_field('firt_column_phone_number','options');?></a></a></div>
                                <div class="detail-1"><a href=""><i class="fas fa-envelope"></i></a><a href="mailto:gymax@example.com"><?php echo get_field('first_column_email','options');?></a></div>
                                <div class="detail-1"><a href=""><i class="fas fa-clock"></i></a><a href="#"><?php echo get_field('first_column_working_hours','options');?></a></div>
                            </div>
                        </div>
                        <!-- End Col 1 -->
                        <!-- Colum 2 -->
                        <div class="footer-bot-col">
                            <div class="ft-title">My Account</div>
                            <div class="ft-detail">
                            <?php 
                                    $location = get_nav_menu_locations();
                                    $menu_id = $location['Menu-footer-my-account'];
                                    $footer_menu = wp_get_nav_menu_items($menu_id);
                                    // echo "<pre>";
                                    // print_r($location);
                                    // print_r($menu_id);
                                    // echo "</pre>";
                                    foreach($footer_menu as $menu_item){
                                        // Get parent menu items
                                        if(!$menu_item->menu_item_parent){
                                            $child_menu = [];
                                            // Get child menu items
                                            foreach($footer_menu as $menu ) {
                                                if($menu->menu_item_parent==$menu_item->ID){
                                                    $child_menu[] = $menu;
                                                }
                                            }
                                            $has_child = !empty($child_menu)&&is_array($child_menu);
                                            if(!$has_child){
                                                ?>
                                                <div class="detail-1"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="detail-1">
                                                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                                <?php
                                                foreach($child_menu as $child_mn){
                                                    ?>
                                                    <div class="detail-1 test"><a href="<?php echo $child_mn->url; ?>"><?php echo $child_mn->title; ?></a></div><?php
                                                }
                                                ?></div><?php
                                            }
                                        }
                                    }
                                ?>
                                <!-- <div class="detail-1"><a href="">My account</a></div>
                                <div class="detail-1"><a href="">check out</a></div>
                                <div class="detail-1"><a href="">register</a></div>
                                <div class="detail-1"><a href="">Login</a></div> -->
                            </div>
                        </div>
                        <!-- End Col 2 -->
                        <!-- Colum 3 -->
                        <div class="footer-bot-col">
                            <div class="ft-title">Information</div>
                            <div class="ft-detail">
                                <?php 
                                    $location = get_nav_menu_locations();
                                    $menu_id = $location['Menu-footer-information'];
                                    $footer_menu = wp_get_nav_menu_items($menu_id);
                                    foreach($footer_menu as $menu_item){
                                        // Get parent menu items
                                        if(!$menu_item->menu_item_parent){
                                            $child_menu = [];
                                            // Get child menu items
                                            foreach($footer_menu as $menu ) {
                                                if($menu->menu_item_parent==$menu_item->ID){
                                                    $child_menu[] = $menu;
                                                }
                                            }
                                            $has_child = !empty($child_menu)&&is_array($child_menu);
                                            if(!$has_child){
                                                ?>
                                                <div class="detail-1"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="detail-1">
                                                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                                <?php
                                                foreach($child_menu as $child_mn){
                                                    ?>
                                                    <div class="detail-1 test"><a href="<?php echo $child_mn->url; ?>"><?php echo $child_mn->title; ?></a></div><?php
                                                }
                                                ?></div><?php
                                            }
                                        }
                                    }
                                ?>
                                <!-- <div class="detail-1"><a href="">Contact us</a></div>
								<div class="detail-1">
                                    <a href="">About us</a>
                                    <div class="detail-1 test"><a href="">About us 1</a></div>
                                </div>
                                
                                <div class="detail-1"><a href="">Terms of user</a></div>
                                <div class="detail-1"><a href="">Privacy Policy</a></div> -->
                            </div>
                        </div>
                        <!-- End Col 3 -->
                        <!-- Colum 4 -->
                        <div class="footer-bot-col">
                            <div class="ft-title">Quick link</div>
                            <div class="ft-detail">
                            <?php 
                                    $location = get_nav_menu_locations();
                                    $menu_id = $location['Menu-footer-quicklink'];
                                    $footer_menu = wp_get_nav_menu_items($menu_id);
                                    foreach($footer_menu as $menu_item){
                                        // Get parent menu items
                                        if(!$menu_item->menu_item_parent){
                                            $child_menu = [];
                                            // Get child menu items
                                            foreach($footer_menu as $menu ) {
                                                if($menu->menu_item_parent==$menu_item->ID){
                                                    $child_menu[] = $menu;
                                                }
                                            }
                                            $has_child = !empty($child_menu)&&is_array($child_menu);
                                            if(!$has_child){
                                                ?>
                                                <div class="detail-1"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="detail-1">
                                                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                                <?php
                                                foreach($child_menu as $child_mn){
                                                    ?>
                                                    <div class="detail-1 test"><a href="<?php echo $child_mn->url; ?>"><?php echo $child_mn->title; ?></a></div><?php
                                                }
                                                ?></div><?php
                                            }
                                        }
                                    }
                                ?>    
                                <!-- <div class="detail-1"><a href="">New user</a></div>
                                <div class="detail-1"><a href="">Help center</a></div>
                                <div class="detail-1"><a href="">Report spam</a></div>
                                <div class="detail-1"><a href="">FAQs</a></div> -->
                            </div>
                        </div>
                        <!-- End Col 4 -->
                    </div>
                </div>
                <div class="">
                    <div class="copyright"><div class="copyright-content"><?php echo get_field('copyright','options');?></div></div>
                </div>
            </div>
        </div>
        <!-- End Footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
