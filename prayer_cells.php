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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px; text-align: center;  background-color: #3c529d; color: white;">PRAYER CELLS, SEMINARS & WORKSHOPS, VIGILS & TARRY NIGHTS</div>
				<h1 style="font-size: 25; color: #3c529d;">BIBLE STUDIES</h1>
					<p style="font-size: 25px;">Prayer cells are small groups of members who meet to pray and worship God on days and venues agreed by the group.<br>
						This is an indispensable part of the Christian life. Every activity of the group is centered on knowing God and knowing His ways and this is only made possible through Bible Studies. We believe the Bible is God’s written Word and it is on this account that we ensure that Bible Study through Meditation, Teachings and Reflections is done on every gathering.
					</p>
					<hr>
					<h1 style="font-size: 25px; color: #3c529d;">SEMINARS AND WORKSHOPS</h1>
					<p style="font-size: 25px;">
						These are educational events that feature one or more subject matter whose aim is enriching one another with the right knowledge and skills. During this activity, we get to blend social issues and spiritual growth matters for the benefit of the body Christ. The frequency of this activity is dependent on the need of the group during a particular period in time.
					</p>

					<hr>
					<h1 style="font-size: 25px; color: #3c529d;">VIGILS AND TARRY NIGHTS</h1>
					<p style="font-size: 25px;">
						This is another activity of the group which is popularly called “All Night” where members are given the opportunity to tarry before the presence of God in order to have particular needs met.
						Activities carried out during this period are Bible Study, teaching and Prayer. Inspiration for this comes from Jesus’ Prayer Life and that of the Disciples.</p>

				

			
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