<?php
// $Id: node.tpl.php,v 1.4 2007/08/07 08:39:36 goba Exp $
$terms = theme493_separate_terms($node->taxonomy);

?>

<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?> 
    <div class="content">
        <span class="print-link"><?php print $links ?></span>
        <p><b><?php print t('Reference: '); ?></b><?php print $field_reference[0]['value']; ?><br>
        <b><?php print t('Publication Date: '); ?></b><?php print $field_publication_date[0]['view']; ?>
        </p>
        <p>&nbsp;</p>
        <p><b><?php print t('Location: '); ?></b><?php print strip_tags($terms[2]); ?><br>
        <?php if ($field_salary[0]['value']): ?><b><?php print t('Salary: '); ?></b><?php print $field_salary[0]['value']; ?><?php endif;?>
        </p>
        <p>&nbsp;</p>
        <?php if ($field_company_profile[0]['value']): ?><p><b><?php print t('Company Profile: '); ?></b><?php print $field_company_profile[0]['value']; ?><br><br><?php endif;?>
        <?php if ($field_responsibilities[0]['value']): ?><b><?php print t('Responsibilities: '); ?></b><?php print $field_responsibilities[0]['value']; ?><br><br><?php endif;?>
        <?php if ($field_candidate_profile[0]['value']): ?><b><?php print t('Candidate Profile: '); ?></b><?php print $field_candidate_profile[0]['value']; ?><br><br><?php endif;?>
        <?php if ($field_reporting[0]['value']): ?><p><b><?php print t('Reporting to: ');?></b><?php print $field_reporting[0]['value']; ?><br></p><?php endif;?>
        <?php if ($field_language[0]['value']): ?><p><b><?php print t('Language: ');?></b><?php print $field_language[0]['value']; ?><br></p><?php endif;?>
        <?php if ($field_miscellaneous[0]['value']): ?><p><b><?php print t('Misc: '); ?></b><?php print $field_miscellaneous[0]['value']; ?><br></p><?php endif;?>
        </p>
        
        
    </div>
               <div class="links-indent">
            <div class="links"><a href="mailto:<?php print node_load($node->field_job_contact[0]['nid'])->field_email[0]['value']; ?>?subject=Job Offer <?php print $field_reference[0]['value']; ?>"><?php print t('Apply for this Job');?></a>
	<div><p><br><?php print t('or send an email to: ');?><b><?php print node_load($node->field_job_contact[0]['nid'])->field_email[0]['value']; ?></b>, <?php print t('with this reference ');?><b><?php print $field_reference[0]['value']; ?></b><?php print t(' in the subject of your email.');?></p></div>
</div>
        </div>
        <div class="clear"></div>
    
</div>