<?php
// $Id: views-view-fields--Team--page-1.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields--Team--page-1.tpl.php
 *  In Focus List Page view template  to all the fields as a row. 
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php if ($fields['field_image_fid']->content): ?>
<div class="views-field views-field-field-employee-photo">        
	<div class="field-content"><img src="/<?php print $fields['field_image_fid']->content; ?>" alt=""></div> 
</div>
<?php endif; ?>
<div class="views-field views-field-title"><h2><?php print $fields['title']->content; ?></h2>  </div>
<div class="views-field views-field-body">        
<span class="field-content"><h3><?php print $fields['field_responsible_value']->content; ?></h3></span>
<span class="field-content"><?php print $fields['field_address_value']->content; ?></span> 
<?php if ($fields['field_phone_number_value']->content): ?>
	<span class="field-content"><img src="/sites/normanalex.thenextlabs.com/themes/theme493/images/phone.png">&nbsp;<?php print $fields['field_phone_number_value']->content; ?><br></span> 
<?php endif; ?>
<?php if ($fields['field_fax_number_value']->content): ?>
<span class="field-content"><img src="/sites/normanalex.thenextlabs.com/themes/theme493/images/printfax.png">&nbsp;<?php print $fields['field_fax_number_value']->content; ?><br></span>  
<?php endif; ?>
<?php if ($fields['field_email_value']->content): ?>
<span class="field-content"><img src="/sites/normanalex.thenextlabs.com/themes/theme493/images/mail.png">&nbsp;<?php print $fields['field_email_value']->content; ?></a><br></span> 
<?php endif; ?>
<?php if ($fields['field_skype_value']->content): ?>
<span class="field-content"><img src="/sites/www.normanalex.com/themes/theme493/images/skype.png">&nbsp;<a href="skype:<?php print $fields['field_skype_value']->content; ?>?call"><?php print $fields['field_skype_value']->content; ?></a><br></span> 
<?php endif; ?>
</div>

			



				

		


