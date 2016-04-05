function action_woocommerce_admin_order_actions_end($order_id){
 echo  "NEW ACTION";
}
add_action( 'woocommerce_admin_order_actions_end', 'action_woocommerce_admin_order_actions_end', 10, 1 );
