<!DOCTYPE html>
<html>
    <head>
        <?php
            require "components/meta.php";
        ?>
    </head>
    <body>
        <?php
            if (session_status() == PHP_SESSION_NONE){
                session_start();
            }

            require "SQL/connect.php";
            require "components/header.php";

            echo "<p style='margin-top:20px;font-size:12px;'>Welcome ".$_SESSION['username']." </p>";
        ?>
    </body>
</html>