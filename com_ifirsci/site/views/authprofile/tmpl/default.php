<?php defined('_JEXEC') or die; 

JHtml::_('bootstrap.framework');
JHtml::_('jquery.framework');

$listOrder = $this->escape($this->state->get('list.ordering', 'publications'));
$listDirn = $this->escape($this->state->get('list.direction', 'publications'));

?>
<form action="<?php echo JRoute::_('index.php?option=com_ifirsci&view=authprofile'); ?>">
<div class="authorprofile">
	<?php foreach ($this->items as $item) : ?>
	<div class="panel panel-default">
  	<!-- Default panel contents -->
  		<div class="panel-heading"><?php echo JText::_('COM_IFIRSCI_AUTHOR_PROFILE_TITLE')?></div>
  			<div class="panel-body">
  				<h1><?php echo JFactory::getUser($item->user_id)->name?></h1>
  				<div class="authorDetails">
  					<p><?php echo JText::_('COM_IFIRSCI_AUTHOR_NAMES_LABEL')?> <span><?php echo $item->author;?></span></p>
   					<div class="author-statics col-sm-6 col-md-4">
    					<p>Publicaciones pendientes de aprobacion</p>
  	  				</div>
  	  				<div class="author-statics col-sm-6 col-md-4">
    					<p>Publicaciones aprobadas</p>
    				</div>
    				<div class="author-statics col-sm-6 col-md-4">
    					<p>Publicaciones asignadas a un area</p>
    				</div>
    			</div>
  			</div>
  		<!-- Table -->
<div class="publications-list table-responsive">
	<div class="btn-group pull-right hidden-phone">
        <label for="limit" class="element-invisible">
        <?php echo JText::_
        ('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC');?>
        </label>
        <?php echo $this->pagination->getLimitBox(); ?>
      </div>
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
	<?php foreach ($this->pubitems as $i => $publication):?>
		<tr class="row<?php echo $i % 2; ?>">
          <td class="has-context">
            <a href="<?php echo JRoute::_('index.php?option=com_ifirsci&view=publication&id='.(int) $publication->id); ?>">
              <?php echo $this->escape($publication->title)?>
            </a>
          </td>
          <td><?php echo $this->escape($publication->year)?></td>
          <td><?php echo $this->escape($publication->journal)?></td>
          <td><input type="button" class="btn-default" value="Edit"></td>
          <td><a href="#">BibTex</a>,<a href="#">CopyRef</a></td>
          </tr>
	<?php endforeach;?>	
	</tbody>
<tfoot>
        <tr>
          <td colspan="10">
            <?php echo $this->pagination->getListFooter(); ?>
          </td>
        </tr>
      </tfoot>
	</table>
</div>
	</div>
	<?php endforeach;?>
</div>
</form>