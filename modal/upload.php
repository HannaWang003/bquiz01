<?php
if(isset($_GET['id'])){
    echo "<h1>更新標題區圖片</h1>";
}else{
    echo  "<h1>新增標題區圖片</h1>";
}
?>
<hr>
<form action="../api/upload.php" method="post" enctype="multipart/form-data">
<div>標題區圖片:    <input type="file" name="img"></div>
<div>標題區替代文字:    <input type="text" name="text"></div>
<div>
    <input type="submit" value="<?=(isset($_GET['id']))?"更新":"新增"?>">
    <input type="reset" value="重置">
</div>
</form>
