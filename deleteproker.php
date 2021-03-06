<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balance Score Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="viewbsc.php">Balance Score Card</a></li>
        <li class="active"><a href="viewproker.php">Program Kerja</a></li>
        <li><a href="viewlpj.php"> Laporan Pertanggung Jawaban</a></li>
		<li><a href="monitoring.php">Monitoring</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">             
		<img src="images/cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		<br></br>
    	<p><a href="viewproker.php"><button type="button" class="btn btn-primary btn-block active">View Proker</button></p>
	 	<p><a href="inputproker.php"><button type="button" class="btn btn-primary btn-block active">Input Proker</button></a></p>
	 	<p><button type="button" class="btn btn-primary btn-block disabled">Delete Proker</button></a></p>
	</div>
    <div class="col-sm-8 text-left"> 
		<h2 class="text-center">Delete Proker</h2>
			<?php
			include 'koneksi.php';
        	?>
        	<form method="post" action="deleteproker.php">
            <p>&nbsp;</p>
            <p>
              <select id="tujuan" name="tujuan">
                <option value="">--Pilih Tujuan--</option>
                <?php
                $tujuan = mysql_query("SELECT tujuan_organisasi, id_tujuan FROM tujuan ORDER BY tujuan_organisasi");
                while ($t = mysql_fetch_array($tujuan)) {
                echo "<option value=\"$t[id_tujuan]\">$t[tujuan_organisasi]</option>\n"; 
                }
                ?>
              </select>
              
              
              <select id="proker" name="proker">
                <option value="">--Pilih Proker--</option>
              </select>
              </p>
            <p>
              <input name="hapus" type="submit" id="hapus" value="Hapus" />
            </p>
      </form>
		
		
        <script src="jquery-1.10.2.min.js"></script>
        <script src="jquery.chained.min.js"></script>
        <script>
            $("#proker").chained("#tujuan");
        </script>
		<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){

  $("#tujuan").change(function(){
    var tujuan = $("#tujuan").val();
    $.ajax({
        url: "tampilproker.php",
        data: "tujuan="+tujuan,
        cache: false,
        success: function(msg){
		
            $("#proker").html(msg);
        }
    });
  });
});

</script>
		

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Sistem Informasi Universitas Airlangga</p>
</footer>

</body>
</html>