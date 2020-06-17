<?php
//Instagram shortcode

if ( function_exists( 'vc_map' ) ) {
	vc_map(
		array(
			'name'   => __( 'Instagram', 'js_composer' ),
			'base'   => 'pixxy_instagram',
			'params' => array(
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Username', 'js_composer' ),
					'admin_label' => true,
					'param_name'  => 'username',
					'description' => 'Please, also add your access token of your Instagram account in Theme Options'
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Count images', 'js_composer' ),
					'admin_label' => true,
					'param_name'  => 'count',
                    'description' => 'Max count is 12. For a larger number, please, add your access token of your Instagram account in Theme Options'
				),
			),

			//end params
		)
	);
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* Frontend Output Shortcode */

	class WPBakeryShortCode_pixxy_instagram extends WPBakeryShortCode {
		protected function content( $atts, $content = null ) {
			/* get all params */
			extract( shortcode_atts( array(
				'username' => '',
				'count'    => '',
			), $atts ) );


			// include needed stylesheets
			if ( ! in_array( "pixxy_instagram-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_instagram-css";
			}
			$this->enqueueCss();

			// include needed scripts
			if ( ! in_array( "pixxy_instagram", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_instagram";
			}
			$this->enqueueJs();

			ob_start();

			if ( ! empty( $username ) ) {
				$count            = ( ! empty( $count ) && is_numeric( $count ) ) ? $count : 6;
                $instagram_images = pixxy_get_imstagram( $username, $count ); ?>

                    <div class="insta-box">
                        <div class="insta-wrapper row">
                            <?php if ( ! empty( $instagram_images ) ) {
                                foreach ( $instagram_images['items'] as $image ) {  ?>
                                    <a href="<?php echo esc_url( $image['image-url'] ); ?>" class="insta-item">
                                        <img src="<?php echo esc_url( $image['image-url'] ); ?>" alt="<?php echo esc_attr($username); ?>" class="s-img-switch">
                                    </a>
                                <?php  }
                            } ?>
                        </div>
                        <?php if(!empty($username)){ ?>
                            <div class="insta-descr"><?php esc_html_e('Instagram:', 'pixxy'); ?><a href="https://www.instagram.com/<?php echo esc_attr($username); ?>"><?php echo '@' . esc_html( $username ); ?></a></div>
                        <?php } ?>
                    </div>
				<?php
            }

            return ob_get_clean();
        }
    }
}