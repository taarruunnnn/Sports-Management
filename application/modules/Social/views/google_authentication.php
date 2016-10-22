

<html>
<head>
<style>body {
margin:0;
padding:0;
font-family:raleway;
background-image: url(../images/repeat-bg.png);
}
#main{
width: 65%;
height: 100%;
margin-left: 17%;
margin-top: 5%;
position: relative;
}
h2{
font-family:raleway;
}
div#envelope{
position: relative;
width: 51%;
border: 1px solid #CFCFD0;
border-radius: 10px;
background-color: #FFFFFF;
}
div#content{
width: 100%;
padding:12px auto;
overflow: hidden;
word-break: break-all;
overflow-wrap: break-word;
border-radius: 0 0 10px 10px;
}
header#sign_in{
font-family:raleway;
background-color: #079BAE;
text-align: center;
padding-top: 12px;
padding-left: 5px;
padding-bottom: 8px;
margin-bottom: -8px;
border-radius: 10px 10px 0 0;
color: white;
}
header#info{
font-family:raleway;
background-color: #079BAE;
margin-top: -11px;
padding-top:15px;
padding-bottom: 42px;
padding-left: 15px;
padding-right: 15px;
font-size: 16px;
border-radius: 10px 10px 0 0;
color: white;

}
header#info a.user_name{
font-family:raleway;
text-decoration: none;
color:white;
}
div.logout{
padding-top: 30px;
float:right;
}
a.logout{
font-family:raleway;
font-size: 20px;
font-weight: 600;
text-decoration: none;
padding-right: 0 auto;
float:right;
color:white;
}
p {
padding: 0 25px;
}
p.profile {
font-weight: bold;
font-size: 20px;
}
img.user_img{
border-radius:50% 50% 50% 50%;
border:3px solid white;
}
p.welcome{
margin-top: -50px;
margin-left: 12%;
}</style>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="envelope">

<header id="sign_in">
<h2>CodeIgniter Login With Google Oauth PHP</h2>
</header>
<hr>
<div id="content">
<center><a href=""><img id="google_signin" src="<?php echo base_url(); ?>assets/images/google.png" width="100%" ></a></center>
</div>

</div>
</div>
</body>
</html>

