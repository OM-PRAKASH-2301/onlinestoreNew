<?php include("navbar.php"); ?>

<style>
  body{
    background-image: url(img5.avif);
    width: 100%;
    height: 100%;
  }
  
</style>
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="img11.avif" alt="Image 1">
                <div class="carousel-caption">
                    <h3>WELCOME TO OUR ONLINE SHOP</h3>
                    <p>One shop for all items</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="img10.jpg" alt="Image 2">
                <div class="carousel-caption">
                    <h3>WELCOME TO OUR ONLINE SHOP</h3>
                    <p>All categories available here</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="img7.jpg" alt="Image 3">
                <div class="carousel-caption">
                    <h3>WELCOME TO OUR ONLINE SHOP</h3>
                    <p>You can buy items as a become a seller</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="img14.jpg" alt="Image 4">
                <div class="carousel-caption">
                    <h3>WELCOME TO OUR ONLINE SHOP</h3>
                    <p>One shop for all perople</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row" style="margin-top: 30px; padding : 50px;">
                <div class="col-sm-6 row-content">
                   <h4>One store <br> One shop</h4>
                </div>
                <div class="col-sm-6 row-content">
                    <h4>All categories <br> available here</h4>
                </div>
                </div>
                <div class="row" style="margin-top: 20px; padding : 20px;">
                <div class="col-sm-6 row-content">
                <h4> Online payment <br> acceptable</h4>
                </div>
                <div class="col-sm-6 row-content">
                <h4>Best services <br> provider</h4>
                </div>
                </div>
            </div>
            <div class="col-md-4 signin-form" style="margin-bottom: 0;">
                <div style="text-align: center;"><h2>Sign In</h2></div>
                <!-- Add your PHP sign-in form code here -->
                <form method="post" action="signin.php">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="role">Select who you are</label><br>
                        <div class="form-check form-check-inline">&nbsp; &nbsp;&nbsp; &nbsp;
                            <input class="form-check-input" type="radio" name="role" id="customer" value="customer" checked>
                            <label class="form-check-label" for="customer">Customer</label>
                        </div>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="seller" value="seller">
                            <label class="form-check-label" for="seller">Seller</label>
                        </div>
                    </div>
                    <div style="text-align: center; padding: 5%;">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" style="width:60%; border-radius:15px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php");  ?>
