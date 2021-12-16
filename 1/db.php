<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "lab_final";

$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn)
{
   die('Could not Connect My Sql:' .mysql_error());
}

$conn2 = "";

        try {
            $servername = "localhost";
            $dbname = "lab_final";
            $username = "root";
            $password = "";
           
            $conn2 = new PDO(
                "mysql:host=$servername; dbname=lab_final",
                $username, $password
            );
              
            $conn2->setAttribute(PDO::ATTR_ERRMODE, 
                        PDO::ERRMODE_EXCEPTION);
              
        } catch(PDOException $e) {
            echo "Connection failed: " 
                . $e->getMessage();
        }


?>
