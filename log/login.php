<?php

$conn= mysqli_connect('localhost','root','','trendsreg');

if(isset($_POST['s'])){
    $user=$_POST['username'];
    $pwd= $_POST['password'];

$sql= "SELECT * FROM userdata WHERE username='$user' AND password = '$pwd'";
$query = mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($query)){
    if($user ===$row['username'] && $pwd===$row['password']){
        header('Location: ../home/index.html');
        exit();
    }
        else{
            echo 'Login Unsuccessful';
        }
    }
    else{
        
        header('Location: ../home/index.html');
        exit();
    }
}
?>