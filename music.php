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
<?php include 'include/header-menu.php';?>
<main id="vt_access_main" role="main">
<div class="container" style="margin-top: 15px;">
	<div class="vt_col_4  col-lg-8 col-sm-8">
		<div class="row">
		  <div class="col-md-12" style="padding-bottom:30px; text-align: justify;">
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">MUSIC</div>
                         <div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>MUSIC COMPOSERS</strong>
                <a href="https://www.youtube.com/results?search_query=anye+amstrong"><img alt="" src="assets/global_assets/images/2.jpg" class="img-responsive" style="max-width:100%; border-radius:10px; background-color:#3c529d; "/></a>
                <hr />
                
                <a href="https://www.youtube.com/watch?v=Rh270eg1yzU"><img alt="" src="assets/images/11.png" class="img-responsive" style="max-width:100%; border-radius:10px; background-color:#3c529d; "/>
                <br />
                <caption><strong style="color:black;">Mr. TATA NDUMBE MUSONGE</strong></caption>
                </a>
                
                </div>
                <hr>
			    <p style="font-weight: inherit; font-style: initial; font-size:18px;">We deal with a diverse types of gospel songs from different cultures We thrill our audience and evangelize through singing.</p>
					
				  <p style="font-weight: inherit; font-size:20px;">Classical, traditional, and western gospel songs are the ones we deal most with.</p>
				  <p style="font-weight: inherit; font-size:20px;">We also thrill the congregation and audience of other occasions through music. The latter are <a href="concerts.php"><button>musical concerts</button></a>, <a href="official_activities.php"><button>Rallies and Cometogethers'</button></a> and visits to other congregations and occasions</p>
                                  <p style="font-size:22px; font-style:italic;">In order to achieve all these and excel in our music domain, it is because of the talented and dynamic music gurus who compose most of these songs for us. The two major composers we have are <strong>Mr. ANYE FRU AMSTRONG</strong> and <strong>Mr. TATA NDUMBE MUSONGE</strong></p?
				  <hr>
				  <p style="font-weight: bold; font-style: initial; font-size:20px;">The beauty of our music is due to the wonderful choral setup of the group. That is made possible, by dividing the group into the four musical parts which are:</p>
				  <hr>
                                 
				  <ul>
				  	<li>
				  		<h1 style="font-weight: bold; font-size: 20px; color:red;">SOPRANO</h1>
				  		<p style="font-weight: inherit; font-style: italic; font-size:20px;">It is referred to as the melody line in music, the other parts of music emanate from soprano. Soprano or first part requires sharp female voice to sing. CYF Molyko has the following <a href = "pgallerysop.php"><strong><button>soprano singers.</button></strong></a>
				  		</p>
				  	</li>
				    <li>
				  		<h1 style="font-weight: bold; font-size: 20px; color:red;">ALTO</h1>
				  		<p style="font-weight: inherit; font-style: italic; font-size:20px;">The second part in music, it blends and adds more quality to soprano. It requires deep female voice to sind this part. CYF Molyko has the following <a href = "pgalleryalt.php"><strong><button>alto singers.</button></strong></a></p>
				  	</li>
				  	<li>
				  		<h1 style="font-weight: bold; font-size: 20px; color:red;">TENOR</h1>
				  		<p style="font-weight: inherit; font-style: italic; font-size:18px;">The third part in music mostly occupied by males and brings out the beauty in music. It gives a certain beauty to music. It requires sharp male voice to sing this part. CYF Molyko has the following <a href = "pgalleryten.php"><strong><button>tenor singers.</button></strong></a></p>
				  	</li>
				  	<li>
				  		<h1 style="font-weight: bold; font-size: 20px; color:red;">BASS</h1>
				  		<p style="font-weight: inherit; font-style: italic; font-size:20px;">This is referred to as the fourth part in music and very much occupied by males and it modifies alto. It requires deep male voice to sing this part. CYF Molyko has the following <a href = "pgallerybass.php"><strong><button>bass singers.</button></strong></a></p>
				  	</li>
				  <hr>
			     <p style="font-weight: inherit; font-size:18px;">The <a href="commsc.php"><button>music committee</button></a> makes sure that the musical aspect of the group stays alive.</p>
				<hr>
				<h1 style="font-weight: bold; font-size: 20px; color:red;">WATCH VIDEOS</h1> 
				
					<ul> 
					   <li><strong>CLICK<span><a href="https://www.youtube.com/channel/UC0njobE6p880eKt0cBNL2ww" target="_blank"> <button>HERE</button></a> TO WHATCH VIDEOS.</span></strong>
					   </li>
					</ul>
                                        
                 <div class="col-lg-16">
		<h1 style="color: black; font-size: 20px; font-weight: bold;"><?php echo htmlspecialchars($lang['youtube']); ?></h1>
		<hr>
		<p>
			<iframe width="100%" height="500" src="https://www.youtube.com/embed/Zg_9Hl0L-n4" frameborder="0" allowfullscreen></iframe>
		</p>

		</div>
                                        
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