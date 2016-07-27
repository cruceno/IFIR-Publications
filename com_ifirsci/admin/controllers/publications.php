<?php
defined('_JEXEC') or die;

class IfirSciControllerPublications extends JControllerAdmin
{
  public function getModel($name = 'Publication', $prefix = 'IfirSciModel', $config = array('ignore_request' => true))
  {
    $model = parent::getModel($name, $prefix, $config);
    return $model;
    
  }

/**
* Invoked when an administrator has decided to import publications from a file.
* @access	public
* */
  public function import()
  {
		$this->setRedirect(JRoute::_('index.php?option=com_ifirsci&view=import', false));		
   }

/**
* Invoked when an administrator has decided to export publications.
* @access	public
*/
   public function export()
   {
		$this->setRedirect(JRoute::_('index.php?option=com_ifirsci&view=publications', false));
   }
}