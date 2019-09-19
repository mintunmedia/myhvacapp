<?php

require_once 'init.php';

$_title = 'Documentation - Package Info - SmartAdmin v4.0.3';
$_active_nav = 'info_app_docs';
$_head = '';
$_description = 'Product documentation, plugin reference, and online help';

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
                            <li class="breadcrumb-item active">Documentation</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-tag'></i> Documentation
                                <small>
                                    Product documentation, plugin reference, and online help
                                </small>
                            </h1>
                        </div>
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    README.md
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="markdown-body">
                                        <?php

                                        $content = file_get_contents(ROOT_PATH.'/README.md');

                                        $parsedown = new \Common\Markdown();
                                        $parsedown->setBreaksEnabled(true);
                                        echo $parsedown->text($content);

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-g">
                            <div class="card-body">
                                <h3 class="fw-500">
                                    Plugin reference
                                    <small>
                                        Reference for all plugins within SmartAdmin for PHP
                                    </small>
                                </h3>
                                <select class="js-plugins custom-select form-control mb-g" style="width:15rem;">
                                    <option value="">-- Select Plugin --</option>
                                </select>
                                <div id="js-display" class="d-none">
                                    <p>
                                        <strong>Plugin Name:</strong> <span class="js-plugin-name"></span>
                                    </p>
                                    <p>
                                        <span class="js-plugin-description"></span>
                                    </p>
                                    <p>
                                        <strong>Documentation:</strong>
                                        <br>
                                        <a href="" class="js-plugin-url" target="_blank"></a>
                                    </p>
                                    <p>
                                        <strong>License:</strong>
                                        <br>
                                        <span class="js-plugin-license"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-g">
                            <div class="card-body">
                                <h3 class="fw-500">
                                    Product Support
                                    <small>
                                        Customer support for SmartAdmin for PHP
                                    </small>
                                </h3>
                                <p>All support questions related to HTML and/or CSS will be honored. Issues that are encountered on the Seed versions of specific flavors of SmartAdmin are covered by their <a href="https://www.gotbootstrap.com/intel_introduction.html" target="_blank">respective authors</a>, but will be limited to HTML and/or CSS issues. If you need assistance with a technical issue that is currently not covered by the FAQ, you will need to have purchased a Full license of that flavor and contact the respective author for further assistance. The Full version links will be added to the <a href="https://www.gotbootstrap.com/info_app_flavors.html" target="_blank">Flavors</a> page once they are made available.</p>
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
            $(document).ready(function()
            {

                var jsdisplay = $('#js-display');
                var url = myapp_config.assetsUrl + "/media/data/plugin-reference.json";

                $.getJSON(url, function(data)
                {
                    $.each(data, function(index, value)
                    {
                        $('.js-plugins').append('<option value="' + value.plugin + '" data-description="' + value.description + '" data-url="' + value.url + '" data-license="' + value.license + '">' + value.plugin + '</option>');
                    });
                });

                // SHOW SELECTED VALUE.

                $('.js-plugins').change(function()
                {
                    var plugin = this.options[this.selectedIndex].text;
                    var url = $('select.js-plugins').find(':selected').data('url');
                    var license = $('select.js-plugins').find(':selected').data('license');
                    var description = $('select.js-plugins').find(':selected').data('description');

                    jsdisplay.removeClass().addClass('d-block')

                    $('.js-plugin-name').text(plugin);
                    $('.js-plugin-url').text(url);
                    $('.js-plugin-url').attr('href', url);
                    $('.js-plugin-license').text(license);
                    $('.js-plugin-description').text(description);

                });
            });

        </script>
    </body>
</html>
