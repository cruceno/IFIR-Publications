<?php
defined('_JEXEC') or die;

JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
?>

<div class="publications-list">
	<table class="table table-striped" id="ifirSciPubList">
	<thead>
		<tr>
       	 <th class="title">
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_PUBLICATIONS_LIST_HEAD_TITLE', 'a.title', $listDirn, $listOrder); ?>
      	  </th>
      	 <th class="title">
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_PUBLICATIONS_LIST_HEAD_YEAR', 'a.year', $listDirn, $listOrder); ?>
      	  </th>
       	 <th class="title">
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_PUBLICATIONS_LIST_HEAD_JOURNAL', 'a.journal', $listDirn, $listOrder); ?>
       	 </th>
		 <th>
			<?php echo JText::_('COM_IFIRSCI_PUBLICATIONS_LIST_HEAD_EDIT')?>
		 </th>
		 <th>
		 	<?php echo JText::_('COM_IFIRSCI_PUBLICATIONS_LIST_HEAD_EXPORT')?>
		 </th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($this->items as $i => $item):?>
		<tr class="row<?php echo $i % 2; ?>">
          <td class="has-context">
            <a href="<?php echo JRoute::_('index.php?option=com_ifirsci&view=publication&id='.(int) $item->id); ?>">
              <?php echo $this->escape($item->title)?>
            </a>
          </td>
          <td><?php echo $this->escape($item->year)?></td>
          <td><?php echo $this->escape($item->journal)?></td>
          <td><input type="button" class="btn-default" value="Edit"></td>
          <td><a href="#">BibTex</a>,<a href="#">CopyRef</a></td>
          </tr>
	<?php endforeach;?>	
	</tbody>
	<tfoot>
	</tfoot>
	</table>
</div>