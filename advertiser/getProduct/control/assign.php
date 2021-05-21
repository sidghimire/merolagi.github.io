<?php
include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/essentials/redirectOut.php';
$conn = new mysqli("localhost", "root", "", "merolagi_database1");
$quantity = mysqli_escape_string($conn, $_POST['quantity']);
$price = mysqli_escape_string($conn, $_POST['price']);
$alias = mysqli_escape_string($conn, $_POST['alias']);
$getToken = "SELECT * FROM `db1020` WHERE `alias`='{$alias}'";
$getTokenResult = mysqli_query($conn, $getToken);
if (mysqli_num_rows($getTokenResult) == 1) {
    $token = uniqid();
    $checkToken = "SELECT `id` FROM `db301` WHERE `token`='{$token}'";
    $checkTokenResult = mysqli_query($conn, $checkToken);
    if (mysqli_num_rows($checkTokenResult) == 0) {

        $row = mysqli_fetch_assoc($getTokenResult);
        $productToken = $row['productToken'];
        $userToken = $_COOKIE['advertisertoken'];
        $sql = "INSERT INTO `db301`(`token`,`productToken`, `userToken`, `quantity`, `price`, `uploadDate`, `uploadTime`) VALUES ('{$token}','{$productToken}','{$userToken}','{$quantity}','{$price}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
        if (mysqli_query($conn, $sql)) {
            echo $token;
        } else {
            echo "Failed";
        }
    }
}
