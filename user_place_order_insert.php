<?php 
try{
include("customer_navbar.php");
// print_r($_POST);
// Array ( [cart_id] => Array ( [0] => 16,[1]=> 9 ) [delivery] => on [name] => Om Prakash [contact_no] => 9755949734 [email] => Omdewangan01@gmail.com [pinno] => 741258 [houseno] => 06 [city] => RAJNANDGAON )

// print_r($_SESSION);
// Array ( [email] => monu@gmail.com [password] => 456123 [role] => customer [customer_id] => 11 [customer_name] => [photo] => spea3.jpg )

$arrayExecuteQueryCount = 0;
$queryExcutionSuccessNumber = 0;

$cart_id = $_POST["cart_id"];
$name = $_POST["name"];
$contact_no = $_POST["contact_no"];
$email = $_POST["email"];
$pinno = $_POST["pinno"];
$houseno = $_POST["houseno"];
$city = $_POST["city"];
$customer_id= $_SESSION["customer_id"];

$selectQuery = "SELECT MAX(order_id) as max_id from order_details";
$result = mysqli_query($con, $selectQuery);
$numrow = mysqli_num_rows($result);

if($numrow > 0){
    $rowdata = mysqli_fetch_assoc($result);
    
    $order_id = $rowdata["max_id"] + 1;
}else{
    $order_id = 1;
}
$order_no = "ORD".$order_id;

foreach ($cart_id as $key=> $cart_table_id) {
   $selectQuery = " SELECT cart.* ,seller_items.product_name, seller_detail.name as sellerName, customer_detail.username as customerName,seller_items.item_price FROM `cart`
LEFT JOIN seller_items ON  cart.product_id = seller_items.id
LEFT JOIN seller_detail ON cart.seller_id = seller_detail.id
LEFT JOIN customer_detail ON cart.customer_id = customer_detail.id
where cart.customer_id = '$customer_id' AND cart.id = '$cart_table_id'";

$result = mysqli_query($con, $selectQuery);
$numrow = mysqli_num_rows($result);
// echo $numrow;

if($numrow > 0){
    $rowdata = mysqli_fetch_assoc($result);

    // print_r($rowdata);
    // Array ( [id] => 13 [product_id] => 22 [customer_id] => 11 [seller_id] => 4 [quantity] => 1 [product_name] => speaker 4.0 [sellerName] => himesh [customerName] => Monukumar [item_price] => 250 )
    $id = $rowdata["id"];
    $product_id = $rowdata["product_id"];
    $customer_id = $rowdata["customer_id"];
    $seller_id = $rowdata["seller_id"];
    $quantity = $rowdata["quantity"];
    $product_name = $rowdata["product_name"];
    $sellerName = $rowdata["sellerName"];
    $customerName = $rowdata["customerName"];
    $item_price = $rowdata["item_price"];
    $today = date("Y-m-d H:i:s");
    

    $arrayExecuteQueryCount++;
    $insertQuery = "INSERT INTO order_details (cart_id, seller_id, customer_id, name, email, contact_no, pinno, houseno, city, created_date, product_id, price, quantity, order_id, order_no) 
    VALUES ('$cart_table_id', '$seller_id', '$customer_id', '$name', '$email', '$contact_no', '$pinno', '$houseno', '$city', '$today', '$product_id', '$item_price', '$quantity', '$order_id', '$order_no')";
    
    // $insertQuery = "INSERT INTO seller_detail (name, fathername, address, email, password, contactno, adharno, panno, photo, updated_date)
    //             VALUES ('$name', '$fathername', '$address', '$email', '$password', '$contactno', '$adharno', '$panno', '$filename', '$today')";
    $result = mysqli_query($con, $insertQuery);
    
    if($result){
        $queryExcutionSuccessNumber++;
        echo "inseted successfully";

        // DELETE FROM `cart` WHERE 0
        $arrayExecuteQueryCount++;
        $deleteQuery = "DELETE FROM cart WHERE id = '$cart_table_id'";
        $result = mysqli_query($con, $deleteQuery);
        
        if($result){
            $queryExcutionSuccessNumber++;
            echo "deleted successfully";
        }else{
            echo "something went wrong";
        }
    }else{
        echo " wrong selection";
    }
    
}

}
if($queryExcutionSuccessNumber == $arrayExecuteQueryCount ){
   header("location:email_response.php?order_id=$order_id"); 
}else{
    header("location:add_to_cart.php");
}

}catch(Exception $e){
    echo $e->getMessage();
}
?>