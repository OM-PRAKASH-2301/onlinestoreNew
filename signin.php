<?php include("dbinfo.php");

// echo "<pre>";
// print_r($_POST);

// Array
// (
//     [username] => omdewangan01@gmail.com
//     [password] => 123456
//     [role] => customer
//     [submit] => Submit
// )



$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

if($role == 'customer'){
    $selectQuery = "SELECT * FROM customer_detail WHERE email = '$username' AND password = '$password'"; 

    $result = mysqli_query($con, $selectQuery);

    $rowcount = mysqli_num_rows($result);

    if($rowcount > 0){
        echo "successfully login";

        $rowdata = mysqli_fetch_assoc($result);

        $_SESSION["email"] = $username;
        $_SESSION["password"] =$password;
        $_SESSION["role"] =$role;
        $_SESSION["customer_id"] = $rowdata["id"];
        $_SESSION["customer_name"] = $rowdata["name"];
        $_SESSION["photo"] = $rowdata["photo"];
        
        header("location:customer_home.php");
    }else{
        echo "something went wrong";
        header("location:index.php");
    }
}else{
    $selectQuery = "SELECT * FROM seller_detail WHERE email = '$username' AND password = '$password'";

    $result = mysqli_query($con, $selectQuery);
    $rowcount = mysqli_num_rows($result);

    if($rowcount > 0){
        //echo "2nd condition successful";
        $rowdata = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $username;
        $_SESSION["password"] =$password;
        $_SESSION["role"] = $role;
        $_SESSION["seller_id"] = $rowdata["id"];
        $_SESSION["seller_name"] = $rowdata["name"];
        $_SESSION["photo"] = $rowdata["photo"];

        header("location:seller_home.php");
    }else{
        echo "something went wrong";
        header("location:index.php");
    }
}



?>