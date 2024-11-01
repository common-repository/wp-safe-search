<?php
function wpss_getcookie($key) {
    return $_COOKIE["$key"];
}

function wpss_setcookie($key, $str, $expire) {
    return setcookie("$key", $str, $expire, '/', str_replace('www','',$_SERVER['SERVER_NAME']) );
}
function is_ajax() {
    return array_key_exists('HTTP_X_REQUESTED_WITH', $_SERVER);
}
?>