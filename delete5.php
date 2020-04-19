 <?php  
    /** 
     * Created by PhpStorm. 
     * User: Klaus Peace 
     * Date: 04/04/2018
     * Time: 8:39 PM 
     */  
    include("database\db_conection.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from library WHERE id='$delete_id'";//delete query  
    $run=mysqli_query($dbcon,$delete_query);  
    if($run)  
    {  
    //javascript function to open in the same window   
        echo "<script>window.open('view_members.php?deleted=user has been deleted','_self')</script>";  
    }  
      
    ?>  