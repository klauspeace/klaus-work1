<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<style type="text/css">
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px; text-align: center;  background-color: #3c529d; color: white;">RETREATS AND FELLOWSHIP MEALS</div>
		    <h1 style="color: #3c529d; font-size: 25;">RETREATS</h1>
		      <p style="font-size: 25px">We hold retreats frequently to boost our spiritual lives
			    Some of these retreats are organised by the zone, some by the congregation and others by the PCC
			    <br><br>
			    This is a time of solitude where members are given the opportunity to draw closer to God though reflection, prayer and meditation. This activity is carried on as often as possible depending on the need of the members. The <a href="comevans.php"><button>evangelism committee</button></a> is in charge of organizing and overseeing this activity which absorbs the entire group and even welcomes non members who desire to have a closer work with God.
			</p>
			<hr>

			 <h1 style="color: #3c529d; font-size: 25;">FELLOWSHIP MEALS</h1>
			 <p style="font-size: 25px">This is another activity of the committee whose aim is to ensure that there is a balance between the Spiritual and natural things. In the Assembly of God’s people, there is always the need to demonstrate Christ’s Love in action by meeting up with the craving needs of the human body. In order to have this done, the committee organizes what is called “Fellowship Meal”, where Christian folks are invited to share in the produce of earth and the efforts of human hands.</p>


            
			
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