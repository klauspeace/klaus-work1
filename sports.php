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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">SPORTS<br />
            </div>
<p> <strong>Sporting activities </strong> are carried out twice every month on Saturdays' morning. </p>
                <p><strong>We also have many sports competitions with our peers of in zone, the presbytery and even at national level.</strong> : 10<br />
                </p>
                
                <p><strong><em> We take part in:</em></strong><br />
                </p>
                <ul>
                  <li><strong>Football for Brother</strong></li>
                  <li><strong>Handball for Brothes</strong></li>
                  <li><strong>Football for Sisters</strong> </li>
				  <li><strong>Handball for Sisters</strong> </li>
				  <li><strong>Atletics</strong> </li>
                </ul>
                <p><em><strong>We also have internal competitions annually</strong></em></p>
                
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