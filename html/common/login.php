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
<div class="well">
    <?php echo JText::_('COM_KUNENA_PROFILEBOX_WELCOME'); ?>,
    <b><?php echo JText::_('COM_KUNENA_PROFILEBOX_GUEST'); ?></b>
</div>
<?php if ($this->login->enabled()) : ?>
    <form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="login" class="form-inline">
        <input type="hidden" name="view" value="user" />
        <input type="hidden" name="task" value="login" />
        [K=TOKEN]
        <input type="text" name="username" placeholder="<?php echo JText::_('COM_KUNENA_LOGIN_USERNAME') ?>">
        <input type="password" name="password" placeholder="<?php echo JText::_('COM_KUNENA_LOGIN_PASSWORD'); ?>">
        <?php if($this->remember) : ?>
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"> <?php echo JText::_('COM_KUNENA_LOGIN_REMEMBER_ME'); ?>
            </label>
        <?php endif; ?>
        <button type="submit" name="submit" class="btn"><?php echo JText::_('COM_KUNENA_PROFILEBOX_LOGIN'); ?></button>
    </form>
    <ul class="nav nav-pills">
        <li>
            <a href="<?php echo $this->lostPasswordUrl ?>" rel="nofollow"><?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_PASSWORD') ?></a>
        </li>
        <li>
            <a href="<?php echo $this->lostUsernameUrl ?>" rel="nofollow"><?php echo JText::_('COM_KUNENA_PROFILEBOX_FORGOT_USERNAME') ?></a>
        </li>
        <?php if ($this->registerUrl) : ?>
            <li>
                <a href="<?php echo $this->registerUrl ?>" rel="nofollow"><?php echo JText::_('COM_KUNENA_PROFILEBOX_CREATE_ACCOUNT') ?></a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php echo $this->moduleHtml; ?>
				