<?php
include("connection.php");

if (isset($_POST['register'])) {
  if (
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['city']) >= 1 &&
    strlen($_POST['locat']) >= 1 &&
    strlen($_POST['phone']) >= 1
  ) {
    $name = mysqli_real_escape_string($conect, $_POST['name']);
    $email = mysqli_real_escape_string($conect, $_POST['email']);
    $city = mysqli_real_escape_string($conect, $_POST['city']);
    $locat = mysqli_real_escape_string($conect, $_POST['locat']);
    $phone = mysqli_real_escape_string($conect, $_POST['phone']);

    $sql = "INSERT INTO `employees` (name, email, city, locat, phone)
            VALUES ('$name', '$email', '$city', '$locat', '$phone')";
    $result = mysqli_query($conect, $sql);

    if ($result) {
     
      header("Location: view.php");
      exit();
    } else {
      ?>
      <h3 class="error">An error has occurred</h3>
      <?php
    }
  } else {
    ?>
    <h3 class="error">Please fill out all the gaps</h3>
    <?php
  }
}
?>