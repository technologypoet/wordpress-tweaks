//Shortcode for Display name
add_shortcode( 'current-displayname' , 'ss_get_current_displayname' );
function ss_get_current_displayname(){
    $user = wp_get_current_user();
    return $user->display_name;
}

//Shortcode for Username
add_shortcode( 'current-username' , 'ss_get_current_username' );
function ss_get_current_username() {
   $user = wp_get_current_user();
   return $user->user_login;
}

//Shortcode for First name
add_shortcode( 'current-firstname' , 'ss_get_current_firstname' );
function ss_get_current_firstname() {
   $user = wp_get_current_user();
   return $user->first_name;
}
