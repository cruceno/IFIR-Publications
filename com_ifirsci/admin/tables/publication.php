<?php
defined('_JEXEC') or die;

class IfirSciTablePublication extends JTable
{
  public function __construct(&$db)
  {
    parent::__construct('#__ifirsci_data', 'id', $db);
  }

  public function bind($array, $ignore = '')
  {
    return parent::bind($array, $ignore);
  }

  public function store($updateNulls = false)
  {
    return parent::store($updateNulls);
  }
}