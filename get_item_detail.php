<?php include("dbinfo.php");
// print_r($_POST);

$id = $_REQUEST["id"];

$selectQuery = "SELECT * FROM seller_items WHERE id = '$id'";

$result = mysqli_query($con, $selectQuery);

$rowcount = mysqli_num_rows($result);

if($rowcount > 0){
    $rowdata = mysqli_fetch_assoc($result);
    
    echo json_encode($rowdata);
}else{
    echo "no data available";
}


?>