<?php
   include "../server.php";
   date_default_timezone_set('Africa/Cairo');
   if (isset($_POST["submit"])) {
      $id = $_SESSION['id'];
      $email = $_SESSION['email'];
      $first_name = $_SESSION['username'];
      $comment = $_POST['comment'];
      
      $sql = "INSERT INTO `comment`(`userId`, `email`, `name`, `comment`) VALUES ('$id','$email','$first_name','$comment')";
      $result = mysqli_query($db, $sql);
      if ($result) {
         header("Location: indexArtihal.php?msg=New comment created successfully");
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
   }
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title></title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Article</h3>
         <p class="text-muted">Complete the form below to add a new Article</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <!-- <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="">
               </div>
            </div> -->

            <div class="mb-3">
               <label class="form-label">Article:</label>
               <input type="text" class="form-control" name="comment" placeholder="...">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="indexArtihal.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>