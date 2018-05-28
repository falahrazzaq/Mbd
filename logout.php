<?php
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <link rel="stylesheet" href="css/style_login.css" type="text/css">
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="index.php"><button class="button button-block"/>Return</button></a>

    </div>

<script src="js/index.js"></script>
</body>
</html>
