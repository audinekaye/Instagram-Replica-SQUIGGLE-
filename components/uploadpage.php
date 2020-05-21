<div id="upload_form" class="card" style="margin:auto;width:900px;"> 
<!-- <button id="exit_btn" style="float:right;font-size:15px;margin-right:10px;" class="profile_btns"><i class="fas fa-times"></i></button> -->
    <div class="column" style="text-align:center;margin-top:20px;">
        <br>
        <form action="#" method="POST" enctype="multipart/form-data">
            <p style="font-size:15px;">UPLOAD PICTURE</p>
            <!-- <p style="font-size:20px;"><i class="fas fa-camera-retro"></i></p> -->
            <br>
            <div style="display:flex;margin:auto;text-align:center;">

                <div style="display:flex;padding: 1px 50px;">
                    <div style="float:left;">
                        <img id="upload_image" style="width:300px;height:300px;object-position:center;object-fit:cover;" src="../graphics/noicon.jpg"/>
                        <input id="fileToUpload" style="margin-left:20px;" name="fileToUpload" type="file" accept="image/*" onchange="preview_upload_image(event);"/>
                
                    </div>
                    <div style="float:right;margin-right:100px;">
                        <p style="font-size:12px;">CAPTION</p>
                        <textarea id="picture_caption" style="border-radius:5%;border: 1px solid #E7E7E7;width:200px;height:110px;" class="bio_edit" name="bio"  placeholder="TYPE A CAPTION.."></textarea>
                    </div>
                </div>

            </div>
            <br><br>
            <hr style="border-top: 1px solid rgb(249, 249, 249);">
            <br>
            <input class="submit_change" type="submit" value="UPLOAD POST">
        </form>
        <button id="cancel_btn" class="profile_btns" onclick="clearFunc();">CANCEL <i class="fas fa-times"></i></button>
        <br><br>
    </div>
</div>
<br><br>
<script src="../JS/img_preview.js"></script>
<script>
    function clearFunc(){
        document.getElementById("picture_caption").value = "";
        document.getElementById("upload_image").src = "../graphics/noicon.jpg";
    }
</script>
