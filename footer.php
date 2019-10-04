	</div><!--//container-->

</div><!--//main_cont-->

<?php $shortname = "creative"; ?>

<footer id="footer">

	<div class="container">

	

		<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>

	

		<div class="footer_box">

			

		</div><!--//footer_box-->

		

		<div class="footer_box">

			

		</div><!--//footer_box-->

		<div class="footer_box">

			

		</div><!--//footer_box-->

		

		<div class="footer_box">

			

		</div><!--//footer_box-->		

		

		<?php endif; ?>

		

		<div class="clear"></div>

		

		<div class="copyright_text">

			© 2019 Powered by <a href="https://dessign.net">WordPress</a></div>

		</div><!--//copyright_text-->

		

	</div><!--//container-->

</footer><!--//footer-->

<?php wp_footer(); ?>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/load-more.js"></script>

</body>

</html>