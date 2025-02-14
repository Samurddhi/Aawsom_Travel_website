<?php
$connection = mysqli_connect('localhost', 'root', '', 'contact_db');

if (isset($_POST['send'])) {
  $sname = $_POST['sname'];
  $semail = $_POST['semail'];
  $snumber = $_POST['snumber'];
  $subject = $_POST['subject'];
  $message = $_POST['message']; 


  $request = "INSERT INTO contact_form (sname,semail,snumber,subject,message) VALUES
          ('$sname','$semail','$snumber','$subject','$message')";

  if (mysqli_query($connection, $request)) {
echo '<script>
    alert("Your form has been submitted successfully!")
    window.location.href="index.html";
    </script>';// Redirect on successful insertion
  } else {
    echo 'Error: ' . mysqli_error($connection); // Display error message
  }
} else {
  echo 'Something went wrong. Try again.'; // More informative error message
}

mysqli_close($connection); // Close the database connection (important!)
?>

