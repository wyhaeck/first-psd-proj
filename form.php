<?php
//   $servername = "sql309.byetcluster.com";  
//   $username = "if0_35266495";  
//   $password = "Dh4kcwO7Pf5CWP"; 
//   $database = "if0_35266495_emails";
  $servername = "localhost";  
  $username = "root";  
  $password = ""; 
  $database = "emails";  

  // Create a connection  
  $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

  if (isset($_POST['email'])) {
    $email = ($_POST['email']);
    $sql = "INSERT INTO emails (email) VALUES ('" . $email . "')";
    if (mysqli_query($conn, $sql)) {
        echo "Thank you for signing up!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

    mysqli_close($conn);