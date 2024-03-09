<?php
$do=$_GET['do'];
switch($do){
    case "ad";
    $title = "動態文字廣告";
    break;
    case "news":
    $title = "最新消息資料";
    break;
}
?>
<h1>新增<?=$title?></h1>
<hr>
<form action="../api/addtext.php?do=<?=$do?>" method="post">
    <table>
        <tr>
            <th><?=$title?>:</th>
            <td><input type="text" name="text"></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="新增"><input type="reset" value="重置">
    </div>
</form>