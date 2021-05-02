<?php include 'admin/config/connection.php'; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jabatan Karang Taruna KETUPAT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logokartar1.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
<style>
      #myBtn {
            display: none;
            position: fixed;
            height: 40px;
            width: 40px;
            z-index: 100;
            bottom: 55px;
            right: 30px;
            font-size: 20px;
            border: none;
            outline: none;
            background-color: rgb(19, 226, 233);
            color: rgb(0, 0, 0);
            cursor: pointer;
            padding: 0px;
            border-radius: 50%;
        }

            #myBtn:hover {
            background-color: #404040;
}
</style>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </button>
    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function () {
        scrollFunction();
      };
      function scrollFunction() {
        if (
          document.body.scrollTop > 300 ||
          document.documentElement.scrollTop > 300
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        window.scrollTo({ top: 0, behavior: "smooth" });
        document.documentElement.scrollTo({ top: 0, behavior: "smooth" });
      }
    </script>
   <?php include 'nav.php'; ?>

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Jabatan Karang Taruna KETUPAT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area plus_padding">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-9">
                    <div class="recent_joblist_wrap">
                        <div class="recent_joblist white-bg ">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4>Daftar Jabatan</h4>
                                </div>
                                <div class="col-md-6">
                                    <!-- <div class="serch_cat d-flex justify-content-end">
                                        <select>
                                            <option data-display="Most Recent">Most Recent</option>
                                            <option value="1">Marketer</option>
                                            <option value="2">Wordpress </option>
                                            <option value="4">Designer</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job_lists m-0">
                        <div class="row">
                            <?php
                            $jabatan=mysqli_query($con,"SELECT * from jabatan order by id");
                            while($jab=mysqli_fetch_array($jabatan)){
                            ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/logokartar1.png" height="70px" alt="" style="margin: -10px;">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="#"><h4><?=$jab['nama_jabatan']?></h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p> <i class="fa fa-user"></i> <?php 
                                                    if (strlen($jab['job_desc']) > 40){
                                                        $str = substr($jab['job_desc'], 0, 37) . '...';
                                                      }else{
                                                        $str=$jab['job_desc'];
                                                      }
                                                      echo $str;
                                                 ?>  </p>
                                                </div>
<!--                                                 <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now" style="margin-left: 15px;">
                                            <?php $fellas=mysqli_query($con,"SELECT * from anggota where jabatan='".$jab["id"]."' limit 5");
                                            while ($circle=mysqli_fetch_array($fellas)) {?>
                                              <img style="border-radius: 50%;border:0.5px solid grey;margin-left: -15px" class="img-circle" height="30px" width="30px" title="<?=$circle['nama_anggota']?>" src="admin/assets/img/anggota/<?=$circle['img']?>" >
                                            <?php }
                                             ?>
                                            
                                            <!-- <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a> -->

                                            <!-- <a href="job_details.html" class="boxed-btn3">Apply Now</a> -->
                                        </div>
                                        <div class="date">
                                            <p>

                                                <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * from anggota where jabatan='".$jab["id"]."'")); ?>
                                                    
                                                    orang menjabat 
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination_wrap">
                                    <ul>
                                        <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                                        <li><a href="#"><span>01</span></a></li>
                                        <li><a href="#"><span>02</span></a></li>
                                        <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->
<?php include 'footer.php'; ?>
    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/range.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>


	<script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 24600,
                values: [ 750, 24600 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] +"/ Year" );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) + "/ Year");
        } );
        </script>
</body>

</html>