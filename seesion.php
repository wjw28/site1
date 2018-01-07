<?php
session_start();
$_SESSION['username'] = '小明';
$_SESSION['info'] = [1, 2, 3];
if (isset($_SESSION['info'])) {
    $test = $_SESSION['info'];
}
echo $test[0];
//unset($_SESSION['username']);
//$_SESSION = [];
//session_destory();
 ?>
