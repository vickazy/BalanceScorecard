<?php  
//membuat koneksi ke database  
include "koneksi.php"; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balance Score Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li ><a href="karyawan_home.php">Home</a></li>
        <li class="active"><a href="karyawan_viewbsc.php">Balance Score Card</a></li>
        <li><a href="karyawan_viewproker.php">Program Kerja</a></li>
        <li><a href="karyawan_viewlpj.php">Laporan Pertanggung Jawaban</a></li>
     </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">       
		<img src="images/cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		<br></br>
     	<p><button type="button" class="btn btn-primary btn-block disabled ">View BSC</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
            <h2 class="text-center">Balance Score Card</h2>
            <div class="box-body table-responsive">
			</div><!-- /.box-body -->
			
			<table class="table">
                    <thead class="thead-inverse">
                        <?php
						include "koneksi.php";
						$sql = mysqli_query($konek_db,"SELECT A.*, A.ID_TUJUAN, (SELECT COUNT(PERSPEKTIF) FROM TUJUAN WHERE PERSPEKTIF=A.PERSPEKTIF) AS jumlah FROM TUJUAN A ORDER BY A.PERSPEKTIF");
						$no = 1;
						$jum = 1;
						echo '<tr style="text-align:center"><th>No</th><th>Perspektif</th><th>Tujuan Organisasi</th><th>Indikator Tujuan</th></tr>';
						while($row = mysqli_fetch_array($sql)) {   
							echo '<tr>';
							if($jum <= 1) {
							echo '<td text-align="center" rowspan="'.$row['jumlah'].'">'.$no.'</td>';
							echo '<td rowspan="'.$row['jumlah'].'">'.ucwords($row['PERSPEKTIF']).'</td>';
							$jum = $row['jumlah'];       
							$no++;                     
							} else {
							$jum = $jum - 1;
							}
							echo "<td>".ucwords($row['TUJUAN_ORGANISASI'])."</td>";
							echo "<td>";
							$id_tujuan=$row['ID_TUJUAN'];
							$query = mysqli_query($konek_db,"SELECT NAMA_INDIKATOR_TUJUAN FROM INDIKATOR_TUJUAN WHERE ID_TUJUAN='$id_tujuan'");
								while ($data = mysqli_fetch_array($query)){
									echo ucwords($data['NAMA_INDIKATOR_TUJUAN'])."</a>";
									echo "</br>";
								}
							echo "</td>";
							echo '</tr>';              
							}
							?>
                    </thead>  
					</table>
        </div>	
        <script src="js/jquery-1.11.1.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>	
        <script src="js/dataTables.bootstrap.js"></script>	
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
    </div>
</div>

<footer class="container-fluid text-center">
  <p>Sistem Informasi Universitas Airlangga</p>
</footer>

</body>
</html>