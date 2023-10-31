
<div class=" mt-3 text-center text-primary">
   <!-- <img class="d-block mx-auto" src="./images/farm.png" alt="" width="250" height="250"> -->
   <div class="col-lg-6 mx-auto">
    <h4 class=" text-center">Online Modern Farmers Forum</h4>
    <p class="lead mb-4">Get answers to your Questions and answers regarding farming</p> 
</div>
   </div>

<nav class="navbar rounded navbar-light " >
    <div class=" container-fluid">
        <a class="navbar-brand text-light" href="index.php">
            <h4> <i class="fas fa-bars"></i> </h4>
        </a>
        <div class="d-flex">
            <?php 
        if(isset($_SESSION["user"])){
          ?>
            <a href="logout.php" class="nav-link text-danger"> 
                <i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php
        }
        
      ?>
        </div>
    </div>
</nav>