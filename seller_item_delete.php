<?php include("seller_navbar.php");
$id = $_REQUEST["id"];

//echo $id;

$deleteQuery = "DELETE FROM seller_items WHERE id = '$id'";

$result = mysqli_query($con, $deleteQuery);

if($result){
    //echo "deleted successfully";
    header("location:seller_item_list.php");
}else{
    echo "something went wrong";
}


?>