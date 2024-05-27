<?php

$current_user = null;
$current_user_id = null;

// define constant (seconds)
const SESSION_EXPIRATION_TIME = 60;

function get_current_user_data(){
    global $current_user;
    return $current_user;
}


function get_current_user_id(){
    global $current_user_id;
    return $current_user_id;
}


function is_user_login(){
    global $current_user_id;
    return (bool)$current_user_id;
}
