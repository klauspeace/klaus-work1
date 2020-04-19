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
		  <div class="col-md-12" style="padding-bottom: 27px; text-align: justify;">
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 25px; text-align: center;  background-color: #3c529d; color: white;">VISION AND MISSION</div>
				<p></p>
				</br>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 23px;  background-color: #3c529d; color: white;">OUR MISSION</div>
				<p style="font-size: 23px">The mission of the Christian Youth Fellowship Molyko is to share the Good News of the Gospel by Demonstrating God’s Love and Hospitality to all through word and action.</P>
				<hr>
                                </br>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 23px;  background-color: #3c529d; color: white;">OUR VISION</div>
				<p style="font-size: 23px">The Vision of the movement is to create an atmosphere where members can freely and confidently share the truth about their beliefs and joyfully experienced the benefits of serving God, ensuring that in every way, Christ is Proclaim.</p>
             </ul>
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