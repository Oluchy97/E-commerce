var Name = document.getElementById("name")
var username = document.getElementById("username")
var email = document.getElementById("email")
var password = document.getElementById("password")
var form = document.forms["FormReg"]
const emailRegex = 
//  new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");

form.onsubmit = ()=>{
    if(Name.value.length < 3){
        alert("invalid name");
        return false
    }
    if(username.value.length < 3){
        alert("invalid username");
        return false
        }

    if(password.value.length < 5){
        alert("password too short");
        return false
    }
    // var isValidEmail = emailRegex.test(email.value);
    // if(!isValidEmail){
    //     alert("invalid email");
    //     return false
    localStorage.setItem("Name", Name.value);
    localStorage.setItem("username", username.value);
    localStorage.setItem("email", email.value);
    localStorage.setItem("password", password.value);

    return true
}

if(localStorage.getItem("Name")){
    Name.value = localStorage.getItem("Name");
    Name.value = localStorage.getItem("userame");
    Name.value = localStorage.getItem("email");
    Name.value = localStorage.getItem("password");
}



