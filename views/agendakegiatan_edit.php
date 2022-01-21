<?php
$id=$_GET['idkegiatan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM agendakegiatan WHERE idkegiatan ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">NAMA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jk" value="<?=$data['jk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kegiatan" value="<?=$data['kegiatan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kegiatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Lama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="durasi" value="<?=$data['durasi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Lama Kegiatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Catatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="catatan" value="<?=$data['catatan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Catatan Kegiatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-edit"></span> Update Agenda Kegiatan</button>
                            </div>
                        </div>

                         
						
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=agendakegiatan&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali Ke Agenda Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$kegiatan=$_POST['kegiatan'];
    $durasi=$_POST['durasi'];
	$catatan=$_POST['catatan'];
    //buat sql
    $sql="UPDATE agendakegiatan SET nama='$nama',jk='$jk',kegiatan='$kegiatan',durasi='$durasi',
	catatan='$catatan' WHERE idkegiatan ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=agendakegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



