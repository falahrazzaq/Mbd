<?php
require 'daftar.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/style_login.css" type="text/css">
</head>
<body>
  <div class="form">
        <div id="signup">   
          <h1>Daftar Pelanggan</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <input placeholder="Nama" type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <input placeholder="nomor telphone" type="tel"required autocomplete="off" name='no_telp' />
            </div>
          </div>
          
          <div class="field-wrap">
            <input placeholder="alamat" type="text"required autocomplete="off" name='alamat'/>
          </div>

          <div class="field-wrap">
            <input id="date" type="date"required autocomplete="off" name='date'/>
          </div>
          <button type="submit" class="button button-block" name="Daftar" />Tambah</button>
          </form>
        </div>  
      </div>
</div>
<script src="js/index.js"></script>
</body>
</html>
