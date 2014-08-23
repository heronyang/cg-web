<!DOCTYPE HTML>
<!--
/*
* jQuery File Upload Plugin Basic Demo 1.2.4
* https://github.com/blueimp/jQuery-File-Upload
*
* Copyright 2013, Sebastian Tschan
* https://blueimp.net
*
* Licensed under the MIT license:
* http://www.opensource.org/licenses/MIT
*/
-->
<html lang="en">
    <head>

        <!-- Website Info -->
        <!-- Force latest IE rendering engine or ChromeFrame if installed -->
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta charset="utf-8">
        <title>Cinema Graph Converter</title>
        <meta name="description" content="Upload your .avi video file, and we give you Cinema Graph animation in .gif">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <!-- Bootstrap styles -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!-- Custom Bootstrap Templated (added) -->
        <link rel="stylesheet" href="//bootswatch.com/lumen/bootstrap.min.css">
        <!-- Generic page styles -->
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="css/jquery.fileupload.css">

    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Cinema Graph Convert</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="intro.html">Intro</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a>&copy; NCTU.CS Production</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Gallery</h1>
                    <h2 class="lead">We respect your art.</h2>
                    <br>
                </div>

<?php
    $handle = opendir(dirname(realpath(__FILE__)).'/cgs/');
    while($file = readdir($handle)){
        if($file !== '.' && $file !== '..'){
            $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
            $date = date_create_from_format('Y-m-d_H-i-s', $name);
            $content = date_format($date, 'Y.m.d  H:i:s');
            echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
            echo '<a class="thumbnail" href="cgs/'.$file.'">';
            echo '<img class="img-responsive" src="cgs/'.$file.'"/></a>';
            echo '<blockquote>'.$content.'</blockquote></div>';
        }
    }
?>
            </div>
            <hr />
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
            <script src="js/vendor/jquery.ui.widget.js"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
            <script src="js/jquery.iframe-transport.js"></script>
        <!-- The basic File Upload plugin -->
            <script src="js/jquery.fileupload.js"></script>
        <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </body> 
</html>
