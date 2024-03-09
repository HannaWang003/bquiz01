<?php
include_once "db.php";
if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/{$_FILES['img']['name']}");
    $_POST['img']=$_FILES['img']['name'];
}
$_POST['sh']=0;
$do=$_GET['do'];
$DB=${ucfirst($do)};
$DB->save($_POST);
to("../back.php?do=$do");
?>