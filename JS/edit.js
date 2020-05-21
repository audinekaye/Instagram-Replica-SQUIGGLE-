function editDisplay() {
    document.getElementById("profile_form").style.display = "block";
    document.getElementById("profile_nav_form").style.display = "block";
    document.getElementById("edit_form").style.display = "block";
    document.getElementById("upload_form").style.display = "none";



    document.getElementById("edit_button").style.borderTop = "1px solid black";
    document.getElementById("profile_button").style.borderTop = "none";
    document.getElementById("upload_button").style.borderTop = "none";
}
function profileDisplay() {
    document.getElementById("profile_form").style.display = "block";
    document.getElementById("profile_nav_form").style.display = "block";
    document.getElementById("edit_form").style.display = "none";
    document.getElementById("upload_form").style.display = "none";



    document.getElementById("edit_button").style.borderTop = "none";
    document.getElementById("profile_button").style.borderTop = "1px solid black";
    document.getElementById("upload_button").style.borderTop = "none";
}
function uploadDisplay() {
    document.getElementById("profile_form").style.display = "block";
    document.getElementById("profile_nav_form").style.display = "block";
    document.getElementById("edit_form").style.display = "none";
    document.getElementById("upload_form").style.display = "block";
    


    document.getElementById("edit_button").style.borderTop = "none";
    document.getElementById("profile_button").style.borderTop = "none";
    document.getElementById("upload_button").style.borderTop = "1px solid black";

    
}
