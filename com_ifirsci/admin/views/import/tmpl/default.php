<?php
defined('_JEXEC') or die;
?>

<form action="<?php echo JRoute::_('index.php?option=com_ifirsci&view=import'); ?>" method="post" name="adminForm" id="adminForm">
 <?php if (!empty( $this->sidebar)) : ?>
  <div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
  </div>
  <div id="j-main-container" class="span10">
 <?php else : ?>
  <div id="j-main-container">
 <?php endif;?>
  	<div class="form-horizontal">	
		<div class="control-group">
		<div class="control-label">
			<?php echo JText::_('COM_IFIRSCI_IMPORT_FILE_FIELD_LABEL')?>
		</div>
			<input class="input input-xxlarge " name="file_upload" id="file_upload" type="file" />
		</div>
		<div class="control-group">
			<div class="controls">
				<input name="submit" class="btn lg-btn-default" value="<?php echo JText::_('Upload'); ?>" type="submit" />
			</div>
		</div>
		<input type="hidden" name="option" value="com_ifirsci">
		<input type="hidden" name="controller" value="import">
		<input type="hidden" name="task" value="executeImport">
  	</div>
  </div>
</form>