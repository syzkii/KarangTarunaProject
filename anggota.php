<?php include 'admin/config/connection.php'; ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anggota Karang Taruna KETUPAT</title>
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
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logokartar1.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style type="text/css">
        .single_candidates{
            border:white solid 1px;
            transition: 0.5s;
        }
        .single_candidates:hover{
            border:lightgreen solid 1px;
            transition: 0.5s;
        }

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
                        <h3>Anggota</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
                <?php $angg=mysqli_query($con,"SELECT * FROM anggota");
                        while ($anggota=mysqli_fetch_array($angg)) {
                            
                         ?>
                <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center" style="height: 250px">
                        <div class="thumb">
                            <img height="110px" width="100px" src="admin/assets/img/anggota/<?=$anggota['img']?>" alt="">
                        </div>
                        <h4><?=$anggota['nama_anggota']?></h4>
                        <p><?php 
                            $jab=mysqli_fetch_array(mysqli_query($con,"SELECT * from jabatan where id='".$anggota["jabatan"]."'"));
                            echo $jab['nama_jabatan'] ;?></p>
                    </div>
                </div>
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->


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
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>