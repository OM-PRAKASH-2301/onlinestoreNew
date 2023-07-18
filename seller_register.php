<?php include("navbar.php"); ?>
<style>
    body{
        background-image: url(s2.avif);
    }
    .about-container {
            margin-top: 10px;
            margin-bottom: 50px;
    }
    .about{
            margin-top: 50px;
            margin-bottom: 60px;
            border-radius: 150px;
            text-align: center;
            color: burlywood;
            background-color: #154141;
    }

    .about-image {
            height: 600px;
            margin-left: -20px;
            background-image: url("s1.avif");
            background-size: cover;
            border-radius: 50px;
            background-position: center;
    }
    .register-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 5px;
    }
  </style>

<div class="container mt-5">
        <!-- <div class="row about-container"> -->
        <div class="register-form">
          <h1 style="text-align: center;">Become a Seller ?? Register here</h1><br>
          <form method="POST" action="seller_insert.php" onsubmit="return validateForm()" enctype="multipart/form-data">
            <div class="row">
            <div class="form-group col-sm-4">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="fathername">Father name:</label>
              <input type="text" class="form-control" id="fathername" name="fathername" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <div class="form-group col-sm-4">
              <label for="contactno">Contact no</label>
              <input type="number" class="form-control" id="contactno" name="contactno" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="adharno">adhar no</label>
              <input type="number" class="form-control" id="adharno" name="adharno" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="panno">Pan no</label>
              <input type="number" class="form-control" id="panno" name="panno" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="photo">Profile pic</label>
              <input type="file" class="form-control" id="photo" name="photo" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:34%; margin-left:350px;">Register</button>
            </div>  
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>

  <script>
function validateForm(){
    let name = document.querySelector(`#name`)?.value;
    if(name == ""){
        alert ("please enter name")
        return false;
    }else{
        let lenght1 = name.length;
        console.log(lenght1)
        if(lenght1 > 15){
            alert ("Name should not greater than 15");
            return false;
        }
    }
    let fathername = document.querySelector(`#fathername`)?.value;
    if(fathername == ""){
        alert ("please enter fathername")
        return false;
    }else{
        let lenght2 = fathername.length;
        console.log(lenght2)
        if(lenght2 > 15){
            alert ("father name should not greater than 15");
            return false;
        }
    }
    let address = document.querySelector(`#address`)?.value;
    if(address == ""){
        alert ("please enter address")
        return false;
    }else{
        let lenght3 = address.length;
        console.log(lenght3)
        if(lenght3 > 25){
            alert ("address should not greater than 25");
            return false;
        }
    }
    let email = document.querySelector(`#email`)?.value;
    if(email == ""){
        alert ("please enter email")
        return false;
    }else{
        let lenght4 = email.length;
        console.log(lenght4)
        if(lenght4 > 25){
            alert ("email should not greater than 25");
            return false;
        }
    }
    let password = document.querySelector(`#password`)?.value;
    if(password == ""){
        alert ("please enter password")
        return false;
    }else{
        let lenght5 = password.length;
        console.log(lenght5)
        if(lenght5 > 6){
            alert ("password should not greater than 6");
            return false;
        }
    }
    let contactno = document.querySelector(`#contactno`)?.value;
    if(contactno == ""){
        alert ("please enter contactno")
        return false;
    }else{
        let lenght6 = contactno.length;
        console.log(lenght6)
        if(lenght6 > 13){
            alert ("contact no should not greater than 13");
            return false;
        }
    }
    let adharno = document.querySelector(`#adharno`)?.value;
    if(adharno == ""){
        alert ("please enter adharno")
        return false;
    }else{
        let lenght7 = adharno.length;
        console.log(lenght7)
        if(lenght7 > 12){
            alert ("adhar no should not greater than 12");
            return false;
        }
    }
    let panno = document.querySelector(`#panno`)?.value;
    if(panno == ""){
        alert ("please enter panno")
        return false;
    }else{
        let lenght8 = panno.length;
        console.log(lenght8)
        if(lenght8 > 6){
            alert ("panno should not greater than 6");
            return false;
        }
    }
    let photo = document.querySelector(`#panno`)?.value;
    if(panno == ""){
        alert ("please enter photo")
        return false;
    }
}





  function validateEmail(email) {
  // Regular expression for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  return emailRegex.test(email);
}

</script>

<?php include("footer.php"); ?>
