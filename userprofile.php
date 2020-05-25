<!DOCTYPE html>
    <head>
        <?php
            require "components/meta.php";
            require "components/header.php";
        ?>
    </head>
    <body>
        <?php
            if (session_status() == PHP_SESSION_NONE){
                session_start();
            }
        ?>
        <!-- -------------------- PROFILE PAGE HEAD PORTION ---------------------------- -->
        <br>
        <div class="card" style="margin:auto;width:900px;">  
            <?php
                require "components/profilepage.php";
            ?>
        <!-- -------------------------------------------------------------------------------------------- -->

        <!-- -------------------- PROFILE NAVBAR ---------------------------- -->
            <div id="profile_nav_form">
                <div style="border-top: 1px solid #E7E7E7;">
                    <button id="profile_button" class="profile_btns" style="border-top:1px solid black;" onclick="profileDisplay();">POSTS <i class="fas fa-border-all"></i></button>
                    <button id="upload_button" class="profile_btns" onclick="uploadDisplay();">UPLOAD POST <i class="far fa-paper-plane"></i></button>
                    <button id="edit_button" class="profile_btns" onclick="editDisplay();">SETTINGS <i class="fas fa-ellipsis-h"></i></button>
                </div>
                <br>
            </div>
        </div>
        <br>
        <!-- ------------------------------------------------------------------------- -->
        
        <!-- ------------------ PROFILE PAGE EDIT/UPLOAD PAGE ---------------------- -->
        
        <?php
            require "components/editpage.php";
            require "components/uploadpage.php";
            require "components/userfeed.php";
        ?>
        <!-- ------------------------------------------------------------------------- -->
        
        <!-- -------------------- JS for selection ---------------------------- -->
        <script src="JS/edit.js"></script>
        <script src="../JS/img_preview.js"></script>
        <script>
            document.getElementById("edit_form").style.display = "none";
            document.getElementById("upload_form").style.display = "none";
            document.getElementById("userfeed").style.display = "block";

            function clearInput(){
                document.getElementById("username_input").value = "";
                document.getElementById("bio_input").value = "";
                document.getElementById("output_image").src = "../graphics/noicon.jpg";
            }

            function clearFunc(){
                document.getElementById("picture_caption").value = "";
                document.getElementById("upload_image").src = "../graphics/noicon.jpg";
            }
        </script>
        <!-- ---------------------------------------------------------------- -->
        <br>
        <hr style="border-top: 1px solid rgb(249, 249, 249);">
    </body>
</html>
