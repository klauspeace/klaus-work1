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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">WORKS COMMITTEE</div>
				
				<p style="font-style: italic;">CYF Molyko has a very compitent works. THis committee, headed by the works secretaries, see into it that all works and projects to be done and carried out by the group are done in the desired way and at the right time.</p>

				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">VISION OF THE WORKS COMMITTEE</div>
				<p>THis committee has as vision to make CYF Molyko a financial-independent movement, owner of many businesse which will be able to better our lives and the lives of other people as far as finances are concerned. Also our members will be hardworking in their various fields of life and will be able to be financially authonomous.</p>

				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">ACTIVITIES OF THE WORKS COMMITTEE</div>
				<p>The followinng activities are carried out by the works committee in order to realize the above vision</p>
				<p>
					<ul>
						<li>The main activity of Works comittee is to search for bob-a-jobs which help members to meet up with their financial obligations of the group and also other needs.</li>
						<li>This committee is capable of initiation entrepreneurial ideas that will help the group raise finances and keep the group coffer growing.</li>
						<li>All work to be done by the group such as cleaning of the Church house and Church compound is coordinated by this committee.</li>
					</ul>
				</p>

              <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">ACHIEVEMENTS OF THE WORKS COMMITTEE</div>
              <p>Our achievements are numerous some of which include the following:
                  <ul>
                  <li><a href="rental_services.php"><button>Chair project</button></a> which has greatly improved the group's financial status through the renting of the chairs</li>
                  <li>Also in working in collaboration with members of this committee we have been able to organize a good number of <a href="jobs.php"><button>bob-a-jobs</button></a> which has gone a long way to assist members in their contributions at group, Zonal, Presbytery and National levels</li>
              </ul>
              </p>


				   This committee is made up of the following  <a href = "pgalleryworks.php"><strong><button>members</button></strong></a>
				</p>
				
				  
			  
			  <p>&nbsp;</p>
               
          </div>
				</div>
			</div>
	<?php include 'internalrights/internalworks.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>