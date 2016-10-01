<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_newsfeeds
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$published = $this->state->get('filter.published');
?>

<div class="row">
	<div class="control-group col-md-6">
		<div class="controls">
			<?php echo JHtml::_('batch.language'); ?>
		</div>
	</div>
	<div class="control-group col-md-6">
		<div class="controls">
			<?php echo JHtml::_('batch.access'); ?>
		</div>
	</div>
</div>
<div class="row">
	<?php if ($published >= 0) : ?>
		<div class="control-group col-md-6">
			<div class="controls">
				<?php echo JHtml::_('batch.item', 'com_newsfeeds'); ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="control-group col-md-6">
		<div class="controls">
			<?php echo JHtml::_('batch.tag'); ?>
		</div>
	</div>
</div>
