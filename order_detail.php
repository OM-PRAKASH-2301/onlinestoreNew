<?php include("customer_navbar.php");
// print_r($_REQUEST);
// Array ( [order_id] => 2 )

$order_id = $_REQUEST["order_id"];

$selectQuary = "SELECT order_details.*, seller_items.product_name, seller_items.item_pic as pic FROM `order_details` LEFT JOIN seller_items ON order_details.product_id = seller_items.id WHERE order_details.order_id = '$order_id' ORDER BY is_cancelled ASC";

$result = mysqli_query($con, $selectQuary);

$numrow = mysqli_num_rows($result);

$total_price = 0;
if($numrow > 0){
    $rowdata = mysqli_fetch_assoc($result);
    // print_r($rowdata);
    // Array ( [id] => 4 [cart_id] => 18 [seller_id] => 3 [customer_id] => 11 [name] => ccfgd [email] => dfds@gmail.com [contact_no] => 4555 [pinno] => 745896 [houseno] => 7 [city] => RAJ [updated_date] => 2023-07-22 22:52:40 [created_date] => 2023-07-22 19:22:40 [is_cancelled] => 0 [cancelled_date] => 0000-00-00 00:00:00 [order_id] => 1 [order_no] => ORD1 [product_id] => 14 [price] => 45 [quantity] => 1 [product_name] => capsicum [pic] => img9.jpg )

    $name = $rowdata["name"];
    $contact_no = $rowdata["contact_no"];
    $pinno = $rowdata["pinno"];
    $houseno = $rowdata["houseno"];
    $city = $rowdata["city"];
    $order_no = $rowdata["order_no"];
    $email = $rowdata["email"];
    $date = $rowdata["updated_date"];

}else{
    echo "Something went wrong";
}

?>

<style>
    body{
        background-image: none;
    }
    .orderhead{
        padding: 15px;
        text-align: left;
        background-color: lightgoldenrodyellow;
    }
    .order_no_date{
        background-color: antiquewhite;
        padding: 5px;
    }
    .item-photo{
        width: 70px;
        height: 70px;
    }
    .middle-table{
        width: 600px;
    }
    .enquery_image{
        background-color: gainsboro;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 30px;
    }
</style>

<div class="orderhead">
    <div><h3>Thank you for your order !</h3></div>
    <div><p>Order invoice has been sent to your <?php echo $email; ?></p></div>
</div><br>
<div class="container">
<div class="row order_no_date" >
   <div class="col-sm-2">Order ID: <?php echo $order_no;?></div>
   <div class="col-sm-2"></div>
   <div class="col-sm-2"></div>
   <div class="col-sm-2"></div>
   <div class="col-sm-2"></div>
   <div class="col-sm-2" style="text-align: end;">Date/Time: <br> <?php echo $date;?></div>
</div>
<div class="row" style="padding: 10px; background-color:beige;">
    
    <div class="col-sm-6">Contact <br> <?php echo $name;?> <br> ✆ &nbsp; <?php echo $contact_no ?> <br> ✉ &nbsp; <?php echo $email;?> </div>
    <div class="col-sm-6" style="text-align: end;"> Shipping Address <br><?php echo $houseno;?>&nbsp; <?php echo $city; ?>&nbsp;<?php echo $pinno; ?> <br> <br><i>Delivery</i> </div>
</div><br>
<table class="table table-border">
    <tbody>
        <?php 
        $result1 = mysqli_query($con, $selectQuary);
        while( $rowdata = mysqli_fetch_assoc($result1)){
            
            $id = $rowdata["id"];
                $price = $rowdata["price"];
                $product_name = $rowdata["product_name"];
                $pic = $rowdata["pic"];
                $quantity = $rowdata["quantity"];
                $is_cancelled = $rowdata["is_cancelled"];

                if(!$is_cancelled){
                    $total_price += $price*$quantity;
                }
                

                // if($is_cancelled){
                //     $total_price == 0;
                // }else{
                //     $total_price ++;
                // }
            ?>


        <tr>
            <td class="item-photo"><img class="item-photo" src="photo/<?php echo $pic;?>" alt="Profile Picture"></td>
            <td><?php echo $quantity;?>× <?php echo $product_name;?></td>
           
            <td class="middle-table"></td>
            <td style="text-align: end;">₹<?php echo $price*$quantity; ?>.00</td>
            <td>
                <?php if($is_cancelled){?>
                    <b><p class="text-danger">Cancelled </p></b>

                    <?php } else{?>
                <button style="width: 110px;" onclick="cancelitem('<?php echo $id?>')">
                    Cancel order
                </button>
                <?php }?>
            
            </td>
        </tr>
        <?php  } ?>
        <tr>
            <td><strong>TOTAL</strong></td>
            <td></td>
            <td class="middle-table"></td>
            <td style="text-align: end;">
            <strong> ₹<?php echo $total_price;?>.00</strong></td><td></td>
        </tr>
    </tbody>
</table>
<div class="enquery_image"><img style="width:100px; height:100px;" src="call-photo.avif" alt="enquiry_image">
<br><br>
Have any question regarding your order
<br>Contact us on our official website
<br> <a href="">www.oconline.com</a>
</div>
</div>

<script>
    function cancelitem(id){
    $.ajax({
        url: 'cancel_order_item.php',
        type: 'post',
        data:{
            id : id
        },
        success : function(responseData){
            window.location="?order_id=<?=$order_id?>";
            console.log(responseData);
        }
        
    })
}
</script>
