<?php

require_once 'init.php';

$_title = 'Samples - Form Stuff - SmartAdmin v4.0.3';
$_active_nav = 'form_samples';
$_head = '';
$_description = 'Default input elements for forms';

?>
<!DOCTYPE html>
<!-- 
Template Name:: SmartAdmin PHP 7 Responsive WebApp - Template built with Bootstrap 4 and PHP 7
Version: 4.0.3
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body class="mod-bg-1 ">
        <?php include_once APP_PATH.'/includes/theme.php'; ?>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <?php include_once APP_PATH.'/includes/nav.php'; ?>
                <div class="page-content-wrapper">
                    <?php include_once APP_PATH.'/includes/header.php'; ?>
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Form Stuff</li>
                            <li class="breadcrumb-item active">Samples</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Samples
                                <small>
                                    Default input elements for forms
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Login <span class="fw-300"><i>template</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form novalidate>
                                                <div class="form-group">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input type="email" id="username" class="form-control" placeholder="your id or email" value="drlantern@gotbootstrap.com" required="">
                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                    <div class="help-block">Your unique username to app</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" id="password" class="form-control" placeholder="password" value="password123" required="">
                                                    <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                    <div class="help-block">Your password</div>
                                                </div>
                                                <div class="form-group text-left">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="rememberme">
                                                        <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-lg-6 pr-lg-1 my-2">
                                                        <button type="submit" class="btn btn-info btn-block btn-lg">Sign in with
                                                            <i class="fab fa-google"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-6 pl-lg-1 my-2">
                                                        <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Register <span class="fw-300"><i>template</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form autocomplete="off" novalidate>
                                                <div class="form-group">
                                                    <label for="inputName">Name</label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputVerify3">Verify</label>
                                                    <input type="password" class="form-control" id="inputVerify3" placeholder="Password (again)" required="">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-lg">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Pay <span class="fw-300"><i>Invoice</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                a
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                a
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                a
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Change <span class="fw-300"><i>Password</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form role="form" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="inputPasswordOld">Current Password</label>
                                                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPasswordNew">New Password</label>
                                                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                                                    <span class="form-text small text-muted">
                                                        The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPasswordNewVerify">Verify</label>
                                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                                    <span class="form-text small text-muted">
                                                        To confirm, type the new password again.
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-lg">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="cc_name">Card Holder's Name</label>
                                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*" title="First and last name" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-12">Card Exp. Date</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="cc_exp_mo" size="0">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="cc_exp_yr" size="0">
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-12">Amount</label>
                                                </div>
                                                <div class="form-inline">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                        <input type="text" class="form-control text-right" id="exampleInputAmount" placeholder="39">
                                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="Jane">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="Bishop">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="email" value="email@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Company</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="url" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                                                    <div class="col-lg-9">
                                                        <select id="user_time_zone" class="form-control" size="0">
                                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                            <option value="Alaska">(GMT-09:00) Alaska</option>
                                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                            <option value="Arizona">(GMT-07:00) Arizona</option>
                                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                            <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="janeuser">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password" value="11111122333">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password" value="11111122333">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-9">
                                                        <button class="btn btn-secondary">Cancel</button>
                                                        <button class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                a
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                a
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- END Page Content -->
                    <?php include_once APP_PATH.'/includes/footer.php'; ?>
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
