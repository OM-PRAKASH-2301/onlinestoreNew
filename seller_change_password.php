<?php include("seller_navbar.php"); ?>
<style>
  body{
    background-color: skyblue;
    width: 100%;
    height: 100%;
  }
  .side-image{
    margin-top: 50px;
    border-radius: 80px;
    height: 102%;
  }
  .contact {
    margin-top: 50px;
    margin-bottom: 40px;
    border-radius: 80px;
    padding: 20px;
    text-align: center;
    background-color: yellowgreen;
  }
  
</style>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-8 map">
                <div style="width: 100%; height: 400px">
                <img src="img24.jpg" alt="side-image" class="side-image">
                </div>
            </div>
            <div class="col-md-4 contact">
                <h2> Change your password</h2>
                <form action="seller_password_detail.php" method="post">
                    <div class="form-group">
                        <label for="old_password">Old password</label>
                        <input type="text" name="old_password" id="old_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="new_password">New password</label>
                        <input type="text" name="new_password" id="new_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm_new_password">Confirm new password</label>
                        <input type="text" name="confirm_new_password" id="confirm_new_password" class="form-control">
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" style="width:60%; border-radius: 10px;">
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
