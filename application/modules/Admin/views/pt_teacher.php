   <title>Admin-PTTeachers List</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/links.php'); ?>
<!--page level css -->

    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="<?php base_url() ?>assets/css/pages/tables.css" rel="stylesheet" type="text/css">
    <!--end of page level css-->
    <style type="text/css">
        .pagination > li > a, .pagination > li > span {
        background-color: #fff;
        border: 1px solid #ddd;
        color: #337ab7;
        float: left;
        line-height: 1;
        margin-left: -1px;
        padding: 6px 12px;
        position: relative;
        text-decoration: none;
    }
    </style>
 
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/header.php'); ?>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>PT Teachers List</h1>
                <!--<ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">DataTables</a>
                    </li>
                    <li class="active">Advanced Datatables</li>
                </ol>-->
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                          <!-- <div class="panel-heading clearfix  ">
                            <div class="panel-title pull-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        TableTools
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            </br>
                            
                            
                                <div class="btn-group pull" style="padding-left: 625px;">
                                    
                                    <a href="add_PTteacher" class="btn btn-success btn-block btn-md btn-responsive">Add PTTeacher</a>
                                  
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-9" style="padding-left:220px;top:74px;width:100%;">
                                        <label class="radio-inline " for="example-inline-radio1">
                                            <input id="example-inline-radio1" name="example-inline-radios" value="option1" type="radio">District</label>
                                        <label class="radio-inline" for="example-inline-radio2">
                                            <input id="example-inline-radio2" name="example-inline-radios" value="option2" type="radio">School</label>
                                        <label class="radio-inline" for="example-inline-radio3">
                                            <input id="example-inline-radio3" name="example-inline-radios" value="option3" type="radio"></label>
                                    </div>
                                </div>
                            
                                </br></br>-->
                            <div class="panel-body">
                                 <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Qualification</th>
                                            <th>School Name</th>
                                            <th>Account No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         //print_r($datas);exit;
                                        foreach($datas as $data)
                                        {
                                           
                                        ?>
                                        <tr>
                                            <td><?php echo $data->id;?></td>
                                            <td><?php echo $data->name;?></td>
                                            <td><?php echo $data->qualification;?></td>
                                            <td><?php echo $data->school_name;?></td>
                                            <td><?php echo $data->account_no;?></td>
                                            <td>
                                                <a href="#" class="btn default btn-xs purple">
                                                        <i class="fa fa-edit"></i>
                                                        Edit
                                                </a>
                                                <a href="#" class="btn default btn-xs black">
                                                        <i class="fa fa-trash-o"></i>
                                                        Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php  } ?>     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">
                                    Delete this entry
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete this Record?
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                    Yes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <!-- ./wrapper -->
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
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/datatables/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/table-advanced.js"></script>
    <!-- end of page level js -->
    
</body>
</html>
