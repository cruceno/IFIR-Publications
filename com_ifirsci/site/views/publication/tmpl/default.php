<?php defined('_JEXEC') or die; 

JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');

?>
<div class="publication">
	<?php foreach ($this->items as $item):?>
		<div class="page-heading">
			<h1><?php echo $item->title?></h1>
		</div>
		<div class="well well-lg">
			<?php echo $item->author?>
		</div>
		<div class="panel panel-publication">
			<div class="panel-heading">
			<h3><?php echo JText::_('COM_IFIR_PUBLICATION_ABSTRACT')?></h3>
			</div>
			<div class="panel-body">
				<p><?php echo $item->abstract?></p>
			</div>
		</div>
	<?php endforeach;?>
</div>