<?php
namespace Remarkable_Group_Addon;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Product_Table_Post extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'product-table';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Product Table', 'remarkablegroup-addon' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-code';
	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic', 'remarkablegroup' ];
	}

	// Load CSS
	// public function get_style_depends() {

	// 	wp_register_style( 'guide-posts', plugins_url( '../assets/css/guide-posts.css', __FILE__ ));

	// 	return [
	// 		'guide-posts',
	// 	];

	// }

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	// public function get_keywords() {
	// 	return [ 'oembed', 'url', 'link' ];
	// }

	/**
	 * Register oEmbed widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'remarkablegroup-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'remarkablegroup-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'remarkablegroup-addon' ),
				'placeholder' => esc_html__( 'Type your title here', 'remarkablegroup-addon' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link_text',
			[
				'label' => esc_html__( 'Link Text', 'remarkablegroup-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default text', 'remarkablegroup-addon' ),
				'placeholder' => esc_html__( 'Type your link text', 'remarkablegroup-addon' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'remarkablegroup-addon' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'remarkablegroup-addon' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'remarkablegroup-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
	?>
	
	<!--products section-->
	<div class="product">
		<table class="table0 item_list eae-table" style="table-layout: fixed;"  cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>Varieties</th>
					<th>Thickness</th>
					<th>Max. sheet size</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Clear (GS & XT)</td>
					<td>2 mm</td>
					<td>3050 x 2050 mm</td>
				</tr>
				<tr>
					<td>Opal white (GS & XT)</td>
					<td>3 mm</td>
					<td></td>
				</tr>
				<tr>
					<td>Tinted</td>
					<td>4 mm</td>
					<td></td>
				</tr>
				<tr>
					<td>Coloured</td>
					<td>5 mm</td>
					<td></td>
				</tr>
				<tr>
					<td>Matt / Frosted</td>
					<td>6 mm</td>
					<td></td>
				</tr>
				<tr>
					<td>Mirrored</td>
					<td>8 mm</td>
					<td></td>
				</tr>
				<tr>
					<td>Fluorescent</td>
					<td>10 mm</td>
					<td></td>
				</tr>
				
				
			</tbody>
		</table>
		<div class="tableFooter">
			<!-- <div class="tableMat">
				Mat
			</div> -->
			<div class="toonalle">
				<a href="#" class="load_more0 showAll class1">
				<i class="fa fa-angle-down"></i> Show all</a>
				<a href="#" class="load_more10 showAll class2">
				<i class="fa fa-angle-up"></i> Less</a>
			</div>
		</div>					
	</div>



	<?php

	}

}