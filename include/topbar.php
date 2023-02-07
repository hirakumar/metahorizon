<?php

function showActiveClass($page,$compare){
    if($page == $compare){
        return 'active';
    }else {
        return '';
    }
}
function showNav ($page){
    echo '<div class="topBar">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><a href="#" class="logo"><img src="'.SITEURL.'assets/img/metahorizon.png" /></a></div>
            <div class="col-md-7">
                <div class="mainnav">
                    <ul>
                        <li class="'.showActiveClass($page,"home").'">
                            <a href="'.SITEURL.'">Home</a>
                        </li>
                        <li class="'.showActiveClass($page,"about-us").'">
                            <a href="'.SITEURL.'about-us/">About Us</a>
                        </li>
                        <li class="hasChild '.showActiveClass($page,"services").'">
                            <a href="#">Services</a>
                            <ul>
                                <li>
                                    <a href="'.SITEURL.'services/identity-access-management/">Identity &amp; Access
                                        Management</a>
                                </li>
                                <li>
                                    <a href="'.SITEURL.'services/expert-as-a-service/">Expert as Services</a>
                                </li>
                                <li>
                                    <a href="'.SITEURL.'services/devops-cloud-and-automation/">DevOps Cloud &amp;
                                        Automation</a>
                                </li>
                                <li>
                                    <a href="'.SITEURL.'services/custom-services/">Custom Software Development</a>
                                </li>
                                <li>
                                    <a href="'.SITEURL.'services/business-intelligence/">Business Intelligence</a>
                                </li>
                            </ul>
                        </li>
                        <li '.showActiveClass($page,"sailpoint").'>
                            <a href="'.SITEURL.'sailpoint/">Sailpoint</a>
                        </li>
                       
                        <li '.showActiveClass($page,"contact-us").'>
                            <a href="'.SITEURL.'contact-us/">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tel"><img src="'.SITEURL.'assets/img/chat.png" /> <span>(469) 345 -7495</span></div>
            </div>
        </div>
    </div>
</div>';
}
?>