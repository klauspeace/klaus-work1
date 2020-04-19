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
	<div class="vt_col_4  col-lg-12 col-sm-8">
		<div class="row">
		  <div class="col-md-29" style="padding-bottom: 25px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">CYF MOLYKO 2014 PHOTO GALLERY</div>
			<p style="text-align: justify;">We keep photos of both new and old members in our archives. You can also see more photos on <strong>FACEBOOK</strong> and videos on <strong>YOUTUBE</strong> Just click the links.</p>
             <link type = "text/css" rel = "stylesheet" href = "assets/global_assets/homepage/homepage3_assets/css/stylepgallery.css">
			<table>	
				<tr>
						<td><a href="assets/images/GALLERY/photos14/1.jpg"><img src = "assets/images/GALLERY/photos14/1.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/2.jpg"><img src = "assets/images/GALLERY/photos14/2.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/3.jpg"><img src = "assets/images/GALLERY/photos14/3.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/4.jpg"><img src = "assets/images/GALLERY/photos14/4.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/5.jpg"><img src = "assets/images/GALLERY/photos14/5.jpg"></a></td>
						
						
					</tr>
					<tr>
						<td><a href="assets/images/GALLERY/photos14/6.jpg"><img src = "assets/images/GALLERY/photos14/6.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/7.jpg"><img src = "assets/images/GALLERY/photos14/7.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/8.jpg"><img src = "assets/images/GALLERY/photos14/8.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/9.jpg"><img src = "assets/images/GALLERY/photos14/9.jpg"></a></td>
						<td><a href="assets/images/GALLERY/photos14/10.jpg"><img src = "assets/images/GALLERY/photos14/10.jpg"></a></td>
						
						
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