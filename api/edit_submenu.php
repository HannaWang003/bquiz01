<?php
include_once "db.php";
$do=$_GET['do'];
$DB=${ucfirst($do)};
// dd($_POST);
foreach($_POST['id'] as $idx => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }
    else{
        $row = $DB->find($id);
        $row['text']=$_POST['text'][$idx];
        $row['href']=$_POST['href'][$idx];
        $DB->save($row);
    }
}
foreach($_POST['newtext'] as $idx=>$newtext){
    $new['text']=$newtext;
    $new['href']=$_POST['newhref'][$idx];
    $new['sh']=1;
    $new['menu_id']=$_POST['menu_id'];

    $DB->save($new);
}
to("../back.php?do=menu");
?>