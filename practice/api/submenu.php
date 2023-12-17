<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx=>$id){
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
}
else{
    foreach($_POST['add_text'] as $idx=>$text){
        if($text!=''){
    $data=[];
    $data['text']=$text;
    $data['href']=$_POST['add_href'][$idx];
    $data['sh']=1;
    $data['menu_id']=$_POST['menu_id'];
    $DB->save($data);
        }   
    }

}
to("../back.php?do=$table");
?>