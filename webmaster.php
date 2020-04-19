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
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">GET IN TOUCH WITH OUR WEBMASTER</div>
			  
				<p>
                                LOGIN AS ADMINISTRATOR TO VIEW <hr>
                                
                                
                                <a href="admin_login_newsletter.php">SUBSCRIBERS AND CYF MOLYKO MEMBERS</a> 
                                <hr> <a href="admin_login1.php">VIDEO VIEWERS</a> <hr> 
                                <a href="admin_login.php">RECOMMENDATIONS</a> <hr>
                                <a href="admin_login_registered.php">REGISTRED MEMBERS</a>
                                </p>
				
               <p>&nbsp;</p>

              <p>
              	<strong>GET IN TOUCH WITH WEBMASTER VIA</strong>
              	<ul style="color:purple; font-style: italic;">
	              <li><strong>CONTACT: +237676340570/+237677946549</strong></li>
	              <hr>
             
	              <li><strong>WHATSAPP: +23763682314</strong></li>
	              <hr>
             
	              <li><strong>EMAIL:  <a href="https://www.gmail.com"><button>tanjohklaus@gmail.com</button></a></strong></li>
	              <hr>
	          
	              <li><strong>WEBSITE: <a href="https://www.klauspeace.com"><button>www.klauspeace.com</button></a></strong></li>
	            </ul>
             
	              
              </p>
			  <hr>
			  <hr>
			  <p>
			  	<strong>ALSO MEET WEBMASTER ON</strong>
	              <ul>
					<li><a title="Facebook" href="https://www.facebook.com/klaus.peace.7" target="_blank"><button>Facebook</button></a></li>
					
					<li><a title="Twitter" href="https://twitter.com/TanjohK" target="_blank"><button>Twitter</button></a></li>
					<li><a title="Youtube" href="https://www.youtube.com/channel/UC6NJR5aUdg89yciez203A6A/featured?disable_polymer=1" target="_blank"><button>Youtube</button></a></li>
				</ul>
              </p>
              <hr>
              <p>&nbsp;</p>
			  <p>
			    WHATCH <a href="https://youtu.be/BFrBr8oUVXU"><button>THIS</button></a>
			  </p>
			  <h2 style="color:Purple;">MOTIVATIONAL VIDEOS</h2>
			  <hr>
			  <ul>
			  	<li><a href="https://youtu.be/7XXbyvdLgVM"><button>Focus on Yourself</button></a></li>
			  	<li><a href="https://youtu.be/6rSlbv8hDew"><button>Set Yourmind to Win</button></a></li>
			  	<li><a href="https://youtu.be/GIoO9zzHjjw"><button>Morning Motivation</button></a></li>
			  	<li><a href="https://youtu.be/6F_L5TfPKO0"><button>Follow Your Dreams</button></a></li>
			  	<li><a href="https://youtu.be/AhTMpxred2Y"><button>Start Your Day Right</button></a></li>
			  </ul>
			  <p>&nbsp;</p>
              
          </div>
		</div>
        </div>
	<?php include 'sidebar.php'; ?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>