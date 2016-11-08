<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/links.php'); ?>
<title>PTTeacher-Dashboard</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/pt_header.php'); ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1><?php
                    
                    if($this->session->flashdata('item')) {
                    $message = $this->session->flashdata('item');
                    ?>
                    <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>
                    
                    </div>
                    <?php
                    }
                    
                    ?></h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    
                    
                   
                </div>
                
                <div class="clearfix"></div>

            </section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url() ?>assets/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->
    <script src="<?php echo base_url() ?>assets/js/todolist.js"></script>
    <!-- EASY PIE CHART JS -->
    <script src="<?php echo base_url() ?>assets/vendors/charts/easypiechart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/charts/jquery.easypiechart.min.js"></script>
    <!--for calendar-->
    <script src="<?php echo base_url() ?>assets/vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="<?php echo base_url() ?>assets/vendors/charts/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/charts/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="<?php echo base_url() ?>assets/vendors/charts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/countUp/countUp.js"></script>
    <!--   maps -->
    <script src="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <script src="<?php echo base_url() ?>assets/vendors/jscharts/Chart.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var composeHeight = $('#calendar').height() +21 - $('.adds').height();
        $('.list_of_items').slimScroll({
            color: '#A9B6BC',
            height: composeHeight + 'px',
            size: '5px'
        });
    });
    </script>
    <!-- end of page level js -->
  <script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
</body>
</html>