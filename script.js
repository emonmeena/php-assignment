function checkUser(username){
    var ele = document.getElementById("username");
    var temp="";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            temp = this.responseText;
            if(temp === "found"){
                ele.style.backgroundColor = "rgb(255, 233, 233)";
            }else ele.style.backgroundColor = "white";
            if(username == "") ele.style.backgroundColor = "white";

        }
    }
    xmlhttp.open("GET", "validate.php?username="+username+"&email=", true);
    xmlhttp.send();
}

function checkEmail(email){
    var ele = document.getElementById("email");
    var temp="";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            temp = this.responseText;
            if(temp === "found"){
                ele.style.backgroundColor = "rgb(255, 233, 233)";
            }else ele.style.backgroundColor = "white";

        }
    }
    xmlhttp.open("GET", "validate.php?username=&email="+email, true);
    xmlhttp.send();
}
