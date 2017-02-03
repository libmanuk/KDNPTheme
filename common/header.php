<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>



    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'skeleton','style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('vendor/jquery-accessibleMegaMenu'); ?>
    <?php queue_js_file('kdnp'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>

<link href="https://kentuckynewspapers.org/assets/favicon-879049c7a48d25b42ff7d479707c6e0c.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="/kdnp/themes/kdnp/css/lity.css" rel="stylesheet">
<link href="/kdnp/themes/kdnp/css/font-awesome.min.css" rel="stylesheet">
<link href="/kdnp/plugins/SolrSearch/views/shared/css/extra.css" rel="stylesheet">
<script src="/kdnp/themes/kdnp/javascripts/vendor/jquery.js"></script>
<script src="/kdnp/themes/kdnp/javascripts/lity.js"></script>
<style>
button:focus {outline:0 !important;}
</style>




        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Use the carousel to display multiple thumbnail images at once. example snippet for Bootstrap." />
        <script type='text/javascript' src="/kdnp/themes/kdnp/javascripts/vendor/jquery.min.js"></script>


        <script type='text/javascript' src="/kdnp/themes/kdnp/javascripts/vendor/bootstrap.min.js"></script>
<link href="/kdnp/themes/kdnp/css/bootstrap-combined.min.css" rel="stylesheet">

<script>
$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});

</script>

        <!-- CSS code from Bootply.com editor -->
        
<style>


.carousel {
	margin-bottom: 0;
	padding: 0 40px 30px 40px;
}

.carousel-control {
	left: -12px;
}
.carousel-control.right {
	right: -12px;
}

.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: 0px;
	margin-right: -19px;
}

.carousel-indicators li {
	background: #c0c0c0;
}

.carousel-indicators .active {
background: #333333;
}


</style>

</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><!--<?php echo link_to_home_page(theme_logo()); ?>--><a href="/kdnp/"><img src="https://kentuckynewspapers.org/assets/kdnp_omeka_header.png" alt="header image"/></a> </div>
            <div id="search-container" role="search">

                <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                <?php echo search_form(array('show_advanced' => true)); ?>
                <?php else: ?>
                <?php echo search_form(); ?>
                <?php endif; ?>

<span style="font-size:12px;color:#ffffff">&nbsp; <span style="color:DodgerBlue;">tip</span>: Use " " to search for exact phrases.</span>




            </div>
            

            
            
        </header>

         <div id="primary-nav" role="navigation">
             <?php
                  echo public_nav_main();
             ?>
         </div>

         <!--<div id="mobile-nav" role="navigation" aria-label="<?php echo __('Mobile Navigation'); ?>">
             <?php
                  echo public_nav_main();
             ?>
         </div>-->

        <?php echo theme_header_image(); ?>

    <div class="content" role="main" tabindex="-1">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
