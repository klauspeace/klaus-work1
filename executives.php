<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'head.php';?>
<?php include 'header-menu.php'; ?>
<body>
<?php include 'fb.php'; ?>
<div id="vt_wrapper" >

<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">THE EXECUTIVE COMMITTEE (EXCO)</div>
				<br/>
				<p>CYF Molyko has a very competent and God-chosen EXCO. The EXCO headed by the group president, sees into it that all the activities of the group are carried out effectively by monitoring the various departments or committees not to fail in their respective duties.
				</p>
					<hr>
				<p style="font-size: 18px; text-transform: uppercase;"><strong>The following offfices constitute the executive committee of CYF Molyko:</strong></p>
				<ul style="font-size: 18px; font-weight: bold">
					<li>President (Presbytery Delegate)</li>
					<li>Vice President (Girls' Representative)</li>
					<li>Secretary General (Zonal Representative)</li>
					<li>Financial Secretary (Library Steward)</li>
					<li>Treasurer (Parish Steward)</li>
					<li>Public Relations Officer (Assistant Secretary General)</li>
					<li>Evangelism Secretary</li>
					<li>Music Directors</li>
					<li>Socials and Organising Secretaries</li>
					<li>Young Presbyterians/Sunday School (Y.P/SuS) Representative</li>
					<li>Works Secretaries</li>
					<li>Sports Coordinators</li>
					<li>Advisers</li> 
				</ul>

				<p>THE FUNCTIONS OF THE PERSONALITIES OCCUPYING EACH OF THE ABOVE OFFICES ARE CLEARLY SPELLED OUT IN <a href="assets/documents/FUNCTIONS.pdf" style="font-weight: bold;">ARTICLE III, SECTION 3 OF THE C.Y.F MOLYKO CONSTITUTION OF JUNE 25, 2015</a>. 

				<p>This committee is made up of the following <a href = "pgalleryexc.php"><button>members</button></a></p>
				
				
				  
			  
			  <p>&nbsp;</p>
              
				</div>
			</div>
        </div>
	<?php include 'internalrights/internalexc.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>