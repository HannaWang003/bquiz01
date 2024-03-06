<style>
    img{
        width:100px;
        height:68px;
    }
</style>
<p class="t cent botli">校園映像資料管理</p>
        <form method="post"  action="./api/edit.php?do=image">
    <table width="100%">
    	<tbody><tr class="yel">
        	<td width="45%">校園映像資料圖片</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
            <td></td>
                    </tr>
                    <?php
$rows = $Image->all();
foreach($rows as $row){
?>
<tr>
        	<td width="45%" class="ct"><img src="./img/<?=$row['img']?>"></td>
            <td width="7%"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?> ></td>
            <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id']?>">
        <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </td>
            <td><input type="button" onclick="op('#cover','#cvr','./modal/upload_image.php?do=<?=$do?>&id=<?=$row['id']?>')" value="更新圖片"></td>
                    </tr>

<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload_mvim.php?do=<?=$do?>')" value="新增校園映像圖片"></td><td class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>