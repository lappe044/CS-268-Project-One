<html>
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        // Get a connection for the database
        require_once('sql_conn.php');
          
       
          
        // Taking all 5 values from the form data(input)
        $id=  $_REQUEST['id'];
        

          
        // Performing insert query execution
        // here our table name is college
        $query = "DELETE FROM trips WHERE T_ID = '$id'"; 
          
        // Get a response from the database by sending the connection
        // and the query
        $response = @mysqli_query($dbc, $query);
        if($response){
            header("location: employee_account.php");
        }else{
            echo "couldn't issue database query<br />"; 
            echo mysqli_error($dbc); 

        }
          
        // Close connection
        mysqli_close($dbc);
        ?>
    </center>

    header("location: client_account.php");
</body>
  
</html>