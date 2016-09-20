<?php
class IfirSciModelAuthProfile extends JModelList
{
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
					'id', 'a.id',
					'user_id', 'a.user_id',
					'author','a.author',
					'catid','a.catid',
			);
		}
		parent::__construct($config);
	}
	
	protected function populateState($ordering = null, $direction = null)
	{
		$id = JRequest::getInt('author');
		$this->setState('author', $id);
	}
	
	protected function getListQuery()
	{
		$db= $this->getDbo();
		$query = $db->getQuery(true);
	
		$query->select(
				$this->getState(
						'list.select',
						'a.id, a.user_id, a.author, a.catid'
						)
				);
		$query->from($db->quoteName('#__ifirsci_authors').' AS a');
	
		//$query->where('(a.state IN (0, 1))');
	
		if ($id = $this->getState('author'))
		{
			$query->where('a.id = '.(int) $id);
		}
	
		return $query;
	}
}