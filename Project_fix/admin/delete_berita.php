    <?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from berita WHERE id_berita='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('view_berita.php?deleted=berita has been deleted','_self')</script>";
    }  
      
    ?>  
