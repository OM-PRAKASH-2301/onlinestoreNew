<?php include("file.php"); 

$id = $_SESSION["seller_id"];
$seller_name = $_SESSION["seller_name"];


?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="seller_home.php">
            <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            OC Shop
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="seller_name" style="margin-left: 150px; color:aqua;">Welcome <?php echo $seller_name; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="seller_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller_edit.php">Edit Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller_add_item.php">Add Your Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller_item_list.php">Your Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller_change_password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
