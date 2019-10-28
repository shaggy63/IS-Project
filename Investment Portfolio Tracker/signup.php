<?php require('includes/authenticate_inc.php')?>

<html>

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    
       <link rel="stylesheet" type="text/css" href="css/control_style.css">   
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>

<body>
    <?php require_once('navbar.php') ?>

    <div class="main-section">
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form action="" method="POST" name="validate" onsubmit="return checkSignup(this);" autocomplete="off">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <i class="fa fa-user-circle-o fa-inverse fa-5x" aria-hidden="true"></i>
                                    </div>
                                    Sign up
                                </div>
                                
                                <div class="card-form">
                                    <div id="alert_danger" class="alert alert-danger" role="alert"><?= $_SERVER['alertDanger'] ?></div>

                                    <div class="input-group form-margin">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input name="txt_firstname" type="text" class="form-control" placeholder="First Name" maxlength="15" onblur="" required value="<?php echo $firstname; ?>">
                                    </div>

                                    <div class="input-group form-margin">
                                        <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <input name="txt_email" type="email" class="form-control" placeholder="Email" maxlength="38" required value="<?php echo $email; ?>">
                                    </div>

                                    <div class="input-group form-margin">
                                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                        <input name="txt_pass" type="password" class="form-control" placeholder="Password" minlength="8" required>
                                    </div>

                                    <div class="input-group form-margin">
                                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                        <input name="txt_confirmpass" type="password" class="form-control" placeholder="Confirm Password" minlength="8" required>
                                    </div>
                                </div>

                                <div class="card-button">
                                    <div class="checkbox switch-container">
                                        <label class="col-md-2 switch">
                                        <input type="checkbox" name="chbx_terms">
                                                                           </div>

                                    <div class="form-margin">
                                        <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">  
                                            <button name="btn_signup" type="Submit" class="btn btn-main">SIGN UP</button>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/navbar_script.js"></script>
    <script src="js/validate_script.js"></script>
</body>

</html>