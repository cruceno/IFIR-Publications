<?php
defined('_JEXEC') or die;

class IfirSciHelper
{
  public static function getActions($categoryId = 0)
  {
    $user  = JFactory::getUser();
    $result  = new JObject;

    if (empty($categoryId))
    {
      $assetName = 'com_ifirsci';
      $level = 'component';
    }
    else
    {
      $assetName = 'com_ifirsci.category.'.(int) $categoryId;
      $level = 'category';
    }

    $actions = JAccess::getActions('com_ifirsci', $level);

    foreach ($actions as $action)
    {
      $result->set($action->name,  $user->authorise($action->name, $assetName));
    }

    return $result;
  }
  
  public static function addSubmenu($vName = 'folios')
  {
  	JHtmlSidebar::addEntry(
  			JText::_('COM_IFIRSCI_SUBMENU_PUBLICATIONS'),
  			'index.php?option=com_ifirsci&view=publications',
  			$vName == 'folios'
  			);
  	JHtmlSidebar::addEntry(
  			JText::_('COM_IFIRSCI_SUBMENU_CATEGORIES'),
  			'index.php?option=com_categories&extension=com_ifirsci',
  			$vName == 'categories'
  			);
  	if ($vName == 'categories')
  	{
  		JToolbarHelper::title(
  				JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE',
  						JText::_('com_ifirsci')),
  				'publications-categories');
  	}
  }
}