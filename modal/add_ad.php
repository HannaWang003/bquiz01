
<?php
$do=$_GET['do'];
?>
<h1 class='ct'>新增<?=($do=='ad')?"動態文字廣告":"最新消息"?></h1>
<hr>
<form action="../api/add_ad.php?do=<?=$do?>" method="post">
<div class='ct'><?=($do=='ad')?"動態文字廣告:":"最新消息:"?><input type='text' name='text'></div>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>