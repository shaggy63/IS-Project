<?php require('includes/goal_inc.php') ?>

<html>

<head>
    <title>Investment</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    

 
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/goal_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-min_style.css">


</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <section class="goal-section">
            <div class="container-fluid">
                <div id="alert_success" class="alert alert-success" role="alert"><?= $_SERVER['alertSuccess'] ?></div>
                <div id="alert_danger" class="alert alert-danger" role="alert"><?= $_SERVER['alertDanger'] ?></div>
                
                <div class="card">
                    <div class="card-header">New Investment</div>
                    <div class="card-form">
                        <form class="form-horizontal" action="" method="POST" onsubmit="return checkPlanDetails(this);" autocomplete="off">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Select Asset</label>
                                   <div class="btn-group btn-input clearfix margin-bottom">
                                        <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown">
                                            <span data-bind="label">Select Asset</span><span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">ARM Cement</a></li>
                                            <li><a href="#">B.O.C Kenya</a></li>
                                            <li><a href="#">Bamburi Cement</a></li>
                                            <li><a href="#">Barclays Bank of Kenya</a></li>
                                            <li><a href="#">BK  Group</a></li>
                                            <li><a href="#">Britam(Kenya)</a></li>
                                            <li><a href="#">BAT Kenya</a></li>
                                            <li><a href="#">Car & General(K) </a></li>
                                            <li><a href="#">Carbacid Investment</a></li>
                                            <li><a href="#">Centum Investment</a></li>
                                            <li><a href="#">CIC Insurance Group</a></li>
                                            <li><a href="#">Co-operative Bank of Kenya</a></li>
                                            <li><a href="#">Crown Paints Kenya</a></li>
                                            <li><a href="#">Deacons East Africa</a></li>
                                            <li><a href="#">Diamond Trust Bank Kenya</a></li>
                                            <li><a href="#">Eaagads</a></li>
                                            <li><a href="#">East African Breweries</a></li>
                                            <li><a href="#">East African Cables</a></li>
                                            <li><a href="#">East African Portland Cement</a></li>
                                            <li><a href="#">Equiy Group Holdings</a></li>
                                            <li><a href="#">Eveready East Africa</a></li>
                                            <li><a href="#">Express Kenya</a></li>
                                            <li><a href="#">Flame Tree Group Holdings</a></li>
                                            <li><a href="#">HF Grouo</a></li>
                                            <li><a href="#">Home Afrika</a></li>
                                            <li><a href="#">I&M Holdings</a></li>
                                            <li><a href="#">Jubilee Holdings</a></li>
                                            <li><a href="#">Kakuzi</a></li>
                                            <li><a href="#">Kapchorua Tea Kenya</a></li>
                                            <li><a href="#">KCB Group</a></li>
                                            <li><a href="#">KenGen Company</a></li>
                                            <li><a href="#">Kenya Airways</a></li>
                                            <li><a href="#">Kenya Orchards</a></li>
                                            <li><a href="#">Kenya Power & Lighting</a></li>
                                            <li><a href="#">Kenya Re-insurance Corporation</a></li>
                                            <li><a href="#">Kurwitu Ventures</a></li>
                                            <li><a href="#">Liberty Keny Holdings</a></li>
                                            <li><a href="#">Limuru Tea</a></li>
                                            <li><a href="#">Longhorn Publishers</a></li>
                                            <li><a href="#">Mumias Sugar Co</a></li>
                                            <li><a href="#">Nairobi Business Ventures</a></li><li><a href="#">Mid</a></li>
                                            <li><a href="#">Nairobi Securities Exchange</a></li><li><a href="#">Mid</a></li>
                                            <li><a href="#">Nation Media Group</a></li><li><a href="#">Mid</a></li>
                                            <li><a href="#">National Bank of Kenya</a></li><li><a href="#">Mid</a></li>
                                            <li><a href="#">NIC Group</a></li><li><a href="#">Olympia Capital Holdings</a></li>
                                            <li><a href="#">Safaricom</a></li><li><a href="#">Sameer Africa</a></li>
                                            <li><a href="#">Sanlam Kenya</a></li><li><a href="#">Sasini</a></li>
                                            <li><a href="#">Stanbic Holdings</a></li><li><a href="#">Standard Chartered Bank Kenya</a></li>
                                            <li><a href="#">Standard Group</a></li><li><a href="#">Stanlib Fahari I-REIT/a></li>
                                            <li><a href="#">Total Kenya</a></li>
                                            <li><a href="#">TPS Eastern Africa</a></li>
                                            <li><a href="#">TransCentury</a></li>
                                            <li><a href="#">Uchumi Supermarkets</a></li>
                                            <li><a href="#">Umeme</a></li>
                                            <li><a href="#">Unga Group</a></li>
                                            <li><a href="#">Williamson Tea Kenya</a></li>
                                            <li><a href="#">WPP Scangroup</a></li>
                                        </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Purchase Price?</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Ksh</span>
                                        <input name="txt_goalcost" type="number" class="form-control" placeholder="eg: 30,000" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Investment priority</label>
                                    <div class="btn-group btn-input clearfix margin-bottom">
                                        <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown">
                                            <span data-bind="label">Select investment priority</span><span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">High</a></li>
                                            <li><a href="#">Mid</a></li>
                                            <li><a href="#">Low</a></li>
                                        </ul>
                                        <input name="sel_goalpriority" type="hidden" id="dropdown-data" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group-button">
                                    <div class="col-md-12">
                                    <button name="btn_add" type="submit" class="btn btn-primary btn-main btn-wd pull-right">Add Investment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-4" id="goal<?php echo $row['GoalID'];?>">
                            <div class="card">
                                <div class="card-header"> 
                                    <div class="row">
                                        <div class="col-md-7 col-xs-7 name">                                                                    
                                            <?php echo $row['Name']; ?>
                                        </div>
                                        <div class="col-md-5 col-xs-5">                                            
                                            <button type='button' class="btn btn-signs" data-toggle="modal" data-target="#modalDelete" data-id="<?php echo $row['GoalID'];?>">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            <button type='button' class="btn btn-signs" data-toggle="modal" data-target="#modalEdit" data-id="<?php echo $row['GoalID'];?>">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <?php if($row['Priority'] == "High") { ?>
                                                <span class="label label-danger priority"><?php echo $row['Priority']; ?></span>
                                            <?php } else if($row['Priority'] == "Mid") { ?>
                                                <span class="label label-info priority"><?php echo $row['Priority']; ?></span>
                                            <?php } else if($row['Priority'] == "Low") { ?>
                                                <span class="label label-warning priority"><?php echo $row['Priority']; ?></span>
                                            <?php } ?>
                                            <span class="label label-success type">Monthly</span>
                                        </div>
                                    </div> 
                                </div>
                                <div class="card-content">
                                    <div class="form-group col-md-12">
                                        <label class="title">Purchase Price</label>
                                        <label class="value cost"><?php echo "Ksh ".$row['Cost']; ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="title">Estimated Period</label>
                                        <label class="value period"><?php echo $row['Period']." months"; ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="title">Amount</label>
                                        <label class="value amount"><?php echo "Ksh".$row['Amount']; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="modal fade" id="modalDelete" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Investment</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Confirm delete investment ?</p>
                                </div>
                                <div class="modal-footer">
                                    <form class="form-horizontal" action="" method="POST">
                                        <input name="txt_deletegoalID" type="text" value="" hidden>
                                        <button name="btn_delete" type="submit" class="btn btn-main">Delete</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>       
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalEdit" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form-horizontal" action="" method="POST">               
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Goal</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Asset</label>
                                                    <input name="txt_updategoalname" type="text" class="form-control" placeholder="eg: Laptop" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Purchase Price</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Ksh</span>
                                                        <input name="txt_updategoalcost" type="number" class="form-control" placeholder="eg: 30,000" value="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Investment priority</label>
                                                     <div class="btn-group btn-input clearfix margin-bottom">
                                                        <button type="button" class="btn btn-transparent dropdown-toggle form-control" data-toggle="dropdown" id="toggle-priority">
                                                            <span id="priority" data-bind="labelpriority">Select investment priority</span><span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-priority" role="menu">
                                                            <li><a href="#">High</a></li>
                                                            <li><a href="#">Mid</a></li>
                                                            <li><a href="#">Low</a></li>
                                                        </ul>
                                                        <input name="sel_updategoalpriority" type="text" id="dropdown-priority" hidden>
                                                    </div>
                                                </div>     
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input name="txt_updategoalID" type="text" value="" hidden>        
                                        <button name="btn_update" type='submit' class="btn btn-main">Update</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once('footer-min.php'); ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/control_script.js"></script>
    <script src="js/validate_script.js"></script>
    <script src="js/goal_script.js"></script>
     <script src="js/dropdown_script.js"></script>
</body>

</html>