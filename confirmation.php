<html>
    <body>
        <center>
            <?php
                session_start();
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
                        
                $insert = "INSERT INTO request (F_name, L_name, Email, Phone_Number, Loca, S_date, E_date, People, Mess) VALUES ('$fName', '$lName', '$email', '$pNumber', '$loca', '$start', '$end', '$group', '$message')";
                
                // Get a response from the database by sending the connection
                // and the query
                $response = @mysqli_query($dbc, $insert);

                // If the query executed properly proceed
                if(!$response)
                    echo "Unable to add values to request";
                          
                // Close connection to the database
                mysqli_close($dbc);
                header('Location: thank-you.html'); 
            ?>
        </center>
    </body>
</html>