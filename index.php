<!DOCTYPE html>
<html>
    <head>
        <?php
            require "components/meta.php";
        ?>
    </head>
    <body>
        <!-- -------------------- LOGIN AND REGISTER Page  ---------------------------- -->
        <?php
            require "SQL/connect.php";

            if (!isset($_SESSION["error"])) {
                $_SESSION["error"] = NULL;
            }

            if (!isset($_SESSION["register_success"])) {
                $_SESSION["register_success"] = 0;
            }

            if (($_SESSION["error"])) {
                echo "<script>
                    alert('".$_SESSION["error"]."');
                    </script>";
                $_SESSION["error"] = "";
            }

            if ($_SESSION["register_success"] == 1) {
                echo "<script>
                    alert('Account Registered! You can log in now');
                    </script>";
                $_SESSION["register_success"] = 0;
            }
            
        ?>
        <div style="width:400px; margin:auto; margin-top:80px;">
            <div style="display:flex;width:50%;text-align:center;">
                <button id="login_button" class="menubutton" style="border-bottom: 4px solid grey" onclick="loginDisplay();">Log in</button>
                <button id="register_button" class="menubutton" style="border-bottom: 4px solid white" onclick="registerDisplay();">Sign up</button>
            </div>
            <?php
                require "components/login.php";
                require "components/register.php";
            ?>
        </div>
        <!-- --------------------------------------------------------------------------- -->
        <script src="JS/signup.js"></script>
    </body>
</html>