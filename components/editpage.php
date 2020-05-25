<div id="edit_form" class="card" style="margin:auto;width:900px;"> 
    <div class="column" style="text-align:center;margin-top:20px;">
        <br>
        <form action="../PHP/upload.php" method="POST" enctype="multipart/form-data">
            <p style="font-size:15px;">PROFILE PICTURE</p>
            <div style="margin:auto;text-align:center;padding:1px 360px;">
                <img id="output_image" class="profileImage" style="border:2px solid grey;" src="../graphics/noicon.jpg"/>
                <input id="fileToUpload" style="padding:10px 1px;" name="fileToUpload" type="file" accept="image/*" onchange="preview_image(event);"/>
            </div>

            <hr style="border-top: 1px solid rgb(249, 249, 249);">
            <br>

            <p style="padding:0px 10px;font-size:15px;">USERNAME</p>
            <div style="display:flex;padding:0px 350px;"> 
                <input id="username_input" class="username_edit" style="width:200px;height:10px;letter-spacing:5px;" name="username" type="text" placeholder="USERNAME" autocomplete="off">
            </div>

            <p style="padding:0px 10px;font-size:15px;">BIO</p>
            <div style="display:flex;padding:0px 340px;">
                <textarea id="bio_input" class="bio_edit" style="width:100%;height:110px;" name="bio"  placeholder="BIO"></textarea>
            </div>

            <br>
            <hr style="border-top: 1px solid rgb(249, 249, 249);">
            <br>

            <input class="submit_change" type="submit" value="UPDATE">
        </form>
        <button id="cancel_btn" class="profile_btns" onclick="clearInput();">CANCEL <i class="fas fa-times"></i></button>
        <br><br><br>
    </div>
</div>
