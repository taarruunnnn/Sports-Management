<?php
if (!isset($this->session->userdata['logged_in'])) {
	header("location:user_authentication");
} 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
  
    <!-- global css -->
    <link href="<?php base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php base_url() ?>assets/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php base_url() ?>assets/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php base_url() ?>assets/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php base_url() ?>assets/css/metisMenu.css" rel="stylesheet" type="text/css"/>    
    <!-- end of global css -->    
    <!--page level css -->
    
    <link rel="stylesheet" media="all" href="<?php base_url() ?>assets/vendors/jvectormap/jquery-jvectormap.css" />
    <link rel="stylesheet" href="<?php base_url() ?>assets/vendors/animate/animate.min.css">

    <!--end of page level css-->
    
</head>