<?php
$connection = mysqli_connect('localhost', 'root', '', 'login_db');

if (isset($_POST['send'])) {
  $lemail = $_POST['lemail'];
  $lpassword = $_POST['lpassword'];
  
  $request = "INSERT INTO login_form (lemail , lpassword) VALUES
          ('$lemail', '$lpassword')";

  if (mysqli_query($connection, $request)) {
    header('location:index.html'); // Redirect on successful insertion
  } else {
    echo 'Error: ' . mysqli_error($connection); // Display error message
  }
} else {
  echo 'Something went wrong. Try again.'; // More informative error message
}

mysqli_close($connection); // Close the database connection (important!)
?>

