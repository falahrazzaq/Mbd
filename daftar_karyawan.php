<!DOCTYPE html>
<html>
<head>
  <title>Daftar Karyawan</title>
  <link rel="stylesheet" href="css/style_login.css" type="text/css">
</head>
<body>
  <div class="form">
        <div id="signup">   
          <h1>Daftar Karyawan</h1>
          
          <form action="daftar_k.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <input placeholder="Nama" type="text" required autocomplete="off" name='name' />
            </div>
        
            <div class="field-wrap">
              <input placeholder="nomor telphone" type="tel"required autocomplete="off" name='no_telp' />
            </div>
          </div>
          
          <div class="field-wrap">
            <input placeholder="alamat" type="text"required autocomplete="off" name='alamat'/>
          </div> 
          <button type="submit" class="button button-block" name="Daftar" />Tambah</button>
          </form>
        </div>  
      </div>
</div>
<script src="js/index.js"></script>
</body>
</html>
