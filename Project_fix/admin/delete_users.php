    <?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from tbluser WHERE id_user='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
    }  
      
    ?>  
