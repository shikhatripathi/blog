
<!DOCTYPE html>
<html>
<head>
	<title>SignIn Form</title>
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url(); ?>assets2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Anton|Arvo|Kosugi" rel="stylesheet">
 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

      <form class="form-signin"  action="<?php echo base_url();?>index.php/form/register_user"  method="post">
        <h1 class="form-signin-heading"> Register Here</h1>
      
        Full Name:
        <input type="text" id="inputEmail" class="form-control" name="uname" placeholder="Enter Your Full Name" required autofocus>
      
        Mobile Number:
        <input type="number" id="inputPassword" class="form-control" name="umobile" placeholder="Enter Your mobile Number" required>
       <h3> Address</h3>
       
        <input type="text" id="inputPassword" class="form-control" name="uaddress" placeholder="Enter your address" required>
       Email
        <input type="email" id="inputPassword" class="form-control" placeholder="Enter your email" name="uemail" required>
        Password
         <input type="password" id="inputPassword" class="form-control" placeholder="Enter your password" name="upassword" required>
        Blog Name
         <input type="text" id="inputPassword" class="form-control" placeholder="Enter your password" name="ublog" required>
        
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
           <button class="btn btn-lg btn-primary btn-block" type="submit"><a href="<?php echo base_url();?>index.php/dashboard/dashboard">Login</a></button>
        </div>
       
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets2/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>