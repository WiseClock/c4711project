<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{title}</title>
        <link href="/assets/css/s3slider.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
        <link href="/assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- JavaScripts-->
        <script type="text/javascript" src="/assets/js/jquery.js"></script>
        <script type="text/javascript" src="/assets/js/piroBox.1_2.js"></script>
        <script type="text/javascript" src="/assets/js/s3Slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider').s3Slider({
                    timeOut: 1600
                });
                $().piroBox({
                    my_speed: 600, //animation speed
                    bg_alpha: 0.5, //background opacity
                    radius: 4, //caption rounded corner
                    scrollImage: false, // true == image follows the page, false == image remains in the same open position
                    pirobox_next: 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
                    pirobox_prev: 'piro_prev', // Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
                    close_all: '.piro_close', // add class .piro_overlay(with comma)if you want overlay click close piroBox
                    slideShow: 'slideshow', // just delete slideshow between '' if you don't want it.
                    slideSpeed: 4 //slideshow duration in seconds(3 to 6 Recommended)
                });
            });
        </script>
    </head>
    <body>
        <div id="templatemo_wrapper">

            <div id="templatemo_menu">

                {menubar}

            </div> <!-- end of templatemo_menu -->

            <div id="templatemo_left_column">

                <div id="templatemo_header">

                    <div id="site_title">
                        <h1><a href="#" target="_parent">BC<strong>IT</strong><span>British Columbia Institute of Technology</span></a></h1>
                    </div><!-- end of site_title -->

                </div> <!-- end of header -->  

                <div id="templatemo_sidebar">
					
					<!--
                    <h4>Activities</h4>
                    <ul class="templatemo_list">
                        <li><a href="#">Basketballs</a></li>
                        <li><a href="#">Soccer balls</a></li>
                        <li><a href="#">Footballs</a></li>
                        <li><a href="#">Volleyballs</a></li>
                    </ul>
					--> 
                    <div class="cleaner_h40"></div>

                    <h4>Attractions</h4>
                    <ul class="templatemo_list">
                        {attraction}
                    </ul>

                </div> <!-- end of templatemo_sidebar --> 

            </div> <!-- end of templatemo_left_column -->

            <div id="templatemo_right_column">

                {content}

                <div class="cleaner"></div>
            </div> 
            <!-- end of templatemo_main -->
            <div class="cleaner_h20"></div>

            <div id="templatemo_footer">

                Copyright © 2048 <a href="#">BCIT</a> | 
                <a href="#" target="_parent">Website Templates</a> by <a href="#" target="_parent">Free CSS Templates</a>

            </div>

            <div class="cleaner"></div>
        </div> <!-- end of warpper -->

    </body>
</html>
