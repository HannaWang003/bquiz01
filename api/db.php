<?php
date_default_timezone_set('Asia/Taipei');
session_start();
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url)
{
    header("location:$url");
}
class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db03";
    protected $pdo;
    protected $table;
    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    function all{

    }
    private a2s($where){
        foreach($where)
    }
}
$Data = new DB($table);