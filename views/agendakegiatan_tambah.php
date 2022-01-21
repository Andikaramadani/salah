<?php
$sql = "SELECT * FROM datapegawai";
$query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>

<?php
$sql = "SELECT * FROM datapegawai";
$query1 = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Agenda Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <select name="nik" class="form-control" id="inputEmail3">
                                    <?php
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                    <option value="<?= $data['nik'] ?>"><?= $data['nik'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">NAMA</label>
                            <div class="col-sm-9">
                                <select name="nama" class="form-control" id="inputEmail3">
                                    <?php
                                    while ($data = mysqli_fetch_array($query1)) { ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kegiatan" class="form-control" id="inputEmail3" placeholder="Inputkan Kegiatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Lama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="durasi"class="form-control" id="inputEmail3" placeholder="Inputkan Lama Kegiatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Catatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="catatan" class="form-control" id="inputPassword3" placeholder="Inputkan Catatan Kegiatan" required>
                            </div>
                        </div>
						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan Agenda Kegiatan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=agendakegiatan&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali Ke Data Agenda Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$kegiatan=$_POST['kegiatan'];
  $durasi=$_POST['durasi'];
	$catatan=$_POST['catatan'];
    //buat sql
    $sql="INSERT INTO agendakegiatan VALUES ('','$nik','$nama','$jk','$kegiatan','$durasi','$catatan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=agendakegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
