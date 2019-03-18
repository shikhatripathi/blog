<!DOCTYPE html>
<!--
Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>

	<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
</head>
<body id="main">



<main>
	<div class="adjoined-top">
		<div class="grid-container">
			<div class="content grid-width-100">
				
			</div>
		</div>
	</div>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				
				<textarea name="editor1" style="height: 400px; width: auto;"></textarea>

			</div>
		</div>
	</div>

</main>

<footer class="footer-a grid-container">
	<div class="grid-container">
		
	</div>

</footer>
<div><button type="submit">Submit</button></div>
 <script>
    CKEDITOR.replace('editor1');
  </script>
</body>
</html>
