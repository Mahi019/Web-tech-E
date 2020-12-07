<?php

include_once 'db_connect.php';


if(isset($_POST['Submit']) ){

    $Name=$_POST['Name'];
    $Pass=$_POST['Pass'];
  $sql="SELECT * FROM login WHERE UserName='$Name' AND Password='$Pass' ";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $conn->close($conn);

    if($row['UserName']==$Name and $row['Password']==$Pass and $row['Designation']=="SuperAdmin"){
        if(isset($_POST['rem'])){
            setcookie('Name',$Name, time()+60*60*2);
            setcookie('pass',$Pass, time()+60*60*2);
        } 
            session_start();
            $_SESSION['name']=$Name;
            header("location: ./user/dashboard.php");
        }
    else if($row['UserName']==$Name and $row['Password']==$Pass and $row['Designation']=="Admin"){
        if(isset($_POST['rem'])){
            setcookie('Name',$Name, time()-1);
            setcookie('pass',$Pass, time()-1);
        } 
            session_start();
            $_SESSION['name']=$Name;
            header("location: ./user/Admin_home.php");
            
        }
    else if($row['UserName']==$Name and $row['Password']==$Pass and $row['Designation']=="User"){
        if(isset($_POST['rem'])){
            setcookie('Name',$Name, time()+60*60*2);
            setcookie('pass',$Pass, time()+60*60*2);
        } 
            session_start();
            $_SESSION['name']=$Name;
            header("location:#");
            
        }   
    else{
        echo "Email or Password is Invalid.<br>click here to<a href='Log in.php'> try again</a>";
    }
    
}
else{
    header('location: Log in.php');
}
?>