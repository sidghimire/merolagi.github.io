<?php
$conn = new mysqli("localhost", "root", "","merolagi_database1");

$email = mysqli_escape_string($conn,$_POST['email']);
$password = mysqli_escape_string($conn,$_POST['password']);
$username = mysqli_escape_string($conn,$_POST['username']);

if($conn){
    if($email!='' && $password!='' && $username!=''){
        $checkExist="SELECT id from `db101` WHERE email='{$email}'";
        $executeCheckExist=mysqli_query($conn,$checkExist);
        if(!mysqli_num_rows($executeCheckExist)>0){
            regeneratetoken:
            $token= uniqid (rand (),true);
            $checkExist2="SELECT id from `db101` WHERE token='{$token}'";
            $executeCheckExist2=mysqli_query($conn,$checkExist2);
            if(!mysqli_num_rows($executeCheckExist2)>0){
                $hashPassword=password_hash($password, PASSWORD_DEFAULT);
                $insertValue="INSERT INTO `db101`(`token`, `email`, `pswd`, `username`, `date`, `time`) VALUES ('{$token}','{$email}','{$hashPassword}','{$username}','".date('Y/m/d')."','".date('H:i:s')."')";
                $executeInsert=mysqli_query($conn, $insertValue);
                if($executeInsert){
                    echo "Query Executed";
                }else{
                    echo "Query Failed";
                }
            }else{
                goto regeneratetoken;
            }
        }else{
            echo "Email Already Exists";
        }
    }else{
        echo "Fields Are Empty";
    }
}
