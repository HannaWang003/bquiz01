<?php
date_default_timezone_set('Asia/Taipei');
session_start();
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url){
    header("location:$url");
}
class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db03";
    protected $pdo;
    protected $table;
    function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');
    }
    private function a2s($array){
        foreach($array as $col => $val){
            $tmp[] = "`$col`='$val'";
        }
        return $tmp;
    }
    private function sql_all($sql,$where,$other){
        if(isset($table) && !empty($table)){
            if(is_array($where)){
                if(!empty($where)){
                    $sql.=" where ".join(" && ",$this->a2s($where));
                }
            }
            else{
                $sql.=" $where";
            }
            $sql.=" $other";
            return $sql;
        }
    }
    function all($where='',$other=''){
        $sql = "select * from `$this->table` ";
        $sql = $this->sql_all($sql,$where,$other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }
    function conut($where='',$other=''){
        $sql = "select count(*) from `$this->table` ";
        $sql = $this->sql_all($sql,$where,$other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($where){
        $sql = "select * from `$this->table` ";
        if(is_array($where)){
$sql.=" where ".join(" && ",$this->a2s($where));
        }
        elseif(is_numeric($where)){
            $sql.=" where `id`='$where'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    private function math($math,$col,$where,$other){
        $sql = "select $math(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql,$where,$other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function sum($col,$where='',$other=''){
        return $this->math('sum',$col,$where,$other);
    }
    function max($col,$where='',$other=''){
        return $this->math('max',$col,$where,$other);
    }
    function min($col,$where='',$other=''){
        return $this->math('min',$col,$where,$other);
    }
    function save($array){
        if(isset($array['id'])){
            $sql = "update `$this->table` set ";
            $sql.= join(" , ",$this->a2s($array));
            $sql.=" where `id`={$array['id']}";
        }
        else{
            $sql = "insert into `$this->table` ";
            $col = "( `".join("` , `",array_keys($array))."` )";
            $val = "( '".join("' , '",$array)."' )";
            $sql.= " $col values $val ";
        }
        return $this->pdo->exec($sql);
    }
    function del($where=''){
        $sql = "delete from `$this->table` ";
        if(is_array($where)){
            $sql.=" where ".join(" && ",$this->a2s($where));
        }
        elseif(is_numeric($where)){
            $sql.=" where `id`='$where'";
        }
        return $this->pdo->exec($sql);
    }
}


?>