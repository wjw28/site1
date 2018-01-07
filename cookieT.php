<?php
if (isset($_COOKIE['city'])) {
    $city = $_COOKIE['city'];
    echo $city.'<br>'.$city;
} else {
    echo "no cookie from browser";
}
 ?>
