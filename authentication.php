<?php      
    include('connection.php');  
    $username = $_POST['Username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM usermaster where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: http://localhost/evolve/homepage.html"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
              header("Location: http://localhost/evolve/login.html"); 
        }     
?>  