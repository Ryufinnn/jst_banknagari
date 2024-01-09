<script>
function validateForm()
{
var x=document.forms["form1"]["nim"].value;
var x1=document.forms["form1"]["nama"].value;
var x2=document.forms["form1"]["umur"].value;
var x3=document.forms["form1"]["photo"].value;
var x4=document.forms["form1"]["alamat"].value;
if (x==null || x=="")
  {
  alert("Isi Nama Nasabah");
  return false;
  }
if (x1==null || x1=="")
  {
  alert("Isi Jenis Kelamin");
  return false;
  }
  if (x2==null || x2=="")
  {
  alert("Isi No Hp");
  return false;
  }
  if (x4==null || x4=="")
  {
  alert("Masukkan Alamat");
  return true;
  }
  if (x3==null || x3=="")
  {
  alert("Photo tidak ada,dipilih secara default");
  return true;
  x3="default";
  }
}
</script>
<?php
ob_start();
?>
<form method="post" class="form-horizontal" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return validateForm()"  />
<div class="control-group">
<label class="control-label">Nama Nasabah</label>
<div class="controls">
<input type="text" name="nim" id="nim">
</div>
</div>
<div class="control-group">
<label class="control-label">Jenis Kelamin</label>
<div class="controls">
<select name="nama"><option value="">Silahkan Pilih</option><option value="Laki-laki">Laki-Laki</option><option value="Perempuan">Perempuan</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">No Hp</label>
<div class="controls">
<input type="text" name="umur" id="umur" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Alamat</label>
<div class="controls">
<input type="text" name="alamat" id="alamat" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pendapatan</label>
<div class="controls">
<select name="pendapatan"><option value="">Silahkan Pilih</option><option value="> 10 Juta">> 10 Juta</option><option value="6 s/d 10 Juta">6 s/d 10 Juta</option><option value="2 s/d 5 Juta">2 s/d 5 Juta</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label">Jaminan</label>
<div class="controls">
<select name="jurusan"><option value="">Silahkan Pilih</option><option value="Sertifikat/BPKB">Sertifikat/BPKB</option><option value="SK Pegawai">SK Pegawai</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label">Pekerjaan</label>
<div class="controls">
<input type="text" name="pekerjaan" id="pekerjaan" class="input-small">&nbsp;
</div>
</div>
<div class="control-group">
<label class="control-label">Pinjaman</label>
<div class="controls">
<input type="text" name="pinjaman" id="pinjaman" class="input-small"> Juta
</div>
</div>

<div class="control-group">
<label class="control-label">Photo</label>
<div class="controls">
<input type="text" name="photo" id="photo" value="" onClick="window.open('<?php echo $baseurl; ?>includes/imguploads/index.php','popuppage','width=600,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');"/>
<input type="hidden" name="ext" id="ext" />
<input type="hidden" name="nfile" id="nfile" />
</div>
</div>
<div class="control-group">
<div class="controls">
<input type="submit" name="simpan" class="btn btn-medium btn-primary" value="Simpan Data" /> 
&nbsp;&nbsp;&nbsp;<a href="?cat=akademik&page=mahasiswa" class="btn btn-medium btn-primary">Kembali</a> 
</div>
</div>
<?php
if(isset($_POST['simpan']))
{
	$eks=$_POST['ext'];
	$namabaru=$_POST['nim'].".".$eks;		
	
	$upload_dir = $path_web."uploads/mahasiswa/";

	if($_POST['photo']!="")
	{
		if (file_exists($upload_dir) && is_writable($upload_dir)) {
	file_put_contents($upload_dir.$namabaru,fopen($_POST['photo'], 'r'));	
		}else {
			echo 'Upload directory is not writable, or does not exist.';
		}
	}
	
$na=$_POST["pinjaman"] ;

if ($na >= 300  )
{
$nh = 'Tidak Diterima' ;
}
else if ($na >= 100 )
{
$nh = 'Diterima' ;
}

else if ($na >= 50 )
{
$nh = 'Diterima' ;
}
else if ($na >= 0 )
{
$nh = 'Diterima' ;
}



	$q=mysql_query("Insert into mahasiswa values ('".$_POST['nim']."','".$_POST['nama']."','".$_POST['umur']."','".$_POST['alamat']."','".$_POST['pendapatan']."','".$_POST['jurusan']."','".$_POST['pekerjaan']."','".$_POST['pinjaman']."','".$nh."','".$namabaru."')");
	if($q)
	{
		echo "<script>alert('Berhasil ditambahkan')</script>";
	}
}
?>
<?php
ob_end_flush();
?>
