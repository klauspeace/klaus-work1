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
<?php include 'header-menugallery.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">CYF MOLYKO 2013 PHOTOS</div>
			<p style="text-align: justify;">We keep photos of both new and old members in our archives. You can also see more photos on <strong>FACEBOOK</strong> and videos on <strong>YOUTUBE</strong> Just click the links.</p>

				<link type = "text/css" rel = "stylesheet" href = "assets/global_assets/homepage/homepage3_assets/css/stylepgallery.css">
				<table>
					<tr>
							<td><img src = "assets/images/Committees/Executive/1.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/2.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/3.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/4.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/5.jpg"</td>
							
							
					</tr>
					<tr>
							<td><img src = "assets/images/Committees/Executive/6.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/7.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/8.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/9.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/10.jpg"</td>
							
							
					</tr>
					<tr>
							<td><img src = "assets/images/Committees/Executive/11.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/12.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/13.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/14.jpg"</td>
							<td><img src = "assets/images/Committees/Executive/15.jpg"</td>
							
							
					</tr>
			    </table>
		  </div>
		</div>
	</div>
	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>