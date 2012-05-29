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
                $images  = json_decode($item->images);
                $imgsize = getimagesize($images->image_fulltext); 
                $urls    = json_decode($item->urls);
                $link    = !empty($urls->urla) ? $urls->urla : JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));

                // If urla link/text is specified, it is used as headline/link. If not, article title and link are used.
                ?>

                <article class="product_category">
                    <a href="<?= $link ?>">
                        <span class="imageholder">
                            <img src="<?= $images->image_fulltext ?>" data-width="<?= $imgsize[0] ?>" data-height="<?= $imgsize[1] ?>" alt="<?= $images->image_fulltext_alt ?>">
                            <h3><?= !empty($urls->urlatext) ? $urls->urlatext : $item->title; ?></h3>
                        </span>
                        <p class="description"><?= strip_tags($item->introtext) ?></p>
                        <a class="readon" href="<?= $link ?>">Les videre &raquo;</a>
                    </a>
                </article>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>