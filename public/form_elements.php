<?php

require_once 'init.php';

$_title = 'Elements - Form Stuff - SmartAdmin v4.0.3';
$_active_nav = 'form_elements';
$_head = '';
$_description = 'Default elements for forms';

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
                            <li class="breadcrumb-item active">Elements</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Form Elements
                                <small>
                                    Default elements for forms
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-table w-100">
                                <div class="d-table-cell align-top width-6">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-table-cell pl-1">
                                    <span class="h5">Improved Bootstrap forms</span>
                                    <br> Full documentation for forms here.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-g">
                                    <h4 class="card-header">
                                        Input
                                        <span class="fw-300">Types</span>
                                        <small>
                                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                        </small>
                                    </h4>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="form-label" for="simpleinput">Text</label>
                                                        <input type="text" id="simpleinput" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-email">Email</label>
                                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <labe class="form-label" l for="example-password">
                                                            Password</label>
                                                            <input type="password" id="example-password" class="form-control" value="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-palaceholder">Placeholder</label>
                                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-textarea">Text area</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-readonly">Readonly</label>
                                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-disable">Disabled</label>
                                                        <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-static">Static control</label>
                                                        <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="email@example.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-helping">Helping text</label>
                                                        <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-select">Input Select</label>
                                                        <select class="form-control" id="example-select">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-multiselect">Multiple Select</label>
                                                        <select id="example-multiselect" multiple="" class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-fileinput">Default file input</label>
                                                        <input type="file" id="example-fileinput" class="form-control-file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-date">Date</label>
                                                        <input class="form-control" id="example-date" type="date" name="date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-month">Month</label>
                                                        <input class="form-control" id="example-month" type="month" name="month">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-time">Time</label>
                                                        <input class="form-control" id="example-time" type="time" name="time">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-week">Week</label>
                                                        <input class="form-control" id="example-week" type="week" name="week">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-number">Number</label>
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-color">Color</label>
                                                        <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="form-label" for="example-range">Range</label>
                                                        <input class="form-control" id="example-range" type="range" name="range" min="0" max="100">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                                <div class="card mb-g">
                                    <h4 class="card-header">
                                        Input
                                        <span class="fw-300">Select menu</span>
                                        <small>
                                            Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.custom-select</code> to trigger the custom styles.
                                        </small>
                                    </h4>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select class="custom-select mt-3">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-g">Checkboxes and radios</h4>
                                                <div class="row">
                                                    <div class="col-12 mb-g">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                                <div class="card mb-g">
                                    <h4 class="card-header">
                                        Input
                                        <span class="fw-300">Sizes</span>
                                        <small>
                                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                        </small>
                                    </h4>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="example-input-small" class="form-label">Small</label>
                                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-input-normal" class="form-label">Normal</label>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-input-large" class="form-label">Large</label>
                                                <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <a href="<?= APP_URL ?>/utilities_responsive_grid.php" title="Responsive Grid" target="_blank">Check out how it works</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="text" id="example-gridsize" class="form-control" placeholder=".col-3">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" id="example-gridsize-2" class="form-control" placeholder=".col">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mb-0">
                                                            <input class="form-control" id="gridrange" type="range" name="gridrange" min="1" max="12" value="3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                                <div class="card mb-g">
                                    <h4 class="card-header">
                                        Input
                                        <span class="fw-300">Group</span>
                                        <small>
                                            Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                                        </small>
                                    </h4>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="form-label">Static</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Dropdowns</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary   dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Buttons</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark  " type="button">Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="form-label">Custom file input</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                                <div class="card mb-g">
                                    <h4 class="card-header">Basic Example</h4>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkmeout0">
                                                    <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <h4 class="card-header">Horizontal form</h4>
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-form-label col-sm-2 text-sm-right form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-form-label col-sm-2 text-sm-right form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword5" class="col-form-label col-sm-2 text-sm-right form-label">Re Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input text-sm-right" id="checkmeout">
                                                        <label class="custom-control-label" for="checkmeout">Check me out !</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-info  ">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <h4 class="card-header">Inline Form</h4>
                                    <div class="card-body">
                                        <p class="text-muted mb-3">
                                            Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states. Controls only appear inline in viewports that are at least 576px wide to account for narrow viewports on mobile devices.
                                        </p>
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="staticEmail2" class="sr-only">Email</label>
                                                <input type="text" readonly="" class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                            </div>
                                            <div class="form-group mx-sm-3">
                                                <label for="inputPassword2" class="sr-only">Password</label>
                                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Confirm identity</button>
                                        </form>
                                        <h6 class="font-13 mt-3">Auto-sizing</h6>
                                        <form>
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                </div>
                                                <div class="col-auto">
                                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">@</div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                        <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="card-header">
                                    Form row
                                    <small>
                                        You may also swap <code>.row</code> for <code>.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                    </small>
                                </h4>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Address 2</label>
                                                <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="form-label">State</label>
                                                    <select class="custom-select">
                                                        <option>Select state</option>
                                                        <option>California</option>
                                                        <option>Hawaii</option>
                                                        <option>Florida</option>
                                                        <option>Texas</option>
                                                        <option>Massachusetts</option>
                                                        <option>Alabama</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label">Zip</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox m-0">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Check this custom checkbox</span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
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
        <script>
            var example_gridsize = $("#example-gridsize");

            $("#gridrange").on("input change", function()
            {
                //do something
                example_gridsize.attr("placeholder", ".col-" + $(this).val());
                example_gridsize.parent().removeClass().addClass("col-" + $(this).val())
                console.log("col-" + $(this).val());
            });

        </script>
    </body>
</html>
