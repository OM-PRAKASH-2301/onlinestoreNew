<?php include("dbinfo.php");

// echo "<pre>";
// print_r($_POST);

// Array
// (
//     [old_password] => 123456
//     [new_password] => 123456
//     [confirm_new_password] => 123456
//     [submit] => Submit
// )

$old_password           = $_POST["old_password"];
$new_password           = $_POST["new_password"];
$confirm_new_password   = $_POST["confirm_new_password"];


//below if condition is reduce the time if we new password and confirm new password is not equal so this will not required to go detabase
if($confirm_new_password == $new_password ){
    $selectQuery = "SELECT * FROM customer_detail WHERE password = '$old_password'";

    $result = mysqli_query($con, $selectQuery);

    $rowcount = mysqli_num_rows($result);

    $id = mysqli_insert_id($con);

    if($rowcount > 0){
        echo "password changed successfully";

        $rowdata = mysqli_fetch_assoc($result);

        $id = $rowdata["id"];    
        //UPDATE `customer_detail` SET `id`='[value-1]',`username`='[value-2]',`father_name`='[value-3]',`mother_name`='[value-4]',`address`='[value-5]',`contactno`='[value-6]',`email`='[value-7]',`password`='[value-8]',`panno`='[value-9]',`adharno`='[value-10]',`photo`='[value-11]',`created_date`='[value-12]',`updated_date`='[value-13]' WHERE 1

    $updateQuery = "UPDATE customer_detail SET password = '$new_password' WHERE id = '$id'";

    $result = mysqli_query($con, $updateQuery);

    if($result){
        //echo "password changed in database successfully";
        
        header("location:customer_change_password.php");

    }else{
        echo "password not changed in database";
    }

    }else{
        echo "invalid old password";
    }
}else{
    echo "new password and confirm new password is not matching";
}


// 

//in below method it will take some time because through this method fisrtly putted old password is checked is matching with database password or not so it will take some time

// $selectQuery = "SELECT * FROM customer_detail WHERE password = '$old_password '";

// $result = mysqli_query($con, $selectQuery);

// $rowcount = mysqli_num_rows($result);

// if($rowcount > 0){
//     //echo "password matched";
//     if($new_password == $confirm_new_password){
//         echo "password changed successfully";
//     }else{
//         echo "new password and confirm new password is not matched";
//     }
// }else{
//     echo "pasword not matched";
// }





?>