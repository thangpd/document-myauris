<?php
//$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$home_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}" . '/';
?>

<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docs | Documentation HTML Template</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/20.png">
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $home_url ?>css/main.css"/>
    <script src="<?php echo $home_url ?>js/uikit.js"></script>
</head>

<body>

<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo uk-visible@m" href="">Docs</a>
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-docs" data-uk-toggle><span
                                data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Docs</span></a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="">Home</a></li>
                        <li class="uk-active"><a href="<?php echo $home_url ?>doc.php">Docs</a></li>
                        <li>
                            <a href="#">Changelogs</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="<?php echo $home_url ?>changelog-timeline.html">Timeline Style</a></li>
                                    <li><a href="<?php echo $home_url ?>changelog-posts.html">Post Style</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-center uk-hidden@m">
                    <a class="uk-navbar-item uk-logo" href="<?php echo $home_url ?>doc.php">Docs</a>
                </div>
                <div class="uk-navbar-right">
                    <div>
                        <a id="search-navbar-toggle" class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
                        <div class="uk-background-default uk-border-rounded"
                             data-uk-drop="mode: click; pos: left-center; offset: 0">
                            <form class="uk-search uk-search-navbar uk-width-1-1" onsubmit="return false;">
                                <input id="search-navbar" class="uk-search-input" type="search"
                                       placeholder="Search for answers"
                                       autofocus autocomplete="off" data-minchars="1" data-maxitems="30">
                            </form>
                        </div>
                    </div>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li>
                            <div class="uk-navbar-item">
                                <a class="uk-button uk-button-primary-outline"
                                   href="<?php echo $home_url ?>changelog-timeline.html">Changelog</a>
                            </div>
                        </li>
                        <li>
                            <div class="uk-navbar-item">
                                <a class="uk-button uk-button-success" href="<?php echo $home_url ?>contact.html">Contact</a>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
                                data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
                </div>
            </div>
        </div>
    </nav>
</div>
