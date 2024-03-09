<?php
$do=$_GET['do'];
switch($do){
    case "title";
    $title = "標題區圖片";
    break;
    case "mvim":
    $title = "動畫圖片";
    break;
    case "image":
        $title="校園映像圖片";
        break;
}
?>
<h1>新增<?=$title?></h1>
<hr>
<form action="../api/upload.php?do=<?=$do?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th><?=$title?>:</th>
            <td><input type="file" name="img"></td>
        </tr>
        <?php
if($do=='title'){
        ?>
        <tr>
            <th>標題區替代文字:</th>
            <td><input type="text" name="text"></td>
        </tr>
        <?php
}
        ?>
    </table>
    <div>
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>