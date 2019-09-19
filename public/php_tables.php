<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';
$app->authenticate_page(APP_URL.'/php_auth_login.php');


require_once 'init.php';

$_title = 'PHP Tables - PHP Components - SmartAdmin v4.0.3';
$_active_nav = 'php_tables';
$_head = '';
$_description = 'Bootstrap tables for PHP';

?>
<?php

$exception = null;
$data = [
    ['id' => 1, 'username' => 'lodev09', 'email' => 'lodev09@gmail.com'],
    ['id' => 2, 'username' => 'sunny', 'email' => 'sunny@gotbootstrap.com'],
    ['id' => 3, 'username' => 'jos', 'email' => 'jos@email.com'],
    ['id' => 4, 'username' => 'roberto', 'email' => 'roberto@email.com']
];
$file_upload = false;

if (!empty($_FILES['file'])) {
    try {
        $upload = new \Upload\Upload($_FILES['file']);
        if ($upload->file) {
            $token = hash('sha256', token().'_'.$upload->file->name);
            $tmp_filename = $token.$upload->file->extension;
            $file_path = APP_TMP_PATH.'/'.$tmp_filename;

            $upload->file->put($file_path);

            $reader = new \Common\DataReader($file_path);
            $data = $reader->read();
            $file_upload = true;
        }
    } catch (Exception $ex) {
        $exception = $ex->getMessage();
    }
}

$config = [
    'bordered' => 'Bordered Table',
    'small' => 'Smaller Table',
    'dark' => 'Table Dark',
    'light' => 'Table Light',
    'hover' => 'Table Hover',
    'striped' => 'Table Striped'
];

if ($_POST) {
    foreach (array_keys($config) as $name) {
        $value = get($name, $_POST);
        $options[$name] = $value ? true : false;
    }
} else {
    $options = ['bordered' => true, 'striped' => true];
}

$table = $_ui->create_table($data, $options);

if (!$file_upload) {
    $table->col = [
        'id' => '#',
        'username' => 'Username',
        'email' => 'Email'
    ];

    $table->cell = [
        'username' => function ($row, $value) use ($options) {
            return '<a href="#" class="'.(get('dark', $options) ? 'text-white' : '').'">@'.$value.'</a>';
        }
    ];
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
                            <li class="breadcrumb-item">PHP Components</li>
                            <li class="breadcrumb-item active">PHP Tables</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                PHP Tables
                                <small>
                                    Bootstrap tables for PHP
                                </small>
                            </h1>
                        </div>
                        <?= $exception ? $_ui->print_danger($exception) : null ?>
                        <div id="panel-demo" class="panel">
                            <div class="panel-hdr">
                                <h2>Demo</h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <form action="<?= APP_URL ?>/php_tables.php" class="panel-content" method="post" enctype="multipart/form-data">
                                    <h5 class="frame-heading">
                                        Select options
                                    </h5>
                                    <div class="frame-wrap bg-faded mb-5">
                                        <?php foreach ($config as $name => $title) : ?>
                                        <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                            <input type="checkbox" value="1" <?= get($name, $options) ? 'checked' : '' ?> class="custom-control-input" name="<?= $name ?>" id="option-<?= $name ?>">
                                            <label class="custom-control-label" for="option-<?= $name ?>"><?= $title ?></label>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Upload data (.csv, .xlsx)</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="upload-data" name="file" accept=".csv,.xlsx">
                                            <label class="custom-file-label" for="upload-data">Choose file</label>
                                        </div>
                                    </div>
                                    <h5 class="frame-heading p-0 bg-white mb-g">
                                        Generated preview:
                                    </h5>
                                    <div class="frame-wrap p-0 border-0 m-0">
                                        <?= $table->print_html() ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit changes</button>
                                </form>
                            </div>
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
                                    <div class="markdown-body">
                                        <?php

                                        $content = file_get_contents(DOCS_PATH.'/tables.md');

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
