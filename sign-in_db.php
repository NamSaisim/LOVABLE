<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if(isset($_POST['sign_submit'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        if(empty($username)){
            array_push($errors, "Username is required");
        }

        if(empty($pwd)){
            array_push($errors, "Password is required");
        }

        if (count($errors)==0){
            $query = "SELECT * FROM customer WHERE username = '$username' AND pwd = '$pwd'";
            $result = mysqli_query($mysqli, $query);
    

        if (mysqli_num_rows($result)==1){
                while($row=$result->fetch_array()){
                $_SESSION['cus_id']=$row['customer_id'];
                }
                $_SESSION['username']=$username;
                $_SESSION['success']="You are now logged in";
                header("location: index.php");
        } 
        
        else {
                array_push($errors, "Wrong username/password combination");
                $_SESSION['error']="Wrong username or password try again!";
                header("location: sign-in.php");
            }
        }
        
    }
?>