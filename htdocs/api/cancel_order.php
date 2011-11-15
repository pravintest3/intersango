<?php
require_once "../config.php";
require_once ABSPATH . "/order_utils.php";

function main()
{
    global $is_logged_in;

    $reqid = cancel_order(post('orderid'), $is_logged_in);

    return array("status"  => "OK");
}

process_api_request("main", "trade");

?>
