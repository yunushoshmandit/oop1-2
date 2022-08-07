<?php  
    class dbConnect {  
        function __construct() {  
            require_once('config.php');  
            $conn = mysql_connect('localhost', 'mysql_user', 'mysql_password');  
            mysql_select_db(DB_DATABSE, $conn);  
            if(!$conn)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }   
            return $conn;  
        }  
        public function Close(){  
            mysql_close();  
        }  
    }  
?>  
