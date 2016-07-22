<?php
defined('_JEXEC') or die;

class IfirpublicacionesControllerDetalles extends JControllerAdmin
{
  public function getModel($name = 'Detalle', $prefix = 'IfirpublicacionesModel', $config = array('ignore_request' => true))
  {
    $model = parent::getModel($name, $prefix, $config);
    return $model;
  }
}