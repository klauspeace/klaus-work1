    <?php  
    /** 
     * Created by Klaus Peace. 
     * User: Klaus peace 
     * Date: 04/04/2018 
     * Time: 6:05 PM 
     */  
      
    session_start();//session is a way to store information (in variables) to be used across multiple pages.  
    session_destroy();  
    header("Location: webmaster.php");//use for the redirection to some page  
    ?>  
