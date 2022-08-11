<?php if (! defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<body>




<i id="burger" class="material-icons" onclick="burger()">menu</i>
<i id="quit" class="material-icons" onclick="quit()">clear</i>

<div id="links">
<div class="spisok">

<?php
$content = wp_nav_menu(array('echo' => 0, 'theme_location' => 'menu', 'container'=>false));
$content = strip_tags($content, '<a>');
$content = str_replace('<a ', '<a onclick="quit();" ', $content);
echo $content;
?>
</div>
</div>


<div class="page">

<?php
if (have_posts()) : while (have_posts()) : the_post();
the_content();
endwhile; endif;
?> 

</div>


<?php get_footer(); ?>	
