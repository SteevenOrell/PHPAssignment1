<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/16/2018
 * Time: 10:36 AM
 */?>

<body>

<div class="gtco-loader"></div>

<div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div id="gtco-logo"><a href="http://gblearn.com/courses/comp1230/2017/10/05/assignment-one-8-version-1-0/">Assignment1 PHP <em></em></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1 main-nav">
                    <ul>
                        <li class="active"><a href="main.php" data-nav-section="home">Home</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                        <li><a href="http://gblearn.com/" class="external">External</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <div id="gtco-hero" class="js-fullheight"  data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2>View List</h2>
                                <p><a href="ViewList.php" target="_blank" class="btn btn-primary btn-lg">View</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2>Creation of a new record</h2>
                                <p><a href="CreateRecord.php" target="_blank" class="btn btn-primary btn-lg">Add</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <h2>Modification of record</h2>
                                <p><a href="ModifyRecord.php" target="_blank" class="btn btn-primary btn-lg">Modify</a></p>
                            </div>
                        </div>
                    </div>
                </li>

            <li style="background-image: url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Remove a record from the list</h2>
                            <p><a href="RemoveRecord.php" target="_blank" class="btn btn-primary btn-lg">Delete</a></p>
                        </div>
                    </div>
                </div>
            </li>

            <li style="background-image: url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Search a record</h2>
                            <p><a href="SearchRecord.php" target="_blank" class="btn btn-primary btn-lg">Search</a></p>
                        </div>
                    </div>
                </div>
            </li>


            <li style="background-image: url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Export CSV format</h2>
                            <p><a href="non.csv" download class="btn btn-primary btn-lg">Export</a></p>
                        </div>
                    </div>
                </div>
            </li>

            <li style="background-image: url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Import CSV format</h2>
                            <p><a href="ImportRecord.php"  target="_blank" class="btn btn-primary btn-lg">Import</a></p>
                        </div>
                    </div>
                </div>
            </li>
            </ul>



        </div>
    </div>

    <div class="gtco-section-overflow">

        <div class="gtco-section" id="gtco-services" data-section="services">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="gtco-heading">
                            <h2 class="gtco-left">Purposes</h2>
                            <p>This website provides some abilities to the user to edit non-violent crime severity record(2008-2012).</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-monitor"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3>View List</h3>
                                        <p>User can check existing record.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-pencil"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3>Create record</h3>
                                        <p>User can create a new record which it is going to be added to the list.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-cog"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3>Modify a record</h3>
                                        <p>User can modify an existing record of the list.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-layout"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3>Delete a record</h3>
                                        <p>User can remove a record from the list if it exists.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeIn">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-search"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3> Search a record </h3>
                                        <p>User can search a specific record.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
									<span class="icon">
										<i class="icon-layers"></i>
									</span>
                                    <div class="feature-copy">
                                        <h3>Export and import  </h3>
                                        <p>User can export and import the list in CSV format. </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="gtco-section-overflow">
            <div id="gtco-counter" class="gtco-section">
                <div class="gtco-container">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                            <h2>Informations about the table</h2>

                        </div>
                    </div>
                         <h4> There are 29 records numbered to 1-29.</h4>
                         <h4> User should always refresh pages before executing wanted action.</h4>
                   <p> The crime severity index is calculated using Incident-based Uniform Crime Reporting Survey (UCR2) data. For the period from 1998 to 2008 Incident-based UCR2 data are not available for all respondents. In order to report this level of detail for police services still reporting to the Aggregate Uniform Crime Reporting Survey (UCR) over this time, a process of imputation was applied to derive counts for violations that do not exist on their own in the aggregate survey. For approximately 80% of the aggregate offence codes, there is a 1:1 mapping with a new incident-based violation code. For violations where this was not the case, such as the aggregate other Criminal Code category, it was necessary to estimate (impute) this figure using the distribution of other Criminal Code offences from existing Incident-based UCR2 respondents.
                    During the production of each year's crime statistics, data from the previous year are revised to reflect any updates or changes that have been received from the police services.
                    The methodology for calculating census metropolitan area (CMA) populations was modified in 2003. Starting in 1996, the populations for CMAs have been adjusted to reflect the actual policing boundaries within the CMA and do not reflect the official Statistics Canada population for these CMAs. CMA data are included within province-level data.
                    Police reported statistics may be affected by differences in the way police services deal with minor offences. In some instances, police or municipalities might chose to deal with some minor offences using municipal by-laws or provincial provisions rather than Criminal Code provisions. Counts are based on the most serious violation in the incident.
                    In 2012, it was discovered that the Montreal Police Service had been incorrectly applying the agreed upon definition for reporting child pornography incidents to the Uniform Crime Reporting Survey (UCR2). As such, the number of violations has been revised for the years 2008 to 2011.
                    The non-violent crime severity index includes all non-violent Criminal Code violations including traffic, as well as drug violations and all Federal Statutes.
                    During the revision of 2001 data for the province of Ontario, a discrepancy in methodology applied by the forces in the province using the Ontario Municipal and Provincial Police Automated Co-operative (OMPPAC) system was detected. These forces report approximately one-third of the total criminal incidents for the province and include the Ontario Provincial Police and about 60 small and mid-sized municipal forces. This discrepancy resulted in an over-count of less serious criminal incidents. During 2003 and 2004, the Canadian Centre for Justice Statistics (CCJS) consulted with affected police services and analyzed both historical Aggregate Uniform Crime Reporting Survey (UCR) data and more recent Incident-based Uniform Crime Reporting Survey (UCR2) microdata to determine the impact of this over-reporting. The effect at the Canada level was, on average, 1% per year from 1977 to 2000. This over-counting peaked in 1991, where it was estimated that the total crime rate for the country was over-estimated by approximately 1.8%. However, the overall historical trend changed very little. The impact in Ontario is more noticeable, but the overall trend is still very similar. On average, the effect was 2% to 3% per year, with the biggest change occurring in 1991, where the Ontario crime rate is 5% lower as a result of the adjustment. For further information, refer to the report: <A HREF="http://www.statcan.gc.ca/imdb-bmdi/document/3302_D13_T9_V1-eng.pdf">Summary of Historical Adjustments to Crime Data for Ontario 1977-2000</A>.
                    The census metropolitan area (CMA) of Ottawa-Gatineau was formerly known as Ottawa-Hull.
                    Abbotsford-Mission, British Columbia and Kingston, Ontario became new census metropolitan areas (CMAs) as of the 2001 Census. Moncton, New Brunswick, Peterborough, Ontario, Brantford, Ontario, Guelph, Ontario, Barrie, Ontario, and Kelowna, British Columbia became new CMAs as of the 2006 Census
                    In 2009, slight changes were made to the respondent-to-CMA mapping for this census metropolitan area (CMA) which have resulted in minor revisions to previously published data.
                    Prior to 1999, a number of Royal Canadian Mounted Police (RCMP) detachments in Saskatchewan were double counting the number of actual offences of impaired driving. This over-counting was corrected in 1999, therefore, comparisons with previous years should be made with caution. It is recommended that the analysis of impaired driving be based on persons charged data rather than actual offences.
                    Youth crime in British Columbia may be somewhat undercounted due to the Crown charge-approval system in place whereby, even for minor offences, there must be approval by the Crown before charges are laid after police have made an arrest. This approval is based on the substantial likelihood of conviction.
                    1998 data in this table for Northwest Territories also includes Nunavut. In 1999, Nunavut, which comprises the eastern part of the old Northwest Territories, officially became a Canadian territory. Starting in 1999, data are displayed separately for the Northwest Territories and Nunavut.

                   </p>


                </div>
            </div>
        </div>





    <div class="gtco-section-overflow">
        <div id="gtco-counter" class="gtco-section">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Fun Facts</h2>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
							<span class="icon">
								<i class="ti-download"></i>
							</span>
                            <span class="counter js-counter" data-from="0" data-to="777" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Downloads</span>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
                            <span class="counter js-counter" data-from="0" data-to="402002" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Happy Clients</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
                            <span class="counter js-counter" data-from="0" data-to="900" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Hours Spent</span>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>




    <div id="gtco-contact" data-section="contact" class="gtco-cover gtco-cover-xs" style="background-image:url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-12">
                            <h3>If you have inqueries please email us at <a href="https://mail.georgebrown.ca">NunkedieSteevenOrellJunior.wemin@georgebrown.ca</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                    </p>
                    <p class="pull-right">
                    <ul class="gtco-social-icons pull-right">
                        <li><a href="https://twitter.com/?lang=en-ca"><i class="icon-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/uas/login"><i class="icon-linkedin"></i></a></li>

                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

