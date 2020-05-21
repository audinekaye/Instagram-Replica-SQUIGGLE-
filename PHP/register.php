<?php
    require '../SQL/dbdetails.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $email = strtolower(trim($_POST["email"]));
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $password2 = trim($_POST["password2"]);


    if ($password == $password2) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $conn->prepare("SELECT * FROM userdata WHERE email = :email" ); 
            $stmt->execute([":email" => $email]);
            if ($stmt->rowcount() == 0) {
                try {  
                    $stmt = $conn->prepare("INSERT INTO userdata (email, username, password) VALUES (:email, :username, :password)"); 
                    $stmt->execute([":email" => $email, ":username" => $username, ":password" => $password]);
                    $_SESSION["register_success"] = 1;
                    header("Location: ../index.php"); 
                } catch(PDOException $e) {
                    $_SESSION["error"] = "Error occurred, try again later";
                    header("Location: ../index.php");
                }
            } else {
                $_SESSION["error"] = "Email already registered!";
                header("Location: ../index.php");
            }
        } catch(PDOException $e) {
            header("Location: ../index.php");
        }
    } else {
        $_SESSION["error"] = "Passwords do not match!";
        header("Location: ../index.php");
    }
?>