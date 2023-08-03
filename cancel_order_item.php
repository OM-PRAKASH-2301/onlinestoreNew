<?php include("customer_navbar.php");

// echo json_encode($_POST);

// {"id":"11"}
// $id =11;
// print_r($_SESSION);
// Array
// (
//     [email] => minesh@gmail.com
//     [password] => 987654
//     [role] => customer
//     [customer_id] => 10
//     [customer_name] => 
//     [photo] => img24.jpg
// )
$id = $_REQUEST["id"];
echo $id;


$today = date("y-m-d h:i:s");

$updateQuery = "UPDATE order_details SET cancelled_date = '$today',
                                        is_cancelled = 'YES'
                                    WHERE id = '$id'";

$result = mysqli_query($con, $updateQuery);

if($result){
    // echo "updated successfully";
    $pageName = 'order_detail.php';
}else{
    // echo "something missing";
    $pageName = "order_detail.php";
}

?>