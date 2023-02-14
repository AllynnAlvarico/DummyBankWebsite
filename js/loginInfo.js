// JavaScript Document

var userLogin = "admin";
var userPassword = "kateTabi";



function submit_login(){
	var userEmail = document.getElementById("userInfo").value;
	var userPass = document.getElementById("userInPwd").value;
	console.log(userEmail);
	console.log(userPass);
	if (userLogin == userEmail) {
		if (userPassword == userPass){
			console.log("Im here");
			var url = "testChart.html";
			window.location.replace(url);
			return false;
		}
	} else{
			window.alert("Wrong Password user:admin password:kateTabi");
			var url = "index.html";
			window.location.replace(url)
			return false;
		}
		
	
}	