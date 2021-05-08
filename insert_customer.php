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
        $email =  $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $username = $_REQUEST['username']; 
        $password =  $_REQUEST['password'];
        

          
        // Performing insert query execution
        // here our table name is college
        $query = "INSERT INTO users (C_name, Email, Username, u_password, C_type) VALUES ('$name', 
            '$email','$username', '$password', 'Customer')";
          
        // Get a response from the database by sending the connection
        // and the query
        $response = @mysqli_query($dbc, $query);
        session_start();
        $_SESSION['Id']=$row['Id']; 

          
        // Close connection
        mysqli_close($dbc);
        header('Location: client_account.php'); 
        ?>
    </center>




</body>
  
</html>