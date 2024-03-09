<style>
    img{
        width:300px;
        height:30px;
    }
</style>
<p class="t cent botli">選單管理管理</p>
        <form method="post"  action="./api/edit_menu.php?do=<?=$do?>">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="30%">主選單名稱</td>
            <td width="30%">選單連結網址</td>
            <td width="15%">次選單數</td>
            <td width="5%">顯示</td>
            <td width="5%">刪除</td>
            <td width="15%"></td>
                    </tr>
                    <?php
                    $do=$_GET['do'];
                    $DB=${ucfirst($do)};
                    $rows = $DB->all(["menu_id"=>0]);
foreach($rows as $row){
?>
<tr>
            <td width="30%"><input type="text" name="text[]" value="<?=$row['text']?>" style="width:90%"></td>
            <td width="30%"><input type="text" name="href[]" value="<?=$row['href']?>" style="width:90%"></td>
            <td width="15%"><?=$DB->count(["menu_id"=>$row['id']])?></td>
            <td width="5%"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?> ></td>
            <td width="5%"><input type="checkbox" name="del[]" value="<?=$row['id']?>">
        <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </td>
        <td width="15%"><input type="button" onclick="op('#cover','#cvr','./modal/add_submenu.php?do=<?=$do?>&menu_id=<?=$row['id']?>')" value="編輯次選單"></td>
                   </tr>

<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_ad.php?do=<?=$do?>')" value="新增最新消息資料"></td><td class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>