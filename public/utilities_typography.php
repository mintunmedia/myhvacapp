<?php

require_once 'init.php';

$_title = 'Typography - Utilities - SmartAdmin v4.0.3';
$_active_nav = 'utilities_typography';
$_head = '';
$_description = 'Documentation and examples for typography, including global settings, headings, body text, lists, and more.';

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
                            <li class="breadcrumb-item">Utilities</li>
                            <li class="breadcrumb-item active">Typography</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Typography
                                <small>
                                    Documentation and examples for typography, including global settings, headings, body text, lists, and more.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <!--Heading Formats-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Display <span class="fw-300"><i>headings</i></span>
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
                                                Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.
                                            </div>
                                            <div class="frame-wrap">
                                                <h3 class="display-1">Display 1</h3>
                                                <h3 class="display-2">Display 2</h3>
                                                <h3 class="display-3">Display 3</h3>
                                                <h1 class="display-4 mb-0">Display 4</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Customizing <span class="fw-300"><i>headings</i></span>
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
                                                Use the included utility classes to recreate the small secondary heading text
                                            </div>
                                            <div class="frame-wrap">
                                                <h3 class="m-0">
                                                    Fancy display heading
                                                    <small class="text-muted m-0 d-inline">With faded secondary text</small>
                                                </h3>
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="subheader m-0">
                                                    <h1 class="subheader-title mb-0">
                                                        h1. Default Page Header
                                                        <small class="mb-0">
                                                            with text description on the <span class="fw-500">bottom</span>
                                                        </small>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Basic <span class="fw-300"><i>headings</i></span>
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
                                                All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available
                                            </div>
                                            <div class="demo-v-spacing">
                                                <h1>h1. Heading 1</h1>
                                                <h2>h2. Heading 2</h2>
                                                <h3>h3. Heading 3</h3>
                                                <h4>h4. Heading 4</h4>
                                                <h5>h5. Heading 5</h5>
                                                <h6>h6. Heading 6</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Lead <span class="fw-300"><i>markup</i></span>
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
                                                Make a paragraph stand out by adding <code>.lead</code>
                                            </div>
                                            <div class="frame-wrap">
                                                <p class="lead m-0">
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--General markups-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Inline <span class="fw-300"><i>text elements</i></span>
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
                                                Styling for common inline HTML5 elements.
                                            </div>
                                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                            <p><u>This line of text will render as underlined</u></p>
                                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                                            <p><strong>This line rendered as bold text.</strong></p>
                                            <p><em>This line rendered as italicized text.</em></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Abbreviation <span class="fw-300"><i>example</i></span>
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
                                                Stylized implementation of HTML’s <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.
                                            </div>
                                            <p><abbr title="attribute">attr</abbr></p>
                                            <p class="m-0"><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Block <span class="fw-300"><i>quote</i></span>
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
                                                For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. Add a <code>&lt;footer class="blockquote-footer"&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>
                                            </div>
                                            <blockquote class="blockquote">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                            <blockquote class="blockquote text-center">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                            <blockquote class="blockquote text-right">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!--Text wrapping-->
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Wrapping <span class="fw-300"><i>text example</i></span>
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
                                                Wrap text with a <code>.text-wrap</code> class, to prevent text from wrapping with a <code>.text-nowrap</code> class
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    This text should wrap.
                                                </div>
                                                <div class="text-nowrap bd-highlight" style="width: 8rem;">
                                                    This text should overflow the parent.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Turncate <span class="fw-300"><i>example</i></span>
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
                                                For longer content, you can add a <code>.text-truncate</code> class to truncate the text with an ellipsis. <span class="fw-400">Requires</span> <code>display: inline-block</code> or <code>display: block</code>. You can also combine the following classe <code>.text-truncate</code> and combine with <code>.text-truncate-xs</code>, <code>.text-truncate-sm</code>, <code>.text-truncate-md</code>, <code>.text-truncate-default</code>, and <code>.text-truncate-lg</code> to achieve the desired results
                                            </div>
                                            <div class="frame-wrap">
                                                <span class="d-block text-truncate text-truncate-xs">
                                                    Curabitur blandit tempus ardua ridiculus sed magna.
                                                </span>
                                                <span class="d-block text-truncate text-truncate-sm">
                                                    Curabitur blandit tempus ardua ridiculus sed magna.
                                                </span>
                                                <span class="d-block text-truncate text-truncate-md">
                                                    Curabitur blandit tempus ardua ridiculus sed magna.
                                                </span>
                                                <span class="d-block text-truncate text-truncate-default">
                                                    Curabitur blandit tempus ardua ridiculus sed magna.
                                                </span>
                                                <span class="d-block text-truncate text-truncate-lg">
                                                    Curabitur blandit tempus ardua ridiculus sed magna.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Text alignment-->
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Text <span class="fw-300"><i>alignment</i></span>
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
                                                Easily realign text to components with text alignment classes. <code>.text-{left,right,center,justify}</code>
                                            </div>
                                            <div class="demo-v-spaving">
                                                <p class="text-left">
                                                    Left aligned text on all viewport sizes.
                                                </p>
                                                <p class="text-center">
                                                    Center aligned text on all viewport sizes.
                                                </p>
                                                <p class="text-right">
                                                    Right aligned text on all viewport sizes.
                                                </p>
                                                <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
                                                <p class="text-md-left">Right aligned text on viewports sized MD (medium) or wider.</p>
                                                <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
                                                <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <!--Text styles-->
                                <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Text <span class="fw-300"><i>transform</i></span>
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
                                                Quickly change the weight (boldness) of text with <code>.font-weight-bold</code> or italicize text with <code>.font-italic</code>. Reset boldness of text with <code>.font-weight-bold</code>. Try various font weights using <code>.fw-{300,400,500,700,900}</code>
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo-v-spacing">
                                                    <p><span>Sample text</span></p>
                                                    <p><span class="fw-300">Sample light text</span></p>
                                                    <p><span class="fw-500">Sample bold text</span></p>
                                                    <p><span class="fw-700">Sample bolder text</span></p>
                                                    <p><span class="fw-900">Sample boldest text</span></p>
                                                    <p><span class="fw-300 font-italic">Sample light &amp; italic text</span></p>
                                                    <p class="m-0"><span class="fw-900"><u>Sample boldest &amp; underline text</u></span></p>
                                                    <p><span class="fw-n">Fontweight Normal</span></p>
                                                </div>
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo-v-spacing">
                                                    <p><span class="text-lowercase">Lowercased text</span></p>
                                                    <p><span class="text-uppercase">Uppercased text</span></p>
                                                    <p><span class="text-capitalize">CapiTaliZed text</span></p>
                                                    <p><span class="fw-300 text-lowercase">light text with lower case</span></p>
                                                    <p><span class="fw-500 text-uppercase">Bold text with uppercase</span></p>
                                                    <p><span class="fw-700 text-capitalize">Bolder capitalized text</span></p>
                                                    <p><span class="fw-900 text-uppercase font-italic">Boldest text with uppercase & italic font</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-12" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Font <span class="fw-300"><i>Colors</i></span>
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
                                                Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too. Reset colors using <code>.text-reset</code> class.
                                            </div>
                                            <div class="demo-v-spacing">
                                                <p><span class="text-primary">Primary state text</span></p>
                                                <p><span class="text-success">Success state text</span></p>
                                                <p><span class="text-warning">Warning state text</span></p>
                                                <p><span class="text-info">Info state text</span></p>
                                                <p><span class="text-danger">Danger state text</span></p>
                                                <p><span class="text-gradient">Text gradient</span></p>
                                                <p><span class="text-light">Light state text</span></p>
                                                <p><span class="text-dark">Dark state text</span></p>
                                                <p><span>Normal state text</span></p>
                                                <p><span class="text-muted">Muted state text</span></p>
                                                <p class="text-muted">
                                                    Muted text with a <a href="#" class="text-reset">reset link</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-13" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Font <span class="fw-300"><i>sizes</i></span>
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
                                                Change font sizes at quickly with <code>.fs-nano</code> or <code>h{1-6}</code> classes.
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-center">
                                                <span class="fs-xxl p-3">
                                                    .fs-xxl
                                                </span>
                                                <span class="fs-xl p-3">
                                                    .fs-xl
                                                </span>
                                                <span class="fs-lg p-3">
                                                    .fs-lg
                                                </span>
                                                <span class="fs-md p-3">
                                                    .fs-md
                                                </span>
                                                <span class="fs-sm p-3">
                                                    .fs-sm
                                                </span>
                                                <span class="fs-xs p-3">
                                                    .fs-xs
                                                </span>
                                                <span class="fs-nano p-3">
                                                    .fs-nano
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-center flex-row-reverse">
                                                <span class="h6 p-3">
                                                    .h6
                                                </span>
                                                <span class="h5 p-3">
                                                    .h5
                                                </span>
                                                <span class="h4 p-3">
                                                    .h4
                                                </span>
                                                <span class="h3 p-3">
                                                    .h3
                                                </span>
                                                <span class="h2 p-3">
                                                    .h2
                                                </span>
                                                <span class="h1 p-3">
                                                    .h1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Link states-->
                                <div id="panel-14" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Link <span class="fw-300"><i>States</i></span>
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
                                                Basic links example with font weight variations and colors. Active links on left, inactive on right
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="demo-v-spacing">
                                                            <p><a href="#"><span>Sample text</span></a></p>
                                                            <p><a href="#"><span class="fw-300">Sample light text</span></a></p>
                                                            <p><a href="#"><span class="fw-500">Sample bold text</span></a></p>
                                                            <p><a href="#"><span class="fw-700">Sample bolder text</span></a></p>
                                                            <p><a href="#"><span class="fw-900">Sample boldest text</span></a></p>
                                                            <p><a href="#"><span class="fw-300 font-italic">Sample light &amp; italic text</span></a></p>
                                                            <p class="m-0"><a href="#"><span class="fw-900"><u>Sample boldest &amp; underline text</u></span></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="demo-v-spacing">
                                                            <p><a href="#" class="disabled"><span>Sample text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-300">Sample light text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-500">Sample bold text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-700">Sample bolder text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-900">Sample boldest text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-300 font-italic">Sample light &amp; italic text</span></a></p>
                                                            <p><a href="#" class="disabled"><span class="fw-900"><u>Sample boldest &amp; underline text</u></span></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="demo-v-spacing">
                                                            <p><a href="#" class="text-primary">Primary state</a></p>
                                                            <p><a href="#" class="text-success">Success state</a></p>
                                                            <p><a href="#" class="text-warning">Warning state</a></p>
                                                            <p><a href="#" class="text-info">Info state</a></p>
                                                            <p><a href="#" class="text-danger">Danger state</a></p>
                                                            <p><a href="#" class="text-secondary">Secondary state</a></p>
                                                            <p><a href="#" class="text-muted">Muted state</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="demo-v-spacing">
                                                            <p><a href="#" class="text-primary disabled">Primary state</a></p>
                                                            <p><a href="#" class="text-success disabled">Success state</a></p>
                                                            <p><a href="#" class="text-warning disabled">Warning state</a></p>
                                                            <p><a href="#" class="text-info disabled">Info state</a></p>
                                                            <p><a href="#" class="text-danger disabled">Danger state</a></p>
                                                            <p><a href="#" class="text-secondary disabled">Secondary state</a></p>
                                                            <p><a href="#" class="text-muted disabled">Muted state</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--List styles-->
                                <div id="panel-15" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Unstyled <span class="fw-300"><i>list</i></span>
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
                                                Remove the default <code>list-style</code> and left margin on list items (immediate children only). <span class="fw-400">This only applies to immediate children list items</span>, meaning you will need to add the class for any nested lists as well.
                                            </div>
                                            <div class="demo demo-no-mb">
                                                <ul class="list-unstyled">
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Consectetur adipiscing elit</li>
                                                    <li>Integer molestie lorem at massa</li>
                                                    <li>Facilisis in pretium nisl aliquet</li>
                                                    <li>
                                                        Nulla volutpat aliquam velit
                                                        <ul>
                                                            <li>Phasellus iaculis neque</li>
                                                            <li>Purus sodales ultricies</li>
                                                            <li>Vestibulum laoreet porttitor sem</li>
                                                            <li>Ac tristique libero volutpat at</li>
                                                        </ul>
                                                    </li>
                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                    <li>Aenean sit amet erat nunc</li>
                                                    <li>Eget porttitor lorem</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-16" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Inline <span class="fw-300"><i>list</i></span>
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
                                                Remove a list’s bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>
                                            </div>
                                            <div class="demo demo-no-mb">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">Lorem ipsum</li>
                                                    <li class="list-inline-item">Phasellus iaculis</li>
                                                    <li class="list-inline-item">Nulla volutpat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-17" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Description<span class="fw-300"><i> list alignment</i></span>
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
                                                Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis
                                            </div>
                                            <div class="demo-no-mb">
                                                <dl class="row">
                                                    <dt class="col-sm-3">Description lists</dt>
                                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                                    <dt class="col-sm-3">Euismod</dt>
                                                    <dd class="col-sm-9">
                                                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                                                    </dd>
                                                    <dt class="col-sm-3">Malesuada porta</dt>
                                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                    <dt class="col-sm-3">Nesting</dt>
                                                    <dd class="col-sm-9">
                                                        <dl class="row">
                                                            <dt class="col-sm-4">Nested definition list</dt>
                                                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                        </dl>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-18" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Monospace <span class="fw-300"><i>font</i></span>
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
                                                Change a selection to our monospace font stack with <code>.text-monospace</code>
                                            </div>
                                            <div class="demo-v-space">
                                                <p class="text-monospace">This is in monospace</p>
                                            </div>
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
