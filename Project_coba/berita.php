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
  <?php
    include("config.php");
    $sql = "select * from berita where id_berita = $_GET[id]";
    $query = mysqli_query($conn,$sql);
    $baris = mysqli_fetch_array($query);
  ?>
  <div>
    <h1><?php echo $baris[1]; ?></h1>
    <p>Post by admin at <?php echo $baris[4]; ?></p>
    <img src="<?php echo 'img/'.$baris[3]; ?>">
    <p><?php echo nl2br($baris[2]); ?></p>
    <p><a href="user.php">Kembali</a></p>
  </div>
</body>
</html>
