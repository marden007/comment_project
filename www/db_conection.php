<?php
class db_con{
    static private $connect = null;
    
    static private $host = "localhost";
    static private $port = "5432";
    static private $dbname = "mycomments";
    static private $user = "postgres";
    static private $pass = "postgres";


    public function __construct(){
        if(self::$connect === null){
            try{
                self::$connect = new PDO("pgsql:host=".self::$host.";port=".self::$port.";dbname=".self::$dbname.";user=".self::$user.";password=".self::$pass);
            } 
            catch (PDOException $error){
              echo "Failed to get DB connect: " . $error->getMessage() . "\n";
              exit();
            }
        }
    }

    public function __destruct(){
        if(self::$connect !== null){
            self::$connect = null;
        }
    }

    public function query($sql){
        if(self::$connect === null){
            return false;
        }
        $sql = (string)$sql;
        if($sql !== ""){
            try{
                $result = self::$connect->query($sql);
            }
            catch(PDOException $error){
                echo "Failed to DB query: " . $error->getMessage() . "\n";
                exit;
            }
        }
        return $result;
    }
}
?>
