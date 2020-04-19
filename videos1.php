<?php 
	session_start();  
      
    if(!$_SESSION['email'])  
    {  
      
        header("Location: login1.php");//redirect to login page to secure the welcome page without login access.  
    }  
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">CYF MOLYKO VIDEO GALLERY.</div>
			<div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; background-color: white; color: purple;">WELCOME <?php   echo $_SESSION['email'];   ?>  </div>
			
	
			<p style="text-align: justify;">We keep both new and old videos in our archives. You can also see more photos on <strong><a title="Facebook" href="https://www.facebook.com/klaus.peace.7" target="_blank"><button>FACEBOOK</button><a/></strong> and videos on <strong><a title="Youtube" href="https://www.youtube.com/channel/UC0njobE6p880eKt0cBNL2ww" target="_blank"><button>YOUTUBE</button></a></strong> Just click the links.</p>
			<p>Download a sample video by clicking <strong><span style="text-decoration: underline;"><a href="assets/videos/handel.mp4" target="_blank"><button>this link</button></a></span></p>.
				
				
		  </div>
		  <h3><a href="logout1.php"><button>Logout</button></a> </h3>
		</div>
	</div>
	<?php include 'droit-interne.php';?>	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>