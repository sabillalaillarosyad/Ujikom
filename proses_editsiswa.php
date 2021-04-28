<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id'];

  $no = $_POST['no'];
  $nisn = $_POST['nisn'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $nisn = $_POST['alamat'];
  $no_telp = $_POST['no_telp'];
  $tahun = $_POST['tahun'];
  $id_spp = $_POST['id_spp'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                  $query  = "UPDATE siswa SET no = '$no' WHERE nisn = '$nis' WHERE nama = '$nama' WHERE kelas= '$kelas' WHERE alamat = '$alamat' WHERE no telp = '$telp' WHERE tahun= '$tahun' WHERE id spp = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }
                    ?>
