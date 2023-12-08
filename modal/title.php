<h3>新增網站標題圖片<?= $_GET['table'] ?></h3>
<hr>
<table>
    <form action="./api/add_title.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>標題區替代文字</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
</table>
<div>
    <input type="hidden" name="table">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>