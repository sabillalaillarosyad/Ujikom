<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: blue;
      }
	  h2 {
        text-transform: uppercase;
        color: blue;
      }
	  h3 {
        text-transform: uppercase;
        color: blue;
      }
	  h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: blue;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	  a {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
  <?php
  include ('header.php');
?>



      <center>
        <h2>Tambah siswa</h2>
      <center>
      <form method="POST" action="proses_tambahsiswa.php" enctype="multipart/form-data" >
      <section class="base">
    
        <div>
          <label>nisn</label>
         <input type="text" name="nisn" required=""/>
        </div>
                  <label>nis</label>
         <input type="text" name="nis" required=""/>
        </div>
                  <label>nama</label>
         <input type="text" name="nama" required=""/>
        </div>
                  <label>kelas</label>
         <input type="text" name="kelas" required=""/>
        </div>
                  <label>alamat</label>
         <input type="text" name="alamat" required=""/>
        </div>
                          <label>no telp</label>
         <input type="text" name="no telp" required=""/>
        </div>
                          <label>tahun</label>
         <input type="text" name="tahun" required=""/>
                           <label>id spp</label>
         <input type="text" name="id spp" required=""/>
        </div>
        
        </div>
        
        <div>
         <button type="submit">Simpan Siswa</button>
        </div>
        </section>
      </form>
</body>
</html>