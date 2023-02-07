<!doctype html>
<?php  include('const.php'); ?>
<html lang="en">

<head>
       <title>Metahorizon1</title>
   <?php include_once("include/head.php") ?>
</head>

<body>
    <?php 
     
    
    include_once('include/topbar.php');
    showNav("home")
     ?>
   <?php include_once('include/slider.php') ?>

    <div class="whowe">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 whoimg">
                    <span class="img"><img src="assets/img/one.jpg" alt="" title="" /></span>
                </div>
                <div class="col-sm-12 col-md-6 whocont">
                    <h2>WHO WE ARE</h2>
                    <p>
                        Spanning over a decade in the IT world, Metahorizon has achieved the highest level of technology
                        and domain expertise to deal with the ever-changing and improving features in technology. </p>
                    <p> We offer our in-house shared services, onshore as well as offshore managed services to ensure
                        cost savings of our clients, leading to fast turnaround time, and increased ROI. </p>
                    <a href="<?php echo SITEURL; ?>about-us/" class="more"> read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- who we are ended -->
    <div class="wedo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>WHAT WE DO</h2>
                    <p class="desc">Metahorizon provides the most secure Identity Security platform, protecting your
                        essential and valuable assets with the Zero Trust principle, along with this we also do DevOps,
                        technical support, and many more.

                    </p>
                    <div class="services">
                        <div class="identity item">

                            <img class="img" src="assets/img/identity.jpg" />
                            <div class="itemContent">
                                <h3>Identity &amp; Access Management</h3>
                                <p>Be Prepared : Become CyberFit</p>
                                <a href="services/identity-access-management/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="expert item">
                            <img class="img" src="assets/img/expert.jpg" />
                            <div class="itemContent">
                                <h3>Expert as a Service for your needs</h3>
                                <p>Get an expert for your business</p>
                                <a href="services/expert-as-a-service/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="devops item">
                            <img class="img" src="assets/img/robot.jpg" />
                            <div class="itemContent">
                                <h3>DevOps, Cloud &amp; Automation</h3>
                                <p>The Enterprise Cloud of hope is here</p>
                                <a href="services/devops-cloud-and-automation/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="custom item">
                            <img class="img" src="assets/img/software.jpg" />
                            <div class="itemContent">
                                <h3>Custome Software &amp; Development</h3>
                                <p>Tailor your software to become the best</p>
                                <a href="services/custom-services/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="intel item">
                            <img class="img" src="assets/img/analysis.jpg" />
                            <div class="itemContent">
                                <h3>Business Intelligence for Analytics</h3>
                                <p>Unleash the power of your data</p>
                                <a href="services/business-intelligence/" class="more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("include/weserve.php") ?>
    <?php include_once("include/footer.php") ?>

</body>

</html>