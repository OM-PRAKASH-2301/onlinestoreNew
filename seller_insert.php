<?php include("navbar.php");
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

// Array
// (
//     [name] => Om Prakash
//     [fathername] => Gopal Ram
//     [address] => Vill-mudpar post-uparwah
//     [email] => Omdewangan01@gmail.com
//     [password] => 123456
//     [contactno] => 1234567891
//     [adharno] => 123456789101
//     [panno] => 456321
// )
// Array
// (
//     [photo] => Array
//         (
//             [name] => img1.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp1\tmp\phpC210.tmp
//             [error] => 0
//             [size] => 9878
//         )

// )
$filename = $_FILES["photo"]["name"];
$tmp_name = $_FILES["photo"]["tmp_name"];

$directory_name = "photo";
if(!is_dir($directory_name)){
  mkdir($directory_name);
}

$targetfile = $directory_name."/".basename($filename);
if(move_uploaded_file($tmp_name, $targetfile)){
  echo "file uploaded successfully";
}else{
  echo "something went wrong";
}

if($_POST["name"] != ''){
    $name = $_POST["name"];
}else{
    echo "please enter name";
    exit;
    die;
}
if($_POST["fathername"] != ''){
    $name = $_POST["fathername"];
}else{
    echo "please enter father name";
    exit;
    die;
}
if($_POST["address"] != ''){
    $name = $_POST["address"];
}else{
    echo "please enter address";
    exit;
    die;
}
if($_POST["email"] != ''){
    $name = $_POST["email"];
}else{
    echo "please enter email";
    exit;
    die;
}
if($_POST["password"] != ''){
    $name = $_POST["password"];
}else{
    echo "please enter password";
    exit;
    die;
}
if($_POST["contactno"] != ''){
    $name = $_POST["contactno"];
}else{
    echo "please enter contactno";
    exit;
    die;
}
if($_POST["adharno"] != ''){
    $name = $_POST["adharno"];
}else{
    echo "please enter adharno";
    exit;
    die;
}
if($_POST["panno"] != ''){
    $name = $_POST["panno"];
}else{
    echo "please enter panno";
    exit;
    die;
}

$name =$_POST["name"];
$fathername = $_POST["fathername"];
$address = $_POST["address"];
$email =$_POST["email"];
$password =$_POST["password"];
$contactno =$_POST["contactno"];
$adharno =$_POST["adharno"];
$panno =$_POST["panno"];
// $filename =$_POST["file_name"];
$today = date("Y-m-d H:i:s");
//$today = date("Y-m-d H:i:s");

// INSERT INTO `seller_detail`(`id`, `name`, `fathername`, `address`, `email`, `password`, `contactno`, `adharno`, `panno`, `photo`, `created_date`, `updated_date`) 
// VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')

$insertQuery = "INSERT INTO seller_detail (name, fathername, address, email, password, contactno, adharno, panno, photo, updated_date)
            VALUES ('$name', '$fathername', '$address', '$email', '$password', '$contactno', '$adharno', '$panno', '$filename', '$today')";

$result = mysqli_query($con, $insertQuery);

if($result){
    //echo "inserted successfully";
    header("location:index.php");
}else{
    echo "something went wrong";
    
}











?>