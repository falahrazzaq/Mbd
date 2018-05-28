<?php
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/style_login.css" type="text/css">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) {
        require 'login.php';    
    }

    elseif (isset($_POST['register'])) {
        require 'register.php';
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="signup.php">Sign Up</a></li>
        <li class="tab active"><a href="index.php">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="field-wrap">
            <input placeholder="Email Address" type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <input placeholder="Password" type="password" required autocomplete="off" name="password"/>
          </div>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div> 
        <div id="signup">   
          <h1>Sign Up</h1>
          
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
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div>
      
</div>
<script src="js/index.js"></script>
</body>
</html>
