<?php
$conn = new mysqli("localhost", "root", "", "merolagi_database1");
$title = mysqli_escape_string($conn, $_POST['title']);
$price = mysqli_escape_string($conn, $_POST['price']);
$quantity = mysqli_escape_string($conn, $_POST['quantity']);
$description = mysqli_escape_string($conn, $_POST['description']);
$category = mysqli_escape_string($conn, $_POST['category']);
$featureTitle = $_POST['featureTitle'];
$featureValue = $_POST['featureValue'];

$add = 0;
if ($conn) {
    redo1:
    $token = uniqid();
    $checkToken = "SELECT `id` FROM `db1020` WHERE `productToken`='{$token}'";
    $exeCheckToken = mysqli_query($conn, $checkToken);
    if (mysqli_num_rows($exeCheckToken) == 0) {
        if ($title != "" && $price != "" && $category != "" && $price != "" && $quantity != "" && $description != "") {
            redo2:
            $alias = str_replace(" ", "-", $title);
            $alias = str_replace(":", "-", $alias);
            $alias = str_replace(".", "-", $alias);
            $alias = str_replace("?", "-", $alias);
            $alias = str_replace(",", "-", $alias);
            if ($add != 0) {
                $alias = $alias . "-" . $add;
            }
            $checkToken = "SELECT `id` FROM `db1020` WHERE `alias`='{$alias}'";
            $exeCheckToken = mysqli_query($conn, $checkToken);
            if (mysqli_num_rows($exeCheckToken) == 0) {

                if (isset($_FILES['primaryImage']) && isset($_FILES['secondaryImage'])) {
                    $primaryImageName = $_FILES['primaryImage']['name'];
                    $primaryImageTempName = $_FILES['primaryImage']['tmp_name'];
                    $primaryImageSize = $_FILES['primaryImage']['size'];
                    $secondaryImage = $_FILES['secondaryImage'];
                    $allowed = array('gif', 'png', 'jpg', 'jpeg');
                    $ext = explode('.', $primaryImageName);
                    $ext = end($ext);
                    
                    for ($i = 0; $i < sizeof($secondaryImage); $i++) {
                        $secondaryImageName = $_FILES['secondaryImage']['name'][$i];
                        $secondaryImageTempName = $_FILES['secondaryImage']['tmp_name'][$i];
                        $secondaryImageSize = $_FILES['secondaryImage']['size'][$i];
                        $allowed = array('gif', 'png', 'jpg', 'jpeg');
                        $ext = explode('.', $secondaryImageName);
                        $ext = end($ext);
                        if (in_array($ext, $allowed)) {
                            if ($secondaryImageSize <= 2097152) {
                                redo4:
                                $secondaryImageToken = uniqid();
                                $checkImageToken = "SELECT `id` FROM `db1024` WHERE `image`='{$secondaryImageToken}.{$ext}'";
                                $exeCheckImageToken = mysqli_query($conn, $checkImageToken);
                                if (mysqli_num_rows($exeCheckImageToken) == 0) {
                                    $folder = $_SERVER['DOCUMENT_ROOT'] . "/essentials/database/images/";
                                    if (move_uploaded_file($secondaryImageTempName, $folder . $secondaryImageToken . "." . $ext)) {
                                        $sqlSec2 = "INSERT INTO `db1023`( `image`, `token`, `uploadDate`, `uploadTime`) VALUES ('{$secondaryImageToken}.{$ext}','{$token}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
                                        $result=mysqli_query($conn,$sqlSec2);
                                    }
                                } else {
                                    goto redo4;
                                }
                            } else {
                                echo 'File Size Limit Exceeded 2 MB';
                            }
                        } else {
                            echo 'Unsupported File Format';
                        }
                    }
                    if (in_array($ext, $allowed)) {
                        if ($primaryImageSize <= 2097152) {
                            redo3:
                            $primaryImageToken = uniqid();
                            $checkImageToken = "SELECT `id` FROM `db1024` WHERE `image`='{$primaryImageToken}.{$ext}'";
                            $exeCheckImageToken = mysqli_query($conn, $checkImageToken);
                            if (mysqli_num_rows($exeCheckImageToken) == 0) {
                                $folder = $_SERVER['DOCUMENT_ROOT'] . "/essentials/database/images/";
                                if (move_uploaded_file($primaryImageTempName, $folder . $primaryImageToken . "." . $ext)) {
                                    $sqlSec1 = "INSERT INTO `db1022`( `image`, `token`, `uploadDate`, `uploadTime`) VALUES ('{$primaryImageToken}.{$ext}','{$token}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
                                    echo $sqlSec1;
                                    $sql1 = "INSERT INTO `db1020`( `productToken`, `userToken`, `alias`, `uploadDate`, `uploadTime`) VALUES ('{$token}','{$_COOKIE['token']}','{$alias}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
                                    $sql2 = "INSERT INTO `db102`(`token`, `name`, `price`, `quantity`, `category`, `description`, `uploadDate`, `uploadTime`) VALUES ('{$token}','{$title}','{$price}','{$quantity}','{$category}','{$description}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
                                    for ($i = 0; $i < sizeof($featureTitle); $i++) {
                                        $sql = "INSERT INTO `db1021`( `token`, `title`, `value`, `uploadDate`, `uploadTime`) VALUES ('{$token}','{$featureTitle[$i]}','{$featureValue[$i]}','" . date("Y/m/d") . "','" . date('H:i:s') . "')";
                                        $result = mysqli_query($conn, $sql);
                                    }

                                    $result1 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
                                    $result3 = mysqli_query($conn, $sqlSec1);
                                }
                            } else {
                                goto redo3;
                            }
                        } else {
                            echo 'File Size Limit Exceeded 2 MB';
                        }
                    } else {
                        echo 'Unsupported File Format';
                    }
                }
            } else {
                $add++;
                goto redo2;
            }
        } else {
            echo "Empty";
        }
    } else {
        goto redo1;
    }
} else {
    echo "Internet Error";
}
