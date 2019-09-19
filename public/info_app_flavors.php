<?php

require_once 'init.php';

$_title = 'Different Flavors - Package Info - SmartAdmin v4.0.3';
$_active_nav = 'info_app_flavors';
$_head = '';

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
                            <li class="breadcrumb-item">Package Info</li>
                            <li class="breadcrumb-item active">Different Flavors</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <h1 class="fw-500 mb-5 mt-5 text-center">
                            SmartAdmin comes with multiple flavors
                            <small>All seed versions are complimentary with the purchase of the <a href="https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585" target="_blank">PHP flavor</a>. Support is included with the purchase of the full <br> versions of your seeds. You'll find the links for the full versions below.</small>
                        </h1>
                        <div class="container">
                            <div class="row">
                                <!-- HTML Flavor -->
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-body p-4 rounded position-relative">
                                            <span class="badge badge-primary fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">INCLUDES SEED + FULL PROJECT</span>
                                            <div class="d-flex align-items-center mb-g">
                                                <img src="<?= ASSETS_URL ?>/img/demo/php.png" class="mr-3">
                                                <h1 class="fw-300 m-0 l-h-n">
                                                    <span class="text-contrast">PHP 7</span>
                                                    <small class="fw-300 m-0 l-h-n">
                                                        Easy to understand platform with a large community set
                                                    </small>
                                                </h1>
                                            </div>
                                            <div class="col">
                                                PHP is a free language with no licensing fees, the cost of using it is minimal. Interactable with many different database languages including MySQL. Can run on Windows, Linux and Unix servers, making it very flexible to work with.
                                                <ul class="mt-3 list-spaced">
                                                    <li>
                                                        Clean and well documented code.
                                                    </li>
                                                    <li>
                                                        Built for modern PHP folks. Uses <code>composer</code> dependency manager and supports PHP 7.1 and later. Uncompromising security and performance, guaranteed!
                                                    </li>
                                                    <li>
                                                        Requires no framework, use your favorite text editor to create your dream application, that's fast, reliable and flexible for almost any platform.
                                                    </li>
                                                    <li>
                                                        Actively Maintained - we always add new features to this package. Requests and feedback are always welcome!
                                                    </li>
                                                    <li>
                                                        Bootstrap Components that are written exclusively for SmartAdmin PHP including <code>Table</code>, <code>Panel</code>, <code>Button</code> and much more! Generate HTML elements via PHP with the simple API that you can easily configure.
                                                    </li>
                                                    <li>
                                                        Focus on what matters - SmartAdmin PHP has built-in, ready-to-use, utilities that helps you write code faster and better, improving productivity.
                                                    </li>
                                                    <li>
                                                        Includes free updates for the life of the theme**
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 mb-4">
                                            <!-- .NET Flavor -->
                                            <div class="card h-100 rounded overflow-hidden position-relative">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/mvc.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">.Net Core 2.2</span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                Multi-platform based scalable solution
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        ASP.NET MVC is used to build Web applications in .NET Framework. .NET Core is the new open-source and cross-platform framework to build applications for all operating systems including Windows, Mac, and Linux.
                                                        <ul class="mt-3 list-spaced">
                                                            <li>
                                                                Fully supports ASP.NET Core Identity and the .NET Core ecosystem.
                                                            </li>
                                                            <li>
                                                                Uses the latest MVC features, such as Partials, TagHelpers and RazorPages to provide quick, easy and re-usable building blocks.
                                                            </li>
                                                            <li>
                                                                Blazing performance and extensibility, no restrictions or compromises, the limit is your own imagination!
                                                            </li>
                                                        </ul>
                                                        <a href="https://wrapbootstrap.com/user/Walapa" class="btn btn-sm btn-outline-primary">View Full Version</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-4">
                                            <!-- HTML 5 Flavor -->
                                            <div class="card h-100 rounded overflow-hidden">
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/html5.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">
                                                                Pure HTML5
                                                            </span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                Smart Design, Smart Build, Smart Execution!
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        Purely designed for your comfort. Comes with video tutorials, well supported documentation, examples and email support (for your basic needs) and free updates for the life of the theme**
                                                        <ul class="mt-xs-3 list-spaced">
                                                            <li>
                                                                Uses npm package manager to neatly wrap and manage third party plugins
                                                            </li>
                                                            <li>
                                                                Easily build your project with custom colors and components via HandleBar templating and gulp
                                                            </li>
                                                            <li>
                                                                Over 256 layout possibilities with auto save feature
                                                            </li>
                                                        </ul>
                                                        <a href="https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0" class="btn btn-sm btn-outline-primary">View Full Version</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 mb-4">
                                            <!-- RAILS Flavor -->
                                            <div class="card h-100 rounded overflow-hidden position-relative">
                                                <span class="badge badge-warning fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">COMING SOON</span>
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/rails.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">
                                                                Rails
                                                            </span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                Flexible, less opinionated solution
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        Rails, is a server-side web application framework written in Ruby under the MIT License. Rails is a model–view–controller framework, providing default structures for a database, a web service, and web pages
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-4">
                                            <!-- AngularJS Flavor -->
                                            <div class="card h-100 rounded overflow-hidden position-relative">
                                                <span class="badge badge-warning fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">COMING SOON</span>
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/angular.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">
                                                                Angular 8
                                                            </span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                Epic speed and endurance for rapid prototyping
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        AngularJS is a JavaScript-based open-source front-end web framework mainly maintained by Google and by a community of individuals and corporations to address many of the challenges encountered in developing single-page applications
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 mb-4">
                                            <!-- VUEJS Flavor -->
                                            <div class="card h-100 rounded overflow-hidden position-relative">
                                                <span class="badge badge-warning fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">COMING SOON</span>
                                                <div class="card-body p-4">
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/vuejs.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">
                                                                Vue.js
                                                            </span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                Clutterless, headache free, compilation toolkit
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        Vue.js is one of those new software technologies that are being widely used across the world for web development. Vue.js is actually a JavaScript framework with various optional tools for building user interfaces
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-4">
                                            <!-- React Flavor -->
                                            <div class="card h-100 rounded overflow-hidden">
                                                <div class="card-body p-4">
                                                    <span class="badge badge-warning fw-300 ml-auto position-absolute pos-top pos-right mr-4 mt-4 hidden-sm-down">COMING SOON</span>
                                                    <div class="d-flex align-items-center mb-g">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/react.png" class="mr-3">
                                                        <h1 class="fw-300 m-0 l-h-n">
                                                            <span class="text-contrast">
                                                                React
                                                            </span>
                                                            <small class="fw-300 m-0 l-h-n">
                                                                A better data overview binding with scalability in mind
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <div class="col">
                                                        ReactJS basically is an open-source JavaScript library which is used for building user interfaces specifically for single page applications. It's used for handling view layer for web and mobile apps. React also allows us to create reusable UI components. The main purpose of React is to be fast, scalable, and simple.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center text-muted h4 font-italic">
                                <i class="fal fa-check text-success"></i> All seed projects are included with your purchase of the PHP 7 Flavor
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
