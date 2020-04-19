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
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">FINANCE COMMITTEE</div>
				The Finance committee deals with the financial aspect of CYF Molyko and sees into it that the group is always financially in order to successfully carryout her projects.
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px;  background-color: #3c529d; color: white;">ROLE OF THE FINANCE COMMITTEE</div>
				<p>
				The finance committee of CYF Molyko is headed by the Financial secretary, and the other members of this committee include; the treasurer, president and vice president. This committee is responsible for the management of the group’s funds and is in charge of making sure the group does not go “broke”. In as much as we are carriers of the gospel to the ends of the world, this evangelism would not be possible without money so our movement, like every other group requires finances to run its activities. A major source of income for our group is <a href="jobs.php"><button>bob a jobs</button></a>, members’ <a href="registration.php"><button>registration</button></a> and monthly dues. Every member who comes new to the group is required to register with 200Frs, while old members register with 100Frs at the beginning of each year. Members are also required to contribute 100Frs each month as dues, and this helps in the functioning of the group. We also have other sources of income such as support from the session of the church, elders, patrons, patroness, other groups in the church and other lovers of the group, not forgetting the congregation as a whole. In addition to these, we sometimes take part in extracurricular activities like competitions where we are supported financially and even the visits we make or invitations we get for several occasions help us in raising funds for our movement. Finally, just like every hardworking person who needs a job as a source of income, our movement also carries out jobs which provides us income. To this effect we are constantly in need of jobs from individuals or any other source, which we can do as a group to enable us not only to keep our bodies active but also to maintain the good status of our coffer.
				</p>
				
				<p>
				This committee in addition to providing ideas which can help generate income, is also in charge of making sure the group spends wisely to always maintain a growing coffer. They guide the executive and the group as a whole on how to spend their money wisely and not only as a group but also as individuals. We have had several projects which have helped us generate income as a group and the most recent projects are the video CD project and the <a href="rental_services.php"><button>chair renting project</button></a>. These projects have enabled the group to possess another steady source of income which will not only serve the current body but it will be a continuous source of income even for future generations of this movement. We have the vision of getting other greater sources of income for the movement and not only for the group but for every member of the CYF Molyko. We wish to create a sense of responsibility to all the members regarding their finances by encouraging business and entrepreneurial minds. 
				</p>
				
			  <p>&nbsp;</p>
              <strong>This committee is made up of the following  <a href = "pgalleryfin.php"><button>members</button></a></strong>
          </div>
				</div>
			</div>
	<?php include 'internalrights/internalfin.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>