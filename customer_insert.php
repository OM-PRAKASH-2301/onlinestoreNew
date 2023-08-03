<?php include("dbinfo.php");
// include("navbar.php"); 

// echo "<pre>";
// print_r($_POST); 
// echo "<br>";
// echo json_encode($_POST);
// echo "<br>";
// print_r($_FILES);

if($_POST["username"] != ""){
    $username = $_POST["username"];
}else{
    echo "please enter username";
    exit;
    die;
}
if($_POST["fathername"] != ""){
    $fathername = $_POST["fathername"];
}else{
    echo "please enter fathername";
    exit;
    die;
}
if($_POST["mothername"] != ""){
    $mothername = $_POST["mothername"];
}else{
    echo "please enter mothername";
    exit;
    die;
}
if($_POST["address"] != ""){
    $address = $_POST["address"];
}else{
    echo "please enter address";
    exit;
    die;
}
if($_POST["contactno"] != ""){
    $contactno = $_POST["contactno"];
}else{
    echo "please enter contactno";
    exit;
    die;
}
if($_POST["email"] != ""){
    $email = $_POST["email"];
}else{
    echo "please enter email";
    exit;
    die;
}
if($_POST["password"] != ""){
    $password = $_POST["password"];
}else{
    echo "please enter password";
    exit;
    die;
}
if($_POST["panno"] != ""){
    $panno = $_POST["panno"];
}else{
    echo "please enter panno";
    exit;
    die;
}
if($_POST["adharno"] != ""){
    $adharno = $_POST["adharno"];
}else{
    echo "please enter adharno";
    exit;
    die;
}


$filename = $_FILES["photo"]["name"];
$tmp_name = $_FILES["photo"]["tmp_name"];

$directory_name = "photo";
if(!is_dir($directory_name)){
    mkdir($directory_name);
}
$targetfile = $directory_name."/".basename($filename);
if(move_uploaded_file($tmp_name, $targetfile)){
    //echo "file uploaded successfully";
}else{
    echo "something went wrong";
}

$username = $_POST["username"];
$fathername = $_POST["fathername"];
$mothername = $_POST["mothername"];
$address = $_POST["address"];
$contactno = $_POST["contactno"];
$email = $_POST["email"];
$password = $_POST["password"];
$panno = $_POST["panno"];
$adharno = $_POST["adharno"];


$insertQuery = "INSERT INTO customer_detail (username, father_name, mother_name, address, contactno, email, password, panno, adharno, photo) 
                VALUES ('$username','$fathername','$mothername','$address','$contactno','$email','$password','$panno','$adharno','$filename')";

$result = mysqli_query($con, $insertQuery);

if($result){
    // echo "inserted successfully";
    header("location:index.php");
}else{
    echo "something went wrong";
}














?>
