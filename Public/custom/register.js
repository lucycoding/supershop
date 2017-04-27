$(document).ready(function() {
		$("select").selectBox();
	});

$(document).ready(function(){
	      $("button").click(function(){
		     $(this).addClass('click')
	      });             
       })

//必须同意协议后才可注册
	function enable(){
		var terms = document.getElementById("terms");
		var register = document.getElementById("register");
		if(terms.checked){
			register.disabled=false;
		}else{
			register.disabled=true;
		}
	}
	//检查用户名是否合法,只能由英文字母、数字和下划线组成，且开头不能为数字
	function checkName(){
		var name = document.getElementById("name");
		//var pic = document.getElementById("pic");
		var checkName = document.getElementById("checkName");
		var patrn=/^[a-zA-Z_]{1}\w{3,15}$/; 
		if (!patrn.exec(name.value)){
			 checkName.style.color="red";
			 checkName.innerHTML="用户名输入有误!";
			 return false;
		}else{	
			 checkName.style.color="green";
			 checkName.innerHTML="√ 输入正确";
			 return true;
		}
	}
	//检查密码,只能由6到15位的英文字母和数字组成
	function checkPassword(){
		var password1 = document.getElementById("password1");
		var pwdRemind = document.getElementById("pwdRemind");
		var patrn=/^[a-z,A-Z,0-9]{6,15}$/;
		if (!patrn.exec(password1.value)){
			pwdRemind.style.color="red";
			pwdRemind.innerHTML="密码格式输入有误!";
			return false;
		}else{
			pwdRemind.style.color="green";
			pwdRemind.innerHTML="√ 输入正确";
			return true;
		}
	}
	//确认密码
	function checkPwd(){
		var password1 = document.getElementById("password1");
		var password2 = document.getElementById("password2");
		var checkPwd = document.getElementById("checkPwd");
		if(password1.value!=password2.value){
			checkPwd.style.color="red";
			checkPwd.innerHTML="两次密码输入不一致!";
			return false;
		}else{
			checkPwd.style.color="green";
			checkPwd.innerHTML="两次密码输入一致!";
			return true;
		}
	}
	//清除用户名错误提示
	function clearRN(){
		var checkName = document.getElementById("checkName");
		checkName.style.color="black";
		checkName.innerHTML="<font color='#C3293A'>*</font>由英文字母、数字或下划线(4-16)字符组成,且不能以数字开头";
	}
	//清除密码验证错误提示
	function clearPwd(){
		var checkPwd = document.getElementById("checkPwd");
		var pwdRemind = document.getElementById("pwdRemind");
		checkPwd.style.color="black";
		pwdRemind.style.color="black";
		checkPwd.innerHTML="<font color='#C3293A'>*</font>由英文字母和数字(6-16)字符组成";
		pwdRemind.innerHTML="<font color='#C3293A'>*</font>由英文字母和数字(6-16)字符组成";
	}