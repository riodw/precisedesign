<!DOCTYPE html>
<!-- Created by Rio Weber 2015 -->
<html lang="en">

<head>
   <title>Precise Design Inc.</title>
   <!-- code for iPhone -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="keywords" content="Precise Design, Precise Design Inc., Design, Precise" />

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Precise Design Inc.">
   <meta name="author" content="Unaxy.com">

   <!-- Favicon.png-->
   <link rel="shortcut icon" href="favicon.jpg">
   <!-- CSS ==========-->
   <!-- Latest compiled and minfied CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

   <!-- Font-Awesome -->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Fonts -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">

   <!-- CAROUSEL FILES -->
   <!-- Custom styles for this template -->
   <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/examples/carousel/carousel.css">

   <!-- MY CUSTOM CSS-->
   <link rel="stylesheet" type="text/css" href="css/precisedesign.css">

   <!-- JAVASCRIPT ===== Latest compiled and minified JavaScript -->
   <!-- jQuery -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!-- Bootstrap Core JavaScript -->
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <style>
      #links div {
         width: 75px;
         height: 75px;
         overflow: hidden;
         float: left;
      }
      
      #links div img {
         height: 100%;
      }
      
      .folders {
         display: none;
      }
      
      .folders:first-of-type {
         display: block;
      }
      
      .gallery {
         display: inline-block;
         margin-top: 20px;
      }
      
      .thumbnail {
         max-height: 320px;
         max-width: 320px;
      }
      
      .thumbnail img {
         overflow: hidden;
         max-height: 200px;
         width: 100%;
         /*max-width: 250px;*/
      }
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script>
      // Google Analytics
      (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-61756765-3', 'auto');
      ga('send', 'pageview');
   </script>
</head>

<body id="page-top" class="index">
   <h1 id="logo">
      <a href="index.html">
         <img id="logoo" src="images/Logo/Precise_logo.jpg" style="width:93%; background-color:#fff;padding:35px 6px 0 6px;"></a>
   </h1>
   <!-- Navigation -->
   <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="Top_navbar_UL" class="nav navbar-nav">
               <li class="page-scroll">
                  <a class="topbarFixed" href="index.html#portfolio">Home </a>
               </li>
               <li class="page-scroll">
                  <a class="topbarFixed" href="gallery.php">Gallery</a>
               </li>
               <li id="Logo_Spacer"></li>
               <!-- Space for Logo -->
               </li>
               <li class="page-scroll page-scroll3">
                  <a class="topbarFixed" href="index.html#about">About Us</a>
               </li>
               <li class="page-scroll">
                  <a class="topbarFixed" href="index.html#contact">Contact</a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
   </nav>
   <!--========= DIFFERENT start from index ==============-->
   <div id="about" class="text-center" style="background-color:#00A5C7; padding-bottom:15px;">
      <div class="container">
         <h1 style="color:white;">&nbsp;</h1>
         <hr width="60%">
         <h1 class="text-center" style="color:white;">GALLERY</h1>
         <hr width="60%">
         <section class="servicesMenu">
            <div id="folders" class="btn-group btn-group-justified" role="group">
            </div>
         </section>
      </div>
   </div>


   <div id="main-wrapper" class="container" style="padding: 8em 0em 6em 0em;">
      <!-- The container for the list of example images -->
      <div class="container All_Folders">
         <?php
         // Folder to Parse
         $dir = './Pictures';
         // for Javascript buttons
         $folders = array();
         
         $files = dirToArray($dir);
         // print_r($files);
         
         // Create array of all folders and images in $dir folder
         function dirToArray($dir)
         {
            $result = array();
            $cdir = scandir($dir);
            foreach ($cdir as $key => $value)
            {
               if(!in_array($value,array(".","..")))
               {
                  if(is_dir($dir . DIRECTORY_SEPARATOR . $value))
                  {
                     $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                  } else {
                     $result[] = $value;
                  }
               }
            }
            return $result;
         }
         
         
         // Go through the Array, print HTML
         foreach ($files as $key => $value) {
            $folder = $key;
            
            $catagory = str_replace('_', ' ', $folder);
            array_push($folders, $catagory);
             
            echo '
         <div class="row folders">
            <h1 style="color:#fff; text-align:center;">'. $catagory .'</h1>
            <div class="list-group gallery">';
             
            $index = 1;
            foreach ($value as $k => $v) {
               $picture = $v;
               $location =  $folder . '/' . $picture;
               $thing = $catagory.': '.$index++;
               
               echo '
                  <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                     <a class="thumbnail fancybox" rel="ligthbox" href="Pictures/'. $location .'">
                        <img class="img-responsive" alt="" src="Pictures/'. $location .'"/>
                        <div class="text-right">
                           <small class="text-muted">'. $thing .'</small>
                        </div>
                     </a>
                  </div>';
            }
             
            echo '
               </div>
            </div>';
         }
         //.- Links all Images
         $folders = implode(',', $folders);
         ?>
         
      </div>
      <script type="text/javascript">
         // PHP to folders string
         var folders = "<?php echo $folders; ?>";
         folders = folders.split(',');
         // Append buttons to Folder
         for (var i = 0; i < folders.length; i++) {
            $('#folders').append('<div style="display:inline-block;">' +
               '<button type="button" class="btn btn-default galleryButtons">' + folders[i] + '</button>'); +
            '</div>';
         }
      
         console.log(folders);
         $('#folders button').click(function() {
            var number = $(this).parent().index();
            $('.All_Folders').children().hide();
            $('.All_Folders .folders:nth-child(' + (number + 1) + ')').show();
         });
      </script>
      <!-- container / end -->
   </div>
   
   <div class="container" style="text-align:center; background-color:#fff; margin: 0 auto; padding: 20px; clear:both; width:100%">
      <a href="index.html#contact" type="button" class="btn btn-primary btn-lg"><i class="fa fa-envelope"></i></i> Send Us a Message</a>
   </div>
   
   
   <!-- FOOTER ============================= FOOTER ========== FOOTER =====================================================
   Location | Connect with us (social icons)| About Example
   ======
   Google Map
   ======
   Copy Right =========================-->
   <footer class="text-center">
      <div class="footer-above" style="box-shadow: 2px 5px 5px 1px rgba(0, 0, 0, 0.2);z-index:1000;">
         <div class="container">
            <div class="row">
               <div class="footer-col col-md-4">
                  <h3>Location</h3>
                  <p>45-52 164th Street<br>Flushing, NY 11358 US</p>
                  <p><a href="https://www.google.com/maps/place/45-52+164th+St,+Flushing,+NY+11358" target="_new">Google Map It »</a></p>
               </div>
               <div class="footer-col col-md-4">
                  <h3>Connect With Us</h3>
                  <ul class="list-inline">
                     <li>
                        <a href="https://www.facebook.com/precisecreates/" class="btn-social btn-outline" target="new"><i class="fa fa-fw fa-facebook"></i></a>
                     </li>
                     <li>
                        <a href="https://instagram.com/preciseny" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                     </li>
                     <li>
                        <a href="https://www.linkedin.com/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="footer-col col-md-4">
                  <h3>More About Us</h3>
                  <p>Find out more. Call today. <br><span style="color:#00A5C7;">(347) 759-2585</span></p>
                  <p style="min-width: 310px;">Email us.<br><span style="color:#00A5C7;">Aldemar@precisecreates.com </span></p>
               </div>
            </div>
         </div>
      </div>
      <!-- Gallery -->
   
      <div class="footer-below">
         <div class="container">
            <div class="row">
               <div class="col-lg-12" style="color:#666">
                  <p>Precise Design Inc.</p>
                  (347) 759-2585
                  <br>45-52 164th Street, Flushing, NY 11358 US
                  <br>Copyright &copy; Precise Design Inc. <span id="dateTimeValue2"></span>
                  <!-- Date -->
                  <script type="text/javascript">
                     window.onload = function() {
                        var dateYear = new Date();
                        var formattedDateYear = dateYear.getFullYear()
                        var divObjectYear = document.getElementById("dateTimeValue2");
                        divObjectYear.innerHTML = formattedDateYear;
                     }
                  </script>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
   <div id="scroll-top" class="scroll-top page-scroll visible-xs visble-sm">
      <a id="scroll-topp" class="btn btn-primary" href="#page-top" style="display:none">
         <i id="scroll-toppp" class="fa fa-chevron-up"></i>
      </a>
   </div>
   
   
   <!-- Custom Theme JavaScript -->
   <script src="js/freelancer.js"></script>
   
   <!-- From WAngle -->
   <!--<script src="js/jquery.dropotron.min.js"></script>-->
   
   <script>
      // For image gallery flipper
      $(document).ready(function() {
         //FANCYBOX
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });
      });
   </script>
   
</body>

</html>