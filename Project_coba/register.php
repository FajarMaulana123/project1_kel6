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
      <a href="#" class="navbar-brand">SIFOFO</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php">Sign Up</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>
  </nav>
  
  <div class="container"> 
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-success">  
          <div class="panel-heading">  
              <h3 class="panel-title">Registration</h3>  
          </div>  
          <div class="panel-body">  
              <form role="form" method="post" action="register.php">  
                <fieldset>  
                    <div class="form-group">  
                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus> 
                    </div> 
                    <div class="form-group">  
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                    </div>  
                    <div class="form-group">  
                        <input class="form-control" placeholder="NIM" name="nim" type="text" autofocus>  
                    </div>
                    <div class="form-group">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Male"> Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Female"> Female
                      </label>     
                    </div>
                    <div class="form-group">  
                        <input class="form-control" placeholder="Password" name="password" type="password">  
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="divisi" placeholder="Enter Divisi">
                            <option value="">Choose Divisi</option>
                            <option value="Divisi Inggris">Divisi Inggris</option>
                            <option value="Divisi Jepang">Divisi Jepang</option>
                            <option value="Divisi Prancis">Divisi Prancis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="jurusan" placeholder="Enter Jurusan">
                            <option value="">Choose Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Rekayasa Perangkat Lunak">Teknik Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata Udara</option>
                        </select>
                    </div> 
                    <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
                </fieldset>  
              </form>  
              <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
          </div>  
        </div>  
      </div>  
    </div>  
  </div> 

</body>  
</html> 

<?php  
      
    include("config.php");//make connection here  
    if(isset($_POST['register']))  
    {  
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $nim = $_POST['nim'];
        $gender = $_POST['gender'];
        $pwd = $_POST['password'];
        $divisi = $_POST['divisi'];
        $jurusan = $_POST['jurusan'];
        $angkatan = date('Y');

        if ($uname == '') {
          echo "<script>alert('masukan username')</script>";
          exit();
        }
        if ($email == '') {
          echo "<script>alert('masukan email')</script>";
          exit();
        }
        if ($nim == '') {
          echo "<script>alert('masukan nim')</script>";
          exit();
        }
        if ($pwd == '') {
          echo "<script>alert('masukan password')</script>";
          exit();
        }
        if ($gender == '') {
          echo "<script>alert('masukan gender')</script>";
          exit();
        }
        if ($divisi == '') {
          echo "<script>alert('masukan divisi')</script>";
          exit();
        }
        if ($jurusan == '') {
          echo "<script>alert('masukan jurusan')</script>";
          exit();
        }


        $check_email_query="select * from tbluser WHERE Email='$email'";  
        $run_query=mysqli_query($conn,$check_email_query);  
      
        if(mysqli_num_rows($run_query)>0){  
            echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
            exit();  
        }   
       $sql = "INSERT INTO tbluser (Username,Email,NIM,Gender,Password,Divisi,Jurusan,angkatan) VALUES ('$uname','$email','$nim','$gender','$pwd','$divisi','$jurusan','$angkatan')";  
        if(mysqli_query($conn,$sql)){  
            echo"<script>window.open('user.php','_self')</script>";  
        }  
    }  
?>  