<?php
include_once "db.php";

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/{$_FILES['img']['name']}");
    $_POST['img']=$_FILES['img']['name'];
}
if(isset($_POST['id'])){
    $row = $Title->find($_POST['id']);
    $row['img']=$_POST['img'];
    $Title->save($row);
}else{
    $_POST['sh']=0;
    $Title->save($_POST);
}
to("../back.php?do=title");
?>