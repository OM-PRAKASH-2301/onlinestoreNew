<?php include("navbar.php"); ?>
<style>
  body{
    background-image: url(img23.jpg);
    width: 100%;
    height: 100%;
  }
  .map{
    margin-top: 20px;
    border-radius: 100px;
  }
  .contact {
    margin-top: 80px;
    margin-bottom: 80px;
    border-radius: 200px;
    text-align: center;
    background-color: yellowgreen;
  }
  

</style>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 map">
                <!-- Embedded Map -->
                <div style="width: 100%; height: 400px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14873.175886398418!2d81.11913963466826!3d21.259828034708878!2m3!1f0!2f0!3f0!3m2!
                    1i1024!2i768!4f13.1!3m3!1m2!1s0x3a296a8da69ba08b%3A0xc34a8282680b9fa2!2sMudpar%2C%20Chhattisgarh%20491444!5e0!3m2!1sen!2sin!4v1688962730444!5m2!1sen!2sin" 
                    width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 contact">
                <!-- Contact Details -->
                <h2><br> Contact Us</h2>
                <p><strong>Address:</strong> Rajnandgaon, Chhattisgarh</p>
                <p><strong>Email:</strong> ioc@gmail.com</p>
                <p><strong>Phone:</strong> +1234567890</p>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
