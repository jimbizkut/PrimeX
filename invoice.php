<?php

    $servername = "localhost";
    $username = "primex54_primex";
    $password = "123456";
    $dbname = "primex54_primex";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Invoice - PrimeX Management</title>

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

        <!--body wrapper start-->
        <div class="wrapper">

            <div class="panel">
                <div class="panel-body invoice">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                            <img class="inv-logo" src="images/primex/primexlogo.png" alt=""/> 
                        </div>


                        <div class="col-md-12 col-sm-12">
                            <h1 class="invoice-title">Tax Invoice</h1>
                        </div>
                    </div>
                    <div class="invoice-address">
                        <div class="row">
                            <div class="col-md-5 col-sm-5"> 
                                <p>CKH AUTO DETAILING SDN BHD (1199213-W)<br/>
                                NO.28 &amp; 30, Jalan Mahogani 1, <br/>
                                Bandar Botanic, 41200 Klang <br/>
                                Selangor D.E. Malaysia <br/>
                                Tel: +603-3318 6537</p>

                            </div>
                            <div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
                                <div id="invoice-number" class="inv-col"><span>Invoice No:</span> <?php echo $_POST["invoice-number"]; ?></div>
                                <div id="invoice-date" class="inv-col"><span>Invoice Date :</span> <?php echo date("d F Y") ?></div> 
                                <div id="member-name" class="inv-col"><span>Member Name :</span> <?php echo $_POST["member-name"] ?></div> 
                                <div id="member-id" class="inv-col"><span>Member ID :</span> <?php echo $_POST["member-id"] ?></div> 
                                <div id="car-number" class="inv-col"><span>Car Number :</span> <?php echo $_POST["car-number"] ?></div> 
                            </div>
                        </div>
                    </div>
               
                    <table class="table table-bordered table-invoice">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Item Description</th>
                            <th class="text-center">Payment Type</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <h4>Account Top Up</h4> 
                                </td>
                                <td id="payment-type_id" data-value="<?php echo $_POST["payment-type"] ?>" class="text-center"><?php 
                                        $sql = "SELECT name FROM payment_type WHERE (id = " . $_POST["payment-type"] . ")";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["name"];
                                            }
                                        } else {
                                            echo "no data";
                                        }
                                    ?>                                        
                                </td> 
                                <td class="text-center"><strong id="topup-amount">RM <?php echo $_POST["topup-amount"] ?>.00</strong></td>
                            </tr>
                            <tr> 
                                <td class="text-right" colspan="3"> 
                                    <p class="text-right" ><strong>GRAND TOTAL</strong></p>
                                </td>
                                <td class="text-center"> 
                                    <p><strong>RM <?php echo $_POST["topup-amount"] ?>.00</strong></p>
                                </td>
                            </tr>

                        </tbody> 
                    </table>
                </div>


                <div class="panel-body invoice p-t-0 p-b-0">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center footer-invoice">
                            PrimeX Auto Detailing | www.primexdetailing.my
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <button type="button" name="generate-invoice" class="btn btn-danger print-btn" onclick="savePrint();"><i class="fa fa-print"></i> Print </button>
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
    function savePrint() {
        var invoice_number = $("#invoice-number").first().contents().filter(function() { return this.nodeType == 3; }).text().replace(" ", "");
        var invoice_date = $("#invoice-date").first().contents().filter(function() { return this.nodeType == 3; }).text().replace(" ", "");
        var member_name = $("#member-name").first().contents().filter(function() { return this.nodeType == 3; }).text().replace(" ", "");
        var member_id = $("#member-id").first().contents().filter(function() { return this.nodeType == 3; }).text().replace(" ", "");
        var car_number = $("#car-number").first().contents().filter(function() { return this.nodeType == 3; }).text().replace(" ", "");
        var payment_type_id = $("#payment-type_id").attr("data-value").replace(" ", "");
        var topup_amount = $("#topup-amount").text().replace(" ", "").replace("RM", "");
        
        $.ajax({
            type: "POST",
            url: "/store-invoice.php",
            data: { invoice_number: invoice_number,  invoice_date: invoice_date, member_name: member_name, member_id: member_id, car_number: car_number, payment_type_id: payment_type_id, topup_amount: topup_amount},
            dataType: "html",
            success: function(data) {
                if (data == "db-conn-failed") {
                    alert("Database connection problem. Please re-try!");
                }
                else if (data == "error") {
                    alert("Error while trying to save data. Please re-try!");
                }
                else {
                    window.open("invoice-print.php?invoiceNumber=" + invoice_number + "&invoiceDate=" + invoice_date + "&memberName=" + member_name + "&memberID=" + member_id + "&carNumber=" + car_number + "&paymentTypeID=" + payment_type_id + "&topupAmount=" + topup_amount);
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
