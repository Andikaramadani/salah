<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Administrasi <br> Kantor Camat Air Batu </h2>
                        <h6>Jl. Ahmad Yani No.1, Sei Alim Ulu, Air Batu Kabupaten Asahan, Sumatera Utara 21272</h6>
                        <hr>
                        <h3>DATA SELURUH AGENDA KEGIATAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th ><center>No.</center></th>
                                    <th ><center>NAMA</center></th>
                                    <th ><center>NIK</center></th>
                                    <th ><center>KEHADIRAN</center></th>
                                    <th ><center>LAMA BEKERJA</center></th>
                                    <th ><center>KEDISIPLINAN</center></th>

                                    
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM laporanpegawai";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nama'] ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['kehadiran'] ?></td>
                                    <td><?= $data['lamabekerja'] ?></td>
                                    <td><?= $data['kehadiran'] ?></td>
									
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kelompok Kami<strong></u><br>
                                        NIM.18220363
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>