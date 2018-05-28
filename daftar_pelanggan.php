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
              <input placeholder="First Name" type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <input placeholder="Last Name" type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <input placeholder="Email Address" type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <input placeholder="Password" type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="Daftar" />Tambah</button>
          
          </form>

        </div>  
        
      </div>
      
</div>
<script src="js/index.js"></script>
</body>
</html>
