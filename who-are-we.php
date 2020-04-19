<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'include/head.php';?>
<body>
<?php include 'include/fb.php'; ?>
<div id="vt_wrapper" >
<?php include 'include/header-menu.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom: 25px; text-align: justify;">
				<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 25px; text-align: center;  background-color: #3c529d; color: white;">ABOUT CYF MOLYKO</div>

              <p style="font-size: 23px;">The Christian Youth Fellowship (CYF) Presbyterian Church Molyko-Buea began as far back as the early 1990s. The group was inaugurated by the Rev.
                  Ngometuge in 1970s. The group has been led by young, vibrant and dynamic presidents such as Mokate Arrey Ashu, Dze Albert, Niba Denis,
                  Tangoh Anthony, Ebi Julius, Azinwi Gillian and its incumbent president, Bro Michael Asafor Che. Some of its founding and pioneer members
                  include the Late Mrs. Sally Nganda.
                  CYF Molyko has a current membership of about 200 (110 females and 90 males), with 26-man executive body (9 female and 17 male) piloting its affairs.
                  The group is strongly supported financially, morally and spiritually by a college of 33 patrons and patronesses,
                  including 2 Youth affairs elders assigned by the session of the congregation, and a large alumni body spread within Cameroon and in the diaspora.
                  The group was born within the vision of the Presbyterian Church in Cameroon (PCC), which is to spread the good news of God through Jesus Christ in word,
                  and action by ministering through preaching, teaching and healing in faith, brotherly love and care (Luke 4:18-19; Isaiah 61:1-3; Mathew 28:18-20),
                  and founded on the ideals of the Christian Youth Fellowship(CYF) Movement of the PCC, which is to bring together youths who want to serve Jesus Christ,
                  and to develop in and among its members a sense of responsibility towards the Church (PCC) and her mission to the world.
                  As such, the group is engaged in diverse activities ranging from spiritual to social. These include bible studies, evangelization, singing, sport/games,
                  excursions, camps, peace building and conflict transformation, leadership training, and capacity building through workshops and seminars (especially economic), scriptural teachings and social talks etc.
              </p>

				<hr>
				<a href = "history.php"><button>History of CYF Molyko</button></a>
				<a href = "vision-mission.php"><button>Vision and Mission</button></a>
				<a href = "constitution.php"><button>Constitution</button></a>
				<a href = "achievements.php"><button>Achievements</button></a>


            
          </div>
		</div>
	</div>
	<?php include 'include/droit-interne.php';?>	
</div>
</main>
<?php include 'include/footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>
<p style="text-align: justify;">



