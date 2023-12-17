<?php
$DB = ${ucfirst($do)};
$rows = $DB->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody class="cent">
                <tr class="yel">
                    <td width="45%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
foreach($rows as $row){
                ?>
                <tr>
                    <td width="70%"><img src="./img/<?=$row['img']?>" alt="" width=100px height=68px></td>
                    <td width="10%"><input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?>></td>
                    <td width="10%"><input type="checkbox" name="del[]" value="<?=$row['id']?>">刪除</td>
                    <td>
                        <input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更新動畫">
                    </td>
                </tr>
                <!-- 要放在foreach裡 -->
                <input type="hidden" name="id[]" value="<?=$row['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=<?=$do?>')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
        <!-- 只要出現一次的可以放在foreach外 -->
<input type="hidden" name="table" value="<?=$do?>">
    </form>
</div>