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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Invoice Print - PrimeX Management</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head> 

<body class="print-body">

<section> 
     
        <!--body wrapper start-->
        <div class="wrapper">

            <div class="panel">
                <div class="panel-body invoice panel-printbody-height">
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
                                <div class="inv-col"><span>Invoice No:</span> <?php echo $_GET["invoiceNumber"]; ?></div>
                                <div class="inv-col"><span>Invoice Date :</span> <?php echo $_GET["invoiceDate"]; ?></div> 
                                <div class="inv-col"><span>Member Name :</span> <?php echo $_GET["memberName"]; ?></div> 
                                <div class="inv-col"><span>Member ID :</span> <?php echo $_GET["memberID"]; ?></div> 
                                <div class="inv-col"><span>Car Number :</span> <?php echo $_GET["carNumber"]; ?></div> 
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
                                <td class="text-center"><?php 
                                    $sql = "SELECT name FROM payment_type WHERE (id = " . $_GET["paymentTypeID"] . ")";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo $row["name"];
                                        }
                                    } else {
                                        echo "no data";
                                    }
                                ?></td> 
                                <td class="text-center"><strong>RM <?php echo $_GET["topupAmount"]; ?></strong></td>
                            </tr>
                            <tr> 
                                <td class="text-right" colspan="3"> 
                                    <p class="text-right" ><strong>GRAND TOTAL</strong></p>
                                </td>
                                <td class="text-center"> 
                                    <p><strong>RM <?php echo $_GET["topupAmount"]; ?></strong></p>
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
        </div>
        <!--body wrapper end-->
 
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


<!-- <script type="text/javascript">
    window.print();
</script> -->
</body>
</html>
<?php 
    $conn->close();
?>
