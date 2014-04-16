<?php
/**
 * @version		$Id: complete.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
$this->form->reset( true ); // to reset the form xml loaded by the view
$this->form->loadFile( dirname(__FILE__) . DIRECTORY_SEPARATOR . "reset_complete.xml"); // to load in our own version of reset_complete.xml
?>
<div class="userpageswrap complete">
	<div class="userpages">
	<h1 class="pagetitle">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</h1>

	<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate">

		<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
		<p><?php echo JText::_($fieldset->label); ?></p>		<fieldset class="input">
			<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field): ?>
				<?php echo $field->label; ?>
				<?php echo $field->input; ?>
			<?php endforeach; ?>
		</fieldset>
		<?php endforeach; ?>
		
		<div>
			<button type="submit" class="btn btn-small validate"><?php echo JText::_('JSUBMIT'); ?></button>
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
	</div>
</div>