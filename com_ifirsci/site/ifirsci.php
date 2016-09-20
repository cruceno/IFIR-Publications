<?php
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$cssFile = "/joomla-dev/components/com_ifirsci/css/ifirsci.css";
$document->addStyleSheet($cssFile);

$controller = JControllerLegacy::getInstance('IfirSci');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();