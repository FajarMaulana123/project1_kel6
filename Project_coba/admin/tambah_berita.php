<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<meta charset="UTF-8"> 

</head>
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
			<div class="col-md-8 col-md-offset-2">
				<p>
					<center>
						<h2>Tambah Berita</h2>
					</center>
				</p>
				<br>
				<form  method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita">
					</div>
					<div class="form-group">
						<textarea name="deskripsi_berita" class="form-control" rows="5" placeholder="Deskripsi Berita"></textarea>
					</div>
					<div class="form-group">
						<input type="file" name="image" class="form-control">
					</div>
					<button type="submit" class="btn btn-success pull-right" name="simpan">Simpan</button>
					<a href="view_berita.php" class="btn btn-danger pull-right" style="margin-right:1%;">Batal</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	include('config.php');

	
	if (isset($_POST['simpan'])) {
		$judul_berita = $_POST['judul_berita'];
		$deskripsi_berita = $_POST['deskripsi_berita'];
		$tanggal = date('Y-m-d H:i:s');
		$targetDir = "../img/";
		$fileName = basename($_FILES["image"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		$allowTypes = array('jpg','png','jpeg','gif');
		in_array($fileType,$allowTypes);
		move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
		if ($fileName == '') {
			echo "<script>alert('masukan file image')</script>";
		}
		if ($judul_berita == '') {
          echo "<script>alert('masukan judul berita')</script>";
          exit();
        }
        if ($deskripsi_berita == '') {
          echo "<script>alert('masukan deskripsi berita')</script>";
          exit();
        }
		$sql = "insert into berita (judul_berita,deskripsi_berita,img_berita,tanggal) values ('$judul_berita','$deskripsi_berita','$fileName','$tanggal')";
		$hasil = mysqli_query($conn, $sql);
		if ($hasil) {
			header('location:view_berita.php');
		}else{
			echo "error".$sql;
		}

	}
	

	
?>