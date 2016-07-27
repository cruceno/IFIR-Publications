<?php
defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php?option=com_ifirsci&view=publications'); ?>" method="post" name="adminForm" id="adminForm">
 <?php if (!empty( $this->sidebar)) : ?>
  <div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
  </div>
  <div id="j-main-container" class="span10">
<?php else : ?>
  <div id="j-main-container">
<?php endif;?>
			<input class="inputbox" name="inputfile" id="inputfile" type="file" />

<div style="text-align: center;">
	<input name="submit" value="<?php echo JText::_('Upload'); ?>" type="submit" />
</div>
  </div>
</form>