<!doctype html>
<?php  include('../../const.php'); ?>
<html lang="en">
<head>
<title>Expert as a service</title>
    <?php 
      include_once("../../include/head.php");  
    ?>
</head>

<body>
<?php 
    include_once('../../include/topbar.php'); 
    showNav("services")
     ?>
    <div class="pageTop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Expert as a service</h1>
                    <div class="bread">
                        <a href="<?php echo SITEURL; ?>">Home</a> &gt; Expert as a service
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pageContent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="highlight">Interested in our Professional Services team <br />
                        to get SailPoint IdentityIQ up and running?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 contCol">
                    <img src="<?php echo SITEURL; ?>assets/img/together.jpg" />
                </div>
                <div class="col-md-5 col-sm-12 contCol">
                    <h2>Our Commitment</h2>
                    <p>
                        We commit to providing you with the premium professional and managed services at a competitive
                        price.</p>
                    <p>

                        With several consultants throughout the US and growing, we have the necessary expertise and
                        experience to carry out IAM operations for your organization.
                    </p>
                </div>
                <div class="col-md-5 col-sm-12 contCol">
                    <h2>Our Specialties</h2>
                    <h3>Configuration Management</h3>
                    <p>
                        We will work with teams within your organization to understand and gather requirements, then
                        develop solutions to integrate applications to your IdentityIQ.
                    </p>
                    <h3> Monitoring/Maintenance</h3>
                    <p>
                        Monitor existing system performance | Software & version upgrades as needed | Active monitoring
                    </p>
                    <h3>Admin Services</h3>
                    <p>
                        We will provide services like sending out email notifications, production support, documentation
                        and knowledge transfer</p>
                </div>
                <div class="col-md-6 col-sm-12 contCol align-right">
                    <img class="float-end" src="<?php echo SITEURL; ?>assets/img/handcomp.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="expertServices">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2 class="h2">Expert as a Service</h2>
                    <p class="text-center">Your very own SailPoint IdentityIQ admin that does it all for you. The power
                        combination between SailPoint IdentityIQ and our admin services provides you comfort,
                        consistency for administrative tasks.</p>
                    <form action="#" class="normalForm">

                        <div class="form-row">
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control user" placeholder="Your name">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control mail" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control phone" placeholder="Phone No.">
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <input type="text" class="form-control company" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-11 offset-sm-1">
                                <textarea class="form-control message"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="weserve">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li class="bank"><span>Bank &amp; Financial Institutions</span></li>
                        <li class="insurance"><span>Insurance</span></li>
                        <li class="healthcare"><span>Health Care</span></li>
                        <li class="retail"><span>Retail &amp; E-Commerce</span></li>
                        <li class="telecom"><span>Telecom</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once("../../include/footer.php") ?>

</body>

</html>