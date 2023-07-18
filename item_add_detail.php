<?php include("seller_navbar.php");

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

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

$product_name = $_POST["product_name"];
$product_category = $_POST["product_category"];
$item_weight = $_POST["item_weight"];
$item_price = $_POST["item_price"];



// $username = $_POST["username"];
// $fathername = $_POST["fathername"];
// $mothername = $_POST["mothername"];
// $address = $_POST["address"];
// $contactno = $_POST["contactno"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $panno = $_POST["panno"];
// $adharno = $_POST["adharno"];

?>
<style>
    .profile-container{
        display: flex;
        align-items: flex-start;
    }
    .profile-image{
        max-width: 300px;
        margin-right: 20px;
    }
</style>

<div class="container">
    <div class="mt-5"><h2>Item Details</h2></div>
    <hr>
    <div class="profile-container">
        <img src="<?php echo $directory_name. "/".$filename; ?>" alt="profile image" class="profile-image">
        <div>
            <table class="table table-bordeed" style="width: 400px; margin-bottom: 20px;">
                <thead>
                <tr>
                    <th><input type="hidden"> Description</th>
                    <th><input type="hidden">&nbsp; &nbsp; &nbsp; &nbsp;  Details</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item Name</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $product_name; ?></td>
                    </tr>
                    <tr>
                        <td>Item category</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $product_category; ?></td>
                    </tr>
                    <tr>
                        <td>Item weight (in kg)</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $item_weight; ?></td>
                    </tr>
                    <tr>
                        <td>Item price</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $item_price; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
