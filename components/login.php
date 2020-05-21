<div id="login_form" class="card" >
    <h2 style="margin-top:40px;letter-spacing:8px;">SQUIGGLE</h2>
    <br>
    <img style="width:40px;" src="graphics/icon_cropped.png"/>    
    <p style="margin-bottom:16px;">Log into your account.</p>
    <form action="PHP/login.php" method="POST">                    
        <input name="email" type="email" placeholder="Enter email" required autocomplete="off">
        <br>
        <input name="password" type="password" placeholder="Enter password" required>
        <br><br>
        <input type="submit" value="Login">
        <br>                   
    </form>
    <br>
    <p>Squiggle inc. © <?php echo date("Y") ?></p>
    <br><br>
</div>