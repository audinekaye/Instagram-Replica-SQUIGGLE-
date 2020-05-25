function preview_image(event) {
   var reader = new FileReader();
   reader.onload = function() {
      var output = document.getElementById('output_image');
      output.src = reader.result;
   }
   reader.readAsDataURL(event.target.files[0]);
}


function preview_upload_image(event) {
   var reader = new FileReader();
   reader.onload = function() {
      var output = document.getElementById('upload_image');
      output.src = reader.result;
   }
   reader.readAsDataURL(event.target.files[0]);
}