<style>
    img{
        width:300px;
        height:30px;
    }
</style>
<p class="t cent botli">動態文字廣告管理</p>
        <form method="post"  action="./api/edit.php?do=ad">
    <table width="100%">
    	<tbody><tr class="yel">
            <td width="80%">動態文字廣告</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
                    </tr>
                    <?php
                    $do=$_GET['do'];
                    $DB=${ucfirst($do)};
$rows = $DB->all();
foreach($rows as $row){
?>
<tr>
            <td width="80%"><input type="text" name="text[]" value="<?=$row['text']?>" style="width:90%"></td>
            <td width="7%"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?> ></td>
            <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id']?>">
        <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </td>
                   </tr>

<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_ad.php?do=<?=$do?>')" value="新增動態文字廣告"></td><td class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>