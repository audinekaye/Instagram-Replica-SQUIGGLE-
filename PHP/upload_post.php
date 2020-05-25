<?php
    require_once '../SQL/connect.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {

    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $caption = $_POST["caption"];
    $target_dir = '../uploads/';

    $_FILES["file"]["name"] = preg_replace('/\s+/', '_', basename($_FILES["file"]["name"]));
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (basename($_FILES["file"]["name"])) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        try {
            $stmt = $conn->prepare("INSERT INTO feed (user_id, img, caption) VALUES (:id, :img, :caption)"); 
            $stmt->execute([":img" => basename($_FILES["file"]["name"]), ":id" => $_SESSION['id'], ":caption" => $caption]);
            header("Location: ../userprofile.php");
        } catch(PDOException $e) {
            echo $e;
        }
    }
?>