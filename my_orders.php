<?php include("customer_navbar.php");
// print_r($_POST);
// print_r($_SESSION);
$customer_id = $_SESSION["customer_id"];
// $id = $_REQUEST["email"];


// echo $id;
$selectQuary = "SELECT * FROM order_details WHERE customer_id = '$customer_id'";

$result = mysqli_query($con, $selectQuary);

$numrow = mysqli_num_rows($result);

// echo $numrow;

?>

<div class="container mt-5">
    <?php if(!$numrow){
        echo "You have not ordered any";
    }else{ ?>
    <form action="order_detail.php" method="post">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Sr No</td>
                <td>Order Date</td>
                <td>Order_id</td>
                <td>Order No</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
        <?php
         $i=1; 
         while($numrow = mysqli_fetch_assoc($result)){
            // print_r($numrow);
            // Array ( [id] => 9 [cart_id] => 25 [seller_id] => 3 [customer_id] => 10 [name] => Minesh kumar [email] => minesh@gmail.com [contact_no] => 7123 [pinno] => 7123 [houseno] => 7123 [city] => bhilai [updated_date] => 2023-07-23 13:15:22 [created_date] => 2023-07-23 09:45:22 [is_cancelled] => 0 [cancelled_date] => 0000-00-00 00:00:00 [order_id] => 5 [order_no] => ORD5 [product_id] => 16 [price] => 10000 [quantity] => 1 )

            $order_date = $numrow["updated_date"];
            $order_no = $numrow["order_no"];
            $order_id =$numrow["order_id"];
            $i++;


            ?>
            <tr>
                <td><?php $i; ?></td>
                <td><?php echo $order_date; ?></td>
                <td><?php echo $order_id; ?></td>
                <td><?php echo $order_no; ?></td>
                <td><input type="submit" name="more" id="more" value="More"></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </form>
    <?php } ?>
</div>