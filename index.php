<html>

<head>

  <title>Crimnal Database Manager</title>

</head>
<body bgcolor="#CCCCCC">
<h2 align="center">Welcome To Crimnal Database Manager</h2>
<p align = "center">
<img src="img/welcome.jpg" width = "200" height = "120">
</p>
<table width="300" height="100" border="0" align="center" cellpadding="0" ><tr>&nbsp;</tr><tr>&nbsp;</tr></table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#5D5D5D">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#5D5D5D">
<tr>
<td colspan="3"><strong><b>Admin Login</b> </strong></td>
</tr>
<tr>
<td width="78" >Username</td>
<td width="6">:</td>
<td width="294"><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td > Password</td>
<td>:</td>
<td><input name="passwd" type="password" id="passwd"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><font size="1"><a href="register.php">Register</a></font></td>
<td><input type="submit" name="Submit" value="Login"> <a href = "search.php">for non admin</a></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<p align="center">Admin can add and modify data others can only access data and do search.</p>
</body>
</html>
