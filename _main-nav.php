<!--NAVIGASI MENU UTAMA-->

<div class="leftmenu">
  <ul class="nav nav-tabs nav-stacked">
    <li class="active"><a href="dashboard.php"><span class="icon-home"></span> Home</a></li>
    <li class="active"><a href="?cat=akademik&page=about"><span class="icon-align-justify"></span> About</a></li>
    <!--MENU GUDANG-->
    <?php
	if($_SESSION['login_hash']=="akademik")
	{
	?>
    <li class="dropdown"><a href="#"><span class="icon-th-list"></span> Data Master</a>
      <ul>
       <li><a href="?cat=akademik&page=mahasiswa">Data Nasabah</a></li>
       <li><a href="?cat=akademik&page=prediksi">Prediksi</a></li>
       
      
      </ul>
    </li>   
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Konfigurasi</a>
      <ul>
        <li><a href="?cat=web&page=chgpwd">Ubah Password</a></li>
      </ul>
    </li>           
    <li class="dropdown"><a href="#"><span class="icon-book"></span> Laporan</a>
      <ul>
        <li><a href="?cat=akademik&page=laporannasabah">Laporan Pemberian Pinjaman Nasabah</a></li>
      </ul>
    </li>   
	<li class="active"><a href="?cat=akademik&page=kontak"><span class="icon-align-justify"></span> Kontak</a></li>     
   <!--MENU PIMPINAN-->
        <?php
	}elseif($_SESSION['login_hash']=="pimpinan"){
	?>    
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Laporan</a>
      <ul>       
        <li><a href="?cat=pimpinan&page=eoq">Fixed Order Interval</a></li> 
        <li><a href="?cat=pimpinan&page=monthreporting">Laporan Bulanan</a></li>
              
      </ul>
    </li>
     <!--MENU ADMIN-->
        <?php
	}elseif($_SESSION['login_hash']=="administrator"){
	?>    
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> System</a>
      <ul>       
        <li><a href="?cat=akademik&page=dosen">Data Nasabah</a></li> 
		<li><a href="?cat=administrator&page=user">Data Nasabah</a></li> 
        <li><a href="?cat=administrator&page=deletetemp">Delete Temporary Uploads</a></li> 
        
      </ul>
    </li>
  	<?php
	}
	?>
  </ul>
</div>
<!--leftmenu-->

</div>
<!--mainleft--> 
<!-- END OF LEFT PANEL -->