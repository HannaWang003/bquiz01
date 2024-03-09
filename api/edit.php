<?php
include_once "db.php";
$do=$_GET['do'];
$DB=${ucfirst($do)};
//title
if($do=='title'){
foreach($_POST['id'] as $idx=>$id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
$DB->del($id);
    }else{
        $row = $DB->find($id);
        $row['text']=$_POST['text'][$idx];
        $row['sh']=($_POST['sh']==$id)?1:0;
        $DB->save($row);
    }
}
}
//mvim,image
if($do=='mvim' || $do=='image'){
    foreach($_POST['id'] as $idx=>$id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
    $DB->del($id);
        }else{
            $row = $DB->find($id);
            $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            $DB->save($row);
        }
    }
    }
    //news;
    if($do=='news' || $do=='ad'){
        foreach($_POST['id'] as $idx=>$id){
            if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
            }else{
                $row = $DB->find($id);
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
                $DB->save($row);
            }
        }
        }
    //bottom
    if($do=='bottom' || $do=='total'){
        $DB->save($_POST);
    }


to("../back.php?do=$do");
?>