<?php
$do=$_GET['do'];
$id=$_GET['id'];
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
<h1>更換<?=$title?></h1>
<hr>
<form action="../api/update.php?do=<?=$do?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th><?=$title?>:</th>
            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <div>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="更新"><input type="reset" value="重置">
    </div>
</form>