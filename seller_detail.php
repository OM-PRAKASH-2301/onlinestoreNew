<?php include("navbar.php");
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

// Array
// (
//     [name] => Om Prakash
//     [fathername] => Gopal Ram
//     [address] => Vill-mudpar post-uparwah
//     [email] => Omdewangan01@gmail.com
//     [password] => 123456
//     [contactno] => 1234567891
//     [adharno] => 123456789101
//     [panno] => 456321
// )
// Array
// (
//     [photo] => Array
//         (
//             [name] => img1.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp1\tmp\phpC210.tmp
//             [error] => 0
//             [size] => 9878
//         )

// )
$filename = $_FILES["photo"]["name"];
$tmp_name = $_FILES["photo"]["tmp_name"];

$directory_name = "photo";
if(!is_dir($directory_name)){
  mkdir($directory_name);
}

$targetfile = $directory_name."/".basename($filename);
if(move_uploaded_file($tmp_name, $targetfile)){
  echo "file uploaded successfully";
}else{
  echo "something went wrong";
}

if($_POST["name"] != ''){
    $name = $_POST["name"];
}else{
    echo "please enter name";
    exit;
    die;
}
if($_POST["fathername"] != ''){
    $name = $_POST["fathername"];
}else{
    echo "please enter father name";
    exit;
    die;
}
if($_POST["address"] != ''){
    $name = $_POST["address"];
}else{
    echo "please enter address";
    exit;
    die;
}
if($_POST["email"] != ''){
    $name = $_POST["email"];
}else{
    echo "please enter email";
    exit;
    die;
}
if($_POST["password"] != ''){
    $name = $_POST["password"];
}else{
    echo "please enter password";
    exit;
    die;
}
if($_POST["contactno"] != ''){
    $name = $_POST["contactno"];
}else{
    echo "please enter contactno";
    exit;
    die;
}
if($_POST["adharno"] != ''){
    $name = $_POST["adharno"];
}else{
    echo "please enter adharno";
    exit;
    die;
}
if($_POST["panno"] != ''){
    $name = $_POST["panno"];
}else{
    echo "please enter panno";
    exit;
    die;
}

$name =$_POST["name"];
$fathername = $_POST["fathername"];
$address = $_POST["address"];
$email =$_POST["email"];
$password =$_POST["password"];
$contactno =$_POST["contactno"];
$adharno =$_POST["adharno"];
$panno =$_POST["panno"];
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
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td>Fathers name</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $fathername; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $address; ?></td>
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
                        <td>Contact no</td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $contactno; ?></td>
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
