<!DOCTYPE html>
<html>

<head>

    <title>Kriptografi</title>
    
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="assets/css/uts_icon.css" rel="stylesheet" type="text/css">
    <link href="assets/css/uts_theme.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />


<!-- Something -->

     




</head>

<body class="login-page" style="background: #0992c3;">

<!-- START Content -->
    <h4 style="color: white">APLIKASI DATA ENKRIPSI STANDAR</h4>
 <div class="card m-t-60">
 <div class="body">
    
<?php
include('koneksi.php');
$query=mysql_query("SELECT * FROM data") or die(mysql_error());
$no=1;

while ($tampil=mysql_fetch_array($query)or die(mysql_error())) {
    $nama=$tampil['Data'];
    $deskripsi=base64_decode($nama);
    echo $no."."."Hasil deskripsi : ".$deskripsi."<br />";
    $no++;
}
?>
 </div>
 </div>
</form>
            




<!-- END Content -->

    <!-- Cordova JS -->
    <script type="text/javascript" src="cordova.js"></script>

    <!-- CRUD API -->
    <script type="text/javascript" src="assets/js/crud_apiQuery.js"></script>
    <script type="text/javascript" src="assets/js/crud_api.js"></script>


    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
</body>

</html>