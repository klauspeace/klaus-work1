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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center; background-color: #3c529d; color: white;">STANDING COMMITTEES</div>
			  <p><h2 style="color:black">Apart from the <A href="executives.php"><button>Executive Committee</button></a>, Christian Youth Fellowship (C.Y.F) Molyko - Buea, has eleven other standing committees which help in running and facilitating the affairs of the group. <strong>These committees are:</strong></h2></p>
			  	<hr>
				
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comevans.php">Evangelism Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "commsc.php">Music Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comsoc.php">Social Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comhealth.php">Health Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "compub.php">Public Relations Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comfin.php">Finance Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comspt.php">Sports Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comworks.php">Works Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comedu.php">Education and Employment Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comadv.php">Advisory Committee</a>
					<hr>
					<a style="text-underline-position: under; text-transform: uppercase;" href = "comdisc.php">Disciplinary Committee</a>
					<hr>
				 
              <p>
	
              </p>
              <p>&nbsp;</p>
              
          </div>
		</div>
	</div>
	<?php include 'internalrights/internalheads.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>