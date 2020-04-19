  
 
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">ADMIN LOGIN</div>
				   <style>  
        .login-panel {  
            margin-top: 150px;  
		}
    </style>  
      
    <body>  
      
	  <h3><a href="login.php"> <button>BACK TO SIGN IN</button></a></h3>
    <div class="container">  
        <div class="row">  
            <div class="col-md-4 col-md-offset-4">  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="admin_login_newsletter.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                                </div>  
      
      
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
      
      
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
    /** 
     * Created by Klaus peace. 
     * User: Klaus Peace 
     * Date: 04/04/2018
     * Time: 8:37 PM 
     */  
    include("database/db_conection.php");  
      
    if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
    {  
        $admin_name=$_POST['admin_name'];  
        $admin_pass=$_POST['admin_pass'];  
      
        $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
      
        $run_query=mysqli_query($dbcon,$admin_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
      
			echo "<script>window.open('view_users3.php','_self')</script>";
        }  
        else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
      
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




