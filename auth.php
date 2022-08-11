<?php

/*
Template Name: Новый шаблон формы авторизации
*/

if (!defined('ABSPATH')) {
    exit;
}

// Header and styles
add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts()
{
    wp_register_style('custom', '/wp-content/themes/infoavtobaza.site/assets/custom.min.css');
    wp_register_style('style', '/wp-content/themes/infoavtobaza.site/style.css');
    wp_enqueue_style('custom');
    wp_enqueue_style('style');
    wp_enqueue_script('jquery_script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
}
get_header();
?>

<style>
    .page p {
        font-size: 21px;
    }
</style>

<?php
// Include classes
require_once('Classes/AbstractClass.php');
require_once('Classes/CrestCustom.php');

// Auth
if (isset($_GET['company']) && $_GET['company']) {
    $directory = $_GET['company'];
} else {
    $directory = '';
}

$iniArr = parse_ini_file('Classes/companies/'. $directory . '/app.ini');
$ufCrmKey = $iniArr['ufCrmKey'];
$abstractData = new AbstractClass($ufCrmKey);

if (isset($_REQUEST['token_v1'])) {
    $user = $abstractData->auth($directory);
}

if (isset($user['total']) && $user['total'] == 0) {
    if ($user == false) {
        $this->redirect('knowledgebase/', 'Предоставленные данные не корректны! Свяжитесь с представителем Вашего сертификата для получения технической консультации', 403, 'Error');
    } else {
        $this->redirect('knowledgebase/', 'Предоставленные данные не корректны! Свяжитесь с представителем Вашего сертификата для получения технической консультации', 403, 'Error');
    }
}
?>

<!-- Render content -->
<i id="burger" class="material-icons" style="width: 80px; height: 80px;" onclick="burger()">menu</i>
<i id="quit" class="material-icons" style="width: 80px; height: 80px;" onclick="quit()">clear</i>

<div id="links">
    <div class="spisok" >
        <?php
        $content = wp_nav_menu(array('echo' => 0, 'theme_location' => 'menu', 'container'=>false));
        echo strip_tags($content, '<a>');
        ?>
    </div>
</div>

<article class="section page type-page status-publish has-post-thumbnail hentry <?php if (!is_front_page()) {
            echo 'page_txt';
        } ?>">
    <section class="section">
        <div class="container">
            <?php
            if (isset($_SESSION['auth'])) {
                // If logged in show profile and database
                include("wp-content/themes/infoavtobaza.site/partials/profile.tmpl.php");
                include("wp-content/themes/infoavtobaza.site/partials/database.php");
                include("wp-content/themes/infoavtobaza.site/partials/scripts.html");
            } else {
                // If not logged in show site content and login form
                if (have_posts()) : while (have_posts()) : the_post();
                the_content();
                endwhile;
                endif;

                if (!session_id()) {
                    session_start();
                    if (isset($_SESSION['message'])) {
                        $message = $_SESSION['message'];
                        $level = $_SESSION['level'];
                        // We can variable message here
                        if ($level == 'Error') {
                            echo '<p style="color:red">' . $message . '</p>';
                        }
                    }
                    session_destroy();
                }

                include("wp-content/themes/infoavtobaza.site/partials/select_form.tmpl.php");
                if (isset($_GET) && !empty($_GET)) {
                    include("wp-content/themes/infoavtobaza.site/partials/auth_form.tmpl.php");
                }
            }
            ?>
        </div>
    </section>
</article>

<?php get_footer(); ?>
