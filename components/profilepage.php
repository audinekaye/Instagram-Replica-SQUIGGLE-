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
                    <h2 style="font-size:8px;">JOINED ON: <?php echo substr($_SESSION["creation_date"],0,10); ?></h2>
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
