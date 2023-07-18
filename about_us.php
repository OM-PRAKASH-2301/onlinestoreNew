<?php include("navbar.php");?>

<style>
        body{
            background-image: url(img24.jpg);
        }
        .about-container {
            margin-top: 50px;
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
            height: 400px;
            background-image: url("img23.jpg");
            background-size: cover;
            border-radius: 150px;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row about-container">
        <div class="col-md-6">
                <div class="about-image"></div>
            </div>
            <div class="col-md-6 about">
                <div style="text-align: center;"><h2><u> <br> About Us</u></h2></div>
                <div class="about-text">
                <p>We are provide all items in one store.</p>
                <p>Provide easy to understand the business model.</p>
                <p>We are believing to customer requirement fulfill.</p>
                <p>Satisfactory customer feedback is our best trust.</p>
              </div>
              </div>
            
        </div>
    </div>

    <?php include("footer.php") ?>
