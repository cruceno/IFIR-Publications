<?php
defined('_JEXEC') or die;

class IfirSciModelPublication extends JModelAdmin
{
  protected $text_prefix = 'COM_IFIRSCI';

  public function getTable($type = 'Publication', $prefix = 'IfirSciTable', $config = array())
  {
    return JTable::getInstance($type, $prefix, $config);
  }

  public function getForm($data = array(), $loadData = true)
  {
    $app = JFactory::getApplication();

    $form = $this->loadForm('com_Ifirsci.publication', 'publication', array('control' => 'jform', 'load_data' => $loadData));
    if (empty($form))
    {
      return false;
    }

    return $form;
  }

  protected function loadFormData()
  {
    $data = JFactory::getApplication()->getUserState('com_ifirsci.edit.publication.data', array());

    if (empty($data))
    {
      $data = $this->getItem();
      
      $data->a_user_id=explode(',',$data->a_user_id);
      $data->r_user_id=explode(',',$data->r_user_id);
      
    }

    return $data;
  }

  protected function prepareTable($table)
  {
    $table->title    = htmlspecialchars_decode($table->title, ENT_QUOTES);
  }
}