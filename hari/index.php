<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variable 
$server = "localhost";
$username = "root";
$password ="";

// create a database connection 
$con = mysqli_connect($server, $username, $password);

// check fo connection success
if(!$con){
    die("connection to this database failed due to " .
    mysqli_connect_error());
}
// echo "Success connecting to the db";

// collect post variable 
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$desc = $_POST["desc"];

$sql = "INSERT INTO `hostel`.`admission` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `DT`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// Execute the  query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // flage for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// close the database connection
$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Signika:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg" src="bg1.jpg" alt="K.R.Hostel Sindhari Barmer">
    <div class="container">
    <h1>K.R.Hostal &Coaching Center Sindhari Disc.Balotra(Raj.)</h1>

        <p>Enter Your Details and Submit This Form To Confirm Your Details </p>
        <?php
        if($insert == true){
       echo "<p class='submitMsg'>Thanks for submiting your form. We are happy to joined this Hostel. </p>";
    }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button>
                
        </form>
    </div>
    <script src="index.js"></script>
    
</body>

</html>