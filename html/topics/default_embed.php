<?php
/**
 * Kunena Component
 * @package Kunena.Template.Blue_Eagle
 * @subpackage Topics
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>

<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" method="post" name="ktopicsform">
    <input type="hidden" name="view" value="topics" />
    <?php echo JHTML::_( 'form.token' ); ?>
    <?php if (!empty($this->topicActions)) : ?>
        <input class="kcheckall" type="checkbox" name="toggle" value="" />
    <?php endif; ?>
    <h2><span><?php echo $this->escape($this->headerText); ?></span></h2>
    <table class="table table-hover table-bordered">
        <tbody>
            <?php if (empty ( $this->topics ) && empty ( $this->subcategories )) : ?>
                <tr>
                    <td>
                        <?php echo JText::_('COM_KUNENA_VIEW_NO_POSTS') ?>
                    </td>
                </tr>
            <?php else : ?>
                <?php $this->displayRows (); ?>
                <?php  if ( !empty($this->topicActions) || !empty($this->embedded) ) : ?>
                    <tr>
                        <td colspan="<?php echo empty($this->topicActions) ? 5 : 6 ?>">
                            <?php if (!empty($this->moreUri)) echo JHtml::_('kunenaforum.link', $this->moreUri, JText::_('COM_KUNENA_MORE'), null, null, 'follow'); ?>
                            <?php if (!empty($this->topicActions)) : ?>
                                <?php echo JHTML::_('select.genericlist', $this->topicActions, 'task', 'class="inputbox kchecktask" size="1"', 'value', 'text', 0, 'kchecktask'); ?>
                                <?php if ($this->actionMove) :
                                    $options = array (JHTML::_ ( 'select.option', '0', JText::_('COM_KUNENA_BULK_CHOOSE_DESTINATION') ));
                                    echo JHTML::_('kunenaforum.categorylist', 'target', 0, $options, array(), 'class="inputbox fbs" size="1" disabled="disabled"', 'value', 'text', 0, 'kchecktarget');
                                endif;?>
                                <input type="submit" name="kcheckgo" class="kbutton" value="<?php echo JText::_('COM_KUNENA_GO') ?>" />
                            <?php endif; ?>
                        </td>
                    </tr>
            <?php endif; ?>
        <?php endif; ?>
        </tbody>
    </table>
</form>
