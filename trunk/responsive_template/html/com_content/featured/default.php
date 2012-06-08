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

?>
<section role="main" id="product_categories">
    <div class="wrap">

        <?php if (!empty($this->lead_items)) : ?>

            <?php foreach ($this->lead_items as &$item) :
                $images = json_decode($item->images);
                
                if (file_exists($images->image_intro)) {
                    $imgsize = getimagesize($images->image_intro); 
                }
                
                // If urla link/text is specified, it is used as headline/link. If not, article title and link are used.
                $urls     = json_decode($item->urls);
                if (empty($urls->urla)) {
                    $link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid));
                } else {
                    $link = $urls->urla;
                }

                ?>

                <article class="product_category">
                    <a href="<?= $link ?>">
                        
                        <? if (file_exists($images->image_intro)): ?>
                            <span class="imageholder">
                                <img src="<?= $images->image_intro ?>?max_width=560px" data-width="<?= $imgsize[0] ?>" data-height="<?= $imgsize[1] ?>" alt="<?= $images->image_intro_alt ?>">
                                <h3><?= !empty($urls->urlatext) ? $urls->urlatext : $item->title; ?></h3>
                            </span>
                        <? else: ?>
                            <h3><?= !empty($urls->urlatext) ? $urls->urlatext : $item->title; ?></h3>
                        <? endif; ?>
                        
                        <p class="description"><?= strip_tags($item->introtext) ?></p>
                        <a class="readon" href="<?= $link ?>">Les videre &raquo;</a>
                    </a>
                </article>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>