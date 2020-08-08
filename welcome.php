<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Form</title>
</head>

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$fname = $_POST['first_name'];
 	$lname = $_POST['last_name'];
 	$email = $_POST['email'];
 	$dob = $_POST['date_of_birth'];
 	$color = $_POST['fav_color'];
 	$gender = $_POST['gender'];
 	$dept= $_POST['department'];
 	$password= $_POST['password'];
   }
  
?>
<body style="background-color:<?php echo $color ?>">
<h2><?php echo $fname." ". $lname ?></h2>
<h3><?php echo $email ?></h3>
<h3><?php echo $dob ?></h3>
<h3><?php echo $gender ?></h3>
<h3><?php echo $dept ?></h3>
</body>
</html>