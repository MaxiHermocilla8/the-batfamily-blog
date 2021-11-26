<?php
class connetion{
    public static function connect(){
        define('server','localhost');
        define('name_db','mi_base_datos');
        define('user','lroot');
        define('password');

        $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        // PDO: PHP Data Object
        try
        {
            $conection = new PDO("mysql:host=".server.";dbname=".name_db, user, password,$options);
            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conection;
        }
        catch (PDOException $ex)
        {
            die ("Conection error: ". $ex->getMessage());
        }
    }
}
?>