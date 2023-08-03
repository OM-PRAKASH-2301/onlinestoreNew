<?php include("dbinfo.php");  
$id = $_POST["id"];

$selectQuery = "SELECT * FROM seller_items WHERE id = '$id'";

$result = mysqli_query($con, $selectQuery);

$rowcount = mysqli_num_rows($result);

if($rowcount>0){
    // echo "availbale";
    $rowdata = mysqli_fetch_assoc($result);

    $productid = $rowdata["id"];
    $seller_id = $rowdata["seller_id"];
    $customer_id = $_SESSION["customer_id"];

    // INSERT INTO `cart`(`id`, `product_id`, `customer_id`, `seller_id`, `quantity`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
    $insertQuary = "INSERT INTO cart (product_id, customer_id, seller_id, quantity)
            VALUES ('$productid', '$customer_id','$seller_id', '1')";

    $result = mysqli_query($con, $insertQuary);

    if($result){
        $pageName =  "add_to_cart.php";
        // echo "successfully inserted";
       // header("location:add_to_cart.php");
    }else{
        // echo "something went wrong";
        $pageName =  "find_item.php";
    }

}else{
   // echo "selected details not available";
    $pageName =  "find_item.php";
}

$data = ['pageName' => $pageName];
echo json_encode($data);
?>