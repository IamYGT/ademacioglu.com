<!DOCTYPE html>
<?php   include("admin/include/site_db.php");
 
 ?>
<html lang="tr">
   <head>
      <!-- Title -->
      <title>Adem Acıoğlu l Çekim l <?=$db->VeriOkuTek("menu_category", "name", "url", $_GET["url"]);?></title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon (http://www.favicon-generator.org/) -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- Google font (https://www.google.com/fonts) -->
      <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,500,700,100' rel='stylesheet' type='text/css'>
      <!-- Bootstrap CSS (http://getbootstrap.com) -->
      <link rel="stylesheet" href="assets\vendor\bootstrap\css\bootstrap.min.css">
      <!-- bootstrap CSS (http://getbootstrap.com) -->
      <!-- Libs and Plugins CSS -->
      <link rel="stylesheet" href="assets\vendor\font-awesome\css\font-awesome.min.css">
      <!-- Font Icons CSS (http://fortawesome.github.io/Font-Awesome) -->
      <link rel="stylesheet" href="assets\vendor\lightgallery\css\lightgallery.min.css">
      <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
      <link rel="stylesheet" href="assets\vendor\justifiedgallery\css\justifiedGallery.min.css">
      <!-- Justified Gallery CSS (http://miromannino.github.io/Justified-Gallery/) -->
      <link rel="stylesheet" href="assets\vendor\ytplayer\css\jquery.mb.YTPlayer.min.css">
      <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
      <link rel="stylesheet" href="assets\vendor\owl-carousel\css\owl.carousel.css">
      <!-- Owl Carousel CSS (http://www.owlcarousel.owlgraphic.com) -->
      <link rel="stylesheet" href="assets\vendor\owl-carousel\css\owl.carousel.plugins.css">
      <!-- Owl Carousel plugins CSS (http://www.owlcarousel.owlgraphic.com) -->
      <link rel="stylesheet" href="assets\vendor\owl-carousel\css\owl.theme.default.css">
      <!-- Owl Carousel default theme CSS (http://www.owlcarousel.owlgraphic.com) -->
      <link rel="stylesheet" href="assets\vendor\animate.min.css">
      <!-- Animate libs CSS (http://daneden.me/animate) -->
      <!-- Template master CSS -->
      <link rel="stylesheet" href="assets\css\theme.css">
      <link rel="stylesheet" href="assets\css\helper.css">
      <!-- Template dark style CSS (comment or uncomment below line to enable/disable template dark style) -->
      <link rel="stylesheet" href="assets\css\dark-style.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <!-- =================
      ///// Begin body /////
      ================== -->
   <body id="body">
      <?php include("ust.php")?>
      <div id="body-content">
      <!-- ================================
         ///// Begin page header section /////
         ================================= -->
      <section id="page-header-secion">
         <!-- Begin page header image 
            ===============================
            * Use class "parallax" to enable parallax effect.
            -->
         <div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/heading-blur-1.jpg); background-position: 50% 38%;"></div>
         <!-- End page header image -->
         <!-- Element cover -->
         <div class="cover page-header-cover"></div>
         <!-- Begin page header info -->
         <div class="container-fluid page-header-content no-padding">
            <div class="row">
               <div class="col-md-4">
                  <h1 class="album-title"><?=$db->VeriOkuTek("menu_category", "name", "url", $_GET["url"]);?></h1>
                  <!-- Begin album meta -->
                  <!-- End album meta -->
                  <!-- Begin author -->
                  <div class="author">
                     <a href="#" class="author-avatar bg-image" style="background-image: url(assets/img/author.jpg); background-position: 50% 50%;"></a>
                     <a href="" class="author-info">- by: Adem Acıoğlu</a>
                  </div>
                  <!-- End author -->
               </div>
               <!-- /.col -->
               <div class="col-md-8">
                  <!-- Begin album description -->
                  <div class="album-description">
                     <div class="al-desc-inner">
                        <p> <?=$db->VeriOkuTek("menu_category", "aciklama", "url", $_GET["url"]);?> </p>
                        <!-- End description toggle -->
                     </div>
                  </div>
                  <!-- End album description -->
               </div>
               <!-- /.col -->
              
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- End page header info -->
      </section>
      <!-- End page header section -->
      <!-- ============================
         ///// Begin content section /////
         ============================= -->
      <section id="content-section" class="album-single">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <!-- Begin content wrap -->
                  <div class="content-wrap">
                     <!-- Begin isotope
                        ===================
                        * Use classes "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
                        * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                        -->
                     <div class="isotope gutter-2 col-6">
                        <div id="gallery" class="isotope-items-wrap lightgallery hover-center hover-boxed">
                           <!-- Grid sizer (do not remove!!!) -->
                           <div class="grid-sizer"></div>
						   
				 
						   <?php
$cat_id = $db->VeriOkuTek("menu_category", "id", "url", $_GET["url"]);
if($db->veriSaydir("menu_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("menu_items", array("cat_id"), array($cat_id), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
?>


                           <div class="isotope-item">
                              <!-- Begin album single item -->
                              <div class="album-single-item">
                                 <img class="asi-img" onerror='this.style.display="none"'  src="upload/<?=$rows->resim1;?>" alt="adem acıoğlu">
                                 <!-- Begin item cover -->
                                 <div class="asi-cover">
                                    <a class="asi-link lg-trigger" href="upload/<?=$rows->resim1;?>" >
                                       <div class="asi-info">
                                          <span class="s-icon"><i class="fa fa-search"></i></span>
                                       </div>
                                    </a>
                                 </div>
                                 <!-- End item cover -->
                              </div>
                              <!-- End album single item -->
                           </div>
						   
						   <?php }} ?>
						   
						   
						 
						   
						   
                        </div>
                        <!-- End isotope items wrap -->
                     </div>
                     <!-- End isotope -->
                  </div>
                  <!-- End content wrap -->
               </div>
               <!-- /.col -->
            </div>
       
         </div>
         <!-- /.container -->
      </section>
      <!-- End content section -->
      <?php include("alt.php") ?>
      <!-- ====================
         ///// Scripts below /////
         ===================== -->
      <!-- Core JS -->
      <script src="assets\vendor\jquery\jquery-1.11.1.min.js"></script> <!-- jquery JS (https://jquery.com) -->
      <script src="assets\vendor\bootstrap\js\bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->
      <!-- Libs and Plugins JS -->
      <script src="assets\vendor\lightgallery\js\lightgallery.min.js"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->
      <script src="assets\vendor\lightgallery\js\lightgallery-plugins.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
      <script src="assets\vendor\lightgallery\js\jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support -->
      <script src="assets\vendor\jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
      <script src="assets\vendor\isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
      <script src="assets\vendor\imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
      <script src="assets\vendor\justifiedgallery\js\jquery.justifiedGallery.min.js"></script> <!-- Justified Gallery JS (http://miromannino.github.io/Justified-Gallery/) -->
      <script src="assets\vendor\smoothscroll.js"></script> <!-- Smoothscroll JS (https://gist.github.com/theroyalstudent/4e6ec834be19bf077298) -->
      <script src="assets\vendor\ytplayer\js\jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
      <script src="assets\vendor\owl-carousel\js\owl.carousel.js"></script> <!-- Owl Carousel JS (http://www.owlcarousel.owlgraphic.com) -->
      <script src="assets\vendor\owl-carousel\js\owl.carousel.plugins.js"></script> <!-- Owl Carousel plugins JS (http://www.owlcarousel.owlgraphic.com) -->
      <!-- Theme master JS -->
      <script src="assets\js\theme.js"></script>
      <!--==============================
         ///// Begin Google Analytics /////
         ============================== -->
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-75660419-1', 'auto');
         ga('send', 'pageview');
         
      </script>
	     
<script type="text/javascript">
      
      $('document').ready(function(){
         
         // Kaynağı yanlış, yüklenmeyen, kırık resimleri gizler.
         $('img').error(function () {
            $(this).hide();
         });
         
         //Jquery 1.7 veya çalışmadığı durumda alternatif olarak bunu kullanabilirsiniz. 
         $('img').on('error', function () {
            // Kırık resmi gizle
            $(this).hide();
         });
         
         
      })   
 </script>
 
      <!--==============================
         ///// End Google Analytics /////
         ============================== -->
   </body>
   <!-- End body -->
</html>