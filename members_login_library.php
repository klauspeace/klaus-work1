  
 
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
	<div class="vt_col_4  col-lg-12 col-sm-12">
		<div class="row">
		  <div class="col-md-29" style="padding-bottom: 25px; text-align: justify;">
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">MEMBER LOGIN (Login to read and download our books)</div>
				   <style>  
        .login-panel {  
            margin-top: 150px;  
		}
    </style>  
      
    <body>  
      
	  
    <div class="container">  
        <div class="row">  
            <div class="col-md-4 col-md-offset-4">  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading" style="background-color:#3c5295;">  
                        <h3 class="panel-title" style="background-color:#3c5295; color:white;">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="members_login_library.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="Name" name="member_name" type="text" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="member_pass" type="password" value="">  
                                </div>  
      
      
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="members_login_library" >  
      
      
                            </fieldset>  
                        </form>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
     <p><strong>BACK TO</strong> <a href="index.php"><button>HOME</button></a> 
    </body>  
      
    </html>  
      
    <?php  
    /** 
     * Created by Klaus peace. 
     * User: Klaus Peace 
     * Date: 04/04/2018
     * Time: 8:37 PM 
     */  
    include("database\db_conection.php");  
      
    if(isset($_POST['members_login_library']))//this will tell us what to do if some data has been post through form with button.  
    {  
        $member_name=$_POST['member_name'];  
        $member_pass=$_POST['member_pass'];  
      
        $member_query="select * from library where member_name='$member_name' AND member_pass='$member_pass'";  
      
        $run_query=mysqli_query($dbcon,$member_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
      
			echo "<script>window.open('library.php','_self')</script>";
             $_SESSION['member_name']=$member_name;//here session is used and value of &member_name store in $_SESSION. 
        }  
        else {echo"<script>alert('Member Details are incorrect..!')</script>";}  
      
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




