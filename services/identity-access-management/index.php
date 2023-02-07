<!doctype html>
<?php  include('../../const.php'); ?>
<html lang="en">
<head>
<title>Identity & Access Management</title>
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
                    <h1>Identity &amp; Access Management</h1>
                    <div class="bread">
                        <a href="?php echo SITEURL; ?>">Home</a> &gt; Identity &amp; Access Management
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pageContent wellmaintain">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="highlightHeader">ONCE IT'S BUILT, WE'LL MAINTAIN IT!</h2>
                    <p class="bold">With Identity Management Engineering Resources from <br /> Metahorizon, we have you
                        covered.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-sm-12 contCol">
                    <img src="<?php echo SITEURL; ?>assets/img/secure.jpg" />
                </div>
                <div class="col-md-5 col-sm-12 contCol">

                    <p>Our team of seasoned IAM experts can help you continuously optimize your IAM investment,
                        implement additional efficiencies, increase uptime and improve your users' experience.
                    </p>
                    <p>We offer dedicated engineering resources with the IAM expertise needed to refine your program and
                        ensure it's running proficiently. Our engineers are available to you for limited engagements or
                        on an ongoing managed services basis.
                    </p>
                    <p>From troubleshooting to software patches, our engineers can ensure your IAM program is running
                        smoothly.
                    </p>


                </div>

            </div>
        </div>
    </div>

    <div class="benefit">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="sectionHeader">How do you benefit</h2>
                </div>
                <div class="col-md-5 offset-md-6">
                    <ul>
                        <li class="budget">Easy budgeting with flat rates</li>
                        <li class="resource">Free up your internal resources</li>
                        <li class="hiring">Save instead of hiring more</li>
                        <li class="support">24 X 7 Support</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="identityTabs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="advance-tab" data-bs-toggle="tab"
                                data-bs-target="#advance" type="button" role="tab" aria-controls="advance"
                                aria-selected="true">Advanced Support Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="operational-tab" data-bs-toggle="tab"
                                data-bs-target="#operational" type="button" role="tab" aria-controls="operational"
                                aria-selected="false">Operational Maintenance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="knowledge-tab" data-bs-toggle="tab" data-bs-target="#knowledge"
                                type="button" role="tab" aria-controls="knowledge" aria-selected="false">Knowledge and
                                Reporting</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="control-tab" data-bs-toggle="tab" data-bs-target="#control"
                                type="button" role="tab" aria-controls="control" aria-selected="false">Take Control of
                                the Access</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="advance" role="tabpanel"
                            aria-labelledby="advance-tab">
                            <p class="tabdesc">A dedicated group of IAM experts is on hand to troubleshoot and resolve
                                your IAM challenges, including:</p>
                            <ul class="num">
                                <li>
                                    <strong>Full Tier III Support</strong>
                                    <span>Team of specialists qualified to manage your complex problems.</span>
                                </li>
                                <li>
                                    <strong>Partial Tier II Support</strong>
                                    <span>Collaborative approach between our experts and your level II team to analyze
                                        the impact of infrastructure changes to your Identity program.</span>
                                </li>
                                <li>
                                    <strong>Root Cause Analysis</strong>
                                    <span>Utilize our years of expertise to determine the underlying cause of anomalies
                                        and formulate permanent solutions.</span>
                                </li>
                                <li>
                                    <strong>Bug Fixes</strong>
                                    <span>We identify and resolve programming bugs/glitches in your Identity
                                        environment.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="operational" role="tabpanel" aria-labelledby="operational-tab">
                            <p class="tabdesc">Offering care and maintenance across your application environment to
                                ensure workflows are maintained and optimized</p>
                            <ul class="num">
                                <li>
                                    <strong>Application monitoring </strong>
                                    <span>Proactive monitoring of your identity program to anticipate issues and ensure
                                        that application processes perform within expected scope. </span>
                                </li>
                                <li>
                                    <strong> Adaptive Adjustments</strong>
                                    <span>Adjust Identity workflows in accordance with changes to your business's
                                        vision. </span>
                                </li>
                                <li>
                                    <strong>Updates and Patches </strong>
                                    <span> We’ll keep your identity program up-to-date with security enhancements and
                                        new feature adoption.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="knowledge" role="tabpanel" aria-labelledby="knowledge-tab">
                            <p class="tabdesc">Utilize our knowledge base to frequently communicate educated
                                recommendations along with providing recurring reporting</p>
                            <ul class="num">
                                <li>
                                    <strong>Dedicated Success Manager </strong>
                                    <span>Ensure maximum success and request resolutions with a dedicated Cyber project
                                        manager. </span>
                                </li>
                                <li>
                                    <strong>Enhanced Reporting</strong>
                                    <span>We'll provide enhanced metrics on the health and usage of your Identity
                                        program. </span>
                                </li>
                                <li>
                                    <strong>Consulting and Guidance </strong>
                                    <span>We provide expert advice on how to reduce operational impact and maximize
                                        efficiencies while implementing every change.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="control" role="tabpanel" aria-labelledby="control-tab">
                            <p class="tabdesc">Our Access Management Services allow you to take full control and manage
                                user access in your IT landscape, without sacrificing security nor user experience, to
                                enhance your security posture and operation efficiency.</p>
                            <ul class="num">
                                <li>
                                    <strong>Active Directory Bridge </strong>
                                    <span>Consolidate authentication in Active Directory – including UNIX </span>
                                </li>
                                <li>
                                    <strong>Enterprise Single Sign-On</strong>
                                    <span>Conveniently access multiple applications by logging in once</span>
                                </li>
                                <li>
                                    <strong>Multi-factor Authentication </strong>
                                    <span>Authenticate users based on what they know, what they have and what they
                                        are</span>
                                </li>
                                <li>
                                    <strong>Risk-based Access </strong>
                                    <span>Provide access to resources based on dynamic risk assessment or confidence
                                        level of transaction using behavioral and contextual data analytics</span>
                                </li>
                                <li>
                                    <strong>Virtual Directory </strong>
                                    <span>Consolidate disparate data sources without migrating data to a single
                                        repository</span>
                                </li>
                                <li>
                                    <strong>DirectoryServices</strong>
                                    <span>Design and implement an enterprise directory for central authentication and
                                        authorization</span>
                                </li>
                                <li>
                                    <strong>Federation</strong>
                                    <span>Securely connect and exchange data with external data sources, cloud-based
                                        systems and partner applications</span>
                                </li>
                            </ul>
                        </div>
                    </div>

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