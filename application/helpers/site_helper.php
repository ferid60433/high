<?php
if(!function_exists('salt')){
    function salt($length) {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789;:?.>,<!@#$%^&*()-_=+|';
        $randStringLen = $length;

        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }

        return $randString;
    }
}

if(!function_exists('generate_token')){
    function generate_token($length) {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randStringLen = $length;
        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }
        return $randString;
    }
}

if (!function_exists('shaPassword')) {
    function shaPassword($field = "", $salt = "")  {
        if($field) {
            return hash('sha256', $field.$salt);
        }
    }
}

if (!function_exists('plushrs')) {
    function plushrs($dt, $hrs){
        $pure = strtotime($dt);
        $plus = ($pure + 60*60*$hrs);
        $newPure = date('Y-m-d H:i:s', $plus);
        return $newPure;
    }
}

if (!function_exists('ngn')) {
    function ngn($amt = ''){
        if ($amt == '') $amt = '0';
        return '₦ '.number_format($amt,2,'.',',');
    }
}

if (!function_exists('get_now')) {
    function get_now(){
        return gmdate("Y-m-d H:i:s", time());
    }
}


if (!function_exists('neatDate')) {
    function neatDate($dt){
        $bdate = $dt;
        $bdate = str_replace('/', '-', $bdate);
        $nice_date = date('d M., Y', strtotime($bdate));
        return $nice_date;
    }
}

if (!function_exists('neatTime')) {
    function neatTime($dt){
        $bdate = $dt;
        $bdate = str_replace('/', '-', $bdate);
        $nice_date = date('g:i a', strtotime('+1 hour', strtotime($bdate )));
        return $nice_date;
    }
}

function ago($time){
    $time = strtotime($time);
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();

    $difference     = $now - $time;
    $tense         = "ago";

    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if($difference != 1) {
        $periods[$j].= "s";
    }

    return "$difference $periods[$j] ago ";
}


function cleanit($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Clean phone number
function phoneclean($num) {
    $num = preg_replace('/\D/', '', $num);
    $len = strlen($num);
    $accurate = $len - 10;
    $realNUM = substr($num,$accurate);
    return '0'.$realNUM;
}

function urlify($string, $id =''){
    $new_string = strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    if( $id != '' ){
        return $new_string .'-'.$id.'/';
    }else{
        return $new_string;
    }
}


if (!function_exists('statusLabel')) {
    function statusLabel($status){
        switch ($status) {
            case 'pending':
            case 'process':
            case 'suspended':
                return '<div class="alert alert-warning">' . ucfirst( $status ). '</div>';
                break;
            case 'approved':
            case 'success':
            case 'active':
                return '<div class="alert alert-success">' . ucfirst( $status ). '</div>';
                break;
            case 'returned':
            case 'cancelled':
            case 'fail':
                return '<div class="alert alert-danger">' . ucfirst( $status ). '</div>';
                break;
            default:
                return '<div class="alert alert-danger">' . ucfirst( $status ). '</div>';
                break;
        }
    }
}

if(!function_exists('paymentMethod')){
    function paymentMethod( $id ){
        switch ( $id ) {
            case 1:
                return '<b>Payment Via Wallet</b>';
                break;
            case 2:
                return '<b>Bank Transfer / Deposit</b>';
                break;
            case 3:
                return '<b>Payment Via Paystack</b>';
                break;
            case 4:
                return '<b>Gecharl Payment</b>';
                break;
        }
    }
}

/*
 * Check the range of date for a discount price
 * */
if( !function_exists('date_in_range')){
    function date_in_range( $start_date, $end_date, $present_date){
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($present_date);
        return ( ($user_ts >= $start_ts) && ($user_ts <= $end_ts) );
    }
}

function curl_get_result($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function simple_crypt( $string, $action = 'e' ) {
    $secret_key = '4n9*^%%$3n^&4v&%7@!90&$$3c3x$^*$m8a456#@tgf%$$c'; // 4n9*^%%$3n^&4v&%7@!90&$$3c3x$^*$m8a456#@tgf%$$c
    $secret_iv = 'cXpYEjhvzuVXOV7ltEQSAq8dvNQTWLar';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}
