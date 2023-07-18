<?php include("seller_navbar.php");

echo "<pre>";
print_r($_POST);
print_r($_FILES);

// Array
// (
//     [product_name] => Aa
//     [product_category] => Bb
//     [item_weight] => Cc
//     [item_price] => 10
//     [file] => img3.jpg
// )

if($_POST["product_name"] != ""){
    $product_name = $_POST["product_name"];
}else{
    echo "please enter product name";
    exit;
    die;
}
if($_POST["product_category"] != ""){
    $product_category = $_POST["product_category"];
}else{
    echo "please enter product category";
    exit;
    die;
}
if($_POST["item_weight"] != ""){
    $item_weight = $_POST["item_weight"];
}else{
    echo "please enter item weight";
    exit;
    die;
}
if($_POST["item_price"] != ""){
    $item_price = $_POST["item_price"];
}else{
    echo "please enter item price";
    exit;
    die;
}
if($_POST["item_price"] != ""){
    $item_price = $_POST["item_price"];
}else{
    echo "please enter item price";
    exit;
    die;
}

$filename = $_FILES["item_pic"]["name"];
$tmp_name = $_FILES["item_pic"]["tmp_name"];

$directory_name = "item_pic";
if(!is_dir($directory_name)){
    mkdir($directory_name);
}
$targetfile = $directory_name."/".basename($filename);
if(move_uploaded_file($tmp_name, $targetfile)){
    echo "file uploaded successfully";
}else{
    echo "something went wrong";
}

$seller_id = $_SESSION["seller_id"];
$product_name = $_POST["product_name"];
$product_category = $_POST["product_category"];
$item_weight = $_POST["item_weight"];
$item_price = $_POST["item_price"];

// INSERT INTO `seller_items`(`id`, `product_name`, `product_category`, `item_weight`, `item_price`, `created_date`, `updated_date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

$insertQuery = "INSERT INTO seller_items (product_name, product_category, item_weight, item_price, item_pic,seller_id)
                VALUES ('$product_name', '$product_category', '$item_weight','$item_price', '$filename', $seller_id)";


$result = mysqli_query($con, $insertQuery);

if($result){
    // echo "inserted successfully";
    header("location:seller_item_list.php");
}else{
    echo "something went wrong";
}



?>