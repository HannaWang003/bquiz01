<?php
include_once "db.php";
foreach($_POST['id'] as $idx=>$id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $Title->del($id);}
    else{
        $row = $Title->find($id);
        $row['sh']=($id==$_POST['sh'])?1:0;
        }
        $row['text']=$_POST['text'][$idx];
        $Title->save($row);
    }
to("../back.php?do=title");

?>