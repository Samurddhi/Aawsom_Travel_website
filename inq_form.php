<?php
$connection = mysqli_connect('localhost', 'root', '', 'inquiry_db');

if (isset($_POST['send'])) {
  $package = $_POST['place'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals']; // Corrected variable name (arrival -> arrivals)
  $leaving = $_POST['leaving'];

  $request = "INSERT INTO inquiry_form (place, guests, arrivals , leaving) VALUES
          ('$place', '$guests', '$arrivals', '$leaving')";

  if (mysqli_query($connection, $request)) {
  $message = "Your inquiry has been submitted! we will contact you soon ";
  $targetUrl = "index.html";
echo "<script>alert('$message')
 window.location.href = ('$targetUrl') </script>";

  } else {
    echo 'Error: ' . mysqli_error($connection); // Display error message
  }
} else {
  echo 'Something went wrong. Try again.'; // More informative error message
}

mysqli_close($connection); // Close the database connection (important!)
?>

