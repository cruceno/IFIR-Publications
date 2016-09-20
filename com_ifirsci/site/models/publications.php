<?php
defined('_JEXEC') or die;

class IfirSciModelPublications extends JModelList
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


 		$jinput = JFactory::getApplication()->input;
 		
 		$limit = $jinput->get('limit', 10,int);
 		$this->setState('list.limit', $limit);
 		// set start (eg. what record to begin pagination at)
 		$limitstart = $jinput->get('start',0,int);
 		$this->setState('list.start', $limitstart);
 		
 
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
		
 		if ($names = $this->getState('names'))
 		{	
 			$query_parts = array();
 			foreach ($names as $name) {
 				$query_parts[] = $db->quote('%'.$name.'%');
 			}
			$string= implode(' OR a.author LIKE ',$query_parts);
 			$query->where('a.author LIKE '.$string);
 			
 		}
 		
		return $query;
	}
	
}