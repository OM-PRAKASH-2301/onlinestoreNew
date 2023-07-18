<?php 
//include("dbinfo.php");
include("seller_navbar.php");
$seller_id = $_SESSION["seller_id"];
$selectQuery = "SELECT * FROM seller_items WHERE seller_id = '$seller_id'";

$result = mysqli_query($con, $selectQuery);

$numrow = mysqli_num_rows($result);

?>

<div class="container mt-5">
    <table class="table table-bordered" style="text-align: center;">
        <thead>
            <tr>
                <th>Item name</th>
                <th>Item category</th>
                <th>Item weight (in kg)</th>
                <th>Item price</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php while($numrow = mysqli_fetch_assoc($result)){
                // print_r($numrow);
                // Array ( [id] => 3 [product_name] => tomato [product_category] => vegetable [item_weight] => kg [item_price] => 100 [created_date] => 2023-07-16 14:33:30 [updated_date] => 2023-07-16 14:33:30 )
                $id = $numrow["id"];
                // $seller_id = $numrow["seller_id"];
                $item_name = $numrow["product_name"];
                $item_category = $numrow["product_category"];
                $item_weight = $numrow["item_weight"];
                $item_price = $numrow["item_price"];
            ?>
            <tr>
                <td><?php echo $item_name; ?></td>
                <td><?php echo $item_category; ?></td>
                <td><?php echo $item_weight; ?></td>
                <td><?php echo $item_price; ?></td>
                <td>
                    <a href="seller_item_edit.php?id=<?php echo$id;?>" class="btn btn-info">Edit</a>
                    <a href="seller_item_delete.php?id=<?php echo $id;?>" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
</div>