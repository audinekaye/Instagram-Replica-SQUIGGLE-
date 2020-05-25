<?php
    require "dbdetails.php";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        echo "<script>
                console.log('Database: Connection Succesful');
              </script>";
    }
    catch(PDOException $e) {
        echo "<script>
                console.log('Database: Connection failed');
              </script>";
    }

    
?>