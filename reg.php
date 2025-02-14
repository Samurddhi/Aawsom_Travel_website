<?php
$connection = mysqli_connect('localhost', 'root', '', 'rege_db');

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $remail = $_POST['remail'];
  $rpassword = $_POST['rpassword']; 
  $cpassword = $_POST['cpassword'];

 $request = "INSERT INTO rege-form(name, remail, rpassword , cpassword) VALUES
         ('$name', '$remail', '$rpassword', '$cpassword')";

  if (mysqli_query($connection, $request)) {
    header('location:index.html'); // Redirect on successful insertion
    
  } else {
     header('location:index.html'); // Redirect on successful insertion
  }
} else {
  echo 'Something went wrong. Try again.'; // More informative error message
}

mysqli_close($connection); // Close the database connection (important!)
?>

