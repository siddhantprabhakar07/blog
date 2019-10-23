<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('upload/do_upload');?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>