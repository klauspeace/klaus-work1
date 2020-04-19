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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">HEALTH COMMITTEE</div>
				
				CYF Molyko has a very competent and God-chosen Medical practitioners. The <a href = "pgalleryhealth.php"><strong><button>members</button></strong></a> of the this committee are students of renowned medical institutions in Cameroon and abroad such as University of Buea (Faculty of Health Science), CUSS - University of Yaounde I, and Nursing institutions like BIAKA University Institute - Buea, National Polytechnique - Bamenda etc. 
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px;   background-color: #3c529d; color: white;">VISION OF THE HEALTH COMMITTEE</div>
				Our vision is to see that;
				<ul>
					<li>By the end of 2018, health committee should be able to give health education and help members to implement it.</li>
					<li>By the end of 2018, members should know their health status through some basic test.</li>
					<li>By the end of 2019, all members of the group should be able to carry out first aid personally.</li>
					<li>Our members be in good health condition and also create awareness about health issues, preventions and above all promote health and prolong lives for the betterment of our society especially the youths.</li> 
				</ul>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px;  background-color: #3c529d; color: white;">ACTIVITIES OF THE HEALTH COMMITTEE</div>   
				We carryout the following activities in order to realize our vision.
				<ul>
				   <li>
					<h2 style="color:#d43935;"><strong>HEALTH TALKS</strong></h2>
					This committee gives health education, which is important to the health of the members. So far, we have been able to educate on hepatitis, hypertension, blood grouping and rhesus factor, sex education, HIV, diarrhoea, circle cell and menstruation.
				   </li>	
				   <li>
				   <h2 style="color:#d43935;"><strong>PRACTICAL SESSIONS ON FIRST AID</strong></h2>
				   This committee is able to carry out first aid during sport sessions, outings and even at the group level. We are interested in seeing our members in good health
				   </li>
				   <li>
				   <h2 style="color:#d43935;"><strong>SCREENING</strong></h2>
				   This committee also carries out screening for VCT, blood grouping, in other to help members to know their health status.
				   </li>
				 </ul>  
				  
				
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px;  background-color: #3c529d; color: white;">ACHIEVEMENTS OF THE HEALTH COMMITTEE</div>   
				<ul>
					<li>
						The health education which we have given has been implemented by most members of the group(CYF MOLYKO).
					</li>
					<li>
						The practical session of first aid has helped members to gain relieve after applications.
					</li>
					<li>
					Some members have known about some common errors which they normally do like cleaning wounds with alcohol.
					</li>
					<li>
					One of the greatest achievements of the health committee has been; screening of members for VCT and blood grouping.
					</li>
				
				</ul>
				  
			  
			  <p>&nbsp;</p>
			   <strong>This committee is made up of the following  <a href = "pgalleryhealth.php"><button>members</button></a></strong>
              
          </div>
				</div>
			</div>
	<?php include 'internalrights/internalhealth.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>