<!-- ------------------------ Register Form ----------------------------- -->
<div id="register_form" class="card" style="display:none;">
    <h2 style="margin-top:40px;letter-spacing:8px;">SQUIGGLE</h2>
    <br>
    <img style="width:40px;" src="graphics/icon_cropped.png"/>
    <br>
    <p style="margin-bottom:16px;">Register an account.</p>
    <form action="PHP/register.php" method="POST">
        <input name="email" type="email" placeholder="Enter email" required autocomplete="off">
        <br>
        <input name="username" type="text" placeholder="Enter username" required autocomplete="off">
        <br>
        <input id="password" name="password" type="password" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}">
        <br>
        <input id="password2" name="password2" type="password" placeholder="Enter password again" oninput="passwordCheck();" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}">
        <br>
        <p id="password_confirmation_tag"></p>
        <br>
        <input type="submit" value="Sign up">     
    </form>
    <br>  
    <p>Squiggle inc. © <?php echo date("Y") ?></p>
    <br><br>
</div>

<script>
    function passwordCheck() {
        if (document.getElementById("password").value == document.getElementById("password2").value) {
            document.getElementById("password_confirmation_tag").innerHTML = "Passwords match";
        } else {
            document.getElementById("password_confirmation_tag").innerHTML = "Passwords do not match!";
        }
    }
</script>