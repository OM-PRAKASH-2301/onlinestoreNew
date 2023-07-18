<?php include("seller_navbar.php"); ?>


<style>
  body{
    background-image: url(img5.avif);
    width: 100%;
    height: 100%;
  }
  .carousel-item {
            height: 300px;
        }

        .carousel-image {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        .images{
            background-size: 50%;
            margin: 5px;
            width: 100px;
            height: 100px;
            padding: 10px;
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
    <div> <br><br><br>
            <h2 style="text-align: center">WELCOME TO OC ONLINE SHOP</h2> <br>
            <p style="text-align: center">Sell your products or items easy, Quickly and safely</p>
        </div>
    </div>

    <?php include("footer.php");  ?>
