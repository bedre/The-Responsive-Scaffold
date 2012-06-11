<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params     = $this->item->params;
$images     = json_decode($this->item->images);
$urls       = json_decode($this->item->urls);
$canEdit    = $this->item->params->get('access-edit');
$user       = JFactory::getUser();

?>
<div class="item-page<?= $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading', 1)) : ?>
        <h1><?= $this->escape($this->params->get('page_heading')); ?></h1>
    <?php endif; ?>

    <?php if ($params->get('show_title')) : ?>
        <h1>
            <?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?>
                <a href="<?= $this->item->readmore_link; ?>">
                <?= $this->escape($this->item->title); ?></a>
            <?php else : ?>
                <?= $this->escape($this->item->title); ?>
            <?php endif; ?>
        </h1>
    <?php endif; ?>


    <?php if (!$params->get('show_intro')) :
        echo $this->item->event->afterDisplayTitle;
    endif; ?>

    <?= $this->item->event->beforeDisplayContent; ?>

    <?php if (isset($images->image_fulltext) and !empty($images->image_fulltext)) : ?>
    <?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>
    <div class="img-fulltext-<?= htmlspecialchars($imgfloat); ?>">
        <img
            <?php if ($images->image_fulltext_caption):
                echo 'class="caption"'.' title="' .htmlspecialchars($images->image_fulltext_caption) .'"';
            endif; ?>
            src="<?= htmlspecialchars($images->image_fulltext); ?>" alt="<?= htmlspecialchars($images->image_fulltext_alt); ?>"/>
    </div>
    <?php endif; ?>

    <?= $this->item->text; ?>

    <?= $this->item->event->afterDisplayContent; ?>
</div>
