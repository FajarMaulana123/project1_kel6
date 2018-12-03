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
  <p><a href="forum.php">Kembali</a></p>
  <?php
    include("config.php");
    $sql = "select * from forum_topic where id_topic = $_GET[id]";
    $query = mysqli_query($conn,$sql);
    $baris = mysqli_fetch_array($query);
  ?>
  <div>
    <p><?php echo $baris[2]; ?></p>
    <h1><?php echo $baris[1]; ?></h1>
    <p><?php echo nl2br($baris[3]); ?></p>
    <br>
    <form  method="post" action="">
          <div class="form-group col-md-6">
            <input type="text" name="komentar" class="form-control" placeholder="Komentar">
          </div>
          <button type="submit" class="btn btn-primary" name="simpan">Komentar</button>
    </form>
    <?php
      include('config.php');
      if (isset($_POST['simpan'])) {
          $id_topic = $baris[0];
          $deskripsi_komentar = $_POST['komentar'];
          $sql = "insert into forum_komentar (id_topic, Username,deskripsi_komentar,waktu_komentar) value ('$id_topic','$user','$deskripsi_komentar',CURRENT_TIMESTAMP)";
          $hasil = mysqli_query($conn, $sql);
          if ($hasil) {
            header("Location:isi_forum.php?id=".$id_topic);
          }else{
            echo "error ".$sql;
          }
      }
    ?>

    <br>
<?php
    include('config.php');
    $id_topic = $baris[0];
    $sql = "select * from forum_komentar where id_topic ='$id_topic' order by id_komentar desc";
    $query = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($query)) {
       $id_komentar = $row[0];
  ?>
  <p><?php echo $row[2].' | '.$row[4]; ?></p>
  <p><?php echo $row[3]; ?> </p>
  <?php } ?>
  </div>
</body>
</html>
