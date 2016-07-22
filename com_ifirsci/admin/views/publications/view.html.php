<?php
defined('_JEXEC') or die;

class IfirSciViewPublications extends JViewLegacy
{
  protected $items;
  protected $state;

  public function display($tpl = null)
  {
    $this->items    = $this->get('Items');
    $this->state = $this->get('State');
    
    IfirSciHelper::addSubmenu('publications');
    
    if (count($errors = $this->get('Errors')))
    {
      JError::raiseError(500, implode("\n", $errors));
      return false;
    }
    

    $this->addToolbar();
    $this->sidebar = JHtmlSidebar::render();
    parent::display($tpl);
  }

  protected function addToolbar()
  {
    $canDo  = IfirSciHelper::getActions();
    $bar = JToolBar::getInstance('toolbar');

    JToolbarHelper::title(JText::_('COM_IFIRSCI_MANAGER_PUBLICATIONS'), '');

    JToolbarHelper::addNew('publication.add');

    if ($canDo->get('core.edit'))
    {
      JToolbarHelper::editList('publication.edit');
    }
    if ($canDo->get('core.edit.state')) {
    
    	JToolbarHelper::publish('publications.publish', 'JTOOLBAR_PUBLISH', true);
    	JToolbarHelper::unpublish('publications.unpublish', 'JTOOLBAR_UNPUBLISH', true);
    
    	JToolbarHelper::archiveList('publications.archive');
    	JToolbarHelper::checkin('publications.checkin');
    }
    if ($canDo->get('core.delete'))
    {
    	JToolBarHelper::deleteList('', 'publications.delete', 'JTOOLBAR_DELETE');
    }
    if ($canDo->get('core.admin'))
    {
      JToolbarHelper::preferences('com_ifirsci');
    }
    
    JHtmlSidebar::setAction('index.php?option=com_ifirsci&view=publications');
    
    JHtmlSidebar::addFilter(JText::_('JOPTION_SELECT_PUBLISHED'),'filter_state',
    								JHtml::_('select.options', 
    								JHtml::_('jgrid.publishedOptions'), 
    								'value', 
    								'text', 
    								$this->state->get('filter.state'),
    								true
    										));
  }
}