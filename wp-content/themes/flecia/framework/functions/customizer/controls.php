<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

class Customizer_Range_Value_Control extends WP_Customize_Control {
	public $type = 'range-value';

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since 3.4.0
	 */
	public function enqueue() {
		wp_enqueue_script( 'customizer-range-value-control', get_template_directory_uri() . '/framework/assets/admin/js/customizer-range-value-control.js', array( 'jquery' ), rand(), true );
		wp_enqueue_style( 'customizer-range-value-control', get_template_directory_uri() . '/framework/assets/admin/css/customizer-range-value-control.css', array(), rand() );
	}

	/**
	 * Render the control's content.
	 *
	 * @author soderlind
	 * @version 1.2.0
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<div class="range-slider"  style="width:100%; display:flex;flex-direction: row;justify-content: flex-start;">
				<span  style="width:100%; flex: 1 0 0; vertical-align: middle;"><input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); $this->link(); ?>>
				<span class="range-slider__value">0</span></span>
			</div>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
		</label>
		<?php
	}
}


class Customizer_Toggle_Control extends WP_Customize_Control {
	public $type = 'ios';

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since 3.4.0
	 */
	public function enqueue() {
		wp_enqueue_script( 'customizer-toggle-control', get_template_directory_uri() . '/framework/assets/admin/js/customizer-toggle-control.js', array( 'jquery' ), rand(), true );
		wp_enqueue_style( 'pure-css-toggle-buttons', get_template_directory_uri() . '/framework/assets/admin/css/customizer-togle-buttons.css', array(), rand() );

		$css = '
			.disabled-control-title {
				color: #a0a5aa;
			}
			input[type=checkbox].tgl-light:checked + .tgl-btn {
				background: #0085ba;
			}
			input[type=checkbox].tgl-light + .tgl-btn {
			  background: #a0a5aa;
			}
			input[type=checkbox].tgl-light + .tgl-btn:after {
			  background: #f7f7f7;
			}

			input[type=checkbox].tgl-ios:checked + .tgl-btn {
			  background: #0085ba;
			}

			input[type=checkbox].tgl-flat:checked + .tgl-btn {
			  border: 4px solid #0085ba;
			}
			input[type=checkbox].tgl-flat:checked + .tgl-btn:after {
			  background: #0085ba;
			}

		';
		wp_add_inline_style( 'pure-css-toggle-buttons' , $css );
	}

	/**
	 * Render the control's content.
	 *
	 * @author soderlind
	 * @version 1.2.0
	 */
	public function render_content() {
		?>
		<label>
			<div style="display:flex;flex-direction: row;justify-content: flex-start;">
				<span class="customize-control-title" style="flex: 2 0 0; vertical-align: middle;"><?php echo esc_html( $this->label ); ?></span>
				<input id="cb<?php echo $this->instance_number ?>" type="checkbox" class="tgl tgl-<?php echo $this->type?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?> />
				<label for="cb<?php echo $this->instance_number ?>" class="tgl-btn"></label>
			</div>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
		</label>
		<?php
	}
}


/* Custom Title */
 
class Separator_Custom_control extends WP_Customize_Control{
	public $type = 'separator';
	public function render_content(){
		?>
		<label>
			<h4 class="customize-control-title flexia-customize-subtitle"><?php echo esc_html( $this->label ); ?></h4>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
		</label>
		<?php
	}
}


/* Google Font dropdown */

class Google_Font_Dropdown_Custom_Control extends WP_Customize_Control{
	private $fonts = false;
    public function __construct($manager, $id, $args = array(), $options = array()){
        $this->fonts = $this->get_google_fonts();
        parent::__construct( $manager, $id, $args );
    }

    public function render_content(){
        ?>
            <label class="customize_dropdown_input">
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            	<select id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" data-customize-setting-link="<?php echo esc_attr($this->id); ?>">
                    <?php
                        foreach ( $this->fonts as $k => $v ){
                            echo '<option value="'.$v['family'].'" ' . selected( $this->value(), $v['family'], false ) . '>'.$v['family'].'</option>';
                        }
                    ?>
                </select>
            </label>
        <?php
    }
 
	public function get_google_fonts(){
		if (get_transient('flexia_google_font_family')) {
        	$content = get_transient('flexia_google_font_family');
	    } else {
	        $googleApi = 'https://www.googleapis.com/webfonts/v1/webfonts?sort=alpha&key=AIzaSyCMb72tc3wSHxA7LD9WkTxTNJgfDjsWHMw ';
	        $fontContent = wp_remote_get( $googleApi, array('sslverify'   => false) );
	        $content = json_decode($fontContent['body'], true);
	        set_transient( 'flexia_google_font_family', $content, 0 );
	    }
 
	    return $content['items'];
	}
 
}

?>
