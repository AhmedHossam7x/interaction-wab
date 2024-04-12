<!DOCTYPE html>
<?php 
    include "server.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="img/Offer.png" style="width: 100%;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>

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
        }
        .nav{
            width: 100%;
            height: 40px;
            position: fixed;
            top: 5%;
            border-bottom: 1px solid black;
            display: flex;
            justify-content: space-between;
            padding: 0px 40px;
            margin-top: -10px;
        }
        .nav a{
            text-decoration: none;
            font-size: 20px;
            color: black;
            font-weight: bolder;
        }
        .nav a:hover{
            background-color: lightblue;
            margin: 0 10px;
        }
        .container h2{
            font-size: 10em;
            text-transform: capitalize;
            opacity: .9;
        }
    </style>

</head>
<body>
    <header class="nav">
        <a href="index.php">Back</a>
        <h2>Admin</h2>
    </header>
    <div class="container">
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                  <th scope="col">Email</th>
                  <th scope="col">Name</th>
                  <!-- <th scope="col">Password</th> -->
                  <th scope="col">User Type</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <?php 
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <tbody>
                <tr>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <!-- <td><?php //echo $row['password'] ?></td> -->
                    <td><?php echo $row['user_type'] ?></td>
                    <td>
                        <a href="editAdmin.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="adminDelete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
              </tbody>
              <?php } ?>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>