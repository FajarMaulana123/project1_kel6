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
	<title>Edit</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<meta charset="UTF-8">
</head>
<body>
	<?php
		include('config.php');
		$sql = "select * from berita where id_berita = $_GET[id]";
		$hasil = mysqli_query($conn, $sql);
		$baris = mysqli_fetch_array($hasil);

	?>
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
						<h2>Edit Berita</h2>
					</center>
				</p>
				<br>
				<form method="post" action="">
					<div class="form-group">
						<input type="hidden" name="id_berita" value="<?php echo $baris[0];?>">
						<input type="text" class="form-control" name="judul_berita" value="<?php echo $baris[1];?>">
					</div>
					<div class="form-group">
						<textarea name="deskripsi_berita" class="form-control" rows="3"><?php echo $baris[2]; ?></textarea>
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
		$id_berita = $_POST['id_berita'];
		$judul_berita = $_POST['judul_berita'];
		$deskripsi_berita = $_POST['deskripsi_berita'];
		$tanggal = date('d-m-y h:i:s');

		$sql = "UPDATE berita SET judul_berita = '$judul_berita',deskripsi_berita = '$deskripsi_berita',tanggal = '$tanggal' WHERE id_berita = '$id_berita'";
		$hasil = mysqli_query($conn, $sql);
		if ($hasil) {
			header('location:view_berita.php');
		}else{
			echo "error ".$sql;
		}
	}

?>