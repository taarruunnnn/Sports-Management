

<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/hmvc-codeigniter/index.php/newlogin");
}
?>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
<h2>Registration Form</h2>
<hr/>
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('new_user_registration');

echo form_label('Create Username : ');
echo"<br/>";
echo form_input('username');

echo"<br/>";
echo form_label('Email : ');
echo form_input('email_value');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Password : ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
<a href="<?php echo base_url() ?>newlogin">For Login Click Here</a>
</div>
</div>
</body>
</html>

