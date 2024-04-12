<!DOCTYPE html>
<?php 
    include "server.php";
    $id = $_GET["id"];
    if (isset($_POST["submit"])) {

        $name = $_POST['name'];
        $userType = $_POST['user_type'];
        $email = $_POST['email'];

        $sql = "UPDATE `users` SET `username`='$name', `email`='$email', `user_type`='$userType' WHERE id = $id";
        $result = mysqli_query($db, $sql);
    
        if ($result) {
          header("Location: admin.php");
        } else {
          echo "Failed: " . mysqli_error($conn);
        }
      }
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="img/Offer.png" style="width: 100%;">
    <title>Edite Adnim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #d0e4e9;
        }
        .update{
            width: 40%;
            height: 500px;
            background-color: white;
            border: 1px solid black;
            border-radius: 2%;
            text-align: center;
        }
        .update h2{
            margin-top: 20px;
            text-transform: uppercase;
            color: #42b3e5;
        }
        .input-container i{
            color: #42b3e5;
            font-size: 24px;
            margin-right: 20px;
            border: 1px solid black;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            padding: 6px;
        }
        input[type="text"], input[type="email"], select{
            width: 80%;
            padding: 10px;
            margin-top: 40px;
            outline: none;
        }
        .input-field:focus, select:focus {border: 2px solid dodgerblue;}
        .boxBtn{
            display: flex;
            justify-content: space-evenly;
            padding: 50px;
        }
        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 40%;
            margin-top: 20px;
            opacity: 0.9;
            text-decoration: none;
        }
        .btn:hover{    opacity: .7;    }
    </style>
</head>
<body>
    <div class="update">
        <h2>Update Form</h2>
        <?php
            $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="" method="post">
            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Username" name="name" value="<?php echo $row['username'] ?>">
            </div>
              
            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email" name="email" value="<?php echo $row['email'] ?>">
            </div>
              
            <div class="input-container">
              <i class="fa-solid fa-comment"></i>
                <select name="user_type" require>
                    <option value="">---</option>
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            
            <div class="boxBtn">
                <button type="submit" class="btn" name="submit">Update</button>
                <a href="admin.php" class="btn">Cancel</a>
            </div>
          </form>
    </div>
</body>
</html>