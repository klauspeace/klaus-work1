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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px; text-align: center;  background-color: #3c529d; color: white;">SPORTS COMMITTEE</div>
				<br/>
				<p>This committee is headed by two individuals who are referred to as Sports Secretaries or Coordinators. They are usually given the Title sports secretary one and two respectively and must be male and female. These two members are assisted by a committee of about ten to fifteen sports committee<a href="pgalleryspt.php">
                                <button>members</button></a> selected by the group.</p>
					<hr>

					<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px;  background-color: #3c529d; color: white;">ACTIVITIES OF THE SPORTS COMMITTEE</div>
					<p>
						The sports committee of CYF Molyko carries out or coordinates the following activities i the group: <br>
						<ul>
							<li>Informs the group of happens in the sports world.</li>

							<li>The sports committee of the group is responsible for all the physical activities of the group i.e. the physical and psychological wellbeing if the members. The committee manages activities such as football, handball, aerobic sports, physical exercises and the traditional dance done by the group during occasions such as rallies, cometogethers and a host of others.</li>

							<li>The committee organizes regular sessions for training and exercises on Saturdays in the mornings at 6am.</li>

							<li>The committee organizes intra-group sports competition, which was in its second edition this and comprised of eight teams, four football teams for brothers and four handball teams for sisters. The tournament ran from May to June 2018.</li>

							<li>The committee is also responsible for coordinating the group during sporting encounters with other organizations or groups. </li>

							<li>The committee organizes friendly matches between the group and other entities.</li>
						</ul>
					</p>
					<hr>

					<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px;  background-color: #3c529d; color: white;">ACHIEVEMENTS OF THE SPORTS COMMITTEE</div>
					<p>
						<ul>
							<li>In the annual zonal rally 2018 at Presbyterian Church Bokwai, the ‘’Bafut Njang  Dance‘’  was introduced to the group and was performed perfectly.</li>

							<li>The committee has been able to secure a standard day for sports exercises, an aspect of the group which has been a difficult one to fulfill due to the charged nature of the group.</li>

							<li>The committee has also been able to acquire sports equipment such as footballs, handballs, jerseys, costumes for traditional dance and a host of others which have helped to facilitate the smooth functioning of the committee’s activities.</li>

							<li>The committee was able to introduce and successfully run and intra group sports tournament dubbed the ‘’The C.Y.F. Molyko League’’ which to a greater extend helped the committee to discover and develop the talents of members in both the football and handball disciplines.</li>

							<li>The committee has also helped members to become physically and mentally apt through the various ordinary and extra ordinary sporting sessions.</li>

							<li>The committee also helped in developing and building the potentials of members in various sports disciplines, some of whom have participated in highly recognized events such as the FENASCO and Varsity Games and the national Olympic Games also known as the “DIXIADES”.</li>
						</ul>
					</p>
					<hr>

					<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px;  background-color: #3c529d; color: white;">EXPECTATIONS OF THE SPORTS COMMITTEE</div>
					<p>
						<ul>
							<li>The sports committee as it main objective been to empower members to become physically apt and also to develop very powerful and renowned sportsmen. Thus the expectations of the committee are as follows.</li>

							<li>Develop in members the love for physical education and sports.</li>

							<li>Make C.Y.F. Molyko a power house when it concerns sports disciplines such as football, handball, volleyball, athletics and a host of others.</li>

							<li>Make sure the groups is well equipped when it concerns sports i.e. both the equipment and the players.</li>
						</ul>
					</p>


				<P><strong></strong>
				   This committee is made up of the following  <a href = "pgalleryspt.php"><strong><button>members</button></strong></a>
				</p>
               
          </div>
				</div>
			</div>
	<?php include 'internalrights/internalspt.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>