<?php
defined('_JEXEC') or die;

?>

<form action="<?php echo JRoute::_('index.php?option=com_ifirpublicaciones&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
  <div class="row-fluid">
    <div class="span10 form-horizontal">

  <fieldset>
    <?php echo JHtml::_('bootstrap.startPane', 'myTab', array('active' => 'details')); ?>

      <?php echo JHtml::_('bootstrap.addPanel', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_IFIRPUBLICACIONES_NEW_DETALLE', true) : JText::sprintf('COM_IFIRPUBLICACIONES_EDIT_DETALLE', $this->item->id, true)); ?>
        <div class="control-group">
          <div class="control-label"><?php echo $this->form->getLabel('title'); ?></div>
          <div class="controls"><?php echo $this->form->getInput('title'); ?></div>
          <div class="control-label"><?php echo $this->form->getLabel('language')?></div>
          <div class="controls"><?php echo $this->form->getInput('language'); ?></div>
          <div class="control-label"><?php echo $this->form->getLabel('full_text')?></div>
          <div class="controls"><?php echo $this->form->getInput('full_text'); ?></div>
        </div>
      <?php echo JHtml::_('bootstrap.endPanel'); ?>

      <input type="hidden" name="task" value="" />
      <?php echo JHtml::_('form.token'); ?>

    <?php echo JHtml::_('bootstrap.endPane'); ?>
    </fieldset>
    </div>
  </div>
</form>