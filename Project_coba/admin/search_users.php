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
    <title>View Users</title>
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
    <div class="container">
        <div class="row">
            <a href="view_berita.php">Berita</a>
        </div>
    <div class="row">
    <div class="col-md-11 col-md-offset-1">  
    <div class="table-scrol">  
        <h1 align="center">All the Users</h1> 
    <div class="table-responsive">
        <form action="" method="post">
            <div class="form-group" align="right">
                <input  type="text" name="cari" placeholder="search ...">
                <input type="submit" name="submit" value="cari">  
            </div>
        </form> 
        <table class="table table-bordered table-hover table-striped" >  
            <thead>  
            <tr>  
      
                <th>No</th>  
                <th>Name</th>  
                <th>E-mail</th>
                <th>NIM</th>
                <th>Gender</th>  
                <th>Divisi</th> 
                <th>Jurusan</th> 
                <th>Angkatan</th>
                <th>Opsi</th>  
            </tr>  
            </thead>  

            <?php  
                include("config.php");
                $cari = $_POST['cari'];
                $sql = "select * from tbluser where Username like '%".$cari."%'";
                $hasil = mysqli_query($conn,$sql);
                $no = 1;
                while ($row = mysqli_fetch_array($hasil)) {
                    $user_id=$row[0];  
                    $user_name=$row[1];  
                    $user_email=$row[2];  
                    $user_nim=$row[3];
                    $user_gender=$row[4];
                    $user_divisi=$row[6];
                    $user_jurusan=$row[7];
                    $user_angkatan=$row[8];    
                    
            ?>
                <tr>
                    <td><?php echo $no++  ?></td>  
                    <td><?php echo $user_name;  ?></td>
                    <td><?php echo $user_email;  ?></td>
                    <td><?php echo $user_nim;  ?></td> 
                    <td><?php echo $user_gender;  ?></td>
                    <td><?php echo $user_divisi;  ?></td>
                    <td><?php echo $user_jurusan;  ?></td> 
                    <td><?php echo $user_angkatan;  ?></td>    
                    <td><a href="delete_users.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>  
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