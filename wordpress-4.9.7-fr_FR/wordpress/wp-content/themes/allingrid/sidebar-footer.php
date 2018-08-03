<?php
/**
 * The sidebar containing the main footer columns widget areas
 *
 */
?>

<div id="footer-content-area">

	<?php 
		/**
		 * Display widgets dragged in 'Footer Columns 1' widget areas
		 */
	?>
	<div class="col3a">

		<?php if ( !dynamic_sidebar( 'footer-column-1-widget-area' ) && is_customize_preview() ) : ?>

					<h2 class="footer-title">
						<?php esc_html_e('Footer Col Widget 1', 'allingrid'); ?>
					</h2><!-- .footer-title -->
					
					<div class="footer-after-title">
					</div><!-- .footer-after-title -->
					
					<div class="textwidget">
						<?php esc_html_e('This is first footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #1.', 'allingrid'); ?>
					</div><!-- .textwidget -->
		
		<?php endif; // end of ! dynamic_sidebar( 'footer-column-1-widget-area' )
			  ?>

	</div><!-- .col3a -->
	
	<?php 
		/**
		 * Display widgets dragged in 'Footer Columns 2' widget areas
		 */
	?>
	<div class="col3b">
		<?php if ( !dynamic_sidebar( 'footer-column-2-widget-area' ) && is_customize_preview() ) : ?>
		
				<h2 class="footer-title">
					<?php esc_html_e('Footer Col Widget 2', 'allingrid'); ?>
				</h2><!-- .footer-title -->
				
				<div class="footer-after-title">
				</div><!-- .footer-after-title -->
				
				<div class="textwidget">
					<?php esc_html_e('This is second footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #2.', 'allingrid'); ?>
				</div><!-- .textwidget -->
					
		<?php endif; // end of ! dynamic_sidebar( 'footer-column-2-widget-area' )
			  ?>
		
	</div><!-- .col3b -->
	
	<?php 
		/**
		 * Display widgets dragged in 'Footer Columns 3' widget areas
		 */
	?>
	<div class="col3c">
		<?php if ( !dynamic_sidebar( 'footer-column-3-widget-area' ) && is_customize_preview() ) : ?>
		
				<h2 class="footer-title">
					<?php esc_html_e('Footer Col Widget 3', 'allingrid'); ?>
				</h2><!-- .footer-title -->
				
				<div class="footer-after-title">
				</div><!-- .footer-after-title -->
				
				<div class="textwidget">
					<?php esc_html_e('This is third footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #3.', 'allingrid'); ?>
				</div><!-- .textwidget -->
					
		<?php endif; // end of ! dynamic_sidebar( 'footer-column-2-widget-area' )
			  ?>
		
	</div><!-- .col3c -->
	
	<div class="clear">
	</div><!-- .clear -->

</div><!-- #footer-content-area -->