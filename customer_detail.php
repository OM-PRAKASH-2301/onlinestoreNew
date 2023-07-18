<?php include("navbar.php"); 

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

if($_POST["username"] != ""){
    $username = $_POST["username"];
}else{
    echo "please enter username";
    exit;
    die;
}
if($_POST["fathername"] != ""){
    $fathername = $_POST["fathername"];
}else{
    echo "please enter fathername";
    exit;
    die;
}
if($_POST["mothername"] != ""){
    $mothername = $_POST["mothername"];
}else{
    echo "please enter mothername";
    exit;
    die;
}
if($_POST["address"] != ""){
    $address = $_POST["address"];
}else{
    echo "please enter address";
    exit;
    die;
}
if($_POST["contactno"] != ""){
    $contactno = $_POST["contactno"];
}else{
    echo "please enter contactno";
    exit;
    die;
}
if($_POST["email"] != ""){
    $email = $_POST["email"];
}else{
    echo "please enter email";
    exit;
    die;
}
if($_POST["password"] != ""){
    $password = $_POST["password"];
}else{
    echo "please enter password";
    exit;
    die;
}
if($_POST["panno"] != ""){
    $panno = $_POST["panno"];
}else{
    echo "please enter panno";
    exit;
    die;
}
if($_POST["adharno"] != ""){
    $adharno = $_POST["adharno"];
}else{
    echo "please enter adharno";
    exit;
    die;
}


$filename = $_FILES["photo"]["name"];
$tmp_name = $_FILES["photo"]["tmp_name"];

$directory_name = "photo";
if(!is_dir($directory_name)){
    mkdir($directory_name);
}
$targetfile = $directory_name."/".basename($filename);
if(move_uploaded_file($tmp_name, $targetfile)){
    //echo "file uploaded successfully";
}else{
    echo "something went wrong";
}

$username = $_POST["username"];
$fathername = $_POST["fathername"];
$mothername = $_POST["mothername"];
$address = $_POST["address"];
$contactno = $_POST["contactno"];
$email = $_POST["email"];
$password = $_POST["password"];
$panno = $_POST["panno"];
$adharno = $_POST["adharno"];

?>
<style>
    .profile-container{
        display: flex;
        align-items: flex-start;
    }
    .profile-image{
        max-width: 300px;
        margin-right: 20px;
    }
</style>

<div class="container">
    <div class="mt-5"><h2>Profile Details</h2></div>
    <hr>
    <div class="profile-container">
        <img src="<?php echo $directory_name. "/".$filename; ?>" alt="profile image" class="profile-image">
        <div>
            <table class="table table-bordeed" style="width: 400px; margin-bottom: 20px;">
                <thead>
                <tr>
                    <th><input type="hidden"> Description</th>
                    <th><input type="hidden">&nbsp; &nbsp; &nbsp; &nbsp;  Details</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $username; ?></td>
                    </tr>
                    <tr>
                        <td>Fathers name</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $fathername; ?></td>
                    </tr>
                    <tr>
                        <td>Mothers name</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $mothername; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $address; ?></td>
                    </tr>
                    <tr>
                        <td>Contact no</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $contactno; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $password; ?></td>
                    </tr>
                    <tr>
                        <td>Pan no</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $panno; ?></td>
                    </tr>
                    <tr>
                        <td>Adhar no</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $adharno; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>





