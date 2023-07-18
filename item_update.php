<?php include("seller_navbar.php");

// echo "<pre>";
// print_r($_POST);
// Array
// (
//     [id] => 3
//     [product_name] => tomato
//     [product_category] => vegetable
//     [item_weight] => kg
//     [item_price] => 100
// )

$id = $_POST["id"];
$product_name = $_POST["product_name"];
$product_category = $_POST["product_category"];
$item_weight = $_POST["item_weight"];
$item_price = $_POST["item_price"];
$today = date("Y-m-d H:i:s");

// UPDATE `seller_items` SET `id`='[value-1]',`product_name`='[value-2]',`product_category`='[value-3]',`item_weight`='[value-4]',`item_price`='[value-5]',`created_date`='[value-6]',`updated_date`='[value-7]' WHERE 1

$updateQuery = "UPDATE seller_items SET 
                            product_name= '$product_name',
                            product_category= '$product_category',
                            item_weight = '$item_weight',
                            item_price = '$item_price',
                            updated_date = '$today'
                            WHERE id = '$id'";

$result = mysqli_query($con, $updateQuery);

if($result){
    echo "updated successfully";
    header("location:seller_item_list.php");
}else{
    echo "something went wrong";
}

?>