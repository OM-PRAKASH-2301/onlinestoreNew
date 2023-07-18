<?php include("seller_navbar.php"); 

$id = $_REQUEST["id"];
//echo $id;
$selectQuery = "SELECT * FROM seller_items WHERE id ='$id'";

$result = mysqli_query($con, $selectQuery);


$rowcount = mysqli_num_rows($result);
// echo $rowcount;
$rowdata = mysqli_fetch_assoc($result);
// print_r($rowdata);
// SELECT * FROM seller_items WHERE id ='3'Array ( [id] => 3 [product_name] => tomato [product_category] => vegetable [item_weight] => kg [item_price] => 100 [created_date] => 2023-07-16 14:33:30 [updated_date] => 2023-07-16 14:33:30 )

$id = $rowdata["id"];
$product_name = $rowdata["product_name"];
$product_category = $rowdata["product_category"];
$item_weight = $rowdata["item_weight"];
$item_price = $rowdata["item_price"];

?>

<div class="container">
    <h2>Add Items</h2>
    <form method="POST" action="item_update.php" enctype="multipart/form-data" onsubmit="return validateForm()">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" value="<?php echo $product_name;?>" id="product_name" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="product_category">Product Category:</label>
            <input type="text" class="form-control" value="<?php echo $product_category;?>" id="product_category" name="product_category" required>
        </div>
        <div class="form-group">
            <label for="item_weight">Item Weight:</label>
            <input type="text" value="<?php echo$item_weight;?>" class="form-control" id="item_weight" name="item_weight" required>
        </div>
        <div class="form-group">
            <label for="item_price">Item Price:</label>
            <input type="number" value="<?php echo $item_price;?>" class="form-control" id="item_price" name="item_price" required>
        </div>
        <input type="submit" value="update" class="btn btn-success">
        <a href="seller_item_list.php" class="btn btn-info">List</a> 
    </form>
</div>

</body>
</html>
<script>
    function validateForm(){
    let product_name = document.querySelector(`#product_name`)?.value;
    if(product_name == ""){
        alert ("please enter product name")
        return false;
    }
    let product_category = document.querySelector(`#product_category`)?.value;
    if(product_category == ""){
        alert ("please enter product category")
        return false;
    }
    let item_weight = document.querySelector(`#item_weight`)?.value;
    if(item_weight == ""){
        alert ("please enter item weight")
        return false;
    }
    let item_price = document.querySelector(`#item_price`)?.value;
    if(item_price == ""){
        alert ("please enter item price")
        return false;
    }



    }
</script>
