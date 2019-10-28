<?php require('includes/index_inc.php')?>


<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio Secure</title>
    <link rel="" href="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/navbar_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <link rel="stylesheet" href="css/control_style.css">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/aboutus_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <section class="banner-section">
        <div class="container">    
            <div class="row">
                <div class="col-md-12 top-margin">
                    <h2>People Make Many Investments Yearly</h2>
                    <h1>TRACK YOURS</h1>
      
                    <div class="banner-btn">              
                        <button type="button" id="btn_started" class="btn btn-primary btn-white" >Get Started</button>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/investing.svg">
    </section>

    <section class="section description-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <img src="img/trader.jpg" alt="An image related to finance in day to day life">
                    </div>    
                </div>
                <div class="col-sm-6">
                   
                    <p>Track Your Porfolio </p>
                    <p>Investments are a vital part to earn more </p>
                 
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-off working-section">
        <div class="container">
            <h3>How This Plaform works</h3>
            <h4>Just <strong>3</strong> simple steps to your goal</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <img src="img/wallet.svg">
                            <p>1. Plan your Investment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <img src="img/track.svg">
                            <p>2. Track Your investment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <img src="img/returns.svg">
                            <p>3. Track your returns</p> 
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

    <section class="section choose-section">
        <div class="container">
            <h3>Why Choose This Platform</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-list-alt fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Simple</h4>
                        <p>Simple and easy step by step procedure that you can follow</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-calculator fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Calculations</h4>
                        <p>All the complex calculations are done for you</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-area-chart fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Analysis</h4>
                        <p>Provison of the results in an easily understandable charts</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-trophy fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Quality</h4>
                        <p>Provision of quality services to our users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/navbar_script.js"></script>
    <script src="js/validate_script.js"></script>
</body>

</html>