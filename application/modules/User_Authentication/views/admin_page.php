<html>
<?php
if (!isset($this->session->userdata['logged_in'])) {
	header("location: login");
} 
?>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $this->session->userdata['logged_in']['username'] . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Welcome to Admin Page";
echo "<br/>";
echo "<br/>";
echo "Your Username is: " . $this->session->userdata['logged_in']['username'];
echo "<br/>";
echo "Your Email is: " . $this->session->userdata['logged_in']['email'];
echo "<br/>";
?>
<b id="logout"><a href="logout">Logout</a></b>
</div>
<br/>
 		<?php if(isset($error)) {
 			echo $error;	 
			}			
			?>
      <?php echo form_open_multipart('upload');?> 
		
      <form action = "" method = "">
         <input type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input type = "submit" value = "upload" /> 
      </form> 
      
       
</body>
</html>