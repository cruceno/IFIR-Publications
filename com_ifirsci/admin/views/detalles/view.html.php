<?php
defined('_JEXEC') or die;

class IfirpublicacionesViewDetalles extends JViewLegacy
{
  protected $items;

  public function display($tpl = null)
  {
    $this->items    = $this->get('Items');

    if (count($errors = $this->get('Errors')))
    {
      JError::raiseError(500, implode("\n", $errors));
      return false;
    }

    $this->addToolbar();
    parent::display($tpl);
  }

  protected function addToolbar()
  {
    $canDo  = IfirpublicacionesHelper::getActions();
    $bar = JToolBar::getInstance('toolbar');

    JToolbarHelper::title(JText::_('COM_IFIRPUBLICACIONES_MANAGER_DETALLES'), '');

    JToolbarHelper::addNew('detalle.add');

    if ($canDo->get('core.edit'))
    {
      JToolbarHelper::editList('detalle.edit');
    }
    if ($canDo->get('core.admin'))
    {
      JToolbarHelper::preferences('com_ifirpublicaciones');
    }
  }
}