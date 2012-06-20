<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Create a shortcut for params.
$params  = &$this->item->params;
$images  = json_decode($this->item->images);
$canEdit = $this->item->params->get('access-edit');
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::core();

$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
$images = json_decode($this->item->images);
if (file_exists($images->image_intro)) {
    $imgsize = getimagesize($images->image_intro); 
}?>


    <a href="<?= $link ?>">
        
        <span class="imageholder">
            <? if (file_exists($images->image_intro)): ?>
                <img src="<?= $images->image_intro ?>?max_width=560px" data-width="<?= $imgsize[0] ?>" data-height="<?= $imgsize[1] ?>" alt="<?= $images->image_intro_alt ?>">
            <? else: ?>
                <img src="templates/responsive_template/images/skagen/product_image.png" data-width="1000" data-height="480">
            <? endif; ?>

            <?php if ($params->get('show_title')) : ?>
                <h2><?= $this->escape($this->item->title); ?></h2>
            <?php endif; ?>
        </span>

        <?php echo $this->item->event->beforeDisplayContent; ?>
        
        <p class="description"><?= strip_tags($this->item->introtext) ?></p>

        <?php if ($params->get('show_readmore')) : ?>
            <a class="readon" href="<?= $link ?>">Les videre &raquo;</a>
        <?php endif; ?>

        <?php echo $this->item->event->afterDisplayContent; ?>

    </a>
