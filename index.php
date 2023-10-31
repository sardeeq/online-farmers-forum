<?php

session_start();

 require "inc/process.php";
 require "inc/header.php";   
 // require "body.php"; 

 ?>
<div class="container">
   
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-12">
            <?php  require './pages/header-home.php'; ?>

                <div class="d-flex aligns-items-center justify-content-center py-3">
        <form action="" method="post">
            <div class="form-group">
                <?php 
              if(isset($error)) {
                  ?>
                <div class="alert alert-danger">
                    <strong><?php echo $error ?></strong>
                </div>
                <?php
              }elseif (isset($success)) {
                  ?>
                <div class="alert alert-success">
                    <strong><?php echo $success ?></strong>
                </div>
                <?php
              }
          ?>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your email" id="" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" id="" required>
            </div>
            <button type="submit" name="login" class="btn-primary btn-lg my-3">Login</button>
            <br>
            <p>If not registered <a href="register.php">Signup</a></p>

        </form>

    </div>
            </div>
            
            
        </div>
        
    </div>
    <?php require './pages/footer-home.php'; ?>
</div>

 <?php 
 require "inc/footer.php"; 
 ?>
