<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
	<script src="<?php print base_path() ?>misc/jquery.js" type="text/javascript"></script>
    
    
    <script src="<?php print base_path().path_to_theme() ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
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
    
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>

	<link href="<?php print base_path().path_to_theme() ?>/menu.css" media="all" rel="stylesheet" type="text/css" />

</head>
  
<body id="body" class="section-news">
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
                <a href="https://twitter.com/normanalex" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-show-count="false">Follow @normanalex</a>
                <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
            </span>
     
            <span class="linkedin">
                <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
                <script type="IN/Share" data-url="http://www.normanalex.com/"></script>        
            </span>
            
            <span class="fb">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) {return;}
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=231021813579159";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>  
                <div class="fb-like" data-href="http://www.normanalex.com/" data-send="false" data-layout="button_count" data-width="61" data-show-faces="false" data-colorscheme="light"></div>      
            </span>
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
                                <div class="ind">
                                    <div class="width">
                                        <?php print $right?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div id="cont-col<?php if(drupal_is_front_page()):?>-home<?php endif; ?>">
                            <div class="ind">
                                        
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