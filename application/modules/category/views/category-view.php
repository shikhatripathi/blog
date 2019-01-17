s<!DOCTYPE html>
<html>
<head>
	<title>SignIn Form</title>

	<meta name="google-signin-client_id" content="1006866697646-vab4mv9glt5c5st94tfea4qub9coaied.apps.googleusercontent.com">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Acme|Exo|Lobster" rel="stylesheet">
 <script src="https://apis.google.com/js/platform.js" async defer></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

      <form  method="post" class="form-signin" action="<?php echo base_url();?>category/blog_user">
       Category No
         <input type="number" name="category_id">
         Category Name
          <input type="text"  name="category_name">
          Category slag
        <input type="text" name="category_slag">
        Created on
          <input type="date" name="created_on">
          <button>submit</button>
      
      </form>

    </div> <!-- /container -->
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>