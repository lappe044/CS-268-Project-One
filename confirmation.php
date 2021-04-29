<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
    <script src="toggle-nav.js"></script>
    <title>Contact Us</title>
    <style>
        body {
            background-image: url("images/switzerland.jpg");
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            
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
            <div><h2>Thank you for your interest! Your information has been submitted!</h2></div>
            <div><p>Click the button below to redict to the travel form to submit another trip request.</p></div>
            <div class="btn">Go Back</div>
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
 // Get a connection for the database
 require_once('sql_conn.php');

 // checks if there is value to pull
if ($_POST["origin"] && $_POST["destination"] && $_POST["duration"] ) {
    $origin = $_POST["origin"];
    $destination = $_POST["destination"];
    $duration = $_POST["duration"];

    // checks if value is not null and not empty, resets the values to nothing to prevent accidental database insertion
    if(!isset($origin) || trim($origin) == '' || !isset($destination) || trim($destination) == '' || !isset($duration) || trim($duration) == '') {
        echo '<script type="text/javascript">';
        echo ' alert("Enter values into all areas")';  
        echo 'document.getElementById(“origin”).value="";';
        echo 'document.getElementById(“dest”).value="";';
        echo 'document.getElementById(“dur”).value="";';
        echo '</script>';
    
    } else {

        // Create a query for the database
        $insert = "INSERT INTO flights (origin, destination, duration) values ('$origin', '$destination', '$duration')";

    // Get a response from the database by sending the connection
    // and the query
        $response = @mysqli_query($dbc, $insert);

    // If the query executed properly proceed
        if($response){
            echo "Values successfully added to flights";
        } else {
            echo "Unable to add values to flights";
        }
    
        }
    }
  // Close connection to the database
  mysqli_close($dbc);


?>