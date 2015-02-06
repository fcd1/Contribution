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
     //queue_css_file('screen');
    echo head_css();
    ?>

    <?php
    echo head_js();
    ?>
  </head>
  <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php
      // fcd1, 7/25/13: one effect of the following call is the display of the admin bar
      // when viewing the exhibition when one is logged into Omeka (as admin?).
      // fcd1, 8/6/13: adding an empty admin-bar.php file in the common directory hides the admnin bar
    ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <?php
    $imageURL = img("LoveInAction.png");
if ($imageURL != "") {
  echo '<img src="' . $imageURL . '" style="width: 50%"\>';
 }
?>
<?php if ($imageURL) echo "</div>"; ?>
<div id="primary">
	<h1><?php echo __("Thank you for contributing!"); ?></h1>
	<p><?php echo __("Your contribution will show up in the collection once an administrator approves it.")?>
	</p>
	<p><?php echo __(contribution_link_to_contribute(__('Make another contribution.')))?>
	</p>
</div>
<?php echo foot(); ?>
