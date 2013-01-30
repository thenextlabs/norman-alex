<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
 
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
	<script src="<?php print base_path() ?>misc/jquery.js" type="text/javascript"></script>
    
    
    <script src="<?php print base_path().path_to_theme() ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 4000, true);
        });
    </script>
    
    <script type="text/javascript" src="<?php print base_path().path_to_theme() ?>/js/imagepreloader.js"></script>
	<script type="text/javascript">
        preloadImages([
            '<?php print base_path().path_to_theme() ?>/images/bg-drop.gif', 
            '<?php print base_path().path_to_theme() ?>/images/bg-page2.gif',
			'<?php print base_path().path_to_theme() ?>/images/bg-page-active.gif'
			]);
    </script>
<?php if(drupal_is_front_page()):?>
<script type="text/javascript">

var speed = 150            //vitesse d'écriture
var speed2 = 500       //temp de pause
// Ci-dessous : Rajoutez des messages sans oublier de changer le numéro du msg[…] 
msg = []

function upticker(){ 
	if (y > msg2.length - 1) {
		y = 0; setTimeout("upticker()",speed);}
	else{if (x > msg2[y].length) {
		msg = msg2[y];x = 0; y++;
		setTimeout("upticker()",speed2);
	}
	else {
		msg = msg2[y].substring(0,x++);
		setTimeout("upticker()",speed);
	}
	t.innerHTML = msg };
} 

setTimeout("upticker()",speed);

function init(){
	t=document.getElementById("ticker");
	msg[0]=t.innerHTML;msg2 = msg;x = y = 0;
	upticker()
}

window.onload=init

</script>
<?php endif;?>    
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>

	<link href="<?php print base_path().path_to_theme() ?>/menu.css" media="all" rel="stylesheet" type="text/css" />

</head>
  
<body id="body">
	<div class="min-width">
        <div id="main">
        	<div class="bg-main">
            	<div id="header">
                    <div class="head-row1">
                        <div class="col1">
                            <?php if ($logo) : ?>
                                <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" class="logo" /></a>
                            <?php endif; ?>
                            <?php if ($site_name) : ?>
                                <h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
                            <?php endif; ?>
                            
                            <?php if ($site_slogan) : ?>
                                <div class="slogan"><?php print($site_slogan) ?></div>
                            <?php endif;?>
                                
                            
                                <div id="mission"></div>
                           
                        </div>
                        <div class="col2">
                            
        

        <div class="social-media">
            <span class="twitter">
                <a href="https://twitter.com/ivormonaco" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-show-count="false">Follow @ivormonaco</a>
                <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
            </span>
     <span class="viadeo"><a title="ViadeoShare" href="javascript:location.href='http://www.viadeo.com/shareit/share/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)+'&overview='+encodeURIComponent(document.title)+'&urllanguage=fr&urlaffiliate=32003&encoding=UTF-8&urlpicture=http://www.viadeo.com/images/shareit/viadeoflower.gif'" target="_blank"><img src="http://www.viadeo.com/images/shareit/shareitMenu_flower.gif" /></a>
     </span>            <span class="linkedin">
                <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="http://www.normanalex.com"></script>        
            </span>
                        
            <span class="fb">
               <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.normanalex.com&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:88px; height:21px;" allowTransparency="true"></iframe></span>
        </div>
   	
                            <div class="search-box">
                                 <?php if ($search_box): print $search_box;  endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="head-row2">
                        <div class="col1">
                            <?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
                                <?php print html_menu(variable_get('yuimenu_root','1') ); ?>
                             <?php }?>
                        </div>
                        
                        <div class="col2">
                            <?php print $rightmenu; ?>
                        </div>
                    </div>
                    <?php if ($slider != ""): ?>
                        <div class="head-row3" style="width:100%; overflow:hidden;">
                        	<?php print $slider?>
                        </div>
                    <?php endif; ?>
                    <?php if ($custom != ""): ?>
	                    <div class="head-row4" id="custom">
                            <div class="ind">
                                <?php print $custom?>
                            </div>
	                    </div>
                    <?php endif; ?>
                </div>
                <div id="cont">
                    <div class="cont-inner">
                        <?php if ($left != ""): ?>
                            <div id="left-col">
                                <div class="ind">
                                    <div class="width">
                                        <?php print $left?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($right != ""): ?>
                            <div id="right-col">
                                <div class="ind<?php if(drupal_is_front_page()):?> home<?php endif; ?>">
                                    <div class="width">
                                        <?php print $right?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div id="cont-col<?php if(drupal_is_front_page()):?>-home<?php endif; ?>">
                            <div class="ind">
                                  <?php if(!drupal_is_front_page()):?> 
                                  <?php print '<h1>'. $title .'</h1>';?>
     
                                  	<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                                  		                                  		<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                                  		<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                                                     
                                  		<?php if ($show_messages && $messages != ""): ?>
                                      		<?php print $messages ?>
                                  		<?php endif; ?>
                                
                                  		<?php if ($help != ""): ?>
                                      		<div id="help"><?php print $help ?></div>
                                  		<?php endif; ?>
                                   
                                    <!-- start main content -->
                                   
                                 
                                  <?php endif; ?> 
                                  <?php print $content; ?>
                            </div>
                        </div>
                    </div>
                                                    
                </div>
               
                <div id="footer">
                    <div class="foot">
                    	<span>
                    	 <?php 
						foreach($menu_footer as $key => $value ) {
        					print '<a href="/'.$menu_footer[$key]['href'].'">'.$menu_footer[$key]['title'].'</a>&nbsp;';		
    					}
						?>
                       </span>
                  		<br><br>
                  		<div class="footcenter">
                  		<?php if ($footer_message || $footer) : ?>
                            <span><?php print $footer_message;?>&nbsp;<?php print date("Y");?>&nbsp;<!--{%FOOTER_LINK} --></span>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>  
    
            </div>
             
        </div>
        
    </div>
 
<?php print $closure;?>
</body>
</html>