<?php
include_once "../api/db.php";
?>
<h3>編輯次選單選單</h3>
<form action="./api/submenu.php" method="post" enctype="multipart/form-data">
    <table id="sub">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
    $subs = $Menu->all(['menu_id'=>$_GET['id']]);
    foreach($subs as $sub){
        ?>
        <tr>
            <td><input type="text" name="text[]" value="<?=$sub['text']?>"></td>
            <td><input type="text" name="href[]" value="<?=$sub['href']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$sub['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$sub['id']?>"></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="table" value="<?=$_GET['table']?>">
    <input type="hidden" name="menu_id" value="<?=$_GET['id']?>">
    <div>
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>
<script>
    function more(){
        let item = `<tr>
            <td><input type="text" name="add_text[]" value=""></td>
            <td><input type="text" name="add_href[]" value=""></td>
        </tr>`;

        $("#sub").append(item);
    }
</script>