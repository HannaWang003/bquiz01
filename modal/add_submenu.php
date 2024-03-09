<?php
include_once "../api/db.php";
$do=$_GET['do'];
$DB=${ucfirst($do)};
?>
<div class="ct">編輯次選單</div>
<hr>
<form action="../api/edit_submenu.php?do=<?=$do?>" method="post">
<table style="margin:auto;width:80%;" id="add">
    <tr>
        <td>次選單名稱</td>
        <td>次選單連結網</td>
        <td>刪除</td>
    </tr>
    <?php
$rows = $DB->all(['menu_id'=>$_GET['menu_id']]);
if(!empty($rows)){
foreach($rows as $row){
?>
    <tr>
        <td><input type="text" name="text[]" value="<?=$row['text']?>"></td>
        <td><input type="text" name="href[]" value="<?=$row['href']?>"></td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$row['id']?>">
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
    </td>
    </tr>
    <?php
}
}
else{
    ?>
    <tr>
    <td><input type="text" name="newtext[]" ></td>
    <td><input type="text" name="newhref[]" ></td>
    <td></td>
</tr> 
<?php 
}
    ?>
</table>
<div class="ct">
<input type="submit"><input type="reset"><input type="button" onclick="more()" value="更多次選單">
<input type="hidden" name="menu_id" value="<?=$_GET['menu_id']?>">
</div>
</form>
<script>
    function del(){
        remove($(this).closest('tr'))
    }
    function more(){
        let html =  `
        <tr>
        <td><input type="text" name="newtext[]" id=""></td>
        <td><input type="text" name="newhref[]" id=""></td>
        <td></td>
    </tr>
        `
$('#add').append(html);
    }
</script>