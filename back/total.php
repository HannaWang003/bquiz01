<p class="t cent botli">進站人數總管理</p>
        <form method="post"  action="./api/total.php">
    <table width="80%" style="margin:auto">
    	<tbody><tr class="yel">
        	<td width="40%">進站人數</td>
            <td width="60%" style="background:transparent"><input type="text" name="total" value="<?=$Total->find(1)['total']?>" style="width:100%"></td>
                    </tr>
                    <tr>
                    <td colspan="2" class="ct">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                    <!-- <td></td> -->
<tr>
    </tbody></table>    

        </form>