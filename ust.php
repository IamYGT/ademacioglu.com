
		<!-- yükleniyor -->
		<div id="preloader">
			<div class="pulse bg-main"></div>
		</div>
		<!-- yükleniyor -- bitti -->


		 <script language="JavaScript">
/**
  * Disable mouse right-click on page
  * By Arthur Gareginyan (arthurgareginyan@gmail.com)
  * For full source code, visit http://www.mycyberuniverse.com
  */
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
</script>

		<header id="header" class="fixed-top">
			<div class="header-inner">

				<!-- Begin logo -->
				<div id="logo">
					<a href="index.php" class="logo-dark"><img src="assets\img\logo-dark.png" alt="logo"></a>
					<a href="index.php" class="logo-light"><img style="    max-height: 61px;" src="assets\img\logo-light.png" alt="logo"></a>
				</div>
				<!-- End logo -->

				<!-- Begin header tools -->
				<div class="header-tools">
					<ul>
						<li>
 							<a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span>menu</a>
						</li>
					</ul>
				</div>
 				<nav class="navbar navbar-default">
					<div class="navbar-inner">

 						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Navigasyon</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>  
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">

							 
									<li >
									<a href="index.php">ANASAYFA</a>
									 </li>
						 
						  	<li >
									<a href="hakkimda.php">HAKKIMIZDA </a>
									 </li> 






<li class="dropdown dropdown-hover">
									<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HİZMETLERİMİZ <span class="caret-2"><i class="fa fa-chevron-down"></i></span></a>
									<ul class="dropdown-menu">
<?php
if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?> 
									
<li><a href="hizmet-detay.php?url=<?=$rows->url;?>"><?=$rows->baslik;?></a></li>
  
  <?php }} ?>
  

									</ul>
								</li>





									 <li >
									<a href="album.php">ÇEKİMLER </a>
									 </li><li >
									<a href="iletisim.php">İLETİŞİM </a>
									 </li>
						 
						  
						 
						 
						 
							</ul> <!-- /.nav -->
						</div> <!-- /.navbar-collapse -->

					</div> <!-- /.navbar-inner -->
				</nav>
				<!-- End menu -->

			</div> <!-- /.header-inner -->
		</header>
 		<nav id="cd-lateral-nav">
			<div class="nav-inner">

				<!-- Menu header -->
				<div class="menu-header">Adem Acıoğlu</div>

		 <div class="cd-content-box margin-top-20">
<p  style="text-align:center;"	   class="margin-top-15 small">
Adem Acıoğlu Photography olarak <br>
hayallerin ötesinde, yaratıcılığın<br>
 sınırlarını zorlayan Fotoğrafçılık sanatını <br>
 icra etmekten büyük keyif duyuyoruz. <br><br>
 

</p>
</div>
				
 
								
				<!-- End nav content box -->

				<!-- Begin nav links 
			 
				<!-- Begin nav content box -->
				<div class="cd-content-box">

					<h2 class="cd-menu-heading">Instagram:</h2>
					
					<!-- Begin thumbnail list 
					==========================
					* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
					* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
					-->
					<ul class="thumb-list col-3 gutter-3">
					 <?php
$url = "https://api.instagram.com/v1/users/1558123557/media/recent/?access_token=1558123557.1677ed0.4f164692877f4bc6a93a4251b8ecae5a";

$endata = file_get_contents($url);
$dedata = json_decode($endata);

$i = 0;
foreach($dedata->data as $val) {
	if($val->type == "image") {
		$i++;
		//$val->link
?>
						<li><a target="_blank" href="<?=$val->link;?>" class="thumb-list-item bg-image" style="background-image: url(<?=$val->images->standard_resolution->url;?>);"></a></li>
 					
						    <?php
	}
	if($i == 9) { break; }
}
?>
					
					</ul>
					<!-- End thumbnail list -->

				</div>
				<!-- End nav content box -->

				<!-- Begin nav content box -->
				<div class="cd-content-box margin-top-20">
					<a target="_blank" href="https://www.instagram.com/ademacioglu27/" class="link btn btn-primary-bordered btn-rounded-5x btn-sm btn-block">@ademacİoglu27</a>
				</div>
				<!-- End nav content box -->

			</div> <!-- /.nav-inner -->
		</nav>
 