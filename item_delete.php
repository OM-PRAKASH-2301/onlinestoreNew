<?php include("customer_navbar.php");

$id = $_REQUEST["id"];
// echo $id;

// echo $id;
// print_r($_SESSION);
// Array ( [email] => monu@gmail.com [password] => 456123 [role] => customer [student_id] => 11 [student_name] => Shailendra [customer_id] => 11 [customer_name] => [photo] => spea3.jpg )

// echo $id;

$deleteQuery = "DELETE FROM cart WHERE id = '$id'";

$result = mysqli_query($con, $deleteQuery);

if($result){
    //echo "deleted successfully";
}else{
    echo "something went wrong";
}


?>