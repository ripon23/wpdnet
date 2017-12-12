<?php
/**
 * @package 	WordPress
 * @subpackage 	Charity NGO
 * @version		1.0.0
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = charity_ngo_get_global_options();


echo '</div>' . "\r" . 
	'</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Middle _________________________ -->' . "\n\n\n";

get_sidebar('bottom');

echo '<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_custom_icon_slide_top"></a>' . "\n";
?>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer"  class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['charity-ngo' . '_footer_scheme'] . ($cmsmasters_option['charity-ngo' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
		<div class="footer_in_inner">
		<?php 
		charity_ngo_footer_logo($cmsmasters_option);
		
		
		charity_ngo_get_footer_custom_html($cmsmasters_option);
		
		
		charity_ngo_get_footer_nav($cmsmasters_option);
		
		
		charity_ngo_get_footer_social_icons($cmsmasters_option);
		
		
		?>
			<span class="footer_copyright copyright"><?php echo esc_html(stripslashes($cmsmasters_option['charity-ngo' . '_footer_copyright'])); ?></span>
		</div>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
