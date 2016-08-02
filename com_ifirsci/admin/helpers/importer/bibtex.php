<?php 
/**
 * @version		$Id$
 * @package		IfirSci
 * @subpackage	Helpers
 * @copyright	Copyright (C) 2016 Javier Cruceño.
 * @license		GNU/GPL
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

ifirsciimport('includes.Structures.BibTex', 'ifirsci.admin');
ifirsciimport('tables.publication', 'ifirsci.admin');

class IfirSciBibTexImporter {
	/** 
	 * Convierte un las entradas de un archivo bibtex a objetos IfirSciPublication
	 */
	public function parse($bibfile){
		$msg='';
		$bibtex = new Structures_BibTex(array('validate'=>false, 'unwrap'=>true ));
		$bibtex->loadFile($bibfile);
		if ($bibtex->parse()){
			if ($bibtex->hasWarning()){
				foreach($bibtex->warnings as $warning){
					$msg.=$warning.'\n';
				}
			}
			foreach ($bibtex->data as $data){
				$newpub=JTable::getInstance('Publication', 'IfirSci');
				$newPubs=array();
				$type=$data['entrieType'];
				if (!empty($type)){
					foreach ($data['author'] as $auth){
						$author=implode(',',$auth);
					}
					$data['author']=implode('; ',$data['author']);
					$newpub->bind($data);

				}
				$newPubs[]=$newpub;
			}
			return $newPubs;
		}
		
	}
}


