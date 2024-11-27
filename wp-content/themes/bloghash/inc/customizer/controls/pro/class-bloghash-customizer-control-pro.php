<?php
if ( ! class_exists( 'Bloghash_Customizer_Control_Pro' ) ) :
	class Bloghash_Customizer_Control_Pro extends Bloghash_Customizer_Control {

		/**
		 * The control type.
		 *
		 * @var string
		 */
		public $type = 'bloghash-pro';

		/**
		 * Pro features
		 *
		 * @since 1.1.1
		 */
		public $features = array();

		/**
		 * Pro theme screenshot
		 *
		 * @since 1.1.1
		 */

		 public $screenshot;

		/**
		 * Enqueue control related scripts/styles.
		 *
		 * @access public
		 */
		public function enqueue() {

			// Script debug.
			$bloghash_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

			// Control type.
			$bloghash_type = str_replace( 'bloghash-', '', $this->type );

			/**
			 * Enqueue control stylesheet
			 */
			wp_enqueue_style(
				'bloghash-' . $bloghash_type . '-control-style',
				BLOGHASH_THEME_URI . '/inc/customizer/controls/' . $bloghash_type . '/' . $bloghash_type . $bloghash_suffix . '.css',
				false,
				BLOGHASH_THEME_VERSION,
				'all'
			);
		}

		public function to_json() {
			parent::to_json();
			$this->json['features']   = $this->features;
			$this->json['screenshot'] = $this->screenshot;
		}

		/**
		 * Render the content on the theme customizer page
		 */
		public function content_template() {?>

			<div class="upsell-btn" style="text-align: center;border-bottom: 3px solid #ddd;">                 
				<a style="margin: 0 auto 5px;display: inline-block;" href="https://www.peregrine-themes.com/bloghash/?utm_medium=customizer&utm_source=button&utm_campaign=profeatures" target="blank" class="btn btn-success"><?php esc_html_e( 'Upgrade to BlogHash Pro', 'bloghash' ); ?></a>
			</div>
			<# if ( data.screenshot ) {   #>
			<div style="padding: 1rem;background: #e6e6e6;">
				<img class="bloghash_img_responsive " src="{{{ data.screenshot }}}" alt="<?php esc_attr_e( 'BlogHash Pro', 'bloghash' ); ?>">
			</div>  
			<# }  #>       
			<div class="">
				<h3 style="margin-top:10px;padding: 10px;color:#111;font-size:16px;margin-bottom: 0;background: #fff;border-bottom: 1px solid #ddd;border-top: 3px solid #2271b1;"><?php esc_html_e( 'BlogHash Pro Features', 'bloghash' ); ?></h3>
				<ul style="padding: 10px;background: #fff;">
					<# _.each(data.features, function(feature){ #>
						<li class="upsell-bloghash"> <div class="dashicons dashicons-yes"></div> {{{ feature }}} </li>
					<# }); #>
				</ul>
			</div>
			<div class="upsell-btn" style="text-align: center;padding: 10px;background: #fff;">                 
				<a style="margin: 0 auto 5px;display: inline-block;" href="https://www.peregrine-themes.com/bloghash/?utm_medium=customizer&utm_source=button&utm_campaign=profeatures" target="blank" class="btn btn-success"><?php esc_html_e( 'Upgrade to BlogHash Pro', 'bloghash' ); ?></a>
			</div>
		   
			<p style="padding: 10px;background: #fff; margin-top: 0;">
				<?php
					printf( __( 'If you Like our Products , Please Rate us 5 star on %1$sWordPress.org%2$s.  We\'d really appreciate it! </br></br>  Thank You', 'bloghash' ), '<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/bloghash?filter=5">', '</a>' );
				?>
			</p>
			<?php
		}
	}
endif;
