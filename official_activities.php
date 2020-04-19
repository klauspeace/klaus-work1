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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 25px;  text-align: center; background-color: #3c529d; color: white;">OFFICIAL ACTIVITIES</div>
				<p>These are outdoor-activities which the group join its peers to celebrate annually. These activities are carried out at zonal level as well as at presbytery level.</p>
				<hr>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 23px; background-color: #3c529d; color: white;">RALLIES</div>
				<p>
					This is an event carried out all over the PCC in February annually. During this event, the various groups taking part are involved in activities like BIBLE QUIZ, BRAIN TRUST, LITURGICAL SINGING, TRADITIONAL/BALLET DANCE, EXHIBITION, ETC.<br>
					The group which evovles first nationally is given the national flag for that year.

				</p>
				
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 23px; background-color: #3c529d; color: white;">COME-TOGETHER</div>
			  <p>
			  </p>
                          
                                                  
                 <div class="col-lg-16">
		<h1 style="color: black; font-size: 18px; font-weight: bold;"><?php echo htmlspecialchars($lang['youtube']); ?></h1>
		<hr>
		<p>
			<iframe width="100%" height="500" src="https://www.youtube.com/embed/pr_mc4tDs7s" frameborder="0" allowfullscreen></iframe>
		</p>

		</div>
			 
				
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













