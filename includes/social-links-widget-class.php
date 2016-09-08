<?php
// Reference: https://codex.wordpress.org/Widgets_API

class Social_Links_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'social_links_widget', // Base ID
			__( 'Social Links Widget', 'slw_domain' ), // Name
			array( 'description' => __( 'Outputs social icons linked to profiles', 'slw_domain' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		echo 'FRONTE END TEST';
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$this->getForm( $instance );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
	
	/**
	 * Gets and Displays Form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
		
		// Get Facebook Link
		if(isset($instance['facebook_link'])) {
			$facebook_link = esc_attr($instance['facebook_link']);
		}else{
			$facebook_link = 'http://facebook.com';
		}
		
		// Get Twitter Link
		if(isset($instance['twitter_link'])) {
			$twitter_link = esc_attr($instance['twitter_link']);
		}else{
			$twitter_link = 'http://twitter.com';
		}
		
		// Get Linkedin Link
		if(isset($instance['linkedin_link'])) {
			$linkedin_link = esc_attr($instance['linkedin_link']);
		}else{
			$linkedin_link = 'http://linkedin.com';
		}
		
		// Get Google Link
		if(isset($instance['google_link'])) {
			$google_link = esc_attr($instance['google_link']);
		}else{
			$google_link = 'http://google.com';
		}
		
		// ICONS
		
		// Get Facebook Icon
		if(isset($instance['facebook_icon'])) {
			$facebook_icon = esc_attr($instance['facebook_icon']);
		}else{
			$facebook_icon = plugins_url() . '/social-links-widget/img/facebook.png';
		}
		
		// Get Twitter Icon
		if(isset($instance['twitter_icon'])) {
			$twitter_icon = esc_attr($instance['twitter_icon']);
		}else{
			$twitter_icon = plugins_url() . '/social-links-widget/img/twitter.png';
		}
		
		// Get Linkedin Icon
		if(isset($instance['linkedin_icon'])) {
			$linkedin_icon = esc_attr($instance['linkedin_icon']);
		}else{
			$linkedin_icon = plugins_url() . '/social-links-widget/img/linkedin.png';
		}
		
		// Get Google Icon
		if(isset($instance['google_icon'])) {
			$google_icon = esc_attr($instance['google_icon']);
		}else{
			$google_icon = plugins_url() . '/social-links-widget/img/google.png';
		}	
		
		// Get Icon Size			
		if(isset($instance['icon_width'])){
			$icon_width = esc_attr($instance['icon_width']);
		}else{
			$icon_width = '32';
		}
		
		?>
        	<h4><?php _e('Facebook','slw_domain'); ?></h4>
            <p>
            	<label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Link:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" typte="text" value="<?php echo esc_attr($facebook_link); ?>">
            </p>
            <p>
            	<label for="<?php echo $this->get_field_id('facebook_icon'); ?>"><?php _e('Icon:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('facebook_icon'); ?>" name="<?php echo $this->get_field_name('facebook_icon'); ?>" typte="text" value="<?php echo esc_attr($facebook_icon); ?>">
            </p>
            
            <h4><?php _e('Twitter','slw_domain'); ?></h4>
            <p>
            	<label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Link:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" typte="text" value="<?php echo esc_attr($twitter_link); ?>">
            </p>
            <p>
            	<label for="<?php echo $this->get_field_id('twitter_icon'); ?>"><?php _e('Icon:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('twitter_icon'); ?>" name="<?php echo $this->get_field_name('twitter_icon'); ?>" typte="text" value="<?php echo esc_attr($twitter_icon); ?>">
            </p>
            
            <h4><?php _e('Linkedin','slw_domain'); ?></h4>
            <p>
            	<label for="<?php echo $this->get_field_id('linkedin_link'); ?>"><?php _e('Link:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('linkedin_link'); ?>" name="<?php echo $this->get_field_name('linkedin_link'); ?>" typte="text" value="<?php echo esc_attr($linkedin_link); ?>">
            </p>
            <p>
            	<label for="<?php echo $this->get_field_id('linkedin_icon'); ?>"><?php _e('Icon:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('linkedin_icon'); ?>" name="<?php echo $this->get_field_name('linkedin_icon'); ?>" typte="text" value="<?php echo esc_attr($linkedin_icon); ?>">
            </p>
            
            <h4><?php _e('Google+','slw_domain'); ?></h4>
            <p>
            	<label for="<?php echo $this->get_field_id('google_link'); ?>"><?php _e('Link:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('google_link'); ?>" name="<?php echo $this->get_field_name('google_link'); ?>" typte="text" value="<?php echo esc_attr($google_link); ?>">
            </p>
            <p>
            	<label for="<?php echo $this->get_field_id('google_icon'); ?>"><?php _e('Icon:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('google_icon'); ?>" name="<?php echo $this->get_field_name('google_icon'); ?>" typte="text" value="<?php echo esc_attr($google_icon); ?>">
            </p>
            
            <p>
            	<label for="<?php echo $this->get_field_id('icon_width'); ?>"><?php _e('Icon width:','slw_domain'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('icon_width'); ?>" name="<?php echo $this->get_field_name('icon_width'); ?>" typte="text" value="<?php echo esc_attr($icon_width); ?>">
            </p>
            
        <?php
	}	
}
?>