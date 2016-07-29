<?php
defined('_JEXEC') or die;

class IfirSciControllerImport extends JControllerAdmin
{
	public function executeImport(){
		//Retrieve file details from uploaded file, sent from upload form
		$file = JRequest::getVar('file_upload', null, 'files', 'array');
		
		//Import filesystem libraries. Perhaps not necessary, but does not hurt
		jimport('joomla.filesystem.file');
		
		//Clean up filename to get rid of strange characters like spaces etc
		$filename = JFile::makeSafe($file['name']);
		
		//Set up the source and destination of the file
		$src = $file['tmp_name'];
		$dest = JPATH_COMPONENT . DS . "tmp" . DS . $filename;
		
		//First check if the file has the right extension, we need jpg only
		if ( strtolower(JFile::getExt($filename) ) == 'bib') {
			if ( JFile::upload($src, $dest) ) {
				//Redirect to a page of your choice
			} else {
				//Redirect and throw an error message
				$msg = JText::_('COM_IFIRSCI_ERROR_FIE_UPLOAD');
				$this->setRedirect(JRoute::_('index.php?option=com_ifirsci&view=import', $msg));
				
			}
		} else {
			//Redirect and notify user file is not right extension
			$msg = JText::_('COM_IFIRSCI_ERROR_FIE_UPLOAD_CHANGE_EXTENSION');
			$this->setRedirect(JRoute::_('index.php?option=com_ifirsci&view=import', $msg));
		}
	}
}
