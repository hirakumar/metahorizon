<!doctype html>
<?php  include('../const.php'); ?>
<html lang="en">

<head>
    
    <title>Contact Us</title>
    <?php 
      include_once("../include/head.php");  
    ?>
</head>

<body>
<body>
<?php 
    include_once('../include/topbar.php');
 
 
    showNav("about-us")
     ?>
    <div class="pageTop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Contact Us
                    </h1>
                    <div class="bread">
                    <?php  echo '<a href="'.SITEURL.'">Home</a> &gt; Contact Us'  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Drop Us a Line</h2>
                    <form action="#" class="normalForm">

                        <div class="form-row">
                            <div class="col-sm-5 ">
                                <input type="text" class="form-control user" placeholder="Your name">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control mail" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-5 ">
                                <input type="text" class="form-control phone" placeholder="Phone No.">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control company" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-11 ">
                                <textarea class="form-control message"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h2>Connect with Us</h2>
                    <p class="address">
                       <strong> Metahorizon Inc.</strong> <br />
                        1303 W Walnut Hill, Suite 340 <br />
                        Irving, Texas 75038 <br/> <br />
                        (469) 345-7495 <br />
                        contact@metahorizon.com
                    </p>
                    <p class="address">
                        <strong>  Metahorizon Solutions Pvt. Ltd</strong> <br />
                        Sidh Vihar, Nehrugram, <br />
                        Dehradun Uttarakhand,  India, 248010
                    </p>
                    <p class="address">
                        <strong>  Metahorizon Institute of Information Technology Service Pvt. Ltd.</strong> <br />
                        Naxal, Kathmandu, Nepal <br />
                       (977) 9849 280 233
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="featuresRow">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="features">
                        <ul>
                            <li class="costEffective">
                                Cost Effective
                            </li>
                            <li class="weekend">
                                Weekend Support <br> (On Demand)
                            </li>
                            <li class="support"> 8x5 Support
                            </li>
                            <li class="assistance">
                                Implementation <br>
                                Assistance/Support
                            </li>
                            <li class="assistance">
                                Extensive Sailpoint <br>
                                Experience
                            </li>
                            <li class="post">
                                Post Implenentation <br> Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("../include/footer.php") ?>
    </body>
    </html>
