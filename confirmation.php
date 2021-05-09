<html>
    <body>
        <center>
            <?php
                
                // Get a connection for the database
                require_once('sql_conn.php');

                // Create a query for the database
                $fName = $_REQUEST["fName"];
                $lName = $_REQUEST["lName"];
                $email = $_REQUEST["email"];
                $pNumber = $_REQUEST["pNumber"];
                $loca = $_REQUEST["loca"];
                $start = $_REQUEST["start_date"];
                $end = $_REQUEST["end_date"];
                $group = $_REQUEST["group"];;
                $message = $_REQUEST["message"];

                $query = "INSERT INTO `request`(`f_name`, `l_name`, `email`, `phone_number`, `loca`, `s_date`, `end_date`, `group`, `mess`) VALUES ('$fName','$lName','$email','$pNumber','$loca','$start','$end','$group','$message')"; 
                
                
                // Get a response from the database by sending the connection
                // and the query
                $response = @mysqli_query($dbc, $query);

                // If the query executed properly proceed
                if(!$response){
                    echo "Unable to add values to request";
                }else{
                     // Close connection to the database
                mysqli_close($dbc);
                header('Location: thank-you.html');

                }
                          
                
            ?>
        </center>
    </body>
</html>