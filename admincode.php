<?php
    session_start ();
    include ("adminconn.php");
$error = '';
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error = "Username and password is invalid";
    }
    else
    {   
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $query = "SELECT * FROM admin WHERE username = '$user' and  password = '$pass'";
        $result = mysqli_query($con, $query);
        
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User'] = $_POST['username'];
            $_SESSION['last_login_timestamp'] = time();
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully Login')
    window.location.href='dashboard.php';
    </SCRIPT>");
    }
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid user name or password')
    window.location.href='admin.php';
    </SCRIPT>");
    }
    }
}
?>  