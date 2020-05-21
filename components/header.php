<div style="background-color:rgb(246,246,246);border:none;box-shadow: 0 8px 12px -6px rgb(238, 238, 238);margin:auto;width:900px;">
    <div class="header">
        <h2 style="margin-top: 7px;"><i class="fas fa-wave-square"></i></h2>
    </div>

    <div class="navbar" style="text-align:center;">
        <div style="float:none;">
            <button id="settings_btn" class="settings_btn" style="cursor:pointer;float:right;"><i class="fas fa-ellipsis-h"></i></button>
            
            <!-- ------------------------ Settings Modal ----------------------------- -->
            <div id="settings_modal" class="modal">
                <div class="modal-content" style="border-radius:15px">
                    <span class="close">&times;</span>
                    <p>SETTINGS</p>
                    <hr style="border-top: 1px solid rgb(249, 249, 249);">
                    <br>

                    <div style="margin:auto;text-align:center;">
                        <a href="" id="logout" style="border: 1px solid rgb(248, 248, 248) ;padding: 14px 90px;" onclick="LogOut()">LOGOUT</a>  
                    </div>

                    <br>
                    <hr style="border-top: 1px solid rgb(249, 249, 249);">
                </div>
                <br>
            </div>
            <!-- --------------------------------------------------------------------------- -->

            <script src="../JS/settingsmodal.js"></script>
            <script> 
                function LogOut(){
                    var logout_true = confirm("Are you sure you want to log out?");
                    if (logout_true == true){
                        //logout
                        document.getElementById("logout").href = "PHP/logout.php";
                    } else {
                        //remain on page
                        document.getElementById("logout").href = "#";
                    }
                }
            </script>
            <a href="userprofile.php" style="float:right"><i class="far fa-user"></i></i></a>
            <!-- <a href="#" style="float:right"><i class="far fa-heart"></i></a>
            <a href="#" style="float:right"><i class="far fa-envelope"></i></a> -->
            <a href="userpage.php" style="float:right"><i class="fas fa-home"></i></a>
        </div>
    </div>
</div>