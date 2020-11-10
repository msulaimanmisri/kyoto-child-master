<?php
// New Woocommerce product general tab (rent price)
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');

// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');

function woocommerce_product_custom_fields()
{
	global $woocommerce, $post;
	echo '<div class="product_custom_field">';
	// Custom Product Text Field
	woocommerce_wp_text_input(
		array(
			'id' => '_custom_product_text_field',
			'placeholder' => 'Put rent price',
			'label' => __('Rent price', 'woocommerce'),
			'desc_tip' => 'true',
		)
	);
	echo '</div>';
}
function woocommerce_product_custom_fields_save($post_id)
{
	// Custom Product Text Field
	$woocommerce_custom_product_rent_field = $_POST['_custom_product_text_field'];
	if (!empty($woocommerce_custom_product_rent_field))
		update_post_meta($post_id, '_custom_product_rent_field', esc_attr($woocommerce_custom_product_rent_field));
};
