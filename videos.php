<?php 
  include_once("languages/lang.php");
  $table_page = explode ("/",$_SERVER['PHP_SELF']);
  $total_element = count($table_page);
  $page = $table_page[$total_element-1];
?>
<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<style type="text/css">
body,td,th {
	font-size: 16px;
	color: #F00;
}
</style>
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 28px; text-align: center;  background-color: #3c529d; color: white;">CYF MOLYKO VIDEOS AND MUSIC ALBUMS.</div>
		    <p style="font-size: 25px;"> CYF Molyko has three music albums with one being audio (Volume 1) and two being videos(Volumes two and three). These albums portrays diverse cultures in praising God. Some of these cultures come from the wertern, southwest, northwest, central regions of Cameroon as well as the western world.</p>
		    <hr>
		    <p style="font-size: 25px;">These video albums are themed <strong>HOUR OF VICTORY VOL. 1, HOUR OF VICYORY VOL.2, and LET'S LIFT OUR VOICES IN PRAISE</strong> for the first, second and third albums respectively.</p>
		    <hr>
		    <p style="text-transform: uppercase; font-size:25px;">The above music albums are sold for 500FCFA, 500FCFA and 1000FCFA for the one CD of VOL. 1, VOL. 2, and VOL. 3 respectively.</p>
		    <hr>
                    
                    <div class="vt_col_4  col-lg-4 col-sm-4" style="float: left;"><strong>VIDEO EDITOR</strong>
                <img alt="" src="assets/global_assets/images/4.jpg" class="img-responsive" style="max-width:100%; border-radius:10px; background-color:#3c529d; "/>
                </div> 
                <p style="font-size: 25px;">In order to achieve success in our video music albums, we benefited from the services of a skilled and professional video editor, <strong>Mr. Emmanuel Tambe A.K.A CAPO.</strong>You can meeting him on faceboo by clicking<a href="https://www.facebook.com/emmanuel.tambe.1"> <button>this link</button>.</a></p>
                    
		    <p style="font-size: 25px;"><a href="https://www.youtube.com/watch?v=N0Cj28K1sKc"><button>Click Here</button></a> to watch the INTRO of VOL. 3, LET'S LIFT OUR VOICES IN PRAISE.</p>
		    <hr>
		    <p style="font-size: 25px;">In order to purchase a CD or CD's of any of the above albums, you place your command by calling or emailing via the following contacts:
                    <br>
		    	<ul style="font-size:20px; font-style: italic; text=transform: uppercase">
		    		<li>Group President (Contact: 676410110; Email: michaelasafor@gmail.com)</li>
                                <hr>
		    		<li>Music Director 1 (Contact: 650730854)</li>
                                <hr>
		    		<li>Music Director 2 (Contact: 671875245)</li>
		    	</ul>
		    </p>
				
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