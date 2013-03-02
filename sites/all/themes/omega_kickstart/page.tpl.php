<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>





<!--

<div id='headercontainer'> 
<div id='left'></div>
<div id='right'></div>
<div id='center'> SURFACTIVITY </div>

</div>
-->

<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>

    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  

  <div id='guest-house-container'>
      <div id='left'></div>
      <div id='center'></div>
      <div id='right'></div>
  </div>
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>

