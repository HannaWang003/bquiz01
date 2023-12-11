<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" target="back" action="./api/edit.php">
        <table width="100%" style="text-align:center">
            <tbody>
                <tr class="yel">
                    <td width="80%">最新資料消息內容資料</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                // 分頁
                $total = $DB->math('count', "id");
                $div = 5;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $starts = ($now - 1) * $div;
                $rows = $DB->all(" limit $starts, $div");
                // $rows = $DB->all();
                foreach ($rows as $row) {
                    //     dd($rows);
                    // }
                    // exit()
                ?>
                <tr>
                    <td>
                        <textarea type="text" name="text[]"
                            style="width:90%;height:60px"><?= $row['text']; ?></textarea>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? 'checked' : '' ?>></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <!-- 分頁 -->
        <div class="cent" style="display:block;">
            <?php
            if ($now > 1) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'> < </a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $fontsize = ($now == $i) ? '24px' : '16px';
                echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
            }
            if ($now < $pages) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'> > </a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?= $do ?>">
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增最新消息資料">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>