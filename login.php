<html>
<body>
  
        <?php
        session_start();
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        // Get a connection for the database
        require_once('sql_conn.php');
          
       
          
        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['username']; 
        $password =  $_REQUEST['password'];
       

          
        // Performing insert query execution
        // here our table name is college
        
        $query = "SELECT C_type, Id FROM  users WHERE Username = '$username' and u_password = '$password'";
          
        // Get a response from the database by sending the connection
        // and the query
        $response = @mysqli_query($dbc, $query);
        $count = mysqli_num_rows($response);
        $row = mysqli_fetch_array($response); 

        // If result matched $username and $password, table row must be 1 row
          
        if($count == 1) {

            $_SESSION['Id']=$row['Id']; 
           

            if($row['C_type'] == 'Customer'){
               header("location: client_account.php");

            }else{
               header("location: employee_account.php");
            }
           
        }else {

           header("location: login.html");
        }
     

          
        // Close connection
        mysqli_close($dbc);
       
        ?>
 
</body>
  
</html>