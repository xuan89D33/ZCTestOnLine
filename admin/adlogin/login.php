<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>考试星</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript">
			function foo(){
				if(myform.name.value==""){
					alert("请输入用户名");
					 
					myform.username.focus();
					exit();
					return false;
					
				}
				if(myform.userpwd.value==""){
					alert("请输入密码");
					myform.pwd.focus();
					exit();
					return false;
					
				}

			}
	</script>
</head>
<body>
	<form method="post" action="logincheck_1.php" name="myform" onsubmit="return foo()"> 
	<div id="mainbody">
		 <div class="mainbox">
				<div class="top">
					<div class="image"></div>
					<div class="total"><p style="color:#0ef2fa">考试系统</p></div>
				</div>
				<input type="text" name="username" class="xuehao" placeholder="学号">
				<input type="password" name="userpwd" class="xuehao" placeholder="请输入密码">
				
				<button  id="begin">登录</button>
				<span><input type="hidden" name="hidden" value="hidden"></span>
		</div>
	</div>
	</form>	
</body>
</html>