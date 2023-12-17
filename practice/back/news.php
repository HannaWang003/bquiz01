<?php
$DB = ${ucfirst($do)};
$rows = $DB->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody class="cent">
                <tr class="yel">
                    <td width="80%">最新消息資料內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
$total = $DB->count();
$div = 2;
$pages = ceil($total/$div);
$now = $_GET['p']??1;
$start = ($now-1)*$div;
$rows = $DB->all(" limit $start,$div");


foreach($rows as $row){
                ?>
                <tr>
                    <td>
                        <textarea name="text[]" id="" cols="80" rows="10"><?=$row['text']?></textarea>
                    </td>
                    <td><input type="radio" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id']?>">刪除</td>
                </tr>
                <!-- 要放在foreach裡 -->
                <input type="hidden" name="id[]" value="<?=$row['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>



        <!-- 分頁選單區 -->
<div class="cent">

<?php
$prev = $now-1;
echo ($prev>=1)?"<a href='?do=$do&p=$prev'> < </a>":"";
echo "&nbsp;&nbsp;";


for($i=1;$i<=$pages;$i++){
    $fontsize = ($i == $now)? '24px' : '16px';
    echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'>";
    echo $i;
    echo "</a>";
}

echo "&nbsp;&nbsp;";
$next = $now+1;
echo ($next <= $pages)?"<a href='?do=$do&p=$next'> > </a>":"";
?>

</div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=<?=$do?>')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
        <!-- 只要出現一次的可以放在foreach外 -->
<input type="hidden" name="table" value="<?=$do?>">
    </form>
</div>