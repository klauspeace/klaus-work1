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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">ENTREPRENEURIAL ASPECTS OF CYF MOLYKO </div>
		    <p><strong>Apart from the spiritual and other aspects of the group, CYF Molyko also has entrepreneurial skills and members are encouraged to be entrepreneurs. The following measures are taken in the group to see into it that members have these skills.</strong></p>
             <ul>
				<li>Members are being encouraged to set-up registration business students along the roadsides aided by this committee.</li>
				<li>Members are encourage to put their capital together and <strong>SET-UP A PARTNERSHIP BUSINESS ONLY</strong>. Members are to search in their neighborhoods and look for a business which needs to be established and join with other member(s) and set it up. Every member is involved except otherwise.</li>
				<li>The group in general in involved in rental services and MTN Mobile Money services. <strong><a href = "businesses.php"><button>Click Here</button></a></strong> to see our businesses.
				
			 </ul>
			 
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