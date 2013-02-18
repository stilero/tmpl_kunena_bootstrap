<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div class="row-fluid">
	<h2>
		<span class="kmsgtitle<?php echo $this->escape($this->msgsuffix) ?> kmsg-title-left">
			<?php echo $this->displayMessageField('subject') ?>
		</span>
		<span class="kmsgdate kmsgdate-left" title="<?php echo KunenaDate::getInstance($this->message->time)->toKunena('config_post_dateformat_hover') ?>">
			<?php echo KunenaDate::getInstance($this->message->time)->toKunena('config_post_dateformat') ?>
		</span>
		<span class="kmsg-id-left">
			<a id="<?php echo intval($this->message->id) ?>"></a>
			<?php echo $this->numLink ?>
		</span>
	</h2>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php $this->displayMessageProfile('vertical') ?>
    </div>
    <div class="span9">
        <div class="row-fluid">
            <?php $this->displayMessageContents() ?>
        </div>
        <div class="row-fluid">
            <?php $this->displayMessageActions() ?>
        </div>
    </div>
</div>
<!-- Begin: Message Module Position -->
<?php $this->displayModulePosition('kunena_msg_' . $this->mmm) ?>
<!-- Finish: Message Module Position -->
