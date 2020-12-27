function un_usuario_login_gn() {
	global $sessions;
	$sessions = WP_Session_Tokens::get_instance( get_current_user_id() );
	$sessions->destroy_others( wp_get_session_token() );
}
add_action( 'setup_theme', 'un_usuario_login_gn', 0 );
