<?php

    $servername = "localhost";
    $username = "primex";
    $password = "123456";
    $dbname = "primexdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Receipt - PrimeX Management</title>

  <!--icheck-->
  <link href="js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="css/clndr.css" rel="stylesheet">


  <!--common-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="images/primex/primexlogo.png" alt="PrimeX Auto Detailing" class="img-responsive"></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="images/primex/primex-icon.png" alt="PrimeX Auto Detailing" class="img-responsive"></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">
 

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list"><a href="index.html"><i class="fa fa-clock-o"></i> <span>Service Queue</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index.html"> Pending</a></li>
                        <li><a href="completed.html"> Completed</a></li>
                    </ul>
                </li>
 

                <li><a href="members.html"><i class="fa fa-users"></i> <span>Members</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-usd"></i> <span>Sales</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Sales Order</a></li> 
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>Catalogue</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Merchandise</a></li>
                        <li><a href="#"> Services</a></li> 
                    </ul>
                </li>
 

                <li class="menu-list"><a href=""><i class="fa fa-bar-chart"></i> <span>Reports</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Sales Report</a></li>
                        <li><a href="#"> Service Report</a></li>
                        <li><a href="#"> Technician Report</a></li>
                        <li><a href="#"> Referral Report</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Settings</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Service Category</a></li>
                        <li><a href="#"> Vehicle Type</a></li>
                        <li><a href="#"> Unit of Measurement</a></li>
                        <li><a href="#"> Color</a></li> 
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Roles</a></li>
                        <li><a href="#"> Users</a></li>
                        <li><a href="#"> Branch</a></li> 
                    </ul>
                </li>

                <li class="active"><a href="receipt-tmp.html"><i class="fa fa-file"></i> <span>Invoice</span></a></li>

                <!-- <li class="menu-list"><a href="#"><i class="fa fa-user-circle"></i> <span>Administrator</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#.html"> My Profile</a></li> 
                    </ul>
                </li>
 
                 
                <li><a href="login.html"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li> -->

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
           <!--  <form class="searchform" Top Up="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form> -->
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">
                            <img src="images/primex/primex-icon.png" alt="" />
                            Administrator
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li> 
                            <li><a href="login.html"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->



         <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Invoice
            </h3> 
            
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

        <div class="row">

            <form class="form-horizontal adminex-form" method="post" action="invoice.php">
               
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Invoice Number:</label>
                    <div class="col-sm-9">
                        <label class="control-label">INV-BB<?php 
                            $sql = "SELECT id FROM invoice ORDER BY id DESC LIMIT 0,1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo sprintf('%06d', ((int)$row["id"] + 1));
                                }
                            } else {
                                echo "000001";
                            }
                        ?>
                        </label>
                        
                        <?php 
                            $sql = "SELECT id FROM invoice ORDER BY id DESC LIMIT 0,1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<input type='hidden' name='invoice-number' value='INV-BB" . sprintf('%06d', ((int)$row["id"] + 1)) . "' />";
                                }
                            } else {
                                echo "<input type='hidden' name='invoice-number' value='INV-BB000001' />";
                            }                            
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Car Number</label>
                    <div class="col-sm-9">
                        <input id="car-number" type="text" name="car-number" class="form-control" onblur="getMembersInfo();" placeholder="Car Number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Member ID</label>
                    <div class="col-sm-9">
                        <input id="member-id" readonly="readonly" type="text" name="member-id" class="form-control"  placeholder="Member ID">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Member Name</label>
                    <div class="col-sm-9">
                        <input id="member-name" readonly="readonly" type="text" name="member-name" class="form-control" placeholder="Member Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Top Up Amount</label>
                    <div class="col-sm-9">
                        <div class="input-group m-bot15">
                            <span class="input-group-addon">RM</span>
                            <input type="text" name="topup-amount" class="form-control text-right" value="100">
                            <span class="input-group-addon ">.00</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Payment Type</label>
                    <div class="col-sm-9">
                        <select class="form-control m-bot15" name="payment-type">
                            <?php 
                                $sql = "SELECT id, name FROM payment_type";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>no data</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" name="generate-invoice" class="btn btn-danger print-btn">Generate Invoice</button>
                </div>
            </form>
        </div>

 

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2017 &copy; PrimeX Auto Detailing
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<script src="js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="js/iCheck/jquery.icheck.js"></script>
<script src="js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="js/flot-chart/jquery.flot.selection.js"></script>
<script src="js/flot-chart/jquery.flot.stack.js"></script>
<script src="js/flot-chart/jquery.flot.time.js"></script>
<script src="js/main-chart.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script type="text/javascript">
    function getMembersInfo() {
        var car_number = $("#car-number").val();

        $.ajax({
            type: "POST",
            url: "/get-members-info.php",
            data: { car_number: car_number },
            dataType: "html",
            success: function(data) {
                if (data != "") {
                    if (data.indexOf(";") !== -1) { 
                        $("#member-id").val(data.split(";")[0]);
                        $("#member-name").val(data.split(";")[1]);
                        $("#member-id").prop("readonly", true);
                        $("#member-name").prop("readonly", true);
                    }
                }
                else {
                    $("#member-id").prop("readonly", false);
                    $("#member-name").prop("readonly", false);
                }

                
            }
        });
    }
</script>


</body>
</html>

<?php 
    $conn->close();
?>