<?php
include_once "db.php";
$table = $_POST['table'];
$DB = ${ucfirst($table)};
unset($_POST['table']);
if(isset($_POST['del'])){
    foreach($_POST['del'] as $id=>$val){
        $DB->del($id);
    }
}

foreach($_POST['id'] as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        // echo $id;
        $DB->del($id);        
    }
    else{
$row = $DB->find($id);
// dd($row);
// exit();
if(isset($row['text'])){
    $row['text']=$_POST['text'][$key];
}
 switch($table){
        case "title":
            $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
        default;
    }
}
$DB->save($row);
    }
?>