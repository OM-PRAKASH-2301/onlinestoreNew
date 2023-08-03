<?php include("customer_navbar.php");  

$item_price = 58000;

?>
  <div class="container">
    <h1>Payment Gateway</h1>
    <form method="post" action="payment_process.php">
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" value="<?php echo $item_price; ?>" id="amount" name="amount" readonly>
      </div>
      <div class="form-group">
        <label for="card_number">Card Number:</label>
        <input type="text" class="form-control" id="card_number" name="card_number" required>
      </div>
      <div class="form-group">
        <label for="expiry_date">Expiry Date:</label>
        <input type="text" class="form-control" id="expiry_date" name="expiry_date" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" class="form-control" id="cvv" name="cvv" required>
      </div>
      <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
  </div>
  
  <!-- Include Bootstrap JS and jQuery (required for some Bootstrap features) -->
<?php include("footer.php"); ?>
