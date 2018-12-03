<!-- <?php  
    // session_start();  
      
    // if(!$_SESSION['email'])  
    // {  
      
    //     header("Location: login.php");
    // }  
      
?>  -->

<?php
    include ('config.php');
    session_start();
    if(!$_SESSION['email'])  
    {  
      
        header("Location: login.php");
    } 

    $user =$_SESSION['user'];
    $email = $_SESSION['email'];

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM tbluser WHERE id_user='$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $id_user = $row["id_user"];
        $uname = $row["Username"];
        $email = $row["Email"];
        $nim = $row["NIM"];
        $gender = $row["Gender"];
        $divisi = $row["Divisi"];
        $jurusan = $row["Jurusan"];
        $angkatan = $row["Angkatan"];
      }
    }
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
  <div>
        <a href="edit_profile.php?id=<?php echo $id_user ?>">Edit Profile</a>
  </div>
  <div id="account">
  <div class="col-lg-6 col-sm-6">
      <div class="card hovercard">
          <div class="card-background">
              <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
              <!-- http://lorempixel.com/850/280/people/9/ -->
          </div>
          <div class="useravatar">
              <img alt="" src="img/user.svg">
          </div>
          <div class="card-info"> <span class="card-title"><?php echo $uname ?></span>

          </div>
      </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
          <div class="btn-group" role="group">
              <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <div class="hidden-xs">Profile</div>
              </button>
          </div>  
      </div>
      <div class="well">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tab1">
            <table class="table">
              <tr>
                <td>User Name</td>
                <td><?php echo $uname; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><?php echo $nim; ?></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
              </tr>
              <tr>
                <td>Divisi</td>
                <td><?php echo $divisi; ?></td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td><?php echo $jurusan; ?></td>
              </tr>
              <tr>
                <td>Angkatan</td>
                <td><?php echo $angkatan; ?></td>
              </tr>
            </table>
          </div> 
        </div>
      </div>
  </div>
  </div> 

</body>
</html>   

