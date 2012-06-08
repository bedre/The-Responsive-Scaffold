<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

$document = JFactory::getDocument();
$app      = JFactory::getApplication();
$document->addScript('templates/'.$app->getTemplate().'/js/fit_images.js');

?>
<section class="fit-images blog<?php echo $this->pageclass_sfx;?>">
<?php if ($this->params->get('show_page_heading', 1)) : ?>
    <h1>
        <?php echo $this->escape($this->params->get('page_heading')); ?>
    </h1>
    <?php endif; ?>

    <?php if ($this->params->get('show_category_title', 1) or $this->params->get('page_subheading')) : ?>
    <h2>
        <?php echo $this->escape($this->params->get('page_subheading')); ?>
        <?php if ($this->params->get('show_category_title')) : ?>
            <span class="subheading-category"><?php echo $this->category->title;?></span>
        <?php endif; ?>
    </h2>
    <?php endif; ?>




<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
    <div class="category-desc">
    <?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
        <img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
    <?php endif; ?>
    <?php if ($this->params->get('show_description') && $this->category->description) : ?>
        <?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
    <?php endif; ?>
    <div class="clr"></div>
    </div>
<?php endif; ?>

<?php if (!empty($this->lead_items)) : ?>
    <?php foreach ($this->lead_items as &$item) : ?>
        <?php
            $this->item = &$item;
            echo $this->loadTemplate('item');
        ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php
    $introcount=(count($this->intro_items));
    $counter=0;
?>
<?php if (!empty($this->intro_items)) : ?>

    <?php foreach ($this->intro_items as $key => &$item) : ?>
        <?php
            $this->item = &$item;
            echo $this->loadTemplate('item');
        ?>
    <?php $counter++; ?>

    <?php endforeach; ?>


<?php endif; ?>

<?php if (!empty($this->link_items)) : ?>

    <?php echo $this->loadTemplate('links'); ?>

<?php endif; ?>


    <?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
        <div class="cat-children">
        <h3>
<?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
</h3>
            <?php echo $this->loadTemplate('children'); ?>
        </div>
    <?php endif; ?>

<?php if (($this->params->def('show_pagination', 1) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
        <div class="pagination">
                        <?php  if ($this->params->def('show_pagination_results', 1)) : ?>
                        <p class="counter">
                                <?php echo $this->pagination->getPagesCounter(); ?>
                        </p>

                <?php endif; ?>
                <?php echo $this->pagination->getPagesLinks(); ?>
        </div>
<?php  endif; ?>

</section>
