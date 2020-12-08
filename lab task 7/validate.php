<?php
$myuname1="Mahi";
$mypass1="22849201";
$myuname2="Raihan";
$mypass2="22849202";
$myuname3="Nazmul";
$mypass3="22849203";
if(isset($_POST['Submit']) ){
    $Name=$_POST['Name'];
    $Pass=$_POST['Pass'];
    if($Name==$myuname1 and $Pass==$mypass1){
        if(isset($_POST['rem'])){
            setcookie('Name',$Name, time()+60*60*2);
            setcookie('pass',$Pass, time()+60*60*2);
        } 
            session_start();
            $_SESSION['name']=$Name;
            header("location: ./user/Admin_home.php");
        }
    else if($Name==$myuname2 and $Pass==$mypass2){
        if(isset($_POST['rem'])){
            setcookie('Name',$Name, time()-1);
            setcookie('pass',$Pass, time()-1);
        } 
            session_start();
            $_SESSION['name']=$Name;
            header("location: ./user/Admin_home.php");
            
        }
    else if($Name==$myuname3 and $Pass==$mypass3){
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