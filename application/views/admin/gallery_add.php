<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Gallery</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/web/img/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .invalid-tooltip{
        margin-top:-12px;
    }
</style>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>Gallery </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin/gallery_view">Gallery View</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery Add</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Gallery </h6>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->


                                            <?php  echo form_open_multipart('Gallery/creting_image' ,'class="_galleryadd needs-validation" novalidate'); ?>



                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="heading">Image Heading</label>
                                                    <input name="img_heading" id="img_heading" type="text"
                                                        class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Heading. </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="heading">Image Category</label>
                                            
                                                    <!--  -->
                                                    <div class="form-group">
                                                        <select id="img_category" name="img_category"  class="custom-select" required>
                                                            <option value="">Choose Category...</option>
                                                            <option value="classrooms">Classrooms</option>
                                                        <option value="students">Students</option>
                                                        <option value="teachers">Teachers</option>
                                                        <option value="library">Event</option>
                                                        </select>
                                                        <div class="invalid-tooltip"> Please select Category. </div>
                                                    </div>

                                                    <!--  -->



                                                    
                                                </div>






                                                <div class="col-md-12" style="padding-top: 20px; padding-bottom:20px">
                                                    <div class="row">
                                                        <div class="col-md-8 my-3">
                                                            <label for="userImage">Select Image <code> Width=764px; and Height=576px  Max Image Size 2MB 
 		 	                                                            </code></label>
                                                            <input name="galleryImage" id="galleryImage" type="file"
                                                                class="form-control" required>
                                                            <div style="margin-top:-100px" class="invalid-tooltip">
                                                                Please Select Image
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="<?php echo base_url()?>public/img/slider.png"
                                                                id="pre_profile" alt="profile-image"
                                                                style="max-width: 200px;">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div> <br>
                                            <button style="margin-top:-50px" class="btn btn-primary"
                                                type="submit">Submit</button>

                                            <?php  echo form_close();?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <?php  $this->load->view('admin/file/footer')?>


            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="<?php echo base_url();?>public/vendors/bundle.js"></script>

    <!-- Form validation example -->
    <script src="<?php echo base_url();?>public/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
    <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
   

    toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    <?php

 $msg= $this->session->flashdata('success');
 if ( $msg != "" )
 { 
 echo "toastr.success('$msg');";
 } 
 $msg2= $this->session->flashdata('error');
 if ( $msg2 != "" )
 {
     echo "toastr.error('$msg2');";
 } ?>
    </script>

    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#pre_profile').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#galleryImage").change(function() {
        readURL(this);
    });
    </script>
</body>

</html>