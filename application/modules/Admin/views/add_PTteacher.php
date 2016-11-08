<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/links.php'); ?>
<!--page level css -->
    <link href="<?php echo base_url() ?>assets/css/pages/form2.css"  rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/css/pages/form3.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <!--end of page level css-->
    <title>Admin -PT Teachers -List</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/header.php'); ?>

            <aside class="right-side">
                <section class="content-header">
                    <!--section starts-->
                    <h1>Add PTTeacher</h1>
                   <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Forms</a>
                        </li>
                        <li class="active">Form Validations</li>
                    </ol>-->
                </section>
                <!--section ends-->
                <section class="content">
                    <!--main content-->
                    <div class="row">
                        
                        <div class="col-md-6" style="width:75%;">
                            <div class="panel panel-danger">
                               <!-- <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="pacman" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Validation
                                    </h3>
                                    <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-chevron-up"></i>
                                    </span>
                                </div>-->
                                <div class="panel-body">
                                    <form id="" class="form-horizontal" action="/insertPTteacher" method="post">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="name" id="name" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Gender</label>
                                            <div class="col-md-8">
                                                <select id="gender" class="form-control select2" name="gender">
                                                    <option value="Male">[..SELECT..]</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">DOB</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="dob" id="dob" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Qualification</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="qualification" id="qualification" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">School  Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="school_name" id="school_name" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Sports House1</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="sports_house1" id="sports_house1" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Sports House2</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="sports_house2" id="sports_house2" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Sports House3</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="sports_house3" id="sports_house3" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Sports House4</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="sports_house4" id="sports_house4" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Account No</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="account_no" id="account_no" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">Confirm Account No</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="firstName1" placeholder=
                                                "Enter Name" />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label hidden-xs">IFSC Code</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="ifsc" id="ifsc" placeholder=
                                                "Enter Name" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-md-8">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row ends--> </section>
                <!-- content --> </aside>
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
   
    <script src="<?php echo base_url() ?>assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url() ?>assets/vendors/validation/dist/js/bootstrapValidator.min.js" type="text/javascript" ></script>
  
</body>
</html>
