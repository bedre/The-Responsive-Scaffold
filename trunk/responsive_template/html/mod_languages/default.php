<?php
defined('_JEXEC') or die('Restricted access');
?>

<?php if ($headerText) : ?>
    <div class="pretext"><p><?= $headerText; ?></p></div>
<?php endif; ?>

<?php foreach($list as $language):?>
    <a id="<?= strtolower($language->title_native) ?>" href="<?= $language->link;?>" class="<?= $language->active ? 'active' : 'inactive';?>">
    <?= $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?>
    </a>
<?php endforeach;?>

<?php if ($footerText) : ?>
    <div class="posttext"><p><?= $footerText; ?></p></div>
<?php endif; ?>

