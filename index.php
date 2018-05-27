<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Info Film</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layoutindex.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Movies</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Comics</a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <br>
        <br>
        <br><br><br><br>
        <!--========== END HEADER ==========-->
      	<h3>Data Account</h3>
      	<table border="1" class="table">
      		<tr>
      			<th>No</th>
      			<th>Nama</th>
      			<th>Username</th>
      			<th>Password</th>
      			<th>Email</th>
      			<th>option</th>
      		</tr>
      		<?php
      		include "koneksi.php";
      		$query_mysql = mysqli_query($host,"SELECT * FROM data")or die(mysql_error());
      		$nomor = 1;
      		while($theshore = mysqli_fetch_array($query_mysql)){
      			?>
      			<tr>
      				<td><?php echo $nomor++; ?></td>
      				<td><?php echo $theshore['nama']; ?></td>
      				<td><?php echo $theshore['username']; ?></td>
      				<td><?php echo $theshore['password']; ?></td>
      				<td><?php echo $theshore['email']; ?></td>			<td>
      				<a class="edit" href="edit.php?id=<?php echo $theshore['id']; ?>">Edit</a> |
      				<a class="hapus" href="proses_hapus.php?id=<?php echo $theshore['id']; ?>">Hapus</a>
      			</td>
      		</tr>
      		<?php } ?>
      	</table>
        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>



<style>

*{
  background-color: #fff;
}

h3{
  font-family: monospace;
	color: #000000;
	width: 300px;
	text-align: center;
	margin: 22px auto 0;
	border-radius: 5px;
	min-height: 40px;
	overflow: hidden;
}
.table {
    margin: auto;
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table, th, td {
    padding: 8px 20px;
    text-align: center;
}

.table tr:hover {
    background-color: #f5f5f5;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>
