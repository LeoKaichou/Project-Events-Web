<?php
    if(isset($_POST['s'])){
        $fn=$_POST['firstname'];
        $ln=$_POST['lastname'];
        $user=$_POST['username'];
        $email=$_POST['email'];
        $pwd=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $repwd=password_hash($_POST['repassword'], PASSWORD_DEFAULT);
    }

$conn=mysqli_connect('localhost','root','','trendsreg');

$sql = "INSERT INTO userdata(firstname, lastname, username, email, password)
VALUES
('$fn','$ln','$user','$email','$pwd')";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Registration Successful";
}
else{
    echo "Registration Unsuccessful";
}

header('Location: ../home/index.html');
mysqli_close($conn);
?>