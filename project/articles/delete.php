<?php
include "../server.php";
$id = $_GET["id"];
$sql = "DELETE FROM `comment` WHERE id = $id";
$result = mysqli_query($db, $sql);

if ($result) {
  header("Location: indexArtihal.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
