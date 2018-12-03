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
  
  <div class="jumbotron">
    <center>
      <h1>Welcome </h1>
    </center>
  </div>
  <?php
    include("config.php");
    $sql = "select * from berita order by id_berita desc";
    $query = mysqli_query($conn,$sql);
    while ($baris = mysqli_fetch_array($query)) {
      $berita_id = $baris[0];
  ?>
  <div>
    <img src="<?php echo 'img/'.$baris[3]; ?>">
    <h1><a href="berita.php?id=<?php echo $berita_id ?>"><?php echo $baris[1]; ?></a></h1>
    <p>Post by admin at <?php echo $baris[4]; ?></p>
    <p>
      <?php echo substr($baris[2], 0,50); ?>
    </p>
  </div>

  <?php
    }
  ?>
</body>
</html>



 