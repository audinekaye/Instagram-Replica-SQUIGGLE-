<!-- ------------------------ Individual Userfeed ----------------------------- -->
<div id="userfeed_form" class="card" style="margin:auto;width:900px;">    
<br>
    <div style="text-align:center;">
        <?php
            try {
                $stmt = $conn->prepare("SELECT * FROM feed WHERE user_id = :id ORDER BY creation_date DESC"); 
                $stmt->execute([":id" => $_SESSION["id"]]);
                $results = array();
                if ($stmt->execute()) {                
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $results[] = $row;         
                    }
                }

                echo "<div style='width:665px;margin:auto;text-align:center;display:flex;'>";
                    for ($i = 0;$i < $stmt->rowcount();$i++) {

                        if (($i%3) == 0) {
                            echo "</div>
                            <div style='width:665px;margin:auto;text-align:center;display:flex;'>";
                        }

                        try {
                            $stmt2 = $conn->prepare("SELECT * FROM userdata WHERE id = :id"); 
                            $stmt2->execute([":id" =>$results[$i]["user_id"]]);
                            $user = $stmt2->fetch(PDO::FETCH_ASSOC);
                        } catch(PDOException $e) {
                            //echo error message...
                        }
                        echo "<div class='feedDiv'>
                                <img class='feedImg' src='uploads/".$results[$i]["img"]."'>

                              </div>";
                            //   <p>".$user["username"]."</p>
                        
                    }
                echo "</div>";
            } catch(PDOException $e) {
                //error kak..
            }
        ?>  
    </div>      
</div>