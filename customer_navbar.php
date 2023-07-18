<?php include("file.php"); 

$id = $_SESSION["customer_id"];
$username = $_SESSION["email"];
$customer_name = $_SESSION["customer_name"];

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">
      <img src="logo.jpg" alt="Logo" width="50" height="40">
      OC shop
    </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a class="customer_name" style="color: white;"> Welcome
      <?php echo $username; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="customer_home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_edit.php?id=<?php echo $id?>">Edit details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="find_item.php">Find items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_order.php">Your orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_change_password.php">Change password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Add Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
