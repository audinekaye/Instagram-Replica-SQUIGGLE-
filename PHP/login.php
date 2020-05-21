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
    $password = trim($_POST["password"]);

    try {
        $stmt = $conn->prepare("SELECT * FROM userdata WHERE email = :email" ); 
        $stmt->execute([":email" => $email]);
        if ($stmt->rowcount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $hash = $result["password"];
            if (password_verify($password, $hash)) {
                $_SESSION["id"] = $result["id"];
                $_SESSION["username"] = $result["username"];
                $_SESSION["email"] = $result["email"];
                $_SESSION["image"] = $result["image"];
                $_SESSION["bio"] = $result["bio"];
                
                header("Location: ../userpage.php");
            } else {
                $_SESSION["error"] = "Passwords do not match!";
                header("Location: ../index.php");
            }
        } else {
            $_SESSION["error"] = "Account does not exist!";
            header("Location: ../index.php");
        }
    } catch(PDOException $e) {
        $_SESSION["error"] = "Error, There was a problem logging in.";
        header("Location: ../index.php");
    }
?>