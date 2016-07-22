<?php
defined('_JEXEC') or die;

class IfirSciControllerPublications extends JControllerAdmin
{
  public function getModel($name = 'Publication', $prefix = 'IfirSciModel', $config = array('ignore_request' => true))
  {
    $model = parent::getModel($name, $prefix, $config);
    return $model;
  }
}