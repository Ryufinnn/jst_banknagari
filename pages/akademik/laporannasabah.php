<div align="center">
<h2>Laporan Hasil Pemberian Pinjaman Data Nasabah </h2>
<h2>Bank Nagari Sicincin 2015</h2>

</div>
<br>

<span class="span4">
<table width="100%" border="1" cellspacing="0" cellpadding="0" class="table table-striped" align="center">
  <tr>
    <td width="200" >Nama Nasabah</td>
    <td width="116">Jenis Kelamin</td>
	 <td width="39">NoHp</td>
	   <td width="77">Alamat</td>
    <td width="126">Pendapatan</td> 
    <td width="86">Jaminan</td>
    <td width="109">Pekerjaan</td>
	<td width="98">Pinjaman</td>
	<td width="98">Keterangan</td>
	            
    
  </tr>
  <?php
  $rw=mysql_query("select * from mahasiswa ");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
    <td><?php echo $s['nim']; ?></td>
    <td><?php echo $s['nama']; ?></td>
    <td><?php echo $s['umur']; ?></td>
	<td><?php echo $s['alamat']; ?></td>
    <td><?php echo $s['pendapatan']; ?></td>
	<td><?php echo $s['kode_jurusan']; ?></td>
	<td><?php echo $s['pekerjaan']; ?></td>
	<td><?php echo $s['pinjaman']; ?>&nbsp;juta</td>
	<td><?php echo $s['hasil']; ?></td>
   
  </tr>
  <?php
  }
  ?>
</table>
<p><a href="cetak.php">Cetak Laporan </a></p>
</span>
<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id'];
	$ff=mysql_query("Delete from mahasiswa Where sha1(nim)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?cat=akademik&page=mahasiswa'</script>";
	}
}
?>
	<script type="text/javascript">
$(document).ready(function()
{
$("div.lightbox").bind("shown",function()
{
console.log("Shown Event",$(this).attr('id'));
});
});
</script>
<br>
 <br>
<br>

<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Sicincin, $tgl</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>Kepala Cabang Bank Nagari Sicincin</em></td></tr>";

?>
