<?php 

include('config.php');

class DB {

    //Datos de conexión
    static $host = HOST;
    static $user = USER;
    static $password = PASSWORD;
    static $db = DB;
    static $db2 = DB2;
    

    public static function init(){
        echo "Iniciando base de datos";
    }

    public static function getConnection(){
        return new mysqli(self::$host, self::$user, self::$password, self::$db);
    }

    public static function query($sql){
        //Crear la conexión
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        
        $result = $con->query($sql); 
        
        $con->close();

        return $result;
        
        //aca no se ejecuta nada
    }
    //Productos

    public static function getConnection_pd(){
        return new mysqli(self::$host, self::$user, self::$password,self::$db2);
    }
    public static function query_pd($sql_pd){
        $con2 = new mysqli(self::$host, self::$user, self::$password, self::$db2);
        
        $result2 = $con2->query_pd($sql_pd); 
        
        $con2->close();

        return $result;

    }
}

?>