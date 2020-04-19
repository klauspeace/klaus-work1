  

	<?php 
	 session_start();//session starts here  
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 16px;">SIGN IN</div>
				    <style>  
        .login-panel {  
            margin-top: 150px;  
      
    </style>  
      
    <body>  
     
	  <h3><a href="register.php"> <button>BACK TO SIGN UP</button></a></h3>
      
    <div class="container">  
        <div class="row">  
            <div class="col-md-4 col-md-offset-4">  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="login1.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                </div>  
      
      
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
      
                                <!-- Change this to a button or input when using this as a form -->  
                              <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                            </fieldset>  
                        </form>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
      
    </body>
      
    </html>  
      
    <?php  
      
    include("database/db_conection.php");  
      
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from users2 WHERE user_email='$user_email'AND user_pass='$user_pass'";  
      
        $run=mysqli_query($dbcon,$check_user);
      
        if(mysqli_num_rows($run))
        {  
            echo "<script>window.open('videos1.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
    ?>  
			</div>
		</div>
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



