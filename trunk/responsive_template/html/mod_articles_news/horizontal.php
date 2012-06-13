<?php
defined('_JEXEC') or die;
?>

<ul class="slides">
<?php foreach ($list as $item) : ?>
    <?php 
        $images  = json_decode($item->images);
        $urls    = json_decode($item->urls);
        $imgsize = getimagesize($images->image_fulltext); 
    ?>
    <li>
        <a href="<?= $urls->urla ?>">
            <div class="imagemask">
                <img src="<?= $images->image_fulltext ?>" data-width="<?= $imgsize[0] ?>" data-height="<?= $imgsize[1] ?>" alt="<?= $images->image_fulltext_alt ?>">              
            </div>
            <div class="wrap">
                <div class="infobox">
                    <h3><?= $item->title ?></h3>
                    <p class="description"><?= strip_tags($item->introtext) ?></p>
                    <span class="readon"><?= $urls->urlatext ?></span>
                </div>
            </div>
        </a>
    </li>
<?php endforeach; ?>
</ul>