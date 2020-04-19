  
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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 22px; text-align: center;  background-color: #3c529d; color: white;">SIGN UP</div>
				<style>  
        .login-panel {  
            margin-top: 150px;  
        }
    </style>  
	
    <body> 
	
	<h3>Login As <a href="admin_login1.php"><button>Administrator</button></a></h3>
      
    <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
        <div class="row"><!-- row class is used for grid system in Bootstrap-->  
            <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Enter Your Information</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="register.php">  
                            <fieldset>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                                </div>  
      
                                <div class="form-group">  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                </div>  
      
      
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="signUp" name="signUp" >  
      
                            </fieldset>  
                        </form>  
                        <center><b>Already Sign Up?</b> <br></b><a href="login1.php"><button>Login here</button></a></center><!--for centered text-->  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
    </body>  
      
    </html>  
      
    <?php  
      
    include("database\db_conection.php");//make connection here  
    if(isset($_POST['signUp']))  
    {  
        $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['pass'];//same  
        $user_email=$_POST['email'];//same  
      
      
        if($user_name=='')  
        {  
            //javascript use for input checking  
            echo"<script>alert('Please enter the name')</script>";  
    exit();//this use if first is not work then other will not show  
        }  
      
        if($user_pass=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
    //here query check weather if user already registered so can't register again.  
        $check_email_query="select * from users3 WHERE user_email='$user_email'";  
        $run_query=mysqli_query($dbcon,$check_email_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
    echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
    //insert the user into the database.  
        $insert_user="insert into users3 (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
        if(mysqli_query($dbcon,$insert_user))  
        {  
            echo"<script>window.open('videos1.php','_self')</script>";  
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




