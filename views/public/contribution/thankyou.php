<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php if ($description = option('description')): ?>
      <meta name="description" content="<?php echo $description; ?>">
	 <?php endif; ?>
    <title>Contribute Item</title>
    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    // queue_css_file('screen');
    queue_css_file('form');
    echo head_css();
    ?>

    <?php
    echo head_js();
    ?>
  </head>
  <?php
    @$bodyclass .= 'contribute-thank-you';
    echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php
      // fcd1, 7/25/13: one effect of the following call is the display of the admin bar
      // when viewing the exhibition when one is logged into Omeka (as admin?).
      // fcd1, 8/6/13: adding an empty admin-bar.php file in the common directory hides the admnin bar
    ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">
    <?php
    $imageURL = img("LoveInAction.png");
if ($imageURL != "") {
  echo '<div class="contribute-banner">';
  echo '<img src="' . $imageURL . '" style="width: 50%"\>';
 }
?>
<?php if ($imageURL) echo "</div>"; ?>
<div id="primary">
	<h2><?php echo __("Thank you for contributing!"); ?></h2>
  <p>Thank you for your contribution! Each contribution is reviewed. Once approved, the contributed item will be posted and viewable 
     <a href="https://exhibitions-dev.cul.columbia.edu/exhibits/show/fcd1-test-for-love-in-action"> here</a>

.  If you have any questions or concerns please contact:

<a class="mail-to" href="mailto:elizabeth.call@columbia.edu"> elizabeth.call@columbia.edu</a>
</p>
	<p><?php echo __(contribution_link_to_contribute(__('Make another contribution.')))?>
	</p>
</div>
</div>
<?php echo $this->partial('contribution/footer-contribution.php'); ?>
