<h3>新增校園映像圖片</h3>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img" ></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?=$_GET['table']?>">
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>