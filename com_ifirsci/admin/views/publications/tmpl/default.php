<?php
defined('_JEXEC') or die;
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
?>

<form action="<?php echo JRoute::_('index.php?option=com_ifirsci&view=publications'); ?>" method="post" name="adminForm" id="adminForm">
 <?php if (!empty( $this->sidebar)) : ?>
  <div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
  </div>
  <div id="j-main-container" class="span10">
<?php else : ?>
  <div id="j-main-container">
<?php endif;?>

    <div class="clearfix"> </div>
    <table class="table table-striped" id="ifirSciPubList">
      <thead>
        <tr>
          <th width="1%" class="hidden-phone">
            <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
          </th>
          <th class="title">
            <?php echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'a.Title', $listDirn, $listOrder); ?>
          </th>
          <th>
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_YEAR_LABEL', 'a.Year', $listDirn, $listOrder); ?>
          </th>
          <th>
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_SOURCE_LABEL', 'a.Source', $listDirn, $listOrder); ?>
          </th>
          <th>
            <?php echo JHtml::_('grid.sort', 'COM_IFIRSCI_ACCEPTED_BY_LABEL', 'a.a_user_id', $listDirn, $listOrder); ?>
          </th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($this->items as $i => $item) :
        ?>
        <tr class="row<?php echo $i % 2; ?>">
          <td class="center hidden-phone">
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
          </td>
          <td class="nowrap has-context">
            <a href="<?php echo JRoute::_('index.php?option=com_ifirsci&task=publication.edit&id='.(int) $item->id); ?>">
              <?php echo $this->escape($item->Title); ?>
            </a>
          </td>
          <td><?php echo $this->escape($item->Year)?></td>
          <td><?php echo $this->escape($item->Source)?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
    <?php echo JHtml::_('form.token'); ?>
  </div>
</form>