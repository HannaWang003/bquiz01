<?php 
$DB=${ucfirst($do)};
?>
<table width="100%">
                                	<tbody><tr>
                                    	<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td><td><button onclick="document.cookie=&#39;user=&#39;;location.replace(&#39;?&#39;)" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                                    </tr>
                                </tbody></table>
                                <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動畫圖片管理</p>
        <form method="post" action="./api/edit.php?do=<?=$do?>">
    <table width="100%">
    	<tbody><tr class="yel">
        	<td width="70%">動畫圖片</td><td width="7%">顯示</td><td width="7%">刪除</td>
            <td></td>
                    </tr>
                    <?php
$rows = $DB->all();
foreach($rows as $row){
?>
<tr>
    <td class="cent"><img src="./img/<?=$row['img']?>" width="100px"></td>
    <td class="cent"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?> ></td>
    <td class="cent"><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
    <td class="cent"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?do=<?=$do?>&id=<?=$row['id']?>')" value="更換動畫"></td>
    <input type="hidden" name="id[]" value="<?=$row['id']?>">
</tr>
<?php
}
?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?do=<?=$do?>')" value="新增網站標題圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>