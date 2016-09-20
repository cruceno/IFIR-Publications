<?php

class IfirSciViewPublications extends JViewLegacy
{
	protected $items;
	protected $sugestions;
	protected $state;
	protected $pagination;

	public function display($tpl = null)
	{
		$this->items = $this->get('Items');
		$this->state = $this->get('State');
		$this->pagination=$this->get('Pagination');

		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		parent::display($tpl);
	}

}