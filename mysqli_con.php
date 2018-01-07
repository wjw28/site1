<?php
$link = mysqli_connect('localhost', 'root', '362525',  'courseDesign');
echo 'connect success';
mysqli_query($link, 'set names utf8');
$result = mysqli_query($link, 'Show databases;');
if (!$result) {
    exit('执行失败。错误信息：'.mysqli_error($link));
}
$result = mysqli_query($link, 'select * from score');
// while ($row = mysqli_fetch_array($result)) {
//     echo $row['stu_name'];
// }
$allData = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($allData);
$presql = mysqli_prepare($link, 'insert into score values(?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($presql, 'ssddd', $id, $name, $math, $english, $computer);
$id = '08';
$name = '王强';
$math = 98;
$english = 97;
$computer = 99;
mysqli_stmt_execute($presql);
$id = '09';
$name = '刘超';
$math = 99;
$english = 98;
$computer = 97;
if (mysqli_stmt_execute($presql)) {
    echo 'true?';
}
mysqli_error($link);
$result = mysqli_query($link, 'select stu_name from score');
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['stu_name'];

}
mysqli_free_result($result);
mysqli_close($link);
$html = file_get_contents('http://www.itcast.cn');
var_dump($http_response_header);
echo '<hr>'.htmlspecialchars($html);
