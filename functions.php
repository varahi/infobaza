<?php if (! defined('ABSPATH')) {
    exit;
}
//регистрируем меню
register_nav_menu('menu', 'Основное меню');

/* функция добавляет класс адаптивности к таблицам  при выводе the_content()  */
function redtable($content)
{
    $content = str_replace('<table', '<div class="responsive"><table class="table" ', $content);
    return $content;
}
add_filter('the_content', 'redtable');



//убираем application/ld+json из плагина Yoast SEO (микроразметка json)
function wpplus_remove_yoast_json($data)
{
    $data = array();
    return $data;
}
add_filter('wpseo_json_ld_output', 'wpplus_remove_yoast_json', 10, 1);

//убираем ненужные css плагинов из header


// отключаем Emoji смайлики
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// отключаем мусор в header
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
// отключаем wp-json в header
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

function genesis()
{
} //убираем rel="next" на главной в плагине SeoYoast

add_filter('wpseo_next_rel_link', '__return_false');
add_filter('wpseo_prev_rel_link', '__return_false');


// убираем короткую ссылку в хедере
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);



 
/* регистрируем шорткод для вывода телефона  */
add_shortcode('show_telephone', 'show_telephone');
function show_telephone($atts)
{
    $tel = get_theme_mod('tel');
    $tel_clear = preg_replace("/[^0-9]/", "", $tel);
    $content = '
<div class="tel"><img src="https://infoavtobaza.site/wp-content/uploads/2022/03/telefon-ikonka.png" alt="" /><a href="tel:+'.$tel_clear.'">'.$tel.'</a></div>';
    return $content;
}

/* регистрируем шорткод для вывода email  */
add_shortcode('show_email', 'show_email');
function show_email($atts)
{
    $email = get_theme_mod('email');
    $content = '
<p style="text-align: left;"><a href="mailto:'.$email.'">'.$email.'</a></p>';
    return $content;
}
 
 /* регистрируем шорткод для вывода контактов на мобильном  */
add_shortcode('show_contact_mob', 'show_contact_mob');
function show_contact_mob($atts)
{
    $tel = get_theme_mod('tel');
    $email = get_theme_mod('email');
    $tel_clear = preg_replace("/[^0-9]/", "", $tel);
    $content = '
<ul>
<li><a href="tel:+'.$tel_clear.'">'.$tel.'</a></li>
<li><a href="mailto:'.$email.'">'.$email.'</a></li>
</ul>';
    return $content;
}


    /*кастомайзер*/
    add_action('customize_register', function ($customizer) {
        $customizer->add_section(
        'section_1',
        array(
            'title' => 'Телефон и email',
            'description' => '',
            'priority' => 1,
        )
    );
    
    
    
        $customizer->add_setting(
        'email',
        array('default' => '')
    );
    
        $customizer->add_control(
        'email',
        array(
            'label' => 'email',
            'section' => 'section_1',
            'type' => 'text',
        )
    );
    
        
        $customizer->add_setting(
        'tel',
        array('default' => '')
    );
    
        $customizer->add_control(
        'tel',
        array(
            'label' => 'Телефон',
            'section' => 'section_1',
            'type' => 'text',
        )
    );
    });

/*Настройки шапки сайта*/
    add_action('customize_register', function ($customizer) {
        $customizer->add_section(
        'section_2',
        array(
            'title' => 'Настройка футера',
            'description' => '',
            'priority' => 2,
        )
    );


        $customizer->add_setting('img_logo_footer');
        $customizer->add_control(new WP_Customize_Image_Control($customizer, 'img_logo_footer', array(
    'label'    => 'Загрузить логотип в footer',
    'section'  => 'section_2',
    'settings' => 'img_logo_footer',
)));



        $customizer->add_setting(
        'footer_txt',
        array('default' => '')
    );
    
        $customizer->add_control(
        'footer_txt',
        array(
            'label' => 'Текст в футере',
            'section' => 'section_2',
            'type' => 'textarea',
        )
    );
    });
