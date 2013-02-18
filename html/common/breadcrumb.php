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

$item = array_shift($this->pathway);
?>

<?php if ($item) : ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo $item->link ?>"><?php echo $item->name ?></a> <span class="divider">/</span></li>
        <?php foreach($this->pathway as $item) : ?>
            <li><a href="<?php echo $item->link ?>"><?php echo $item->name ?> </a><span class="divider">/</span></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
