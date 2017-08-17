<?php
function ssw_enqueue_scripts (){
    wp_register_style('ssw_bootstrap_css',get_theme_file_uri('/assets/plugins/bootstrap/css/bootstrap.min.css'));
    wp_register_style('ssw_fontawesome_css',get_theme_file_uri('/assets/plugins/font-awesome/css/font-awesome.min.css'));
    wp_register_style('ssw_animate_css',get_theme_file_uri('/assets/pages/css/animate.css'));
    wp_register_style('ssw_fancybox_css',get_theme_file_uri('/assets/plugins/fancybox/source/jquery.fancybox.css'));
    wp_register_style('ssw_carousel_css',get_theme_file_uri('/assets/plugins/owl.carousel/assets/owl.carousel.css'));
    wp_register_style('ssw_components_css',get_theme_file_uri('/assets/pages/css/components.css'));
    wp_register_style('ssw_slider_css',get_theme_file_uri('/assets/pages/css/slider.css'));
    wp_register_style('ssw_style_css',get_theme_file_uri('/assets/corporate/css/style.css'));
    wp_register_style('ssw_responsive_css',get_theme_file_uri('/assets/corporate/css/style-responsive.css'));
    wp_register_style('ssw_red_css',get_theme_file_uri('/assets/corporate/css/themes/red.css'));
    wp_register_style('ssw_custom_css',get_theme_file_uri('/assets/corporate/css/custom.css'));
    wp_register_style('ssw_portfolio_css',get_theme_file_uri('/assets/pages/css/portfolio.css'));

    wp_register_script('ssw_respond_js',get_theme_file_uri('/assets/plugins/respond.min.js'));
    wp_register_script('ssw_jquery_js',get_theme_file_uri('/assets/plugins/jquery.min.js'));
    wp_register_script('ssw_migrate_js',get_theme_file_uri('/assets/plugins/jquery-migrate.min.js'));
    wp_register_script('ssw_bootstrap_js',get_theme_file_uri('/assets/plugins/bootstrap/js/bootstrap.min.js'));
    wp_register_script('ssw_back_js',get_theme_file_uri('/assets/corporate/scripts/back-to-top.js'));
    wp_register_script('ssw_fancybox_js',get_theme_file_uri('/assets/plugins/fancybox/source/jquery.fancybox.pack.js'));
    wp_register_script('ssw_carousel_js',get_theme_file_uri('/assets/plugins/owl.carousel/owl.carousel.min.js'));
    wp_register_script('ssw_layout_js',get_theme_file_uri('/assets/corporate/scripts/layout.js'));
    wp_register_script('ssw_bs_js',get_theme_file_uri('/assets/pages/scripts/bs-carousel.js'));
    wp_register_script('ssw_mixitup_js',get_theme_file_uri('/assets/plugins/jquery-mixitup/jquery.mixitup.min.js'));
    wp_register_script('ssw_portfolio_js',get_theme_file_uri('/assets/pages/scripts/portfolio.js'));

    if( is_page( 'services' ) ) {
        wp_enqueue_style('ssw_bootstrap_css');
        wp_enqueue_style('ssw_fontawesome_css');
        wp_enqueue_style('ssw_fancybox_css');
        wp_enqueue_style('ssw_components_css');
        wp_enqueue_style('ssw_style_css');
        wp_enqueue_style('ssw_portfolio_css');
        wp_enqueue_style('ssw_responsive_css');
        wp_enqueue_style('ssw_red_css');
        wp_enqueue_style('ssw_custom_css');

        wp_enqueue_script('ssw_respond_js');
        wp_enqueue_script('ssw_jquery_js');
        wp_enqueue_script('ssw_migrate_js');
        wp_enqueue_script('ssw_bootstrap_js');
        wp_enqueue_script('ssw_back_js');
        wp_enqueue_script('ssw_fancybox_js');
        wp_enqueue_script('ssw_mixitup_js');
        wp_enqueue_script('ssw_layout_js');
        wp_enqueue_script('ssw_portfolio_js');
    }else{
        wp_enqueue_style('ssw_bootstrap_css');
        wp_enqueue_style('ssw_fontawesome_css');
        wp_enqueue_style('ssw_animate_css');
        wp_enqueue_style('ssw_fancybox_css');
        wp_enqueue_style('ssw_carousel_css');
        wp_enqueue_style('ssw_components_css');
        wp_enqueue_style('ssw_slider_css');
        wp_enqueue_style('ssw_style_css');
        wp_enqueue_style('ssw_responsive_css');
        wp_enqueue_style('ssw_red_css');
        wp_enqueue_style('ssw_custom_css');

        wp_enqueue_script('ssw_respond_js');
        wp_enqueue_script('ssw_jquery_js');
        wp_enqueue_script('ssw_migrate_js');
        wp_enqueue_script('ssw_bootstrap_js');
        wp_enqueue_script('ssw_back_js');
        wp_enqueue_script('ssw_fancybox_js');
        wp_enqueue_script('ssw_carousel_js');
        wp_enqueue_script('ssw_layout_js');
        wp_enqueue_script('ssw_bs_js');
    }
}
add_action('wp_enqueue_scripts','ssw_enqueue_scripts');

function ssw_taxsonomies(){
    $taxonomy = 'generic';
    $object_type = 'services';
    $args = array(
        'label' => 'ServiceType'
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}

add_action('init' , 'ssw_taxsonomies');

function ssw_service(){
    $post_type = 'services';
    $labels = array(
        'name' => 'Services' ,
        'singular_name' => 'Service' ,
        'add_new' => 'Add Service' ,
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'new_item' => 'New Service',
        'view_item' => 'View Service',
        'view_items' => 'View Service',
        'search_items' => 'Search Service',
        'items_list' => 'Service list'
    );
    $taxonomies = array(
        'category'
    );
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'page-attributes',
        'post-formats'
    );
    $args = array(
        'labels' => $labels,
        'show_in_nav_menus'=> true,
        'exclude_from_search' =>false,
        'public' => true ,
        'show_in_menu' => true,
        'menu_position' => 10 ,
        'menu_icon' => 'dashicons-video-alt',
        'taxonomies' => $taxonomies,
        'supports' => $supports
    );
    register_post_type( $post_type, $args );
}

add_action('init' , 'ssw_service');

/*function price_input(){
    $price = get_post_meta(get_the_ID(),'book_price',true);
    ?>
    <fieldset>
        <label for="s_price">Price</label>
        <input type="text" name="s_price" id="s_price" value="<?php echo $s_price; ?>"><br>
        <label for="s_type">Type</label>
        <select name="options[service]" id = "s_type">
            <option value="1" <?php if ( $options['service'] == 1 ) echo 'selected="selected"'; ?>>Built Theme</option>
            <option value="2" <?php if ( $options['service'] == 2 ) echo 'selected="selected"'; ?>>Customize Theme</option>
            <option value="3" <?php if ( $options['service'] == 3 ) echo 'selected="selected"'; ?>>Installtion</option>
            <option value="4" <?php if ( $options['service'] == 4 ) echo 'selected="selected"'; ?>>Plugin</option>
        </select><br>
        <label for="s_desc">Description</label>
        <textarea name="s_desc" id="s_id"></textarea><br>
        <label for="s_img">Image</label>
        <input type="file" name="s_image" id="s_img" value="<?php echo $image; ?>"><br>
    </fieldset>
    <?php
}*/

function price_meta_box(){
    add_meta_box('price_meta_box_input','Service Price','price_input',null,'side','default',null);

}

add_action('add_meta_boxes','price_meta_box');

function ssw_save_metabox_input($post_id){
    if(isset($_POST['price'])){
        update_post_meta($post_id,'s_price',$_POST['price']);
    }
    if(isset($_POST['options[service]'])){
        update_post_meta($post_id,'s_type',$_POST['options[service]']);
    }
    if(isset($_POST['desc'])){
        update_post_meta($post_id,'s_desc',$_POST['desc']);
    }
    if(isset($_POST['image'])){
        update_post_meta($post_id,'s_img',$_POST['image']);
    }
}
add_action('save_post','ssw_save_metabox_input');

add_action( 'init', 'ssw_register_top_menu' );
function ssw_register_top_menu() {
    register_nav_menu( 'top_nav', 'Top Menu' );
}

add_filter('nav_menu_css_class' , 'ssw_special_nav_class' , 10 , 2);

function ssw_special_nav_class ($classes) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function ssw_tube_shortcode($atts) {
    $att = shortcode_atts(array(
            'w' => '640',
            'h' => '360',
            'url' => 'pUdSco-ZKt8'
        ),$atts,'tube'
    );
    return '<iframe src="https://www.youtube.com/embed/"'.$att['url'].'"?list=PLYp_Kd32Xvcqs_wDzvOigWoa57sTNno0M&amp;ecver=2" width="'.$att['w'].'" height="'.$att['h'].'" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode( 'tube', 'ssw_tube_shortcode' );

function ssw_serve_shortcode($atts) {
    $att = shortcode_atts(array(
        'icon' => 'fa',
        'icon1' => 'fa-cog'
    ),$atts,'serve'
    );
    return '<div class="media">'.
                '<div class="media-body text-right">'.
					'<h4 class="media-heading">Service 1</h4>'.
					'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>'.
				'</div>'.
                '<div class="media-right">'.
                    '<i class="'.$att['icon'].' '.$att['icon1'].'"></i>'.
                '</div>'.
			'</div>';
}
add_shortcode( 'serve', 'ssw_serve_shortcode' );