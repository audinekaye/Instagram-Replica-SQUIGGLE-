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
        <!-- -------------------- DISPLAYING ALL USER FEED ---------------------------- -->
        <br>
        <div id="userfeed_form" class="card" style="margin:auto;width:900px;">    
            <div style="text-align:center;">
                <br><br>
                <?php
                    try {
                        $stmt = $conn->prepare("SELECT * FROM feed ORDER BY creation_date DESC"); 
                        $stmt->execute();
                        $results = array();
                        if ($stmt->execute()) {                
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $results[] = $row;         
                            }
                        }       
                    
                        echo "<div style='width:665px;margin:auto;text-align:center;'>";
                            for ($i = 0;$i < $stmt->rowcount();$i++) {
                            
                                if (($i%3) == 0) {
                                    echo "</div>
                                    <div style='width:665px;margin:auto;text-align:center;'>";
                                }
                            
                                // GET USERDATA FOR FEED IMG
                                try {
                                    $stmt2 = $conn->prepare("SELECT * FROM userdata WHERE id = :id"); 
                                    $stmt2->execute([":id" =>$results[$i]["user_id"]]);
                                    $user = $stmt2->fetch(PDO::FETCH_ASSOC);
                                } catch(PDOException $e) {
                                    //echo error message...
                                }
                                echo "<div class='uni_feedDiv'>
                                        <br>

                                        <p style='float:left;margin-left:20px;font-size:15px;font-weight:bold;'>".$user["username"]."</p>
                                        <br>
                                        <img class='uni_feedImg' src='uploads/".$results[$i]["img"]."'>
                                        <p style='font-size:16px;'>".$user["username"]."</p>
                                        <p style='font-size:12px;'>".$results[$i]["caption"]."</p>
                                        <br>
                                      </div>";
                            }
                        echo "</div>";
                    } catch(PDOException $e) {
                        //error kak..
                    }
                ?>  
            </div>      
        </div>
        <!-- ------------------------------------------------------------------------ -->
    </body>
</html>

<!-- if (!isset($_SESSION["image"]) or ($_SESSION["image"] == "")) {
                    echo "<img class='miniImage' src='uploads/noicon.jpg'>";
                } else {
                    echo "<img class='miniImage' src='uploads/".$_SESSION["image"]."'>";
                } 
            -->

<!-- <img style='float:left;margin-left:20px;' class='miniImage' src='uploads/noicon.jpg'> -->