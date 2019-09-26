//remove  SALE LOGO and ADD Brand Name 
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10); 
//function 
function woocommerce_show_product_sale_flash() { 
	global $post;
	$cats = get_the_terms( $post->ID, 'product_cat' ); 
	if ( ! empty( $cats ) ) {
			foreach ( $cats as $term ) {
	   // If parent cat ID = 116 echo subcat name...
			if( $term->parent == 64 ) { 
		  echo 'By: '. $term->name;
	   }
			}
	}
};         
// add the action 
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10); 
