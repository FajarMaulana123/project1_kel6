<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?> 

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Users | SIFOFO</title>
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
</head>
<body>
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
                                <li><a title="All Beita" href="view_berita.php"><span class="mini-sub-pro">All Berita</span></a></li>
                                <li><a title="Add Berita" href="tambah_berita.php"><span class="mini-sub-pro">Add Berita</span></a></li>
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
                                                
            <!-- Mobile Menu end -->
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
            <br><br><br>
           <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form action="search_users.php" method="post" class="sr-input-func">
                                                <input type="text" name="cari" placeholder="Search..." class="search-int form-control">
                                                <a name="submit"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="view_users.php">View Users</a>
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
                            <h4>Users List</h4>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>NIM</th>
                                        <th>Gender</th>
                                        <th>Divisi</th>
                                        <th>Jurusan</th>
                                        <th>Angkatan</th>
                                        <th>Setting</th>
                                    </tr>
                                    <?php  
                                        include("../include/config.php");
                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        $no_of_records_per_page = 5;
                                        $offset = ($pageno-1) * $no_of_records_per_page;
                                        $total_pages_sql = "SELECT COUNT(*) FROM tbluser";
                                        $result = mysqli_query($conn,$total_pages_sql);
                                        $total_rows = mysqli_fetch_array($result)[0];
                                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                                        $sql = "SELECT * FROM tbluser LIMIT $offset, $no_of_records_per_page";
                                        $res_data = mysqli_query($conn,$sql);
                                        $no = 1;
                                        while($row = mysqli_fetch_array($res_data)){
                                            $user_id=$row[0];  
                                            $user_name=$row[1];  
                                            $user_email=$row[2];  
                                            $user_nim=$row[3];
                                            $user_gender=$row[5];
                                            $user_divisi=$row[7];
                                            $user_jurusan=$row[8];
                                            $user_angkatan=$row[9]; 
                                    ?>
                                    <tr>
                                        <td><?php echo $no++  ?></td>
                                        <td><?php echo $user_name;  ?></td>
                                        <td><?php echo $user_email;  ?></td>
                                        <td><?php echo $user_nim;  ?></td>
                                        <td><?php echo $user_gender;  ?></td>
                                        <td><?php echo $user_divisi;  ?></td>
                                        <td><?php echo $user_jurusan;  ?></td>
                                        <td><?php echo $user_angkatan;  ?></td>
                                        <td>
                                            <a href="delete_users.php?del=<?php echo $user_id ?>">
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?> 
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li><a href="?pageno=1">First</a></li>
                                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                    </li>
                                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                    </li>
                                    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                </ul>
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