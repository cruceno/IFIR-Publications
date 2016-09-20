<?php
defined('_JEXEC') or die;

class IfirSciViewAuthProfile extends JViewLegacy
{
	protected $items;
	protected $pubitems;
	protected $areaselect;
	protected $state;
	protected $pagination;
	
	public function display($tpl = null)
	{
		$app = JFactory::getApplication();
 		//$jinput = $app->input;
		
		$this->items = $this->get('Items');
		
 		$pubmodel=JModelLegacy::getInstance('publications', 'IfirSciModel');
		
// 		$limit = $jinput::get('limit', $app->getCfg('list_limit',int),int);
//  		$pubmodel->setState('list.limit',$limit);
 		
//  		$limitstart = $jinput::get('limitstart', 0, int);
//  		$pubmodel->setState('list.start',$liststart);
 		
		$names=explode(';',$this->items[0]->author);
		$pubmodel->setState('names',$names);
		
		$this->setModel($pubmodel);
		$this->pubitems=$this->get('Items', 'publications');

		$app = JFactory::getApplication();
		$this->state = $this->get('State');
		$this->pagination= $this->get('Pagination','publications');
		
		$params = $app->getParams();
		$this->assignRef( 'params', $params );
		
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		parent::display($tpl);
	}
}