   

	<?php 
	session_start();  
      
    if(!$_SESSION['email'])  
    {  
      
        header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
    }  
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 16px; background-color: #3c529d; color:black;">WELCOME   <?php  echo $_SESSION['email'];  ?> </div>
				<h2 style="text-transform: uppercase; font-size: 16px; font-style: italic;">You have successfully registered in this site.
				You can also login here always to watch videos, listen to audios, visit our library and secretariat and view recent photos.</h2>
				

			</div>
		</div>
				<h2><a href = "videos2.php"><button>CLICK HERE</button></a>  To watch and download VIDEOS.</h2>
                                <h2><a href = "library.php"><button>CLICK HERE</button></a>  To visit our LIBRARY AND SECRETARIAT.</h2>
                                <h2><a href = "pgalleryrecent.php"><button>CLICK HERE</button></a>  To see our RECENT PHOTOS.</h2>
                                
    
	            <h3><a href="login.php"><button>Logout</button></a> </h3> 
	</div>
	
</div>
</main>
<?php include 'footer.php';?>
</div>
 <script type="text/javascript" src="assets/bootstrap/archives/3.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/global_assets/themes/standard_2/js/vt_util_scripts_2.js"></script>
</body>
</html>
<p style="text-align: justify;">



