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
<?php include 'include/slider.php';?>
<div id="vtHP3_s_head">
	<div class="row">
		<div class="container">
			<ul class="nav nav-justified">
				<!--li><a href="#vtHP3_s1">Fasting &amp; Prayer</a></li>
				<li><a href="#vtHP3_s2">Good Conduct</a></li>
				<li><a href="#vtHP3_s3">Success</a></li-->
				<li class="grand_li son"><a href="concerts.php"><?php echo htmlspecialchars($lang['concerts']); ?></a></li>
				<li class="grand_li son"><a href="retreats.php"> <?php echo htmlspecialchars($lang['retreats']); ?></a></li>
				<li class="grand_li son"><a href="music.php"> <?php echo htmlspecialchars($lang['music']); ?></a></li>
				<li class="grand_li son"><a href="official_activities.php"> <?php echo htmlspecialchars($lang['official_activities']); ?></a></li>
				<li class="grand_li son"><a href="other_activities.php"> <?php echo htmlspecialchars($lang['other_activities']); ?></a></li>
                                <li class="grand_li son"><a href="library.php"> <?php echo htmlspecialchars($lang['library']); ?></a></li>
				
			</ul>
		</div>
	</div>
</div>
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="vt_col_4  col-lg-12 col-sm-12">
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center; background-color: #3c529d; color: white;">WORD OF THE PRESIDENT OF CYF MOLYKO</div>
			<div class="row">
				<div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>Together...In Fellowship.  In fellowship...With Christ!</strong>
                <img alt="" src="assets/global_assets/images/1.jpg" class="img-responsive" style="max-width:100%;"/>
                </div>
			  <div class="vt_col_4  col-lg-8 col-sm-8" style="text-align: justify">
				  <strong>JESUS CHRIST IS THE ONLY FOUNDATION [1Cor.3:11]</strong>
                <p>
                  The ministry of <strong>Jesus Christ</strong> is based on two great aspects of life namely;
				  <strong>reconciliation</strong> and <strong>evangelism</strong>. 
				  Jesus Christ came to reconcile us to the Father so that we can be His disciples and also make others His disciples through our works and examples <strong>[Mt. 28:18]</strong>. 
				  There comes a time in one’s life when your life and plans seem <strong>blurred</strong> and you cannot find answers to what you are going through and how to overcome. 
				  I challenge you in such situations to just bow and re-affirm your faith in your creator because He cares. 
				  Remember the decision you make at any point in time of your existence either moulds or mal you. 
				  Also remember everyone has his/her own destiny path so do not try to be someone you are not. 
				  Just accept, identify and focus all your efforts towards fulfilling your own destiny to the glory of God, for your family, community and the world at large. 
				</p>  
                </p>  
                  Our motivation for creating a website comes with the revelation and conviction from this statement 
				  <strong>“In every way, let Christ be preached”</strong>.
				  The Christian Youth Fellowship (CYF) movement has several ways of doing evangelism, namely; through music, sports, door-to-door evangelism, 
				  involvement, visits to hospitals and orphanages, traditional dance and ballet, and even in our lifestyles just to name a few. 
				  Hence, the idea of creating a website is another broader way of bringing Christ to a larger population. 
				  I prompt us to reflect on this; How will they call on the one they have not known, how can they believe in the one they have not heard of, 
				  how can they get the message unless someone preaches to them and finally how can we preach unless we are sent? 
				  Therefore, Christianity is a lifestyle and a practice not some religious practice and dogmatism. Join us in the race of winning more souls and announcing Jesus’ second coming, hallelujah. 
				</p>
				<p>  
                  <p>Are you sick, disappointed, depressed, confused, discouraged, in fear of what may or has already happened, bereaved, poor, failed or suffering from indecision, then rejoice because I tell you <strong>“JESUS LOVES YOU”</strong>.
				  Irrespective of who you are, let the sick say I am healed and let the poor say I am rich because He is willing to do exceedingly and above what you want. 
				  For as long as you breathe know ye that there is hope. 
				  Let me again use this medium to express my heartfelt gratitude to the entire executive body of CYF Molyko who laid this foundation such as all the past EXCO members and especially the current executive body and web master for making this idea realistic. 
				  I equally acknowledge the session of Presbyterian Church in Cameroon (P.C.C) Molyko, our two dynamic youth elders, our patrons & patronesses, alumni and all lovers of this noble movement, not forgetting you who just logged in.
                   <p>&nbsp;</p>
				   <strong>God Bless You!</strong>                         
                 </p>
				
                <p><strong>MICHAEL ASAFOR CHE</strong></p>
                <p><strong><em>President, CYF Molyko (November 2013 - Date)</em></strong></p>
                <p>&nbsp;</p>
                </p>

			  </div>
			</div>
			<hr>			
			<div class="row" style="margin-top: 5px;"></div>
			<hr>			
			<div class="row" style="margin-top: 5px;"></div>
		</div>
	</div>
	<?php include 'include/droit.php';?>	
</div>
</main>
<?php include 'include/footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>