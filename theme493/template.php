<?php

function theme493_preprocess_page(&$vars) {
	$menu_footer = menu_navigation_links("menu-footer");
  	$vars['menu_footer'] = $menu_footer;
  	
  	  	
  	if (isset($vars['node'])) {
    	switch ($vars['node']->nid) {
    		case '2':
        		$vars['template_files'][] = 'page-node-' . $vars['node']->nid;
        		break;
        	default:
    			$vars['template_files'][] = 'page-node-' . $vars['node']->type;
    	}
  	}
  	
}

function theme493_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
    
  if ($node) {
    	switch ($node->nid) {
    		case '2':
        		$vars['template_file'][] = 'node-' . $node->nid;
        		break;
        	default:
    			$vars['template_file'][] = 'node-' . $node->type;
    	}
  	}
}

function theme493_menu_local_task($link, $active = FALSE) {
  return '<li '. ($active ? 'class="active" ' : '') .'><span><span>'. $link ."</span></span></li>\n";
}

function theme493_preprocess_views_exposed_form(&$vars, $hook) {
     // Change the text on the submit button
      $vars['form']['submit']['#value'] = t('Go');
      // Rebuild the rendered version (submit button, rest remains unchanged)
      unset($vars['form']['submit']['#printed']);
      $vars['button'] = drupal_render($vars['form']['submit']);
         
}

function theme493_separate_terms($node_taxonomy) {
if ($node_taxonomy) {
	//separating terms by vocabularies
	foreach ($node_taxonomy AS $term) {
	$links[$term->vid]['taxonomy_term_'. $term->tid] = array(
	   'title' => $term->name,
	   'href' => taxonomy_term_path($term),
	   'attributes' => array(
	                 'rel' => 'tag', 
	                 'title' => strip_tags($term->description)
	                 ),
	 );
	}
	//theming terms out
	foreach ($links AS $key => $vid) {
	$terms[$key] = theme_links($vid);
	}
}
return $terms;
}
