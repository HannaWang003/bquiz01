<?php
if(isset($_GET['id'])){
    echo "<h1>更新校園映像圖片</h1>";
}else{
    echo  "<h1>新增校園映像圖片</h1>";
}
?>
<hr>
<form action="../api/upload.php?do=image" method="post" enctype="multipart/form-data">
<div>校園映像圖片:    <input type="file" name="img"></div>
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
