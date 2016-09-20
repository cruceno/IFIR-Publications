<?php
defined('_JEXEC') or die;

class IfirSciModelPublication extends JModelList
{
	public function __construct($config=array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields']= array(
        			'Id', 'a.id',
        			'Title', 'a.title',
      				'Year', 'a.year',
      				'Journal','a.journal',
					'author','a.author',
					'abstract','a.abstract',
					'State', 'a.state',
					
			);
		}
		
		parent::__construct($config);
	}
	
 	protected function populateState($ordering = null, $direction = null)
 	{
 		$id = JFactory::getApplication()->input->get('id', int);
 		$this->setState('id', $id);
 	}
	
	protected function getListQuery()
	{
		$db=$this->getDbo();
		$query=$db->getQuery(true);
		$query->select(
				$this->getState(
						'list.select',
						'a.id, a.title,'.
						'a.year, a.journal,'.
						'a.author, a.abstract,'.
						'a.state')
				);
		$query->from($db->quoteName('#__ifirsci_data').' AS a');
		
 		if ($pubid = $this->getState('id')){
 			$query->where('a.id = '.(int)$pubid);
 		}
 		
		return $query;
	}
	
}