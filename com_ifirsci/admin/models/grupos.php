<?php
defined('_JEXEC') or die;

class IfirpublicacionesModelGrupos extends JModelList
{
  public function __construct($config = array())
  {
    if (empty($config['filter_fields']))
    {
      $config['filter_fields'] = array(
        'id', 'a.id',
        'joom_group_id', 'a.joom_group_id',
      	'name','a.name',
      	'language', 'a.language'
      );
    }

    parent::__construct($config);
  }

  protected function getListQuery()
  {
    $db    = $this->getDbo();
    $query  = $db->getQuery(true);

    $query->select(
      $this->getState(
        'list.select',
        'a.id, a.joom_group_id, a.name, a.language'
      )
    );
    $query->from($db->quoteName('#__ifirpublicaciones_grupos').' AS a');

    return $query;
  }
}