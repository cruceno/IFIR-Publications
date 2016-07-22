<?php
defined('_JEXEC') or die;


JHtml::_('bootstrap.framework');
JHtml::_('formbehavior.chosen', 'select');
?>

<form action="<?php echo JRoute::_('index.php?option=com_ifirsci&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
  <div class="row-fluid">
    <div class="span10 form-horizontal">

  <fieldset>
  <?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'ifirsciitem')); ?>
      <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'ifirsciitem', empty($this->item->id) ? JText::_('COM_IFIRSCI_NEW_PUBLICATION', true) : JText::sprintf('COM_IFIRSCI_EDIT_PUBLICATION', $this->item->id, true)); ?>
		<?php foreach ($this->form->getFieldset('ifirsciitem') as $field) : ?>
		 <div class="control-group">
            <div class="control-label">
              <?php echo $field->label; ?>
            </div>
            <div class="controls">
              <?php echo $field->input; ?>
            </div>
        </div>
        <?php endforeach; ?>

    <?php echo JHtml::_('bootstrap.endTab'); ?>
    <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'scopusCitation', empty($this->item->id) ? JText::_('COM_IFIRSCI_NEW_PUBLICATION_CITATION', true) : JText::sprintf('COM_IFIRSCI_EDIT_PUBLICATION_CITATION', $this->item->id, true)); ?>
		<?php foreach ($this->form->getFieldset('scopusCitation') as $field) : ?>
		 <div class="control-group">
            <div class="control-label">
              <?php echo $field->label; ?>
            </div>
            <div class="controls">
              <?php echo $field->input; ?>
            </div>
        </div>
        <?php endforeach; ?>
    <?php echo JHtml::_('bootstrap.endTab'); ?>
    <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'scopusBiblio', empty($this->item->id) ? JText::_('COM_IFIRSCI_NEW_PUBLICATION_BIBLIO', true) : JText::sprintf('COM_IFIRSCI_EDIT_PUBLICATION_BIBLIO', $this->item->id, true)); ?>
		<?php foreach ($this->form->getFieldset('scopusBiblio') as $field) : ?>
		 <div class="control-group">
            <div class="control-label">
              <?php echo $field->label; ?>
            </div>
            <div class="controls">
              <?php echo $field->input; ?>
            </div>
        </div>
        <?php endforeach; ?>
    <?php echo JHtml::_('bootstrap.endTab'); ?>
    <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'scopusAbstandKeys', empty($this->item->id) ? JText::_('COM_IFIRSCI_NEW_PUBLICATION_ABSTRACT', true) : JText::sprintf('COM_IFIRSCI_EDIT_PUBLICATION_ABSTRACT', $this->item->id, true)); ?>
		<?php foreach ($this->form->getFieldset('scopusAbstandKeys') as $field) : ?>
		 <div class="control-group">
            <div class="control-label">
              <?php echo $field->label; ?>
            </div>
            <div class="controls">
              <?php echo $field->input; ?>
            </div>
        </div>
        <?php endforeach; ?>
    <?php echo JHtml::_('bootstrap.endTab'); ?>
    <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'Other', empty($this->item->id) ? JText::_('COM_IFIRSCI_NEW_PUBLICATION_OTHER', true) : JText::sprintf('COM_IFIRSCI_EDIT_PUBLICATION_OTHER', $this->item->id, true)); ?>
		<?php foreach ($this->form->getFieldset('Other') as $field) : ?>
		 <div class="control-group">
            <div class="control-label">
              <?php echo $field->label; ?>
            </div>
            <div class="controls">
              <?php echo $field->input; ?>
            </div>
        </div>
        <?php endforeach; ?>
    <?php echo JHtml::_('bootstrap.endTab'); ?>
      <input type="hidden" name="task" value="" />
      <?php echo JHtml::_('form.token'); ?>

    <?php echo JHtml::_('bootstrap.endTabSet'); ?>
    </fieldset>
    </div>
  </div>
</form>