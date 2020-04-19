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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">SOCIAL ACTIVITIES</div>
				<p>
					We have numerous social activities.
				</p>
				<strong>These activities include are coordinated by <a href="comsoc.php"><button>socials committee</button></a> headed by the socials and organizing secretaries.</strong><br />
                <p>The following socials activities carried out by CYF Molyko are coordinated by the socials committee.</p>
                <h3 style="font-size: 16px; text-transform: uppercase;">Parties</h3><p>This committee organizes parties and especially the end of year party which is organized every January. During the end of year party, members are awarded certificates of recognition in various aspects of their services in the group during the previous year.Also, during the end of year party, exchange of gifts take place as well as other social activities.</p>
                <h3 style="font-size: 16px; text-transform: uppercase;">Joint Corners Meeting</h3><p>This committee, in collaboration with the brothers' corner, sisters' corner and the executive body of the group, organize joint corners meetings every year. During this meeting several aspects of the group are looked into. The social aspect of the group and members is the key aspect that is discussed during the joint coners meetings.</p>
                <h3 style="font-size: 16px; text-transform: uppercase;">Picnic</h3>
                <h3 style="font-size: 16px; text-transform: uppercase;">Social Talks/Teachings and workshops</h3><p>Social talks coordinated by individuals from within or from without the group are organized usually, to train members and sensitize them on certain social aspect of life such as dressing decently, relationships and marriage, cooking, table manners etc. Also, workshops are organized to train members on how to bake cakes, produce peanuts, spaghetti etc. This is very advantageous to members as they go out into the world with open minds and can well adapt in a variety of situations.</p>
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
<p style="text-align: justify;">



