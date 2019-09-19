<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';
$app->authenticate_page(APP_URL.'/php_auth_login.php');

$company = \Models\Company::query("SELECT * FROM company");

require_once 'init.php';

$_title = 'Page Titile - category_1 - SmartAdmin v4.0.3';
$_active_nav = 'blank';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/datagrid/datatables/datatables.bundle.css">
';
$_description = 'blank description';

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
                            <li class="breadcrumb-item">category_1</li>
                            <li class="breadcrumb-item">category_2</li>
                            <li class="breadcrumb-item active">Page Titile</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-'></i> Page <span class='fw-300'>Title</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    blank description
                                </small>
                            </h1>
                            <div class="subheader-block">
                                Right content of header
                            </div>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">About</span>
                                        <p>Points.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Addon's <a href="#" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Panel <span class="fw-300"><i>Title</i></span>
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
                                                panel tag
                                            </div>
                                            <?php
                                            $table = $_ui->create_table($company);
                                            $table->col = [
                                                'name' => [
                                                    'title' => 'Company Name',
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                                'tagLine' => [
                                                    'title' => 'Tagline',
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                                'city' => [
                                                    'title' => 'City',
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                                'state' => [
                                                    'title' => 'State',
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                                'active' => [
                                                    'title' => 'Status',
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                                null =>[
                                                    'class' => 'bg-primary text-white',
                                                    'attr' => ['style' => 'font-weight: bold;']
                                                ],
                                            ];
                                            $table->class = 'table table-bordered table-hover table-striped w-100';
                                            $table->id = 'dt-basic-example';
                                            $table->print_html();
                                            ?>
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
        <script src="<?= ASSETS_URL ?>/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
            $(document).ready(function()
            {
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    columnDefs: [
                        {
                            targets: 5,
                            title: 'Actions',
                            orderable: false,
                            render: function(data, type, full, meta)
                            {
    
                                /*
                                -- ES6
                                -- convert using https://babeljs.io online transpiler
                                return `
                                <a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>
                                    <i class="fal fa-times"></i>
                                </a>
                                <div class='dropdown d-inline-block'>
                                    <a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>
                                        <i class="fal fa-ellipsis-v"></i>
                                    </a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
                                        <a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
                                    </div>
                                </div>`;
                                    
                                ES5 example below:  
    
                                */
                                return "\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>\n\t\t\t\t\t\t\t<i class=\"fal fa-times\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block'>\n\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>\n\t\t\t\t\t\t\t\t<i class=\"fal fa-ellipsis-v\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                            },
                        },
                        {
                            targets: 4,
                            /*  The `data` parameter refers to the data for the cell (defined by the
                                `data` option, which defaults to the column being worked with, in this case `data: 16`.*/
                            render: function(data, type, full, meta)
                            {
                                var badge = {
                                    1:
                                    {
                                        'title': 'Active',
                                        'class': 'badge-success'
                                    },
                                    0:
                                    {
                                        'title': 'Inactive',
                                        'class': 'badge-danger text-white'
                                    },
                                };
                                if (typeof badge[data] === 'undefined')
                                {
                                    return data;
                                }
                                return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
                            },
                        }],
                });
            });

        </script>
    </body>
</html>
