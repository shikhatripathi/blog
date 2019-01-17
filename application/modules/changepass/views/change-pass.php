<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<style type="text/css">
	body{
			margin: 0;
	background-image: url(../blog/assets/img/bg/picture-3.png);
	background-size: cover;
	}
	.trans{
		margin-left: 400px;margin-top:250px;height: 400px;width: 
		60%;text-align: center;
		background-color:rgba(0,0,0,0.2);
	}
</style>

</head>

<body>
	<div class="trans">
<div id="main">
<div id="login">
<?php echo @$error; ?>
<h2 style="color: #000099">Change Password</h2>
<br>
<form method="post" action='<?php echo base_url();?>changepass/updatepwd'>
<label>Old Password :</label>
<input type="password" name="password" id="name" placeholder="Old Pass"/><br /><br />
<label>New Password :</label>
<input type="password" name="newpass" id="password" placeholder="New Password"/><br/><br />
<label>Confirm Password :</label>
<input type="password" name="confpassword" id="password" placeholder="Confirm Password"/><br/><br />
<input type="submit" value="login" name="change_pass"/><br />
</form>
</div>
</div>
</div>
</body>
</html> 