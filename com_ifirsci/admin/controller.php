<?php
defined('_JEXEC') or die;

class IfirSciController extends JControllerLegacy
{
  protected $default_view = 'publications';

  public function display($cachable = false, $urlparams = false)
  {
    require_once JPATH_COMPONENT.'/helpers/ifirsci.php';

    $view   = $this->input->get('view', 'publications');
    $layout = $this->input->get('layout', 'default');
    $id     = $this->input->getInt('id');

    if ($view == 'publication' && $layout == 'edit' && !$this->checkEditId('com_ifirsci.edit.publication', $id))
    {
      $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
      $this->setMessage($this->getError(), 'error');
      $this->setRedirect(JRoute::_('index.php?option=com_ifirsci&view=publications', false));

      return false;
    }

    parent::display();

    return $this;
  }
}