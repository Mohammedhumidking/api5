<?php
 

$ip = strip_tags($_GET['ip']);
$user = strip_tags($_GET['user']);
$password = strip_tags($_GET['password']);
require_once('api.php');
 $API = new RouterosAPI();
if ($API->connect("$ip", "$user", "$password")) {
  
 $respones = [
        "status"=> true,
        "msg"=>"good"
    ];

    echo json_encode($respones);

} else {
   

    $respones = [
        "status"=> false,
        "msg"=>"no user name or password"
    ];
    echo json_encode($respones);
        
}



?>
