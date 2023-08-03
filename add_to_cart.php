<?php include("customer_navbar.php");
// print_r($_POST);
// print_r($_SESSION);
// Array ( ) Array ( [email] => minesh@gmail.com [password] => 987654 [role] => customer [customer_id] => 10 [customer_name] => [photo] => img24.jpg [seller_id] => 5 [seller_name] => kuleshwar )
$customer_id = $_SESSION["customer_id"];

$selectQuery = "SELECT cart.* ,seller_items.product_name, seller_detail.name as sellerName, customer_detail.username as customerName,seller_items.item_price FROM `cart`
LEFT JOIN seller_items ON  cart.product_id = seller_items.id
LEFT JOIN seller_detail ON cart.seller_id = seller_detail.id
LEFT JOIN customer_detail ON cart.customer_id = customer_detail.id
where cart.customer_id = '$customer_id'";

$result = mysqli_query($con, $selectQuery);

$numrow = mysqli_num_rows($result);
// print_r($numrow);
?>
<style>
    body{
        background-image: none;
    }
    .table-bordered{
        box-sizing: border-box;
        background-color: lightcyan;
    }
    .order{
        box-sizing: content-box;
    }
</style>
<form action="user_place_order_insert.php" method="post">
<div class="container mt-5">
<table class="table table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <th></th>
            <th>Sr No</th>
            <th>Product name</th>
            <th>Customer name</th>
            <th>seller name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
         <?php
         $i=0; $total_price = $total_quantity= 0;
         while($numrow = mysqli_fetch_assoc($result)){
            
            // print_r($numrow);
            // Array ( [id] => 1 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 2 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 3 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 4 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 5 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 6 [product_id] => 14 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 7 [product_id] => 2 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 ) Array ( [id] => 8 [product_id] => 15 [customer_id] => 10 [seller_id] => 3 [quantity] => 1 )
            $quantity = $numrow["quantity"];
            $product_name = $numrow["product_name"];
            $sellerName = $numrow["sellerName"];
            $customerName = $numrow["customerName"];
            $item_price = $numrow["item_price"];
            $id = $numrow["id"];
            $i++;
            $total_price += $item_price;
            $total_quantity += $quantity;
            

            ?>
            <tr>
                <td><input type="checkbox" name="cart_id[]" value="<?php echo $id; ?>"></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $product_name; ?></td>
                <td><?php echo $customerName; ?></td>
                <td><?php echo $sellerName; ?></td>
                <td><?php echo $item_price; ?></td>
                <td><?php echo $quantity; ?></td>
                <!-- <td> <a href="item_delete.php?id=<?php echo $id;?>"><button>Delete</button></a> </td> // without json -->
                <td><button onclick="deleteitem('<?php echo $id?>')">
                    Delete
                </button></td>
            </tr>
            <?php } ?> 
            <tr>
                <td>Total Price</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $total_price; ?></td>
                <td><?php echo $total_quantity; ?></td>
            </tr>       
    </tbody>
</table>

<div class="row">
    <div class="col-sm-6">
                <div>
            <table class="table table-bordered">
            <input type="radio" name="delivery" id="delivery" class="form-control">Delivery
        <input type="radio" name="delivery" id="delivery" class="form-control">Self pickup

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input  type="text" name="contact_no" id="contact_no" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input  type="text" name="email" id="email"class="form-control"></td>
                </tr>
                <tr>
                    <td>Pin no</td>
                    <td><input  type="text" name="pinno" id="pinno" class="form-control"></td>
                </tr>
                <tr>
                    <td>House no</td>
                    <td><input  type="text" name="houseno" id="houseno" class="form-control"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input  type="text" name="city" id="city" class="form-control"></td>
                </tr>
            </table>
        </div>
    <div class="col-sm-6"></div>
</div>

</div>
<div class="row">
<button type="submit" class="btn btn-success">Continue</button>
</div>
<div class="mt-5"></div>
</form>

<script>
    // function viewmore(id){
    //     $.ajax({
    //         url: 'get_item_detail.php',
    //         type: 'post',
    //         data:{
    //             id : id
    //         },
    //         success : function(responseData){
    //             console.log(responseData);
    function deleteitem(id){
    $.ajax({
        url: 'item_delete.php',
        type: 'post',
        data:{
            id : id
        },
        success : function(responseData){
            window.location="add_to_cart.php";
            // console.log(responseData);
        }
        
    })
}
</script>


<?php include("footer.php"); ?>