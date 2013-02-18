<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Common
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<form class="form-inline" action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" id="jumpto" name="jumpto" method="post" target="_self">
	<input type="hidden" name="view" value="category" />
	<input type="hidden" name="task" value="jump" />
        <?php echo $this->categorylist; ?>
        <input type="submit" class="btn" name="Go" value="<?php echo JText::_('COM_KUNENA_GO'); ?>" />
</form>