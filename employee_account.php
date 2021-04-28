<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href = "css/account.css">
    <link rel="stylesheet" href = "css/index.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel = "stylesheet" href = "css/about.css">

    <title>Account</title>
</head>
<body>

    <div id="top">
        <img src="images/logo1.png" alt="drawn picture of a mountain range">
    </div>
    <a href="index.html"><h1>Epic MT</h1></a>
    <header>
        <div onclick="toggleNav()"><img class="hamburger" src="images/download.png" alt="navigational hamburger"></div>
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


    <div id = "flexbox">
        <img id = "founder_pic" src="images/Tent.jpg" alt="Picture of 2 founders and their dog">
        <div id="title">
            <?php
                session_start();
                // Get a connection for the database
                require_once('sql_conn.php');

                
                 $query = "Select C_name FROM users WHERE Id =" . $_SESSION['Id'];

                // Get a response from the database by sending the connection
                // and the query
                $response = @mysqli_query($dbc, $query);
                $row = mysqli_fetch_array($response); 
                echo '<h3> Hello, '. $row['C_name']. '</h3>'; 
                    
                 

                

             ?> 
        </div>
    </div>

    <div id = "infoBox2">
    
            <p>Hello! Welcome to your Epic MT employee portal. You can use this page to see your scheduled trips, access
            your employee profile, enter your timecard information, and so much more! 
            </p> 

     
</div> 

            
           
               
        
    <h2>Upcoming Trips</h2> 

    
    <?php
        // Get a connection for the database
        require_once('sql_conn.php');
       

        // Create a query for the database
        $query2 = "SELECT * FROM trips WHERE Guide_name = 'Max'";

        // Get a response from the database by sending the connection
        // and the query
        $response2 = @mysqli_query($dbc, $query2);

        // If the query executed properly proceed
        if($response2){

        echo '<table align="center"
         cellpadding="8;">

        <tr><th align="center" style = "background-color: #415d48;"><b>Trip ID</b></th>
        <th align="center" style = "background-color: #415d48;"><b>Trip Name</b></th>
        <th align="center" style = "background-color: #415d48;"><b>Guide Name</b></th>
        <th align="center" style = "background-color: #415d48;"><b>Number of Attendees</b></th>
        <th align="center" style = "background-color: #415d48;"><b>Customer ID</b></th>
        </tr>';

        // mysqli_fetch_array will return a row of data from the query
        // until no further data is available
        while($row = mysqli_fetch_array($response2)){

        echo '<tr><td align="center">' . 
        $row['T_ID'] . '</td><td align="center">' . 
        $row['T_name'] . '</td><td align="center">' .
        $row['Guide_name'] . '</td><td align="center">' .
        $row['Num_customers'] . '</td><td align="center">'. 
        $row['C_ID'] . '</td>'; 
        echo '</tr>';
        }

        echo '</table>';

        } else {

        echo "Couldn't issue database query<br />";

        echo mysqli_error($dbc);

        }

        // Close connection to the database
        mysqli_close($dbc);

        ?>

<div id= "trip_sections">
        <div class = "brown_card">
            <div class = "image_container">
                <img src="images/south-america.jpg" alt="Ruins of Machu Picchu">
                <h2>Payroll</h2>
            </div>
                <a class="button" href="https://www.workday.com/" target="_blank" >Workday</a>
        </div>
        <div class = "green_card">
            <div class = "image_container">
                <img src="images/north-america.jpg" alt="North American Grand Canyon">
                <h2>Time Card</h2>
            </div>
            <a class="button" href="https://www.workday.com/" target="_blank" >Workday</a>
        </div>
        
        <div class = "blue_card">
            <div class = "image_container">
                <img src="images/Europe.jpg" alt="European Mountain Range">
                <h2>Employee Benefits</h2>
            </div>
                <a class="button" href="https://www.workday.com/" target="_blank" >Workday</a>
        </div>
        <div class = "brown2_card">
            <div class = "image_container">
                <img src="images/Asia.jpg" alt="Asian Mountain Range">
                <h2>Time Off</h2>
            </div>
                <a class="button" href="https://www.workday.com/" target="_blank" >Workday</a>
        </div>
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