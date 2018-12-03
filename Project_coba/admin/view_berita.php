<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?> 

<html>  
<head lang="en">  
    <meta charset="UTF-8"> 
    <title>View berita</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">       
</head>  
    <style>   
        .table {  
            margin-top: 30px;  
      
        }  
    </style>  
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"> SIFOFO </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
    </nav>
    <div>
        <a href="view_berita.php">Berita</a>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-11 col-md-offset-1">  
    <div class="table-scrol">  
        <h1 align="center">All the berita</h1>

        <a href="tambah_berita.php" class="btn btn-primary"> Tambah Berita </a> 
    <div class="table-responsive">
            <form action="search_berita.php" method="post">
                <div class="form-group" align="right">
                    <input  type="text" name="cari" placeholder="search ...">
                    <input type="submit" name="submit" value="cari"> 
                </div>
            </form>
        <table class="table table-bordered table-hover table-striped" >  
            <thead>  
            <tr>  
                <th>No</th>  
                <th>Judul Berita</th>  
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Tanggal & Waktu</th>
                <th>Opsi</th>  
            </tr>  
            </thead>  
            <?php  
            include("config.php");
            $view_berita_query="select * from berita";
            $result=mysqli_query($conn,$view_berita_query);
            $no = 1;
            while($row=mysqli_fetch_array($result)) 
            {    
                $berita_id =$row[0];
                $judul_berita=$row[1];  
                $deskripsi_berita=$row[2];
                $image= '../img/'.$row[3];
                $tanggal_berita=$row[4]; 
            ?>  

            <tr>
                <td><?php echo $no++  ?></td>  
                <td><?php echo $judul_berita;  ?></td>
                <td><?php echo substr($deskripsi_berita, 0,50);  ?></td>
                <td><img src="<?php echo $image;?>"></td>
                <td><?php echo $tanggal_berita;  ?></td>
                <td><a href="edit_berita.php?id=<?php echo $berita_id ?>"><button class="btn btn-success">Edit</button></a>    
                <a href="delete_berita.php?del=<?php echo $berita_id ?>"><button class="btn btn-danger">Delete</button></a></td>  
            </tr>  
            <?php } ?>  
        </table>  
        </div>  
    </div>
    </div>
    </div>
    </div>       
</body>  
</html>  
