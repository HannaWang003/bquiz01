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
    private function a2s($array)
    {
        foreach ($array as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
        return $tmp;
    }
    private function sql_all($sql, $where, $other)
    {
        if (isset($table) && !empty($table)) {
            if (is_array($where)) {
                if (!empty($where)) {
                    $sql .= " where " . join(" && ", $this->a2s($where));
                }
            }
            $sql .= " $other";
        }
        return $sql;
    }
}
