<!doctype html>
<?php  include('const.php'); ?>
<html lang="en">

<head>
       <title>Metahorizon : 🔒 Identity Security and Access Management Service</title>
       <meta name="description" content="Metahorizon provides the most secure Identity Security platform, protecting your essential and valuable assets with the Zero Trust principle, along with this we also do DevOps, technical support, and many more">
        <meta keywords ="identity, security, access, zero, trust" />
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
                    <span class="img">
                    <picture>
                        <source srcset="assets/img/one.webp" type="image/webp">
                        <source srcset="assets/img/one.jpg" type="image/jpeg"> 
                        <img src="assets/img/one.jpg" alt="Identity Security and Access Management" width="512" height="342" title="Identity Security and Access Management" />
                    </picture>
                       
                    </span>
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
                        <picture>
                            <source srcset="assets/img/identity.webp" type="image/webp">
                            <source srcset="assets/img/identity.jpg" type="image/jpeg"> 
                            <img class="img" src="assets/img/identity.jpg" alt="Identity Security and Access Management" title="Identity Security and Access Management" />
                        </picture>

                           
                            <div class="itemContent">
                                <h3>Identity &amp; Access Management</h3>
                                <p>Be Prepared : Become CyberFit</p>

                                <a href="services/identity-access-management/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="expert item">
                        <picture>
                            <source srcset="assets/img/expert.webp" type="image/webp">
                            <source srcset="assets/img/expert.jpg" type="image/jpeg"> 
                            <img class="img" src="assets/img/expert.jpg" alt="Expert as a Service for your needs" title="Expert as a Service for your needs" />
                        </picture>
                           
                            <div class="itemContent">
                                <h3>Expert as a Service for your needs</h3>
                                <p>Get an expert for your business</p>
                                <a href="services/expert-as-a-service/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="devops item">
                        <picture>
                            <source srcset="assets/img/robot.webp" type="image/webp">
                            <source srcset="assets/img/robot.jpg" type="image/jpeg"> 
                            <img class="img" src="assets/img/robot.jpg" alt="DevOps Cloud and Automation" title="DevOps Cloud and Automation" />
                        </picture>
                           
                            <div class="itemContent">
                                <h3>DevOps, Cloud &amp; Automation</h3>
                                <p>The Enterprise Cloud of hope is here</p>
                                <a href="services/devops-cloud-and-automation/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="custom item">
                        <picture>
                            <source srcset="assets/img/software.webp" type="image/webp">
                            <source srcset="assets/img/software.jpg" type="image/jpeg"> 
                            <img class="img" src="assets/img/software.jpg" alt="Custom Software Development" title="Custom Software Development" />
                        </picture>
                           
                            <div class="itemContent">
                                <h3>Custom Software &amp; Development</h3>
                                <p>Tailor your software to become the best</p>
                                <a href="services/custom-services/" class="more">read more</a>
                            </div>
                        </div>
                        <div class="intel item">
                        <picture>
                            <source srcset="assets/img/analysis.webp" type="image/webp">
                            <source srcset="assets/img/analysis.jpg" type="image/jpeg"> 
                            <img class="img" src="assets/img/analysis.jpg" alt="Business Intelligence for Analytics" title="Business Intelligence for Analytics" />
                        </picture>
                         
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