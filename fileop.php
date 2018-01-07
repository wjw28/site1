<?php
echo '<pre>';
echo $_FILES['upload']['name'].'<br>';
echo $_FILES['upload']['size'];
if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
    if (move_uploaded_file($_FILES['upload']['tmp_name'], './uploads/a')) {
        echo '文件上传成功';
    }
}
echo '</pre>';
?>
