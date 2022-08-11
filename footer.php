<?php if (! defined('ABSPATH')) {
    exit;
} ?>
<?php
$tel = get_theme_mod('tel');
$tel_clear = preg_replace("/[^0-9]/", "", $tel);
$email = get_theme_mod('email');
$img_logo_footer = get_theme_mod('img_logo_footer');
$footer_txt = get_theme_mod('footer_txt');
?>
<!-- START FOOTER -->
<div class="footer">


<div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper footer-bottom-logo">
				
<a href="/"><img src="<?php echo $img_logo_footer; ?>" class="vc_single_image-img attachment-full" alt="Автоюрист" loading="lazy" title="ИнфоАвтоБаза"></a>
<p class="copyright_text"><?php echo $footer_txt;?></p>				
				
			</div>
		</div>
	</div>
</div>
 

					
	</div>

<!-- END FOOTER -->	
 


<?php wp_footer();?>

<script >function burger(){
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 200vw 200vw';
  links.style.display = 'flex';
  quit.style.display = 'inline';
}

function quit(){
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 32px 32px';
  links.style.display = 'none';
  quit.style.display = 'none';
}

</script>

</body>
</html>