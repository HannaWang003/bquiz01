<style>
    td:first-child {
        text-align: end;
    }
</style>
<h1 class="ct">新增管理者帳號</h1>
<hr>
<table class="m-auto">
    <tr>
        <td>帳號:</td>
        <td><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td>密碼:</td>
        <td><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td>確認密碼:</td>
        <td><input type="password" name="pw2" id="pw2"></td>
    </tr>
</table>
<div class="ct">
    <button id="addABtn">新增</button>
    <button id="reset">重置</button>
</div>
<script>
    $('#reset').on('click', () => {
        $('input').val('');
    })
    $('#addABtn').on('click', () => {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        let acc = $('#acc').val();
        if (pw != pw2) {
            alert('密碼不一致，請重新輸入');
        } else {
            $.post('../api/edit_admin.php', {
                acc,
                pw
            }, function(res) {
                location.href = "?do=admin";
            })
        }

    })
</script>