<!--  <?php  
    // session_start();//session starts here  
      
 ?>  
      
 -->

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
            <a href="#" class="navbar-brand"> SIFOFO </a>
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
                        <h3 class="panel-title">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="login.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="E-mail" name="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">  
                                </div>  
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                            </fieldset>  
                        </form>
                        <center><a href="register.php">Regis here</a></center>
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  


</body>
</html>

<?php  
      
    include("config.php");  
      
    if(isset($_POST['login']))  
    {  

        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM tbluser WHERE Username='$email' OR Email='$email' AND Password='$pwd'";
        $result = mysqli_query($conn, $sql); 
              
        if(mysqli_num_rows($result) > 0)  
        {  
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id_user"];
                $email = $row["Email"];
                $user = $row["Username"];
                session_start();
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['user'] = $user;
            }
            header("Location: user.php");
            // echo "<script>window.open('user.php','_self')</script>";  
            // $_SESSION['email']=$email;
            // $_SESSION['']=$id;
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
?> 