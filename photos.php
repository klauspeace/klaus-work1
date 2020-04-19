<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<style type="text/css">
body,td,th {
	font-size: 16px;
	color: #F00;
}
</style>
<?php include 'head.php';?>
<body>
<?php include 'fb.php'; ?>
<div id="vt_wrapper" >
<?php include 'header-menu.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">CYF MOLYKO PHOTO GALLERY.</div>
			<p style="text-align: justify;">We keep photos of both new and old members in our archives. You can also see more photos on <strong><a href = "https://www.facebook.com/search/str/cyf+molyko/keywords_blended_photos?epa=SEE_MORE"><button>FACEBOOK</button></a></strong> and videos on <strong><a href = "https://www.youtube.com/channel/UC6NJR5aUdg89yciez203A6A/featured?disable_polymer=1" target="_blank"><button>YOUTUBE</button></a></strong> Just click the links. You can also <a href="pgalleryrecent.php"><button>click here</button></a> to see our RECENT PHOTOS</a></p>
				
                                <hr>
				<a href = "pgalleryexc.php">EXECUTIVE COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryadv.php">ADVISORY COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryfin.php">FINANCE COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryevans.php">EVANGELISM COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgallerymsc.php">MUSIC COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgallerypub.php">PUBLIC RELATIONS COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryedu.php">EDUCATION AND EMPLOYMENT COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgallerysoc.php">SOCIALS COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryspt.php">SPORTS COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryworks.php">WORKS COMMITTEE MEMBERS</a>
                                 <hr>
				<a href = "pgalleryhealth.php">HEALTH COMMITTEE MEMBERS</a>
                                
                                
                                 <hr>
                                 <br>
				<a href = "pgallerysop.php">SOPRANO SINGERS</a>
                                 <hr>
				<a href = "pgalleryalt.php">ALTO SINGERS</a>
                                 <hr>
				<a href = "pgalleryten.php">TENOR SINGERS</a>
                                 <hr>
				<a href = "pgallerybass.php">BASS SINGERS</a>
                                <hr>
                                
                                 <br>
				<a href = "pgallerybros.php">BROTHERS' CORNER</a>
                                 <hr>
				<a href = "pgallerysis.php">SISTERS' CORNER</a>
					
                                
				<hr>
                                <br>
				<a href = "p2018.php">SEE OLDER PHOTOS</a>
					<hr>
				
				
		  </div>
		</div>
	</div>
	<?php include 'sidebar.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>