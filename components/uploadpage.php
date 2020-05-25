<!-- ------------------------ Upload a Post with Caption ----------------------------- -->
<div id="upload_form" class="card" style="margin:auto;width:900px;"> 
    <div class="column" style="text-align:center;margin-top:20px;">
        <br>
        <form action="../PHP/upload_post.php" method="POST" enctype="multipart/form-data">
            <p style="font-size:15px;">UPLOAD PICTURE</p>
            <br>
            <div style="display:flex;margin:auto;text-align:center;">

                <div style="display:flex;padding: 1px 50px;">
                    <div style="float:left;">
                        <img id="upload_image" style="width:300px;height:300px;object-position:center;object-fit:cover;" src="../graphics/noicon.jpg"/>
                        <input id="fileToUpload" style="margin-left:20px;" name="file" type="file" accept="image/*" onchange="preview_upload_image(event);"/>
                
                    </div>
                    <div style="float:right;margin-right:100px;">
                        <p style="font-size:12px;">CAPTION</p>
                        <textarea id="picture_caption" style="border-radius:5%;border: 1px solid #E7E7E7;width:200px;height:110px;" class="bio_edit" name="caption"  placeholder="TYPE A CAPTION.."></textarea>
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


