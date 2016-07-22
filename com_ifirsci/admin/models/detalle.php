<?php
defined('_JEXEC') or die;

class IfirpublicacionesModelDetalle extends JModelAdmin
{
  protected $text_prefix = 'COM_IFIRPUBLICACIONES';

  public function getTable($type = 'Detalle', $prefix = 'IfirpublicacionesTable', $config = array())
  {
    return JTable::getInstance($type, $prefix, $config);
  }

  public function getForm($data = array(), $loadData = true)
  {
    $app = JFactory::getApplication();

    $form = $this->loadForm('com_Ifirpublicaciones.detalle', 'detalle', array('control' => 'jform', 'load_data' => $loadData));
    if (empty($form))
    {
      return false;
    }

    return $form;
  }

  protected function loadFormData()
  {
    $data = JFactory::getApplication()->getUserState('com_ifirpublicaciones.edit.detalle.data', array());

    if (empty($data))
    {
      $data = $this->getItem();
    }

    return $data;
  }

  protected function prepareTable($table)
  {
    $table->title    = htmlspecialchars_decode($table->title, ENT_QUOTES);
  }
}