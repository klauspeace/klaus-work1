<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">MUSICAL CONCERTS, SEMINARS AND WORKSHOPS</div>
			  <p><strong>WE HOLD MUSICAL CONCERTS, SEMINARS AND WORKSHOPS ANNUALLY</strong></p>
			  <p><strong><em>These concerts, seminars and musical workshops are aimed at preaching God's word through singing</em></strong> </p>
			  <h2 style="color:#d43935;"><strong>CONCERTS</strong></h2>
			  <p>These are events organized mostly during our group visits both return and outings where a series of thrilling songs are presented by the group.</p>
			  <p>&nbsp;</p>
              <h2 style="color:#d43935;"><strong>SEMINARS</strong></h2>
              <p>This is one of the forums we use to sensitize, tuitor and impact our members musicwise like solfa notation as well as music theory, sight singing and transcription.</p>
              <p>&nbsp;</p>
              <h2 style="color:#d43935;"><strong>WORKSHOPS</strong></h2>
              <p>This equally is a forum created to facilitate member’s awareness on a song especially in preparations for services and rallies or group outings.</p>
			<p>&nbsp;</p>
			
			
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