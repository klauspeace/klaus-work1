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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center; background-color: #3c529d; color: white;"><marquee>LATEST EVENTS OF CYF MOLYKO</marquee></div>
			 
                         
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "news-com2geda2019.php">CYF MOLYKO AT 2019 CYF BUEA EAST ZONAL COME-TOGETHER.</a>
                        
                         <hr>
                         
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "news-national-flag.php">CYF MOLYKO RECIEVES THE CYF NATIONAL FLAG.</a>
                        
                         <hr>
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "newsrally-result.php">CYF MOLYKO EMERGE NATIONAL CHAMPIONS IN THE CYF DIAMOND JUBILEE RALLY.</a>
                         <hr>
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "livescore.php">CYF MOLYKO INTERNAL SPORTS COMPETITION 2019</a>
                         
                         <hr>
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "newsrally.php">CYF MOLYKO AT 2019 ANNUAL RALLY Celebrating Diamond Jubilee</a>
                         
                         <hr>
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "newscys.php">CHILDREN AND YOUTH SUNDAY 2019</a>
                         <hr>
                         <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "dedication2018.php">CYF Molyko DEDICATION 2018: Batch of Emergence</a>
			  <hr>
	
			  <a style="text-transform: uppercase; font-size:23px; color: indigo; font-weight:bold; text-decoration:underline;" href = "news1.php">CYF MOLYKO Emerges National Second Position in the 2018 CYF Annual rally</a>
			 <hr>

              
	
              </p>
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