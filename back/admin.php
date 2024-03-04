<h1 class="ct">管理者帳號管理</h1>
<form action="./api/edit_admin.php" method="post">
    <table class="w90 m-auto">
        <tr>
            <th class='bgog'>帳號</th>
            <th class='bgog'>密碼</th>
            <th class='bgog'>刪除</th>
        </tr>
        <?php
        $rows = $Admin->all();
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><input type="text" name="acc[]" value="<?= $row['acc'] ?>"></td>
                <td><input type="text" name="pw[]" value="<?= $row['pw'] ?>"></td>
                <td class='ct'><input type="checkbox" name="del[]" vale="<?= $row['id'] ?>"></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <div class="ct">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>
<button onclick="op('#cover','#cvr','./modal/add.php?do=<?= $do ?>')">新增管理者帳號</button>