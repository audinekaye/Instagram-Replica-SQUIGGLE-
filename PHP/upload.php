<?php
    require_once '../SQL/dbdetails.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Connected to Database');</script>";
    }
    catch(PDOException $e) {
        echo "<script>console.log('ERROR connecting');</script>";
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $bio = $_POST["bio"];
    $username = $_POST["username"];
    $id = $_SESSION["id"];
 
    if ($_FILES["fileToUpload"]["name"] != "") {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        try {
            $stmt = $conn->prepare("UPDATE userdata SET profile_image = :img WHERE id = :id");
            $stmt->execute([":img" => basename($_FILES["fileToUpload"]["name"]), ":id" => $id]);
            $_SESSION["image"] = basename($_FILES["fileToUpload"]["name"]);
        } catch(PDOException $e) {
            echo "Error updating picture";
        }
    }

    if ($bio) {
        try {
            $stmt = $conn->prepare("UPDATE userdata SET bio = :bio WHERE id = :id");
            $stmt->execute([":bio" => $bio, ":id" => $id]);
            $_SESSION["bio"] = $bio;
        } catch(PDOException $e) {
            echo "Error updating bio";
        }
    }

    if ($username) {
        try {
            $stmt = $conn->prepare("UPDATE userdata SET username = :username WHERE id = :id");
            $stmt->execute([":username" => $username, ":id" => $id]);
            $_SESSION["username"] = $username;
        } catch(PDOException $e) {
            echo "Error updating username";
        }
    }
   
    header("Location: ../userprofile.php");
?>