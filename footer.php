	</div>
</div>
<?php $blank = is_page_template('template-blank.php'); ?>
<?php if (!$blank) { ?>


	<?php if (ot_get_option('footer') != 'no') { ?>
	<!-- Start Footer -->
	<footer id="footer">
		<div class="contener">
	  	<div class="row s001ftbox1">
	  		
		    <div class="small-12 footet001  columns">
				<?php dynamic_sidebar('footer1'); ?>
		    </div>
		    <div class="small-12 footet003  columns">
				<?php dynamic_sidebar('footer2'); ?>
			<!--    <div class="widget cf widget_text" id="text-5">
					<div class="title">About Us</div>
					<div class="textwidget">
						Choose from the largest online selection of interchangeable watches with thousands of combinations to choose from!
					</div>

					<div class="title footet23003">Information</div>
					<div class="textwidget">
						<ul>
							<li><a href="https://www.teezeewatches.com/f-a-q/">Shipping</a></li>
							<li><a href="https://www.teezeewatches.com/f-a-q/">Customer Service / FAQ's</a></li>
							<li><a href="https://www.teezeewatches.com/contact-us/">Become a Retailer </a></li>
							<li><a href="https://www.teezeewatches.com/contact-us/">Become a Sales Rep </a></li>
						</ul>
					</div>
					<img src="https://www.teezeewatches.com/wp-content/uploads/2016/11/shipping.jpg" style="margin-top:20px;">
					<img src="https://www.teezeewatches.com/wp-content/uploads/2016/06/shipping.jpg" style="margin-top:20px;"> 
				</div> -->
		    </div>
		    <div class="small-12 footet004  columns">
			    <?php dynamic_sidebar('footer3'); ?>
				<!--	<div class="ffsoocialft">
						<ul>
							<li><a href="https://www.facebook.com/TeeZee-Watches-418532714860907/?fref=ts"><img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/facebook.png"></a> &nbsp; <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fteezeewatches.com%2Fbuild-your-own-2%2F&ref_src=twsrc%5Etfw&region=follow_link&screen_name=teezee_watches&tw_p=followbutton"><img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/twitter.png"></a> &nbsp; <a href="http://instagram.com/TeeZee_Watches"><img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/instagram.png"></a></li>
						</ul>
						<div class="clearboth"></div>
					</div> -->
		    </div>
			 <div class="small-12 footet005  columns">
				<?php dynamic_sidebar('footer4'); ?>
				<!--	<div id="text-5" class="widget cf widget_text">
						<div class="title">Contact Us</div>
						<div class="textwidget">
								<br><a href="tel:855-TZ-WATCH"><img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/ft_call.png" class="img1"> &nbsp; 855-TZ-WATCH</a><br><br>
								<a href="mailto:contactus@teezeewatches.com"><img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/ft_email.png" class="img2"> &nbsp; contactus@teezeewatches.com</a>
						</div>			
				</div>	-->		
				<?php //dynamic_sidebar('footer5'); ?>

		    </div>

	    </div>
		<div class="row">
				<div class="small-12 medium-6 ffsoocialftout columns">
					
					<div class="fffootmenft">
						<ul>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="https://www.teezeewatches.com/f-a-q/">Delivery</a></li>
							<li><a href="https://www.teezeewatches.com/f-a-q/">FAQs</a></li>
							<li><a href="https://www.teezeewatches.com/affiliate-registration/">Affiliate Registration</a></li>
							<li><a href="https://www.teezeewatches.com/contact-us/">Contact Us</a></li>
						</ul>
						<div class="clearboth"></div>
					</div>
					<p class="trd">Teezee Watches &copy; 2015</p>
					<!-- <p class="trd">Website by <a target="_blank" href="http://www.thinkbig4me.com/">thinkBIG Innovative Marketing &amp; Design</a></p> -->
				</div>
				<div class="small-12 medium-6 ffsoocialftout tartrd columns">
					<br><br>
					<img src="https://www.teezeewatches.com/wp-content/themes/uberstore-wp/assets/img/ft_ppayment.png">
				</div>
		</div>
	  	
		</div>
	</footer>
	<!-- End Footer -->
	<?php } ?>
	

<?php } // Blank page check?>
</div> <!-- End #wrapper -->

<aside id="searchpopup" class="mfp-hide">
	<div class="row">
		<div class="small-12 columns">
			<?php get_search_form(); ?>
		</div>
	</div>
</aside>
<?php echo ot_get_option('ga'); ?>
<?php
	/* Always have wp_footer() just before the closing
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	 wp_footer();
?>
<style>
/* hide watch holder, for now */
html body.page-id-12379 #content > div:nth-child(10), html body .wcpb-category-options > div:nth-child(1) > div:nth-child(7), html body .wcpb-category-options > div:nth-child(1) > div:nth-child(5), html body .wcpb-category-options > div:nth-child(1) > hr:nth-child(6), html body .wcpb-category-options #watchHolder {
  display:none !important;
}
html .page-id-13279 #watchBand {
  min-height:729px !important;
  height:729px !important;
}

html .page-id-13279 #content > div:nth-child(10) { display:none !important; visibility:hidden !important;}
</style>

	<script src="<?php bloginfo('template_directory');?>/assets/js/prettyphoto/jquery.prettyPhoto.js"></script>
	<script src="<?php bloginfo('template_directory');?>/assets/js/owl/owl.carousel.js"></script>
	<script src="<?php bloginfo('template_directory');?>/assets/js/owl/OwlCarousel2Thumbs.min.js"></script>
	<script>
	  ;(function($){
        var owl = $('.owl-carousel');
		owl.owlCarousel({
			loop: true,
			items: 1,
			thumbs: true,
			thumbImage: true,
			thumbContainerClass: 'owl-thumbs',
			thumbItemClass: 'owl-thumb-item'
		});
    })(jQuery);
		
	</script>
	<script>
		jQuery(function($) {
			if( $(window).width() > 767 ) {
				$('.product-item:nth-of-type(3n+3)').after('<div class="clearfix"></div>'); 
			}
			if( $(window).width() < 768 ) {
				$('.product-item:nth-of-type(2n+2)').after('<div class="clearfix"></div>'); 
			}
		});
	</script>
</body>
</html>
<?php
