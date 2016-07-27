<?php
defined('_JEXEC') or die;

class IfirSciModelPublications extends JModelList
{
  public function __construct($config = array())
  {
    if (empty($config['filter_fields']))
    {
      $config['filter_fields'] = array(
        'Id', 'a.id',
        'Title', 'a.Title',
      	'Year', 'a.Year',
      	'Journal','a.journal',
      	'Authors', 'a.a_user_id',
      	'State','a.state'
      );
    }

    parent::__construct($config);
  }
  protected function populateState($ordering = null, $direction = null)
  {
  	parent::populateState('a.title', 'asc');
  }
  protected function getListQuery()
  {
    $db    = $this->getDbo();
    $query  = $db->getQuery(true);

    $query->select(
      $this->getState(
        'list.select',
        'a.id, a.Title, a.Year,a.journal, a.a_user_id, a.State'
      )
    );
    $query->from($db->quoteName('#__ifirsci_data').' AS a');
    $orderCol = $this->state->get('list.ordering');
    $orderDirn = $this->state->get('list.direction');
    $query->order($db->escape($orderCol.' '.$orderDirn));
    return $query;
  }
}