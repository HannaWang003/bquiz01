<?php
include_once "db.php";
if(isset($_POST['total'])){
$row = $Total->find(1);
$row['total']=$_POST['total'];
$Total->save($row);
}
to("../back.php?do=total");
?>