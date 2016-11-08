<?php
if (isset($this->session->userdata['logged_in'])) {

header("location:https://sports-dhanapalrandy.c9users.io/user_authentication");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>BRC Login</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="<?php echo base_url() ?>assets/css/pages/login2.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>
<style>
    .error_msg{
color:red;
font-size: 16px;
}.message{
  color: #6495ed;
    font-size: 16px;
    font-weight: bold;
    left: 0;
    text-align: left;
    width: 500px;
}
</style>
<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                            if (isset($logout_message)) {
                            echo "<div class='message'>";
                            echo $logout_message;
                            echo "</div>";
                            }
                            ?>
                            <?php
                            if (isset($message_display)) {
                            echo "<div class='message'>";
                            echo $message_display;
                            echo "</div>";
                            }
                        ?>
                    </div>
                    <div class="panel-body">
                       <?php echo form_open('user_authentication'); 
                            echo "<div class='error_msg'>";
                            if (isset($error_message)) {
                            echo $error_message;
                            }
                            echo validation_errors();
                            echo "</div>";
                        ?>
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" />
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue">
                                        Remember Me
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login"></a>
                            </fieldset>
                     <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="<?php echo base_url() ?>assets/js/TweenLite.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(document).mousemove(function(event) {
            TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});
        });

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].minimal-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });
    </script>
    <!-- end of page level js-->
</body>
</html>