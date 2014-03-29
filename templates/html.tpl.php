<?php
/**
 * @file
 * Default theme implementation to display the basic
 * html structure of a single Drupal page.
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php print $head_title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- START Styles  -->
		 <?php print $styles; ?>
		<!-- END Styles  -->
    </head>
   <body class="<?php print $classes; ?>" <?php print $attributes;?>>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

         <div id="skip-link"> <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>

         <?php print $page_top; ?>
		 <?php print $page; ?>
		 <?php print $page_bottom; ?>

		<!-- START BODY SCRIPTS -->
        <?php print $scripts; ?>
        <!-- END BODY SCRIPTS -->

        <!-- START Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <!-- END Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
