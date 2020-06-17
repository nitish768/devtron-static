<?php

//Team shortcode

if ( function_exists( 'vc_map' ) ) {
	vc_map(
		array(
			'name'        => __( 'Team', 'js_composer' ),
			'base'        => 'pixxy_team',
			'description' => __( 'My team', 'js_composer' ),
			'params'      => array(
				array(
					'type'       => 'param_group',
					'heading'    => __( 'Team members', 'js_composer' ),
					'param_name' => 'team_members',
					'value'      => '',
					'params'     => array(
						array(
							'type'       => 'attach_image',
							'heading'    => __( 'Photo', 'js_composer' ),
							'param_name' => 'image_id',
						),
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Name', 'js_composer' ),
							'param_name' => 'name',
						),
						array(
							'type'       => 'textfield',
							'heading'    => __( 'Position', 'js_composer' ),
							'param_name' => 'position',
						),
						array(
							'type'       => 'param_group',
							'heading'    => __( 'Socials', 'js_composer' ),
							'param_name' => 'socials',
							'value'      => '',
							'params'     => array(
								array(
									'type'       => 'iconpicker',
									'heading'    => 'Select icon',
									'param_name' => 'icon',
									'value'      => '',
								),
								array(
									'type'        => 'textfield',
									'heading'     => __( 'url', 'js_composer' ),
									'param_name'  => 'social_url',
									'value'       => '',
									'description' => __( 'Enter social link url.', 'js_composer' ),
								),
							)
						),
					), // end repeater
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Extra class name', 'js_composer' ),
					'param_name'  => 'el_class',
					'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
					'value'       => '',
				),
				/* CSS editor */
				array(
					'type'       => 'css_editor',
					'heading'    => __( 'CSS box', 'js_composer' ),
					'param_name' => 'css',
					'group'      => __( 'Design options', 'js_composer' ),
				),
			), //end params
		)
	);
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_pixxy_team extends WPBakeryShortCode {

		protected function content( $atts, $content = null ) {

			extract( shortcode_atts( array(
				'team_style' => '',
				'col_numb'   => 'col-4 col-xs-12 col-sm-6 col-md-3',
				// slider
				'space'      => '',
				'autoplay'   => '',
				'speed'      => '',
				'loop'       => '',
				'lg_count'   => '',
				'md_count'   => '',
				'sm_count'   => '',
				'xs_count'   => '',
				'button'     => '',
				'btn_style'  => '',
				'title'      => '',

				'team_members' => array(),
				'el_class'     => '',
				'css'          => '',
			), $atts ) );

			// include needed scripts
			if ( ! in_array( "pixxy_team-js", self::$js_scripts ) ) {
				self::$js_scripts[] = "pixxy_team-js";
			}
			$this->enqueueJs();

			// include needed stylesheets
			if ( ! in_array( "pixxy_team-css", self::$css_scripts ) ) {
				self::$css_scripts[] = "pixxy_team-css";
			}
			$this->enqueueCss();

			$spaceClass = isset( $space ) && ! empty( $space ) ? ' yes' : '';

			$class        = ( ! empty( $team_style ) ) ? $team_style : "";
			$class        .= " " . ( ! empty( $el_class ) ) ? $el_class : '';
			$class        .= vc_shortcode_custom_css_class( $css, ' ' );
			$class        .= $spaceClass;
			$btn_style    = isset( $btn_style ) && ! empty( $btn_style ) ? $btn_style : 'a-btn';
			$team_members = (array) vc_param_group_parse_atts( $team_members );

			ob_start(); ?>

            <div class="px-member <?php echo esc_attr( $class ); ?>">

				<?php
					if ( ! empty( $team_members ) ) {
						foreach ( $team_members as $member ) {
							$image_url = ( ! empty( $member['image_id'] ) && is_numeric( $member['image_id'] ) ) ? wp_get_attachment_url( $member['image_id'] ) : '';
							$image_alt = get_post_meta( $member['image_id'], '_wp_attachment_image_alt', true );
							$socials   = (array) vc_param_group_parse_atts( $member['socials'] ); ?>

                                <div class="px-member__item">
	                                <?php if ( ! empty( $image_url ) ) { ?>
		                            <div class="px-member__img px-member__img--circle">
                                        <?php echo pixxy_the_lazy_load_flter( $image_url, array(
				                            'class' => 's-img-switch',
				                            'alt'   => $image_alt,
			                            ) ); ?>

	                                    <?php if ( ! empty( $socials ) ) { ?>
                                            <div class="px-member__social">
			                                    <?php foreach ( $socials as $item ) { ?>
                                                    <a href="<?php echo esc_url( $item['social_url'] ); ?>"
                                                       target="_blank" class="px-member__social-item">
                                                        <i class="fa <?php echo esc_attr( $item['icon'] ); ?>"></i>
                                                    </a>
			                                    <?php } // end foreach ?>
                                            </div>
	                                    <?php } // end if ?>
                                    </div>
                                    <?php } // end if ?>

                                    <div class="px-member__info">
                                        <?php if ( ! empty( $member['name'] ) ) { ?>
                                            <h5 class="px-member__name"><?php echo esc_html( $member['name'] ); ?></h5>
                                        <?php } // end if ?>

                                        <?php if ( ! empty( $member['position'] ) ) { ?>
                                            <span class="px-member__position"><?php echo esc_html( $member['position'] ); ?></span>
                                        <?php } // end if ?>
                                    </div>
                                </div>

							<?php
						} // end foreach
					} // end if

					if ( ! empty( $button ) ) {
						$url = vc_build_link( $button );
					} else {
						$url['url']    = '#';
						$url['title']  = 'title';
						$url['target'] = '_self';
					}

					if ( ! empty( $button ) ) { ?>
                        <div class="btn-wrap text-center">
                            <a href="<?php echo esc_attr( $url['url'] ); ?>"
                               class="<?php echo esc_attr( $btn_style ); ?>"
                               target="<?php echo esc_attr( $url['target'] ); ?>"><?php echo esc_html( $url['title'] ); ?></a>
                        </div>
					<?php }

				// end if ?>

            </div>

			<?php
			return ob_get_clean();
		} // end content()
	} // end class
} // end if

?>
