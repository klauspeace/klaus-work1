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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">MUSIC COMMITTEE</div>
				<br/>
				<P><strong>The music committee of CYF Molyko is made up of the CYF Molyko music directors and supporting members to keep <a href="music.php"><button>music</button></a> in the group alive ang progressing. These <a href = "pgallerymsc.php"><strong><button>members</button></strong></a> are in charge of teaching or assist in teaching new songs to the group.</strong></P>
				</p>
				<p>&nbsp;</p>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">VISION</div>
				<p>The vision of the music committee is to bring the word of God to the world through our singing.</p>
				<p>&nbsp;</p>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">ACTIVITIES</div>
				<p>In order to realize her vision, the committee carries out the following activities;</p>
				<ul>
					<li>Lecture new and old songs to enhance the growth of members and the group at large.</li>
					<li>Ensures the group gets the best of songs appropriate for evangelism through our singing, by organizing numerous rehearsal sessions.</li>
					<li>Organize internal musical <a href="concerts.php"><button>concerts, seminars and workshops</button></a>, and also internal music competitions.</li>
				</ul>
				<p>&nbsp;</p>
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: #3c529d; color: white;">ACHIEVEMENTS</div>
				<p>As a result of the above activities through the collaboration of all members and by the special grace of God, the music, under the canopy of CYF Molyko, has been able to achieve the following results;</p>
				<ul>
					<li>Release of the Volume three (3) of CYF Molyko music album.</li>
					<li>Improved musical knowledge in members. Member are now able to read music in solfa notation and sing in a profession manner.</li>
					<li>CYF Molyko is now known as one of the best singing C.Y.F groups of the PCC.</li>
					<li>Increase in numerical strength of the group and in the Church as a result of thrilling and touching music. That is, more souls have been won for Christ Jesus through singing.</li>

				</ul>
				  
			  
			  <p>&nbsp;</p>
              
          </div>
				</div>
			</div>
	<?php include 'internalrights/internalmsc.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>