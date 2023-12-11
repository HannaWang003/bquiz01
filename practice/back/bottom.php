<?php
$DB = ${ucfirst($do)};
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理管理</p>
    <form method="post" action="./api/edit_info.php">
        <table width="80%" style="margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權資料</td>
                    <td width="50%">
                        <input type="text" name="<?=$do?>" value="<?=$DB->find(1)[$do]?>">
                        <input type="hidden" name="table" value="<?=$do?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>