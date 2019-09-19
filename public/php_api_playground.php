<?php

require_once 'init.php';
require_once 'init.db.php';

$_title = 'Playground - REST API - SmartAdmin v4.0.3';
$_active_nav = 'php_api_playground';
$_head = '';
$_description = 'SmartAdmin PHP REST API Playground';

?>
<?php

// default demo user
$user = \Models\User::instance(1);
if ($user) {
    // get the first active access token
    $access_token = \Models\AccessToken::instance('user_id', $user->id);
}

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
                            <li class="breadcrumb-item">REST API</li>
                            <li class="breadcrumb-item active">Playground</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Playground
                                <small>
                                    SmartAdmin PHP REST API Playground
                                </small>
                            </h1>
                        </div>
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Configuration
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
                                        <p>The API demo requires the <em>Authorization</em> header. Check your <code>users</code> and <code>access_tokens</code> tables. To create your own access token, run the command below</p>
                                        <pre><code class="bg-primary text-white d-block w-100 pt-2 pr-3 pb-2 pl-3">php <?= ROOT_PATH ?>/utils/create_access_token.php --username=<em class="text-warning"><?= $user->username ?? 'USERNAME' ?></em></code></pre>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="simpleinput">Endpoint (url)</label>
                                        <input type="text" id="api-url" value="<?= API_URL ?>/users" class="form-control">
                                    </div>
                                    <h5 class="frame-heading">Authentication</h5>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label class="form-label" for="simpleinput">Username</label>
                                            <input type="text" id="api-username" value="<?= $user->username ?? '' ?>" class="form-control">
                                        </div>
                                        <div class="form-group col">
                                            <label class="form-label" for="simpleinput">Access token</label>
                                            <input type="text" id="api-access-token" value="<?= $access_token->token ?? '' ?>" class="form-control">
                                        </div>
                                    </div>
                                    <button id="generate-output" class="btn btn-primary">Submit</button>
                                    <div id="api-output" class="d-none">
                                        <hr>
                                        <h5 class="frame-heading">Example codes</h5>
                                        <div class="frame-wrap">
                                            <h4>PHP Curl</h4>
                                            <p>Using the <a href="https://github.com/php-curl-class/php-curl-class" target="_blank">php-curl-class</a> PHP package, put this code somewhere in your php script:</p>
                                            <pre><code class="bg-fusion-400 d-block w-100 pt-2 pr-3 pb-2 pl-3 fw-700 js-code-php"></code></pre>
                                            <h4>Curl command line</h4>
                                            <p>Run the following command in your terminal:</p>
                                            <pre><code class="bg-fusion-400 d-block w-100 pt-2 pr-3 pb-2 pl-3 fw-700 js-code-curl"></code></pre>
                                            <h4>jQuery Ajax</h4>
                                            <p>Put the following code in your <code>&lt;script&gt;</code> block:</p>
                                            <pre><code class="bg-fusion-400 d-block w-100 pt-2 pr-3 pb-2 pl-3 fw-700 js-code-ajax"></code></pre>
                                        </div>
                                        <h5 class="frame-heading">Result</h5>
                                        <div class="frame-wrap">
                                            <p>Using the jQuery Ajax code example, here is the result from your request:</p>
                                            <pre><code class="bg-fusion-400 d-block w-100 pt-2 pr-3 pb-2 pl-3 fw-700 js-output"></code></pre>
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
        <script>
            function escapeHtml(unsafe)
            {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }

            $(document).ready(function()
            {
                $('#generate-output').on('click', function(e)
                {
                    var username = $('#api-username').val();
                    var accessToken = $('#api-access-token').val();
                    var url = $('#api-url').val();

                    // generate PHP curl code
                    var phpCurlCode = '$curl = new \\Curl\\Curl();\n\
$curl->setBasicAuthentication(\'' + username + '\', \'' + accessToken + '\');\n\
$response = $curl->get(\'' + url + '\');\n\
if ($curl->error) {\n\
    plog(\'Error: \'.$curl->errorCode.\': \'.$curl->errorMessage);\n\
} else {\n\
    // do something with the response\n\
    plog($response);\n\
}';

                    $('.js-code-php').html(phpCurlCode);

                    // generating curl code
                    var curlCommand = 'curl -i -u ' + username + ':' + accessToken + ' "' + url + '"';
                    $('.js-code-curl').html(curlCommand);

                    // generating jquery ajax code
                    var ajaxCode = '$.ajax(\'' + url + '\', {\n\
    type: \'GET\',\n\
    beforeSend: function(xhr) {\n\
        var authEncoded = btoa(\'' + username + ':' + accessToken + '\');\n\
        xhr.setRequestHeader(\'Authorization\', \'Basic \' + authEncoded);\n\
    },\n\
    error: function(xhr, status) {\n\
        var error = xhr.status + \' \' + xhr.statusText;\n\
        console.error(\'error: \' + error);\n\
    },\n\
    success: function(data) {\n\
        // do anything with the data\n\
        console.log(data)\n\
    }\n\
});\n';
                    $('.js-code-ajax').html(ajaxCode);

                    // run the actual data
                    $('#api-output').removeClass('d-none');
                    $.ajax(url,
                    {
                        type: 'GET',
                        beforeSend: function(xhr)
                        {
                            var authEncoded = btoa(username + ':' + accessToken);
                            xhr.setRequestHeader('Authorization', 'Basic ' + authEncoded);
                        },
                        error: function(xhr, status)
                        {
                            var error = xhr.status + ' ' + xhr.statusText;
                            $('.js-output')
                                .removeClass('bg-fusion-400')
                                .addClass('bg-danger-400')
                                .html(error + '\n' + xhr.responseText);
                        },
                        success: function(data, status, xhr)
                        {
                            // do anything with the data
                            console.log(data);

                            var headers = escapeHtml(xhr.getAllResponseHeaders());
                            $('.js-output')
                                .removeClass('bg-danger-400')
                                .addClass('bg-fusion-400')
                                .html(headers + JSON.stringify(data, null, '\t'));
                        }
                    });
                });
            });

        </script>
    </body>
</html>
