<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    if($username == "" || $password == ""){
        header('location: Login.php?err=null');

    }
    
    else if($_SESSION['user']['username']== $username && $_SESSION['user']['password'] == $password && $checkbox==true){
      //  $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: dashboard.php');
    }

    else if($_SESSION['user']['username']== $username && $_SESSION['user']['password'] == $password){
        //  $_SESSION['status'] = true;
          setcookie('status', 'true', time()+600, '/');
          header('location: dashboard.php');
      }
    
    else{
        header('location: login.php?err=invalid');
    }

?>