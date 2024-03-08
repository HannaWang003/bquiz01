<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="./api/bottom.php">
    <table width="80%" style="margin:auto">
        <tbody>
            <tr class="yel">
                <td width="40%">頁尾版權資料:</td>
                <td width="60%" style="background:transparent"><input type="text" name="bottom" value="<?= $Bottom->find(1)['bottom'] ?>" style="width:100%"></td>
            </tr>
            <tr>
                <td colspan="2" class="ct">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </td>
                <!-- <td></td> -->
            <tr>
        </tbody>
    </table>

</form>