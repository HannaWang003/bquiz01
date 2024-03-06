<?php
if(isset($_GET['id'])){
    echo "<h1>更新動畫圖片</h1>";
}else{
    echo  "<h1>新增動畫圖片</h1>";
}
?>
<hr>
<form action="../api/upload.php?do=mvim" method="post" enctype="multipart/form-data">
<div>動畫圖片:    <input type="file" name="img"></div>
<?php
if(isset($_GET['id'])){

    echo "<input type='hidden' name='id' value='".$_GET['id']."'>";
}
?>
<div>
    <input type="submit" value="<?=(isset($_GET['id']))?"更新":"新增"?>">
    <input type="reset" value="重置">
</div>
</form>
