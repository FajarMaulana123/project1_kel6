<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?> 

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Berita | SIFOFO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="../tinymce/tinymce.js"></script>
    <script type="text/javascript">
		tinyMCE.init({
			selector:"#mytextarea"

		});
	</script>
</head>
<body>
    <?php
        include('../include/config.php');
        $sql = "select * from berita where id_berita = $_GET[id]";
        $hasil = mysqli_query($conn, $sql);
        $baris = mysqli_fetch_array($hasil);

    ?>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="view_users.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Users</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Berita</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="view_berita.php"><span class="mini-sub-pro">All Berita</span></a></li>
                                <li><a title="Add Library" href="tambah_berita.php"><span class="mini-sub-pro">Add Berita</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="view_forum.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Forum</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
  <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="admin_logout.php" role="button">
                                                        <span class="admin-name">Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="view_users.php" data-toggle="collapse" data-target="#Charts"> User </a></li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="view_berita.php">Berita <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="view_berita.php">All Berita</a></li>
                                                <li><a href="tambah_berita.php">Add Berita</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="view_forum.php" data-toggle="collapse" data-target="#Charts"> Forum </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                                
            <!-- Mobile Menu end -->
            <br><br><br>
           <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form action="search_berita.php" method="post" class="sr-input-func">
                                                <input type="text" name="cari" placeholder="Search..." class="search-int form-control">
                                                <a name="submit"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="view_berita.php">Berita /</a>
                                            </li>
                                            <li><span class="bread-blod">Edit Berita</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Add Berita</h4>
                            <div class="asset-inner">
                            <div class="col-md-12">
                                <form  method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
                                        <input type="hidden" name="id_berita" value="<?php echo $baris[0];?>">
										<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" value="<?php echo $baris[1];?>">
									</div>
									<div class="form-group">
										<textarea name="deskripsi_berita" id="mytextarea" class="form-control" rows="5" placeholder="Deskripsi Berita"><?php echo $baris[2]; ?></textarea>
									</div>
									<div class="form-group">
                                        <img src="<?php echo '../img/'.$baris[3]; ?>" width="50"><br>
										<input type="file" name="image" class="form-control">
									</div>
									<button type="submit" class="btn btn-success pull-right" name="simpan">Simpan</button>
									<a href="view_berita.php" class="btn btn-danger pull-right" style="margin-right:1%;">Batal</a>
								</form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php
	include('../include/config.php');
        $set = true;
        if (isset($_FILES['image'])) {
            $tipe_file  = $_FILES['image']['type'];
        $lokasi_file = $_FILES['image']['tmp_name'];
        $nama_file  = $_FILES['image']['name'];
        $save_file =move_uploaded_file($lokasi_file,"../img/$nama_file");
        }
        
        if(empty($lokasi_file)){
            isset($set);
        }else{
        //tentukan tipe file harus image 
        if ($tipe_file != "image/gif" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/jpg" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/png")
        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }else{
            $unlink=mysqli_query($conn, "select * from berita where id_berita='$_POST[id_berita]'");
            $CekLink=mysqli_fetch_array($unlink); 
            if(!empty($CekLink[img_berita])){
                unlink("../img/$CekLink[img_berita]");
            }
        isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
        chmod("../img/$nama_file", 0777);
        }
        else
        {
        echo "<script>alert('Upload image gagal !')</script>";
        $set =  false;
        }
        }
    if (isset($_POST['simpan']) && $set) {
        $id_berita = $_POST['id_berita'];
        $judul_berita = $_POST['judul_berita'];
        $deskripsi_berita = $_POST['deskripsi_berita'];
        $tanggal = date('Y-m-d H:i:s');
        if (empty($lokasi_file)) {
            mysqli_query($conn, "UPDATE berita SET judul_berita = '$judul_berita',deskripsi_berita = '$deskripsi_berita',tanggal = '$tanggal' WHERE id_berita = '$id_berita'");
        }else{
            mysqli_query($conn, "UPDATE berita SET judul_berita = '$judul_berita',deskripsi_berita = '$deskripsi_berita',img_berita = '$nama_file',tanggal = '$tanggal' WHERE id_berita = '$id_berita'");
        }

        // if ($hasil) {
            // header('Location : view_berita.php');
            print "<meta http-equiv=\"refresh\"content=\"1;URL=view_berita.php\">";
        // }else{
        //     echo "error ".$sql;
        // }
	}
?>