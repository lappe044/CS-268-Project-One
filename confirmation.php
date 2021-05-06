<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
    <script src="toggle-nav.js"></script>
    <title>Contact Us</title>
    <style>
         form {
           height: 30rem;
       }
         html {
             height: 100%;
         }
         .btn {
           bottom: 1rem;
       }
        body {
            background-image: url("images/switzerland.jpg");
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        h2, p{
            text-align: center;
            padding: 1rem;
            font-size: 2rem;
        }
        p {
            font-size: 1rem;
        }
    
        </style>
</head>
<body id="contact-body">
    
    <div id="top">
        <img src="images/logo1.png" alt="drawn picture of a mountain range">
    </div>
    <a href="index.html"><h1>Epic MT</h1></a>
    <header>
    <div class="hamburger" onclick="toggleNav()">
                <hr>
                <hr>
                <hr>
            </div>
        <nav class="toggle-nav">
            <a href = "index.html">Home</a>
            <a href = "africa.html">Africa</a>
            <a href="north-america.html">North America</a>
            <a href="south-america.html">South America</a>
            <a href = "europe.html">Europe</a>
            <a href="asia.html">Asia</a>
            <a href="oceania.html">Oceania</a>
            <a href="antarctica.html">Antarctica</a>
            <a href="about.html">About</a>
            <a href="contact-us.html">Contact</a>
            <a href = "login.html">Login</a>
        </nav>
    </header> 
    
    <div id="background">
        <form action="contact-us.html">
            <div>
                <h2>Thank you for your interest! Your information has been submitted!</h2>
                <p>Click the button below to redict to the travel form to submit another trip request.</p>
                <div class="btn" onclick = "document.location = 'contact-us.html'">Go Back</div>
            </div>
        </form>
    </div>
    <div id = "footer">
        <div class = left>
            <span>Copyright <script>document.write(new Date().getFullYear());</script></span>
        </div>
        <div class = "right">
            <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" target = "_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" target = "_blank" class="fa fa-instagram"></a>
        </div>
    </div>

</body>
</html>

<?php
/*
// Get a connection for the database
 require_once('sql_conn.php');

 // checks if there is value to pull
if ($_POST["fName"] && $_POST["lName"] && $_POST["email"] && $_POST["pNumber"] && $_POST["location"] && $_POST["start_date"] && $_POST["end_date"] && $_POST["group"] &&  $_POST["message"]) {
    $fName = $_POST["fName"];
    $lName =$_POST["lName"];
    $email = $_POST["email"];
    $pNumber = $_POST["pNumber"];
    $loca = $_POST["location"];
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];
    $group = $_POST["group"];
    $mess = $_POST["message"];


     //checks if value is not null and not empty, resets the values to nothing to prevent accidental database insertion
    if(!isset($fName) || trim($fName) == '' || !isset($lName) || trim($lName) == '' || !isset($email) || trim($email) == '' || !isset($pNumber) || trim($pNumber) == '' || !isset($loca) || trim($loca) == '' || !isset($start) || trim($start) == '' || !isset($end) || trim($end) == '' || !isset($group) || trim($group) == '' || !isset($message) || trim($message) == '') {
        echo '<script type="text/javascript">';
        echo ' alert("Enter values into all areas")';  
        echo '</script>';
    
   } else {
        

        // Create a query for the database

        $insert = "INSERT INTO request (f_name, l_name, email, phone_Number, location, start_date, end_date, group, message ) values ('$fName', '$lName', '$email', '$pNumber', '$loca', '$start', '$end', '$group', '$message')";
        

    // Get a response from the database by sending the connection
    // and the query
        $response = @mysqli_query($dbc, $insert);

    // If the query executed properly proceed
        if($response){

        } else {
            echo "Unable to add values to request";
        }
    
    }
   }
  // Close connection to the database
  mysqli_close($dbc);

*/
?>
