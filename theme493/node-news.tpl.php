<?php
// $Id: node-news.tpl.php,v 1.1 2009/05/22 15:17:31 jjeff Exp $

/**
 * @file node-news.tpl.php
 *
 * Theme implementation to display a News.
 *
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>

<?php print '<h1>'. $title .'</h1>';?>
<?php if(!drupal_is_front_page()):?>   
<div class="meta-info">
	<b><?php print $field_publication_date[0]['view']; ?></b>
	<?php print $links; ?>
	<?php if ($field_url_source[0]['value']): ?>
		 <span class="text-title"> - <a href="<?php print $field_url_source[0]['value']; ?>" class="news-source-wrapper" target="_blank"><?php print $field_source[0]['value']; ?></a></span>  
	<?php endif;?>
</div>
 
<div class="article1">
	<?php print $node->content['body']['#value']; ?>
	<?php if ($field_url_source[0]['value']): ?> 
		<a href="<?php print $field_url_source[0]['value']; ?>" class="readmore" target="_blank" ><?php print t('Read More'); ?> &raquo;</a>
	<?php endif;?>
	
    <?php if ($field_file[0]['view']): ?> 
		<a href="/<?php print $field_file[0]['view']; ?>" class="download" target="_blank" ><span class="news-type press-releases">Download PDF</span><?php print t('Download PDF'); ?></a>
	<?php endif;?>
    
	
</div>
<?php endif;?>

<?php if(drupal_is_front_page()):?>   
<div class="meta-info">
	<b><?php print $field_publication_date[0]['view']; ?></b>
</div>
 
<div class="article1">
	<?php print $node->content['body']['#value']; ?>
	<a href="<?php print $node_url ?>" class="readmore"><?php print t('Read More'); ?> &raquo;</a>	
</div>
<?php endif;?>

