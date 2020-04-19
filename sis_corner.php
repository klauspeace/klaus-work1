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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center; background-color: #3c529d; color: white;">SISTERS' CORNER</div>
			  <p>
					This corner is made up of all<a href="pgallerysis.php">  <button>female members</button></a> of CYF Molyko - Buea. Every new female member (sister) who gets registered into CYF Molyko is automatically a member of the Sister’s corner.
			  </p>

              <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 18px; background-color: #3c529d; color: white;">VISION OF THE SISTERS' CORNER</div>
             We have a vision to develop, empower and transform all the women who pass through CYF Molyko into <strong>Virtuous</strong> and <strong>reputable</strong> family Leaders of Cameroon and other nations they would find themselves in. We take the commitment to always learn and promote individual as well as corporate growth. We welcome suggestions and ideas on how better we could help in improving the potentials of our sisters.
			  
			  <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 18px; background-color: #3c529d; color: white;">ACTIVITIES OF THE SISTERS' CORNER</div>
			  The following activities and more, are what enables us to move successfully towards our goal.
			  <ul>
				<li>
				<h2 style="color:#d43935;"><strong>MEETINGS</strong></h2>
				The sister’s corner has its meetings twice every month, that is, the first and third Sundays of every month. Meetings are scheduled to take place at sisters’ houses this is in a bid to know where all our sisters reside. During our meetings, we encourage the host to take meditation, topical teachings and or prepare a workshop presentation for the rest of the sisters. This inspires sisters to do deep research on different presentations that they could present which improves on their skills first as individuals and serves as a push for creativity and activeness.
				</li>
				<li>
				<h2 style="color:#d43935;"><strong>WORKSHOPS</strong></h2>
				These are educative sessions where sisters get their hands on work; examples of workshops have been the making of peanuts, pancakes, designing of beads into necklaces and bracelets and many other projects which have been earmarked for the weeks and months ahead. These workshops have greatly improved on the knowledge and skills of our sisters. 
				
				</li>
				<li>
				<h2 style="color:#d43935;"><strong>DISCUSSIONS</strong></h2>
				Many sisters go through challenging situations and cannot publicly (or at the group level) explain what they face. With this understanding, the corner is open to give advice and practical steps on how we could shake off the dirt that life hurls on us. Several issues and topics are treated; Becoming the Virtuous woman of the Bible, Maintaining proper health and hygiene, Developing purposeful relationships, time management, Cordial relations and more.. During some of our discussion sessions, we plan our activities such that we get a maximum output for the year.
				
				</li>
				<li>
				<h2 style="color:#d43935;"><strong>SISTERS' DAY</strong></h2>
				<p>This is a day that sisters come together once every year to showcase different talents and abilities of sisters. On this special day the sisters organize a form of showcase program incorporating activities like; presentation of a variety of dishes from the different regions of Cameroon prepared by the sisters, a song presented in all parts by sisters, a drama with both parental roles played by sisters, handworks like shoe mending, sewing from sisters and a great deal of other very interesting presentations from sisters. </p>
				<p>Still on this day, some mothers of the congregation and beyond are invited to give a talk to sisters on sensitive issues that women need to handle in their homes and the society. It is worth noting that the brothers of the general forum are invited as guests to appreciate what their sisters can do.</p>
				<p>All teachings and presentations on this day reflect the theme of the celebration. The sisters' day was celebrated in 2016 under the theme "Sisters, the backbone to an exemplary home, instructors to generations" <strong>[Act. 18:26]</strong>. </p>
				</li>
				<li>
				<h2 style="color:#d43935;"><strong>OTHERS</strong></h2>
				At least once in a year, the sisters pay a visit to some patronesses and mothers of the congregation where they carryout human investment activities; cleaning their home's, helping with chores around the house etc. 
				</li>
			  </ul>
			  
			  <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 18px; background-color: #3c529d; color: white;">ACHIEVEMENTS OF THE SISTERS' CORNER</div>
			  <ul>
				<li>
				Our sisters have been instilled with skills to make them less dependent even while in school. Sisters have started small businesses and others have developed passion for work and development of skills. This is as a result of the practical workshop sessions that are organised during the meetings.
				</li>
				<li>
				Sisters have learned and determined to maintain healthy relationships with those around them. Some of our topical teachings have helped in boosting the spirit of coexistence among sisters and correlation in the general group forum as sisters have become more respectful and cooperative.
				</li>
				<li>
				Sisters who have adopted the virtues of the <strong>Proverbs 31</strong> virtuous woman have become a point of reference back in their various houses and quarters. This gives us much joy because our homes depend on us the women.
				</li>
			  </ul>
			  
			  <strong>The sisters' corner is  composed of the following <a href = "pgallerysis.php"><strong><button>members</button></strong></a></strong>
              <p>&nbsp;</p>
              
          </div>
		</div>
	</div>
	<?php include 'internalrights/internalsis.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>