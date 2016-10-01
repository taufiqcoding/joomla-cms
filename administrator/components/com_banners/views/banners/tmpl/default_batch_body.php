<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
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
			<?php echo JHtml::_('banner.clients'); ?>
		</div>
	</div>
</div>
<div class="row">
	<?php if ($published >= 0) : ?>
		<div class="control-group col-md-6">
			<div class="controls">
				<?php echo JHtml::_('batch.item', 'com_banners'); ?>
			</div>
		</div>
	<?php endif; ?>
</div>
