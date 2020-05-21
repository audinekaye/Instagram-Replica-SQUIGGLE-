<?php
    require "meta.php";

    if (session_status() == PHP_SESSION_NONE){
                    session_start();
                    }
?>
<!-- -------------------------------- PROFILE PAGE HEADER ------------------------------------ -->
<form id="profile_form">
    <div style="display:flex;">
        <div class="column" style="float:left;margin-top:30px;">
            <div style="margin:auto;height:auto;float:right;">
                <div style="margin-left:30px;">
                    <p style="text-align:center;font-size:8px;">WELCOME</p>
                    <?php
                        echo "<h2>".$_SESSION["username"]."</h2>";
                    ?>
                    <!-- DATE CREATED IN SMALL LETTERS-->
                    <h2 style="font-size:8px;">JOINED ON: dd/mm/yyyy</h2>
                    <br>

                    <?php
                        echo "<p>".$_SESSION["bio"]."</p>";
                    ?>
                </div>
            </div>
            <?php
                if (!isset($_SESSION["image"]) or ($_SESSION["image"] == "")) {
                    echo "<img class='profileImage' src='uploads/noicon.jpg'>";
                } else {
                    echo "<img class='profileImage' src='uploads/".$_SESSION["image"]."'>";
                }
            ?>
        </div>
        <br>
    </div>
    <br>
</form>
<!-- -------------------------------------------------------------------------------------------- -->

<!-- -------------------------------- PROFILE PAGE POSTS/FEED ----------------------------------- -->
<div id="post_feed">
    <?php
        // try{
        //     $stmt = $conn->prepare("SELECT * FROM userfeed WHERE user_id = :user_id");
        //     $stmt->execute(["user_id" => $_SESSION["id"]]);
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //     echo "<div style='display:flex;'>";
        //     for ($i = $stmt->rowcount(); $i > 0; $i--) {
        //         echo "<img src='feed/".$result["image"]."'>";
        //     }
        //     echo "</div>";
        // } catch(PDOException $e){
        //     echo "Error: sql did not execute";
        // }
    ?>
</div>
<!-- -------------------------------------------------------------------------------------------- -->
