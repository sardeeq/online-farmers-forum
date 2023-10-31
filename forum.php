<?php

session_start();

 require "inc/process.php";
 require "inc/header.php";   
 // require "body.php"; 

 if(!isset($_SESSION["user"])){
    header("location: index.php");
}

 ?>
<div class="container">
<?php  require './pages/header-home.php'; ?>
    <div class="container-fluid my-3 ">
        <div class="row">
            <div class="col-12">

                <div class="container">
                    <h6 class="text-center">Post a Question</h6>
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
                    <form action="" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <textarea name="content" id="" placeholder="Enter your question" cols="10" rows="2"
                            class="form-control" required></textarea>
                            <button type="submit" name="new_question"
                            class="btn-primary btn-sm text-white my-2">
                            Ask Question</button>
                    </div>
                </form>
            </div>

            <div class="row">
                    <?php
              //displ+aying the posts from database
              $sql = "SELECT * FROM posts ORDER BY id DESC";
              $query = mysqli_query($connection,$sql);
               while($result = mysqli_fetch_assoc($query)) { 
                //Looping through the col for multiples post
                ?>
                    <div class="col-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">
                                    <?php 
                                        $content = $result["content"];
                                        $shortContent = substr($content, 0, 70); // Shorten the content to the desired length (e.g., 100 characters)
                                        echo $shortContent;
                                    ?>...
                                </p>
                                <a href="read-question.php?question_id=<?php echo $result["id"]; ?>">
                                    View Question
                                </a>

                            </div>
                        </div>
                    </div>
                    <?php
            }
          ?>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-8">
                
            </div>
          
        </div>
    </div>
    <?php require './pages/footer-home.php'; ?>
</div>

 <?php 
 require "inc/footer.php"; 
 ?>
