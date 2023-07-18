<?php 
include("customer_navbar.php");
// include("seller_navbar.php");
// $seller_id = $_SESSION["seller_id"];
// $id = $_SESSION["id"];

$selectQuery = "SELECT * FROM seller_items ";

$result = mysqli_query($con, $selectQuery);

$numrow = mysqli_num_rows($result);

?>
<style>
    .profile-pic {
            margin-top: 20px;
            text-align: center;
            margin-right: 80px;
        }
        .profile-pic img {
            width: 120px;
            height: 120px;
            margin-left: 280px;
            /* border-radius: 5%; */
        }
</style>

<div class="container mt-5">
    <table class="table table-bordered" style="text-align: center;">
        <thead>
            <tr>
                <th>Item name</th>
                <th>Item category</th>
                <th>Item weight (in kg)</th>
                <th>Item price</th>
                <th>Item pic</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php while($numrow = mysqli_fetch_assoc($result)){
                // print_r($numrow);
                // Array ( [id] => 2 [seller_id] => [product_name] => potato [product_category] => vegetable [item_weight] => kg [item_price] => 50 [item_pic] => [updated_date] => 2023-07-16 14:32:56 [created_date] => 2023-07-16 14:32:56 )
                $id = $numrow["id"];
                // $seller_id = $numrow["seller_id"];
                $item_name = $numrow["product_name"];
                $item_category = $numrow["product_category"];
                $item_weight = $numrow["item_weight"];
                $item_price = $numrow["item_price"];
                $item_pic = $numrow["item_pic"];
        
                $selectQuery = "SELECT * FROM seller_"
            ?>
            <tr>
                <td><?php echo $item_name; ?></td>
                <td><?php echo $item_category; ?></td>
                <td><?php echo $item_weight; ?></td>
                <td><?php echo $item_price; ?></td>
                <td><?php echo $seller_name; ?></td>
                <td>
                <div class="profile-pic">
                    <img src="photo/<?php echo $item_pic;?>" alt="Profile Picture">
                </div>
                </td>
                <td><button onclick="viewmore('<?php echo $id?>')">
                    View more
                </button></td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span onclick="close_model()" class="close">&times;</span>
   <div id="modal-data"></div>
  </div>

</div>


<script>
    function viewmore(id){
        $.ajax({
            url: 'get_item_detail.php',
            type: 'post',
            data:{
                id : id
            },
            success : function(responseData){
                console.log(responseData);
                response = JSON.parse(responseData);
                console.log(response);
                console.log(response['id'])
                console.log(response['seller_id'])
                console.log(response['product_name'])
                console.log(response['product_category'])
                console.log(response['item_weight'])
                console.log(response['item_price'])
                console.log(response['item_pic'])

                let data = `
            
                    <table>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>${response['id']}</td>
                            </tr>
                            <tr>
                                <td>seller id</td>
                                <td>${response['seller_id']}</td>
                            </tr>
                            <tr>
                                <td>product name</td>
                                <td>${response['product_name']}</td>
                            </tr>
                            <tr>
                                <td>product category</td>
                                <td>${response['product_category']}</td>
                            </tr>
                            <tr>
                                <td>item weight</td>
                                <td>${response['item_weight']}</td>
                            </tr>
                            <tr>
                                <td>item price</td>
                                <td>${response['item_price']}</td>
                            </tr>
                            <tr>
                                <td>item pic</td>
                                <td> <img src="photo/${response['item_pic']}"/></td>
                            </tr>
                            
                        </tbody>
                    </table>
                `;
                document.querySelector(`#modal-data`).innerHTML = data;


                document.getElementById("myModal").style.display = "block";
            }
        })
    }


    function close_model(){
        // alert ("close moti");
        document.getElementById("myModal").style.display = "none";
    }
</script>

<!-- <table>
    <tbody>
        <tr>
            <td>id</td>
            <td>1</td>
        </tr>
        <tr>
            <td>seller id</td>
            <td>1234</td>
        </tr>
        <tr>
            <td>product name</td>
            <td>baigan</td>
        </tr>
        <tr>
            <td>product category</td>
            <td>  </td>
        </tr>
        <tr>
            <td>item weight</td>
            <td>  </td>
        </tr>
        <tr>
            <td>item price</td>
            <td>  </td>
        </tr>
        <tr>
            <td>item pic</td>
            <td>  </td>
        </tr>
        
    </tbody>
</table> -->

<!-- Array
(
    [id] => 15
    [seller_id] => 
    [product_name] => baigan
    [product_category] => vegetable
    [item_weight] => kg
    [item_pic] => 25
    [item_pic] => img22.jpg
    [updated_date] => 2023-07-16 20:48:09
    [created_date] => 2023-07-16 20:48:09
) -->