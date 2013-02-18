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
   <h4><?php echo $this->profile->getLink() ?></h4>
</div>
<?php if (!empty($this->usertype)) : ?>
    <div class="row-fluid">
            <i class = "icon-user"></i>( <?php echo JText::_($this->escape($this->usertype)) ?> )
    </div>
<?php endif ?>
<?php $avatar = $this->profile->getAvatarImage ('kavatar', 'post'); 
if ($avatar) : ?>
    <div class="row-fluid">
       <?php echo $avatar ?>
    </div>
<?php endif; ?>
<?php if ($this->profile->exists()): ?>
    <div class="row-fluid">
        <i class="icon-globe"></i> <?php echo $this->profile->isOnline(JText::_('COM_KUNENA_ONLINE'), JText::_('COM_KUNENA_OFFLINE')); ?>
    </div>
    <?php if (!empty($this->userranktitle)) : ?>
        <div class="row-fluid">
            <i class="icon-star"></i> <?php echo $this->escape($this->userranktitle) ?>
        </div>
    <?php endif ?>
    <?php if (!empty($this->userrankimage)) : ?>
        <div class="row-fluid"><i class="icon-signal"></i> <?php echo $this->userrankimage ?></div>
    <?php endif ?>
    <?php if (!empty($this->personalText)) : ?>
        <div class="row-fluid">
            <?php echo $this->personalText ?>
        </div>
    <?php endif ?>
    <?php if ($this->userposts) : ?>
        <div class="row-fluid">
            <i class="icon-comment"></i> <?php echo JText::_('COM_KUNENA_POSTS') .' '. intval($this->userposts); ?>
        </div>
    <?php endif ?>
    <?php if ($this->userthankyou) : ?>
        <div class="row-fluid">
            <i class="icon-thumbs-up"></i> <?php echo JText::_('COM_KUNENA_MYPROFILE_THANKYOU_RECEIVED') .' '. intval($this->userthankyou); ?>
        </div>
    <?php endif ?>
    <?php if ($this->userpoints) : ?>
        <div class="row-fluid">
            <?php echo JText::_('COM_KUNENA_AUP_POINTS') .' '. intval($this->userpoints); ?>
        </div>
    <?php endif ?>
    <?php if ( $this->userkarma ) : ?>
        <div class="row-fluid">
            <i class="icon-heart"></i> <?php echo $this->userkarma ?>
        </div>
    <?php endif ?>
    <?php if ( !empty($this->usermedals) ) : ?>
        <div class="row-fluid">
            <i class="icon-certificate"></i> 
            <?php foreach ( $this->usermedals as $medal ) : ?>
                <?php echo $medal; ?>
        <?php endforeach ?>
        </div>
    <?php endif ?>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('gender'); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('birthdate'); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('location'); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('website'); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('private'); ?>
        </div>
        <div class="row-fluid">
            <?php echo $this->profile->profileIcon('email'); ?>
        </div>
<?php endif ?>
