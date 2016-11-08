<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/links.php'); ?>
<!--page level css -->
    <link href="<?php echo base_url() ?>assets/css/pages/form2.css"  rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/css/pages/form3.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <!--end of page level css-->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css"  rel="stylesheet" media="screen"/>
    <link href="<?php echo base_url() ?>assets/css/pages/editor.css" rel="stylesheet" type="text/css"/>
    <title>Admin -Lession-Add</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/application/modules/includes/header.php'); ?>

            <aside class="right-side">
                <section class="content-header">
                    <!--section starts-->
                    <h1>Add Lessions</h1>
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
                                    <form id="" class="form-horizontal" action="/insertLession" method="post" enctype="multipart/form-data">
                                       <input type="hidden" name="lession_id" id="lession_id" value="<?php echo $data; ?>"/>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Section</label>
                                            <div class="col-md-8">
                                                <select id="section" class="form-control select2" name="section">
                                                    <option value="">[..SELECT..]</option>
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                    <option value="VI">VI</option>
                                                    <option value="VII">VII</option>
                                                    <option value="VIII">VIII</option>
                                                    <option value="IX">IX</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Semester</label>
                                            <div class="col-md-8">
                                                <select id="semester" class="form-control select2" name="semester">
                                                    <option value="">[..SELECT..]</option>
                                                    <option value="1st Semester">1st Semester </option>
                                                    <option value="2nd Semester">2nd Semester</option>
                                                </select>
                                            </div>
                                        </div>
                                      <div class="form-group">
                                            <div class="col-md-8">
                                                <label for="age1">Lession Type?</label>
                                                <input type="radio" name="lession_type" value="Text" class="aboveage1" /> Text
                                                <input type="radio" name="lession_type" value="Video" class="aboveage1" /> Video
                                                <input type="radio" name="lession_type" value="Both" class="aboveage1" /> Both
                                            </div>
                                        </div>
                                       <div id="parent1" class="formset">
                                           <div class="form-group">
                                                <label class="col-md-3 control-label hidden-xs">Title</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="title" placeholder=
                                                    "Enter Title" />
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label hidden-xs">Description</label>
                                                <div class="col-md-8">
                                                   <textarea name="description" id="tinymce_full"></textarea>
                                                </div>
                                            </div>
                                            
                                       </div>
                                       <div id="videopart" class="formset">
                                          
                                           <div class="form-group">
                                                <label class="col-md-3 control-label hidden-xs">Video</label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control" name="video_name"  id="video_name" />
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="col-md-3 control-label hidden-xs">Title</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="video_title" placeholder=
                                                    "Enter Title" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label hidden-xs">Description</label>
                                               <div class="col-md-8">
                                                   <textarea name="video_description" id="tinymce_basic"></textarea>
                                                </div>
                                            </div>
                                          
                                       </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-md-8">
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
    <script>
     $(document).ready(function(){
    $("#parent1").css("display","none");
    $("#videopart").css("display","none");
        $(".aboveage1").click(function(){
        if ($('input[name=lession_type]:checked').val() == "Text" ) {
            $("#parent1").show("fast"); //Slide Down Effect
            $("#videopart").hide("fast");
        } 
        else if($('input[name=lession_type]:checked').val() == "Both" )
        {
            $("#parent1").show("fast"); //Slide Down Effect
             $("#videopart").show("fast");
        }
        else {
            $("#parent1").hide("fast");  //Slide Up Effect
            $("#videopart").show("fast");
        }
     });
});
  </script>
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url() ?>assets/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
   
    <script src="<?php echo base_url() ?>assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url() ?>assets/vendors/validation/dist/js/bootstrapValidator.min.js" type="text/javascript" ></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script  src="<?php echo base_url() ?>assets/vendors/ckeditor/adapters/jquery.js" type="text/javascript" ></script>
    <script  src="<?php echo base_url() ?>assets/vendors/tinymce/js/tinymce/tinymce.min.js" type="text/javascript" ></script>
    <script  src="<?php echo base_url() ?>assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js" type="text/javascript"></script>
    <script  src="<?php echo base_url() ?>assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js" type="text/javascript"></script>
    <script  src="<?php echo base_url() ?>assets/js/pages/editor.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
</html>
