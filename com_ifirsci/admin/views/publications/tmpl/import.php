<?php
/**
 * @package IfirSci
 * @subpackage Publications
 * @license	GNU/GPL
 * View for importing publications
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 
?>
<form name="adminForm" id="adminForm" enctype="multipart/form-data" method="post">

			<input class="inputbox" name="inputfile" id="inputfile" type="file" />

<div style="text-align: center;">
	<input name="submit" value="<?php echo JText::_('Upload'); ?>" type="submit" />
</div>
</form>