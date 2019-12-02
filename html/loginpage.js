/*Javascript for loginpage.html*/

//function toggles the login input display
function login(id) {
    prompt(id);

    document.getElementById("input").style.display = "flex";
    document.getElementById("loginbutton").style.display = "flex";
}

//login prompt
function prompt(str) {
    document.getElementById("prompt").innerHTML = "Enter " + str + " key:";
}