<!DOCTYPE html>
	
<html>
<head>
<title>Upload Form</title>

<meta charset="utf-8">
	<title>Welcome to Success Story for Rurban MIS</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rurban Cluster Success Story | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <style>
        body{
            background-image: url(
                'image/bg.jpg'
            );
        }
    </style>
</head>
<body>
	
	<div class="top-bar">
	<div class="top-bar-left">
		<ul class="menu">
		<li class="menu-text">Rurban MIS</li>
		<li><a href="http://localhost:8888/success_story_ci/index.php/welcome">Success Story</a></li>
		<li><a href="#">Cluster</a></li>
		<li><a href="#">State</a></li>
		</ul>
	</div>
	</div>
	
	<div class="callout large primary">
		<div class="row column text-center">
			
			<h1>Success Story</h1>
		</div>
	</div>
	
	<div class="row medium-8 large-7 columns">
	<div class="blog-post" style="border: 15px;padding: 10px;border: solid;background-color: white;">
			
		<?php echo validation_errors(); ?>
		
		<form method="POST" action="../../index.php/Story/savedata" enctype="multipart/form-data">
			
			<h4>Success Story</h4>
			
			<h5>Title</h5>
			<input type="text" name="title" value="" size="50" />
			
			<h5>Cluster Detail</h5>
			<textarea name="Clust_det" value="" size="50" >
				
			</textarea>
			
			<h5>Need of the activity</h5>
			<textarea name="need_of_the_activity" value="" size="50">
				
			</textarea>
			
			<h5>Intervention</h5>
			<textarea type="text" name="intervention" value="" size="50">
				
			</textarea>
			
			<h5>Impact</h5>
			<textarea type="text" name="impact" value="" size="50">
				
			</textarea>
			
			<h5>Key stakeholders</h5>
			<textarea type="text" name="Key stakeholders" value="" size="50">
				
			</textarea>
			
			<h5>Beneficiaries</h5>
			<textarea type="text" name="beneficiaries" value="" size="50">
				
			</textarea>
			
			<h5>Activity Details</h5>
			<textarea type="text" name="activity_det" value="" size="50">
				
			</textarea>
			
			<h5>Reference Contact</h5>
			<textarea type="text" name="reference_contact" value="" size="50">
			
			</textarea>
			
			<br>
			<h5>Upload image</h5>
			<input type="file" name="slideshow_image" />
			
			<br /><br />
			
			<div><input type="submit" value="Submit" /></div>
		
		</form>
	
	</div>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
	
</body>
</html>