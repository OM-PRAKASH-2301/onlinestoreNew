<?php include("dbinfo.php"); 

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

// Array
// (
//     [id] => 3
//     [username] => Om P
//     [fathername] => G R
//     [mothername] => S B
//     [address] => mudpar
//     [contactno] => 985565225
//     [email] => abd@gmail.com
//     [password] => 123456
//     [panno] => 491111
//     [adharno] => 987654123
// )
// Array
// (
//     [photo] => Array
//         (
//             [name] => img9.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp1\tmp\php2240.tmp
//             [error] => 0
//             [size] => 6415
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
    "file uploaded successfully";
}else{
    echo "something went wrong";
}

$id = $_POST["id"];
$username = $_POST["username"];
$fathername = $_POST["fathername"];
$mothername = $_POST["mothername"];
$address = $_POST["address"];
$contactno = $_POST["contactno"];
$email = $_POST["email"];
$password = $_POST["password"];
$panno = $_POST["panno"];
$adharno = $_POST["adharno"];
$today = date("Y-m-d H:i:s");

//UPDATE `customer_detail` SET `id`='[value-1]',`username`='[value-2]',`father_name`='[value-3]',
// `mother_name`='[value-4]',`address`='[value-5]',`contactno`='[value-6]',`email`='[value-7]',
// `password`='[value-8]',`panno`='[value-9]',`adharno`='[value-10]',`photo`='[value-11]',
// `created_date`='[value-12]',`updated_date`='[value-13]' WHERE 1

echo $updateQuery = "UPDATE customer_detail SET  username ='$username', 
                                            father_name = '$fathername', 
                                            mother_name = '$mothername',
                                            address = '$address', 
                                            contactno = '$contactno',
                                            email = '$email', 
                                            password = '$password', 
                                            panno = '$panno', 
                                            adharno= '$adharno', 
                                            photo = '$filename',
                                            updated_date = '$today'
                WHERE id = '$id'";

$result = mysqli_query($con, $updateQuery);

if($result){
    //echo "details updated successfully";
    //imap_alerts("your details updated successfully");
    header("location:customer_home.php");
}else{
    echo "something went wrong";
    header("location:customer_edit.php");

}


?>