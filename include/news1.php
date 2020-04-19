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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 18px;">CYF MOLYKO EMERGE NATIONAL SECOND IN 2018 ANNUAL RALLY</div>
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 18px;">To God Be The Glory</div>

              <h1><strong>2018 ANNUAL RALLY RESULTS: First 20 CYF Groups in the PCC</strong></h1>
			  <ol>
				<li>CYF AZIRE</li>
				<li><strong>CYF MOLYKO</strong></li>
				<li>CYF ETUG EBE</li>
			  </ol>
				
              <p>
	               
              </p>
              <p>&nbsp;</p>
              <p><strong>CYF MOLYKO CONTACT: Tel: </strong>(+237) 676340570 / 676410110 / 672487123/650422372 </p>
             <p><strong>E-mail: </strong> / contact@cyfmolyko.net / cyfmolyko@gmail.com</p>
          </div>
		</div>
	</div>
	<?php include 'droit-interne.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>