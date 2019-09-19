<?php

require_once 'init.php';

$_title = 'Navigation - PHP Components - SmartAdmin v4.0.3';
$_active_nav = 'php_navigation';
$_head = '';
$_description = 'Configure the navigation array.';

?>
<?php

// modify the navigation for demonstration purposes
$_nav = [
    'info_app_docs' => [
        'title' => 'Back to documentation',
        'icon' => 'fal fa-tag',
        'url' => APP_URL.'/info_app_docs.php'
    ],
    'nav_key' => [
        'title' => 'My category',
        'icon' => 'fal fa-file-powerpoint',
        'items' => [
            'php_navigation' => [
                'title' => 'Navigation',
                'url' => APP_URL.'/php_navigation.php'
            ],
            'page_2' => [
                'title' => 'Page 2',
                'url' => APP_URL.'/page-2'
            ]
        ]
    ]
];

$_active_nav = 'php_navigation';

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
                            <li class="breadcrumb-item">PHP Components</li>
                            <li class="breadcrumb-item active">Navigation</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Navigation
                                <small>
                                    Configure the navigation array.
                                </small>
                            </h1>
                        </div>
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Documentation
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <!-- <div class="panel-tag">
                Enter additional information here
            </div> -->
                                    <div class="markdown-body">
                                        <?php

                                        $content = file_get_contents(DOCS_PATH.'/navigation.md');

                                        $parsedown = new \Common\Markdown();
                                        $parsedown->setBreaksEnabled(true);
                                        echo $parsedown->text($content);

                                        ?>
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
