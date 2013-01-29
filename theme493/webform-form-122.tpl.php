<?php
// $Id: webform-form.tpl.php,v 1.1 2009/05/22 03:11:18 quicksketch Exp $

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<div>
                                	<div class="form-item"><b>Telephone Number:</b> +44 (0)20 7535 1904</div>
                                	<div class="form-item"><b>Fax Number:</b> +44 (0)20 7206 9391</div>
                                	<div class="form-item"><b>Email Altana Funds:</b> investorservices@altanafunds.com</div>
                                	<div class="form-item"><b>Address:</b> 55 Baker Street London W1U 8EW</div>
                                	<div class="form-item"><b>Site Map:</b><br>
                                	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;hl=en&amp;ie=UTF8&amp;msid=212497291809811055061.0004a7ddd8c796afae938&amp;ll=51.518758,-0.156169&amp;spn=0.009347,0.018239&amp;z=15&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?msa=0&amp;hl=en&amp;ie=UTF8&amp;msid=212497291809811055061.0004a7ddd8c796afae938&amp;ll=51.518758,-0.156169&amp;spn=0.009347,0.018239&amp;z=15&amp;source=embed" style="color:#0000FF;text-align:left">55 Baker St</a> in a larger map</small></div>
                                	</div>
<?php
  // If editing or viewing submissions, display the navigation at the top.
  if (isset($form['submission_info']) || isset($form['navigation'])) {
    print drupal_render($form['navigation']);
    print drupal_render($form['submission_info']);
  }
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  
  print drupal_render($form);

  // Print out the navigation again at the bottom.
  if (isset($form['submission_info']) || isset($form['navigation'])) {
    unset($form['navigation']['#printed']);
    print drupal_render($form['navigation']);
  }
