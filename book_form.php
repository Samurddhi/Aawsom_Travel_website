<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email']; // Correct variable name
  $phone = $_POST['phone']; // Correct variable name
  $address = $_POST['address']; // Correct variable name
  $package = $_POST['package'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals']; // Corrected variable name (arrival -> arrivals)
  $leaving = $_POST['leaving'];

  $request = "INSERT INTO book_form (name, email, phone, address, package, guests, arrivals , leaving) VALUES
          ('$name', '$email', '$phone', '$address', '$package', '$guests', '$arrivals', '$leaving')";

  if (mysqli_query($connection, $request)) {
    header('location:submit.html'); // Redirect on successful insertion
  } else {
    echo 'Error: ' . mysqli_error($connection); // Display error message
  }
} else {
  echo 'Something went wrong. Try again.'; // More informative error message
}

mysqli_close($connection); // Close the database connection (important!)
?>

//<?php
//$connection=mysqli_connenct('localhost','root','','book_db');
//if(isset($_POST['send'])){
    //$name=$_POST['name'];
    //$name=$_POST['email'];
    //$name=$_POST['phone'];
    //$name=$_POST['address'];
    //$name=$_POST['package'];
    //$name=$_POST['guests'];
    //$name=$_POST['arrivals'];
    //$name=$_POST['leaving'];

    //$request="insert into book_form(name,email,phone,address,package,guests,arrival,leaving)values
    //('$name','$email','$phone','$address','$package','$guests','$arrival','$leaving')";
    //mysqli_query($connection,$request);
  //  header('location:package.html');
//}else{
  //  echo 'something went wrong try again';
//}

//?>


