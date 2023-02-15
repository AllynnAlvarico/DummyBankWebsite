// JavaScript Document

var userLogin = "admin";
var userPassword = "kateTabi";



function submit_login(){
	var userEmail = document.getElementById("userInfo").value;
	var userPass = document.getElementById("userInPwd").value;
	if (userLogin == userEmail) {
		if (userPassword == userPass){
			var url = "userAccDash.html";
			window.location.replace(url);
			return false;
		}
	} else{
			window.alert("Wrong Password user:admin password:kateTabi");
			var main = "index.html";
			window.location.replace(main)
			return false;
		}
		
	
}	