<?php include("dbinfo.php");

print_r($_POST);

print_r($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Order Form</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Order Form</h2>
  <form action="order.php" method="post">
    <div class="form-group">
      <label for="item">Item:</label>
      <input type="text" class="form-control" id="item" name="item" required>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="selfPickup" name="deliveryMethod" value="selfPickup" required>
      <label class="form-check-label" for="selfPickup">Self Pickup</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="delivery" name="deliveryMethod" value="delivery" required>
      <label class="form-check-label" for="delivery">Delivery</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Place Order</button>
  </form>
</div>

</body>
</html>