<?php
setcookie('city', '北京市');
setcookie('city', '北京市', time() + 1800);
setcookie('city', '北京市', time() + 60*60*24);
setcookie('city', '北京市', time() - 1);
 ?>
