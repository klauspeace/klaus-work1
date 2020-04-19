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
		  <div class="col-md-12" style="padding-bottom: 28px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px; text-align: center;  background-color: #3c529d; color: white;">BIBLE STUDIES</div>
				<p style="font-size: 25px">
					We carryout bible study sessions every Wednesday with the congregation from 5:00p.m to 7:00p.m.
					<em>They're enriching and boost our spiritual lives</em></p>
			<p style="font-size: 25px">This is an indispensable part of the Christian life. Every activity of the group is centered on knowing God and knowing His ways and this is only made possible through Bible Studies. We believe the Bible is God’s written Word and it is on this account that we ensure that Bible Study through Meditation, Teachings and Reflections is done on every gathering.</p>
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
<p style="text-align: justify;">



