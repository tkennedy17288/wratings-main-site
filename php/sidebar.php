<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
	if ( ! empty( $description ) ) :
		?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
	<div id="panel-area"> 
		<?php if ( is_user_logged_in() ) { ?>
		<div class="display-name">
			<?php 	  
				$current_user = wp_get_current_user();
				$name = $current_user->first_name.' '.$current_user->last_name;
				printf( '%s', esc_html( $name ) );
			?>
		</div>
		<div class="member-since">Member Since 
			<?php 
				$current_user = wp_get_current_user();
				$registered = $current_user->user_registered;
				printf( '%s', date( "Y", strtotime( $registered ) ) );
			?>
		</div>
		<?php } ?>
		<div class="sidebar-button-container">
			<div>
				<a href="/live-demo"><img src="/wp-content/uploads/2021/05/w-bar-demo-new.jpg" alt="Click for Live Demo" class="wp-image-1317"/></a>
				<?php if ( !is_user_logged_in() ) { ?>
					<a href="/join-the-panel"><img src="/wp-content/uploads/2021/05/w-bar-panel-new.jpg" alt="Click to Join Panel" class="wp-image-1317"/></a>
				<?php } ?>		
			</div>
			<div>
				<a href="https://www.linkedin.com/company/wratings" target="_blank" rel="noreferrer noopener">
					<img src="/wp-content/uploads/2021/05/w-bar-linkedin.jpg" alt="" class="wp-image-1316"/>
				</a>
				<a href="https://www.g2equity.com/" target="_blank" rel="noreferrer noopener">
					<img src="/wp-content/uploads/2021/05/w-bar-g2-45.png" alt="" class="wp-image-1316"/>
				</a>
			</div>
		</div>
	</div>
</div><!-- #secondary -->
