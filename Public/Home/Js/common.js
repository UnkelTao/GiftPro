
function tologin(form1) {
	var form = document.getElementById(form1);
 	var name = form.userName.value;
 	var pwd = form.password.value;
 	//alert(name+"\n"+pwd);
 	if(name==''||pwd==''){
 		alert("hehe"+name+pwd);
 	}else{
 		form.submit();
 	}
         	           	
}

