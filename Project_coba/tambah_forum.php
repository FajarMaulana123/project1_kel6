<?php  
    session_start();  
      
    if(!$_SESSION['email'])  
    {  
      
        header("Location: login.php");
    }

    $user = $_SESSION['user'];
      
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/account.css">
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>  
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="home.php" class="navbar-brand">SIFOFO</a>
      </div>
      <div>
        <ul>
          <li><a href="forum.php"> Forum</a></li>
        </ul>
      </div>
      <div class="dropdown navbar-right" id="right">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $user;?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="account.php">Account</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <p>
          <center>
            <h2>Tambah Forum</h2>
          </center>
        </p>
        <br>
        <form  method="post" action="">
          <div class="form-group">
            <input type="text" name="judul_topic" class="form-control" placeholder="Judul Forum">
          </div>
          <div class="form-group">
            <textarea name="deskripsi_topic" class="form-control" rows="5" placeholder="Deskripsi Forum"></textarea>
          </div>
          <button type="submit" class="btn btn-success pull-right" name="simpan">Simpan</button>
          <a href="forum.php" class="btn btn-danger pull-right" style="margin-right:1%;">Batal</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
  include('config.php');

  
  if (isset($_POST['simpan'])) {
    $judul_topic = $_POST['judul_topic'];
    $deskripsi_topic = $_POST['deskripsi_topic'];
    // $waktu_topic = date('Y-m-d H:i:s');
    if ($judul_topic == '') {
          echo "<script>alert('masukan judul topic')</script>";
          exit();
        }
        if ($deskripsi_topic == '') {
          echo "<script>alert('masukan deskripsi topic')</script>";
          exit();
        }
    $sql = "insert into forum_topic (judul_topic,Username,deskripsi_topic,waktu_topic) values ('$judul_topic','$user','$deskripsi_topic',CURRENT_TIMESTAMP)";
    $hasil = mysqli_query($conn, $sql);
    if ($hasil) {
      header('location:forum.php');
    }else{
      echo "error".$sql;
    }

  }
  

  
?>
