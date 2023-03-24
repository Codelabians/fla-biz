<?php 
    // Template Name: Adding Role
    $user =  wp_get_current_user();
    if(isset($_POST['pwd'])){
        $id = $user->ID;
        wp_set_password( $_POST['pwd'] , $id);
        wp_set_auth_cookie($id);
        wp_set_current_user($id);
        echo json_encode(["status" => 1]);
    }
?>