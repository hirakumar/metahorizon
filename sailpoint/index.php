<!doctype html>
<?php  include('../const.php'); ?>
<html lang="en">

<head>
    
    <title>Sailpoint</title>
    <?php 
      include_once("../include/head.php");  
    ?>
</head>

<body>
   
<?php 
    include_once('../include/topbar.php');
 
 
    showNav("sailpoint")
     ?>
    <div class="pageTop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Sailpoint</h1>
                    <div class="bread">
                    <?php  echo '<a href="'.SITEURL.'">Home</a> &gt; Sailpoint'  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  ">
        <div class="row">
            <div class="col pageContent">
                <h2 class="highlightHeader">History of Metahorizon </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="historyList">
                    <div class="history">
                        <div class="year">2012</div>
                        <h4>Incorporated</h4>
                        <p>
                            Established as a consulting firm with the <br> vision to provide highly experienced
                            <br>technical consultants.
                        </p>
                    </div>
                    <div class="history">
                        <div class="year">2013</div>
                        <h4>SailPoint Practice Launched</h4>
                        <p>
                            One of the first consulting companies in <br>Dallas-Fort Worth to provide highly <br>
                            skilled SailPoint Consultants
                        </p>
                    </div>
                    <div class="history">
                        <div class="year">2015</div>
                        <h4>Consolidation in IAM</h4>
                        <p>
                            Over 50+ consultants placed throughout <br>the US
                        </p>
                    </div>
                    <div class="history">
                        <div class="year">2018</div>
                        <h4>Expanded Globally</h4>
                        <p>
                            Established our global offices to provide <br>offshore SailPoint resources in Nepal,<br>
                            India &amp; Sri Lanka
                        </p>
                    </div>
                    <div class="history">
                        <div class="year">2021</div>
                        <h4>Rent-an-Expert </h4>
                        <p>
                            Added Rent-An-Expert to our portfolio of <br>services which includes Professional &amp; <br>
                            Managed Services
                        </p>
                    </div>
                </div>
                <div class="services">
                    <section class="searviceBlock professional">
                        <header>
                            <h3>Professional Services</h3>
                        </header>
                        <ul>
                            <li>Application Onboarding and Implementation Assistance </li>
                            <li>Instance Administration</li>
                            <li>Instance Configuration and Management </li>
                            <li>Hardware and Network Management Activity Data Source Configuration Services
                            </li>

                        </ul>
                    </section>
                    <section class="searviceBlock expert">
                        <header>
                            <h3> Expert as Service</h3>
                        </header>
                        <ul>
                            <li>Configuration Management </li>
                            <li>Professional Services Engagement</li>
                            <li>Maintenance</li>
                            <li>Troubleshooting</li>
                            <li>Email notifications</li>
                            <li>Linking existing identities with application
                                accounts</li>
                            <li>Production Support Documentation</li>

                        </ul>
                    </section>

                    <section class="searviceBlock manage">
                        <header>
                            <h3>Managed Services</h3>
                        </header>

                        <ul>
                            <li>Manage IT Cost </li>
                            <li>Increased efficiency</li>
                            <li>Reduce headcount</li>
                            <li>Product Support</li>
                        </ul>

                    </section>
                </div>
                <div class="globalMarket">
                    <h2>Global Market</h2>
                    <div class="map">
                        <div class="worldMap">
                            <img src="https://metahorizon.com/wp-content/uploads/2022/04/MAP.png">
                        </div>
                        <div>
                            <ul>
                                <li>USA</li>
                                <li>UK</li>
                                <li>NEPAL</li>
                                <li>SRILANKA</li>
                                <li>UAE</li>
                                <li>CANADA</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="expertServices">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2 class="h2">Expert as Service</h2>
                    <p class="text-center">Your very own SailPoint IdentityIQ admin that does it all for you. The power
                        combination between SailPoint IdentityIQ and our admin services provides you comfort,
                        consistency for administrative tasks.</p>
                        <form  action="https://api.web3forms.com/submit" class="normalForm" method="POST">
                        <input type="hidden" name="access_key" value="37b29eb9-d7a7-443e-b2d3-5de1e6d4f044" />
                        <input type="hidden" name="redirect" value="<?php echo SITEURL.'success/?page=sailpoint'; ?>">
                        <div class="form-row">
                            <div class="col-sm-5 ">
                                <input type="text" name="name" class="form-control user" placeholder="Your name">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="email" name="email" class="form-control mail" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-5 ">
                                <input type="text" name="phone" class="form-control phone" placeholder="Phone No.">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" name="company" class="form-control company" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-11 ">
                                <textarea name="message" class="form-control message"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <?php include_once("../include/footer.php") ?>


</body>

</html>