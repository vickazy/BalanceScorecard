<?php include "koneksi.php"?>
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
        <li><a href="karyawan_viewbsc.php">Balance Score Card</a></li>
        <li class="active"><a href="karyawan_viewproker.php">Program Kerja</a></li>
        <li><a href="karyawan_viewlpj.php"> Laporan Pertanggung Jawaban</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
      </li>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
		<img src="images/cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		<br></br>
    	<p><a href="karyawan_viewproker.php"><button type="button" class="btn btn-primary btn-block active">View Proker</button></a></p>
	 	<p><button type="button" class="btn btn-primary btn-block disabled">Detail Proker</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
            <h2 class="text-center">Detail Program Kerja</h2>
       <form id="form2" name="form2" method="post" action="karyawan_inputdetailproker.php?id=<?php echo $_SESSION['id']?>">
	  <div class="form-group">
      		<label class="control-label col-sm-2">ID Proker :</label>
      <div class="col-sm-10">
       <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<input type='text'  class='form-control' id='idproker' disabled value='".$data['ID_PROKER']."'><br>";
			}
				?>    	
      </div>
	  </div>
      <div class="form-group">
      		<label class="control-label col-sm-2">NIP :</label>
      <div class="col-sm-10">
       <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<input type='text'  class='form-control' id='nip' name='nip' disabled value='".$data['NIP']."'><br>";
			}
				?>    	
      </div>
	  </div>
     <div class="form-group">
      		<label class="control-label col-sm-2">Nama Proker :</label>
      <div class="col-sm-10">
       <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<input type='text'  class='form-control' id='namaproker' name='namaproker' disabled value='".$data['NAMA_PROKER']."'><br>";
			}
				?>    	
      </div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2">Pendahuluan :</label>
     	<div class="col-sm-10">
         <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<textarea class='form-control' id='pendahuluan' name='pendahuluan' >".$data['PENDAHULUAN']."</textarea><br>";
			}
				?> 
      </div>	
    </div>
      <div class="form-group">
      	<label class="control-label col-sm-2">Latar Belakang :</label>
     	<div class="col-sm-10">
         <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<textarea class='form-control' id='latarbelakang' name='latarbelakang' >".$data['LATAR_BELAKANG']."</textarea><br>";
			}
				?> 
      </div>	
    </div>
      <div class="form-group">
      	<label class="control-label col-sm-2">Tujuan :</label>
     	<div class="col-sm-10">
        <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<textarea class='form-control' id='tujuan' name='tujuan' >".$data['TUJUAN']."</textarea><br>";
			}
				?> 
      </div>	
    </div>
      <div class="form-group">
      	<label class="control-label col-sm-2">Deskripsi :</label>
     	<div class="col-sm-10">
         <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<textarea class='form-control' id='deskripsi' name='deskripsi' >".$data['DESKRIPSI']."</textarea><br>";
			}
				?> 
      </div>	
    </div>
    
    <div class="form-group">
      	<label class="control-label col-sm-2">Mekanisme dan Rancangan :</label>
     	<div class="col-sm-10">
         <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<textarea class='form-control' id='mekanisme_rancangan' name='mekanisme_rancangan' >".$data['MEKANISME_DAN_RANCANGAN']."</textarea><br>";
			}
				?> 
      </div>	
    </div>
    

     <div class="form-group">
      		<label class="control-label col-sm-2">Anggaran :</label>
      <div class="col-sm-10">
         <?php
			$queri="Select * From proker where ID_PROKER=".$_GET['id'];  //menampikan SEMUA data dari tabel siswa  
	  		$hasil=MySQL_query ($queri);
			
			while ($data = mysql_fetch_array ($hasil)){
				echo "<input type='text'  class='form-control' id='anggaran' name='anggaran' value='".$data['ANGGARAN_DANA']."'><br>";
			}
				?>    
      </div>
    </div>
    
     <div class="col-sm-12">
    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="float:right;"/><br><br><br><br><br>  
	</div>
	<form/>
    <?php
if(isset($_POST['simpan'])){
mysql_query("UPDATE `proker` SET `ANGGARAN_DANA`='".$_POST['anggaran']."',`LATAR_BELAKANG`='".$_POST['latarbelakang']."',`TUJUAN`='".$_POST['tujuan']."',`MEKANISME_DAN_RANCANGAN`='".$_POST['mekanisme_rancangan']."',`PENDAHULUAN`='".$_POST['pendahuluan']."' WHERE ID_PROKER =".$_GET['id']);
}
?>
			</div> 
		</div>
	</div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
      <p class="navbar-text center-block">&#169; Sistem Informasi Universitas Airlangga</p>
      </div>
 </div>

</body>
</html>
