<?php if (!defined('THINK_PATH')) exit();?><!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
</head>
<body>
<form action="__INDEX__/login" method="post">
	用户名:<input name="username" id="u1"/>
	密码:<input name="password" id="p1" />
	<input name="dosubmit" type="submit" value="提交" />
</form>
<script>
var obj=new check("u",1);
	function check(param,operation){
		var type;
		var obj=document.getElementById(param);
		if(obj==null){
			document.write("<span style='color:red'>no-exist the id '"+param+"'</span>");
			//return ;
			
		}
		switch (operation){
			case 1: {
					break;
				}
			case 2:{
					break;
			       }
			case 3:{
					break;
			       }
			case 4:{
					break;
			       }
			case 5:{
					break;
			       }
			case 6:{
					break;
			       }
			default:{
					alert("ＳＢ，去你妹的");
				}
		}








	}
</script>


</body>
</html>