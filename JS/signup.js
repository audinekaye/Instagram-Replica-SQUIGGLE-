function registerDisplay() {
    document.getElementById("login_form").style.display = "none";
    document.getElementById("register_form").style.display = "block";
    document.getElementById("register_button").style.borderBottom = "4px solid grey";
    document.getElementById("login_button").style.borderBottom = "4px solid white";
}

function loginDisplay() {
    document.getElementById("login_form").style.display = "block";
    document.getElementById("register_form").style.display = "none";
    document.getElementById("register_button").style.borderBottom = "4px solid white";
    document.getElementById("login_button").style.borderBottom = "4px solid grey";
}