<?php
$conn = new mysqli("localhost", "root", "","merolagi_database1");
$email = mysqli_escape_string($conn,$_POST['email']);
$password = mysqli_escape_string($conn,$_POST['password']);
if($conn){
    if($email!='' && $password!=''){
        $checkExist="SELECT `token`, `email`,`username`,`pswd` FROM `db101` WHERE email='{$email}' ";
        $executeCheckExist=mysqli_query($conn,$checkExist);
        if(mysqli_num_rows($executeCheckExist)>0){
            $row=mysqli_fetch_assoc($executeCheckExist);
            if(password_verify($password,$row['pswd'])){
                setcookie("email", $row['email'],  time() + (86400 * 7), "/");
                setcookie("token", $row['token'],  time() + (86400 * 7), "/");
                setcookie("username", $row['username'],  time() + (86400 * 7), "/");
                echo "Redirect Correct";
            }else{
                echo "Wrong Password";
            }
        }else{
            echo "Email Doesnt Exist";
        }
    }else{
        echo "Fields Are Empty";
    }
}
