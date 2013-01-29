<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title>Norman Alex</title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  
  	<script src="<?php print base_path() ?>misc/jquery.js" type="text/javascript"></script>
    
    <script src="<?php print base_path().path_to_theme() ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php print base_path().path_to_theme() ?>/js/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php print base_path().path_to_theme() ?>/js/Impact_400.font.js" type="text/javascript"></script>
    
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>
	<link href="<?php print base_path().path_to_theme() ?>/menu-splash.css" media="all" rel="stylesheet" type="text/css" />
    
<!--[if IE 7]>
<style type="text/css">
  .splash-outer { display:block;}
  .splash-cont {display:block;}
  .splash-indent { padding-top:250px; overflow:hidden; width:100%;}
</style>
<![endif]-->
    
</head>
  
<body id="splash">
	<div class="min-width">
        <div id="main">
        	<div class="splash-outer">
            	<div class="splash-cont">
                	
                </div>
            </div>
        </div>
        <div id="footer-splash">
            <div class="foot">
            	<?php if ($footer_message || $footer) : ?>
                    <span><?php print $footer_message;?> <?php print date("Y");?>&nbsp;<!--{%FOOTER_LINK} --></span>
                <?php endif; ?>
            </div>
        </div>
       
    </div>
 
<?php print $closure;?>
</body>
</html>