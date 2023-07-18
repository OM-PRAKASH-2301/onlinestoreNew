<?php include("seller_navbar.php"); ?>

<div class="container">
    <h2>Add Items</h2>
    <form method="POST" action="add_detail.php" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="product_category">Product Category:</label>
            <input type="text" class="form-control" id="product_category" name="product_category" required>
        </div>
        <div class="form-group">
            <label for="item_weight">Item Weight:</label>
            <input type="text" class="form-control" id="item_weight" name="item_weight" required>
        </div>
        <div class="form-group">
            <label for="item_price">Item Price:</label>
            <input type="number" class="form-control" id="item_price" name="item_price" required>
        </div>
        <div class="form-group">
            <label for="item_pic">item pic</label>
            <input type="file" class="form-control" id="item_pic" name="item_pic" required>
        </div>
        <button type="submit" class="btn btn-primary">Add in item list</button>
    </form>
</div>

</body>
</html>
<script>
    function validateForm(){
    let product_name = document.querySelector(`#product_name`)?.value;
    if(product_name == ""){
        alert ("please enter product name")
        return false;
    }
    let product_category = document.querySelector(`#product_category`)?.value;
    if(product_category == ""){
        alert ("please enter product category")
        return false;
    }
    let item_weight = document.querySelector(`#item_weight`)?.value;
    if(item_weight == ""){
        alert ("please enter item weight")
        return false;
    }
    let item_price = document.querySelector(`#item_price`)?.value;
    if(item_price == ""){
        alert ("please enter item price")
        return false;
    }

    function validateEmail(email) {
  // Regular expression for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  return emailRegex.test(email);
}

    }
</script>
