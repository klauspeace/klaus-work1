   

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
		    <div class="alert alert-info" role="alert" style="font-weight: bold; font-size: 16px;">ALL CURRENT SUBSCRIBERS</div>
			
				
			</div>
			<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
      
      
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
      
            <tr>  
      
                <th>User Id</th>  
                <th>User Name</th>  
				<th>User Pass</th>
                <th>User E-mail</th>  
                <th>Delete User</th>  
            </tr>  
            </thead>  
      
            <?php  
            include("database/db_conection.php");  
            $view_users_query="select * from users2";//select query for viewing users.  
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
      
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $user_id=$row[0];  
                $user_name=$row[1]; 
				$user_pass=$row[2];				
                $user_email=$row[3];  
                  
      
      
			
            ?>  
      
            <tr>  
				<!--here showing results in the table -->  
                <td><?php echo $user_id;  ?></td>  
                <td><?php echo $user_name;  ?></td>  
				<td><?php echo $user_pass;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                
                <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
            </tr>  
      
            <?php } ?>  
      
        </table>  
            </div> 
				<h3><a href="logout.php"><button>Logout</button></a></h3
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



