<style> 

.login{  
        width: 400px;  
        overflow: hidden;  
        margin: auto;  
        margin: 10 0 0 370px;  
        padding: 80px;  
        background: linear-gradient(#acb7ee,#b99ee2,#95b9b6);  
        border-radius: 15px ;  
          
} 
</style>
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login">
    <div class="text-center">
       <h2>Sales Management System</h2><br>
       <h4><b>Login Page</b></h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary" style="background-color:#294d80;">Login</button>
        </div>
    </form>
</div>
