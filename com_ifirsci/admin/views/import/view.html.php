<?php
defined('_JEXEC') or die;

class IfirSciViewImport extends JViewLegacy
{
	public function display($tpl=null){
		
		$this->addToolbar();
		parent::display($tpl);
		
	}
	protected function addToolbar(){
		
		$bar=JToolBar::getInstance('toolbar');
		JToolbarHelper::title(JText::_('COM_IFIRSCI_MANAGER_PUBLICATION_IMPORT'), '');
		JToolbarHelper::back('COM_IFIRSCI_IMPORT_PUBLiCATIONS_BACK','index.php?option=com_ifirsci');
		
	}
}