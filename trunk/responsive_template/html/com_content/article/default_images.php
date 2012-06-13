<?php
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$app      = JFactory::getApplication();
$document->addScript('templates/'.$app->getTemplate().'/js/lib/jquery.cookie.js');
$document->addScript('templates/'.$app->getTemplate().'/js/article_slideshow.js');
$document->addScript('templates/'.$app->getTemplate().'/js/fit_images.js');

$images = $this->images;

// Do we have a slideshow?
$pathinfo  = pathinfo($images->image_fulltext);
$file_name = basename($images->image_fulltext,'.'.$pathinfo['extension']);

if (substr($file_name, -2) == '_1') {
    $pattern   = $pathinfo['dirname'].'/'.substr($file_name, 0, -1).'?.{jpg,jpeg,gif,png}';
    $slideshow = glob($pattern, GLOB_BRACE);
} else {
    $slideshow = array($images->image_fulltext);
}

$imgsize = array();
$max_img = 6;
$count   = 0;
?>

<div class="article-image-wrapper fit-images">
    <?php if (count($slideshow) == 1): ?>
        <img src="<?= htmlspecialchars($images->image_fulltext); ?>?max_width=1000px" alt="<?= htmlspecialchars($images->image_fulltext_alt); ?>">
    <?php else: ?>
        <div id="swipe-instructions">
            <a href="#" id="swipe-instructions-button"><?= JText::_('Swipe to see more images') ?><span>x</span></a>
        </div>
        <div class="article-slider">
            <ul class="slides">
                <?php foreach ($slideshow as $key => $slide) : ?>
                    <?php $imgsize[$key] = getimagesize($slide); ?>
                    <li>
                        <div class="imageholder">
                            <img src="<?= $slide ?>?max_width=1000px" data-width="<?= $imgsize[$key][0] ?>" data-height="<?= $imgsize[$key][1] ?>" alt="<?= htmlspecialchars($images->image_fulltext_alt); ?>">
                        </div>
                    </li>
                    <?php $count++; if ($count == $max_img) break; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <ul class="controls">
            <?php foreach ($slideshow as $key => $slide) : ?>
                <?php $count = 0; ?>
                <li>
                    <img src="<?= $slide ?>?max_width=160px" data-width="<?= $imgsize[$key][0] ?>" data-height="<?= $imgsize[$key][1] ?>" alt="<?= htmlspecialchars($images->image_fulltext_alt); ?>">
                </li>
                <?php $count++; if ($count == $max_img) break; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>