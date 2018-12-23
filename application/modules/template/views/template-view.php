<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $this->load->view('nav-view'); ?>
<?php  echo modules::run($module_name); ?>
<?php $this->load->view('footer-view'); ?>

</body>
</html>