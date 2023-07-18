<?php include ("customer_navbar.php");

$id = $_REQUEST["id"];


$selectQuery = "SELECT * FROM customer_detail WHERE id = '$id'";

$result = mysqli_query($con, $selectQuery);

$rowcount = mysqli_num_rows($result);
$id = mysqli_insert_id($con);

$rowdata = mysqli_fetch_assoc($result);

//print_r($rowdata) ;                      ---->for checking it is giving output or not
//echo $id;

// if($rowcount > 0){
//     echo "successfully selected";       ---->for checking it is giving output or not
// }else{
//     echo "something went wrong";
// }

// Array ( [id] => 2 [username] => Om Prakash [father_name] => Gopal Ram [mother_name] => Savita Bai [address] => mudpar 
// [contactno] => 2147483647 [email] => 0 [password] => 12345 [panno] => 491444 [adharno] => 2147483647 [photo] => 
// IMG-20220309-WA0018.jpg [created_date] => 0000-00-00 00:00:00 [updated_date] => 0000-00-00 00:00:00 ) 0

$id = $rowdata["id"];
$username = $rowdata["username"];
$father_name = $rowdata["father_name"];
$mother_name = $rowdata["mother_name"];
$address = $rowdata["address"];
$contactno = $rowdata["contactno"];
$email = $rowdata["email"];
$password = $rowdata["password"];
$panno = $rowdata["panno"];
$adharno = $rowdata["adharno"];
$photo = $rowdata["photo"];


?>
<style>
    body{
        background-image: none;
        background-color: lightgreen;
    }
</style>
<div class="container mt-2">
    <h2 style="text-align: center;"> <u> User Registration Form</u> </h2><br>
    <form action="customer_update.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row">
        <div class="form-group col-sm-4">
                <label for="username">Username</label>
                <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" id="username" placeholder="Please enter your username" >
            </div>
            <div class="form-group col-sm-4">
                <label for="fathername">Father's name</label>
                <input type="text" class="form-control" value="<?php echo $father_name; ?>" name="fathername" id="fathername" placeholder="Please enter your father's name" >
            </div>
            <div class="form-group col-sm-4">
                <label for="mothername">Mother's name</label>
                <input type="text" class="form-control" value="<?php echo $mother_name; ?>" name="mothername" id="mothername" placeholder="Please enter your mother's name" >
            </div>
            <div class="form-group col-sm-4">
                <label for="address">Address</label>
                <input type="text" class="form-control"value="<?php echo $address; ?>" name="address" id="address" placeholder="Please enter your address" >
            </div>
            <div class="form-group col-sm-4">
                <label for="contactno">Contact no</label>
                <input type="number" class="form-control" value="<?php echo $$contactno; ?>" name="contactno" id="contactno" placeholder="Please enter your contact no" >
            </div>
            <div class="form-group col-sm-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" id="email" placeholder="Please enter your email" >
            </div>
            <div class="form-group col-sm-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" id="password" placeholder="Please enter your password" >
            </div>
            <div class="form-group col-sm-4">
                <label for="panno">Pan no</label>
                <input type="text" class="form-control" value="<?php echo $panno; ?>" name="panno" id="panno" placeholder="Please enter your panno" >
            </div>                                                                      
            <div class="form-group col-sm-4">
                <label for="adharno">Adhar no</label>
                <input type="number" class="form-control" value="<?php echo $adharno; ?>" name="adharno" id="adharno" placeholder="Please enter your adharno" >
            </div>
            <div class="form-group col-sm-4">
                <label for="photo">Upload file</label>
                <input type="file" class="form-control"value="<?php echo $photo; ?>" name="photo" id="photo" >
            </div>
        </div>
        <input type="submit" class="btn btn-success">
    </form>
</div>

<?php include("footer.php"); ?>

<script>
    function validateForm(){
        let username = document.querySelector(`#username`)?.value;
        if(username == ""){
            alert ("please enter username")
            return false;
        }else{
            let length1 = username.length;
            console.log(length1)
            if(length1 > 25){
                alert ('username should not greater than 25');
                return false;
            }
        }
        let fathername = document.querySelector(`#fathername`)?.value;
        if(fathername == ""){
            alert ("please enter father name")
            return false;
        }else{
            let length2 = fathername.length;
            console.log(length2)
            if(length2 > 15){
                alert ('father name should not greater than 15');
                return false;
            }
        }
        let address = document.querySelector(`#address`)?.value;
        if(address == ""){
            alert ("please enter address")
            return false;
        }else{
            let length4 = address.length;
            console.log(length4)
            if(length4 > 30){
                alert ('address should not greater than 30');
                return false;
            }
        }
        let contactno = document.querySelector(`#contactno`)?.value;
        if(contactno == ""){
            alert ("please enter contactno")
            return false;
        }else{
            let length5 = contactno.length;
            console.log(length5)
            if(length5 > 11){
                alert ('contactno should not greater than 11');
                return false;
            }
        }
        let email = document.querySelector(`#email`)?.value;
        if(email == ""){
            alert ("please enter email")
            return false;
        }else{
            let length6 = email.length;
            console.log(length6)
            if(length6 > 30){
                alert ('email should not greater than 30');
                return false;
            }
        }
        let password = document.querySelector(`#password`)?.value;
        if(password == ""){
            alert ("please enter password")
            return false;
        }else{
            let length7 = password.length;
            console.log(length7)
            if(length7 > 6){
                alert ('password should not greater than 6');
                return false;
            }
        }
        let panno = document.querySelector(`#panno`)?.value;
        if(panno == ""){
            alert ("please enter panno")
            return false;
        }else{
            let length8 = panno.length;
            console.log(length8)
            if(length8 > 8){
                alert ('panno should not greater than 8');
                return false;
            }
        }
        let adharno = document.querySelector(`#adharno`)?.value;
        if(adharno == ""){
            alert ("please enter adharno")
            return false;
        }else{
            let length9 = adharno.length;
            console.log(length9)
            if(length9 > 12){
                alert ('adharno should not greater than 12');
                return false;
            }
        }
        let photo = document.querySelector(`#file`)?.value;
        if(file == ""){
            alert ("please enter file")
            return false;
        }
        
        function validateEmail(email) {
  // Regular expression for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  return emailRegex.test(email);
}

    }
</script>