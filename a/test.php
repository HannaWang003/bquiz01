<!-- creat -->
CREATE TABLE `testdb`.`testtable` 
(
`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
`name` TEXT NOT NULL , 
`num` INT(10) UNSIGNED NOT NULL , 
`date` DATE NOT NULL , 
PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;


<!-- title -->
CREATE TABLE `db011`.`menu` 
(
`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
`text` TEXT NOT NULL , 
`sh` INT(1) UNSIGNED NOT NULL , 
`big_id` INT(10) UNSIGNED NOT NULL , 
PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;

<!-- mvim insert -->
INSERT INTO `mvim` 
(`id`, `img`, `sh`) 
VALUES 
(NULL, '01C01.gif', '1'),
(NULL, '01C02.gif', '1'),
(NULL, '01C03.gif', '1'),
(NULL, '01C04.gif', '1');

<!-- image insert -->
INSERT INTO `image` 
(`id`, `img`, `sh`) 
VALUES 
(NULL, '01D01.gif', '1'),
(NULL, '01D02.gif', '1'),
(NULL, '01D03.gif', '1'),
(NULL, '01D04.gif', '1'),
(NULL, '01D05.gif', '1'),
(NULL, '01D06.gif', '1'),
(NULL, '01D07.gif', '1'),
(NULL, '01D08.gif', '1'),
(NULL, '01D09.gif', '1');



<?php
$do=($_GET['do'])??"main";
$file="./front/$do.php";
if(file_exists($file)){
	include $file;
}
else{
	include "./front/main.php";
}

$do=$_GET['do'];
$DB=${ucfirst($do)};


if(!isset($_SESSION['visited'])){
    if($Total->count()==0){
        $row['total']=1;
    }
    else{
      $row=$Total->find(1);
      $row['total']++;   
    }    
    $Total->save($row);
    $_SESSION['visited']=1;
}

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/{$_FILES['img']['name']}");
    $_POST['img']=$_FILES['img']['name'];
}
?>
